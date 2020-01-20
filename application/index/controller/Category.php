<?php
namespace app\index\controller;

class Category extends Base 
{
    public function index($id)
    {
    	$cateInfo = db('category')->where('id',$id)->find($id);
    	//计算筛选属性的逻辑
        //删除筛选属性缓存逻辑
        cache('attrRes_'.$id, NULL);
        if(!cache('attrRes_'.$id)){
            $sai = $cateInfo['search_attr_ids'];
            $attrRes = db('attr')->field('id, attr_name')->where(array('id'=>array('in', $sai)))->select();
            foreach ($attrRes as $k => $v) {
                $attrValues = db('goods_attr')->field('attr_value, attr_id, goods_id')->where(array('attr_id'=>$v['id']))->select();
                // $attrValues=array_unique_fb($attrValues);
                //判断当前商品是否属于当前栏目
                foreach ($attrValues as $k1 => $v1) {
                    $categoryId = db('goods')->where('id', $v1['goods_id'])->value('category_id');
                    if($categoryId != $id){
                        unset($attrValues[$k1]);
                    }
                }
                if(!$attrValues){
                    unset($attrRes[$k]);
                }else{
                    $attrRes[$k]['attr_values'] = assoc_unique($attrValues, 'attr_value');
                }
            }
            cache('attrRes_'.$id, $attrRes, 3600);
        }else{
            $attrRes = cache('attrRes_'.$id);
        }
    	
        //获取品牌信息
        $_brandRes = db('goods')->field('brand_id')->where(array('category_id'=>$id))->select();
        $_brandRes = assoc_unique($_brandRes, 'brand_id');
        $brandRes = array();
        foreach ($_brandRes as $k => $v) {
            if($v['brand_id']){
                $brandRes[] = db('brand')->field('id, brand_name')->find($v['brand_id']);
            }
        }

        //删除价格区间缓存逻辑
        // cache('priceSection_'.$id, NULL);
        if(!cache('priceSection_'.$id)){
            //计算价格区间的逻辑
            $goodsPrice = db('goods')->field('MIN(shop_price) min_price, MAX(shop_price) max_price')->where(array('category_id'=>$id))->find();
            // dump($goodsPrice); die;
            //价格区间平均差值
            $sprice = ceil(($goodsPrice['max_price'] - $goodsPrice['min_price'])/$cateInfo['ps_num']);
            $priceSection = [];
            $firstPrice = intval($goodsPrice['min_price']);
            for($i=0; $i<$cateInfo['ps_num']; $i++){
                if($i==0){
                    $_priceSection = $firstPrice.'-'.(ceil(($firstPrice+$sprice)/10)*10-1);
                }elseif($i == ($cateInfo['ps_num']-1)){
                    $_priceSection = (ceil($firstPrice/10)*10).'-'.intval($goodsPrice['max_price']);
                }else{
                    $startPrice = ceil($firstPrice/10)*10;
                    $endPrice = ceil(($firstPrice+$sprice)/10)*10-1;
                    $_priceSection = $startPrice.'-'.$endPrice; 
                   
                }

                $_priceSection = explode('-', $_priceSection);

                $startPrice = $_priceSection[0];
                $endPrice = $_priceSection[1];
                $goodsCount = db('goods')->where(array(
                    'shop_price'=>array('between', array($startPrice, $endPrice)),
                    'category_id'=>array('eq',$id),
                    'on_sale'=>array('eq',1))
                )->count();
                if($goodsCount){
                    $priceSection[] = $startPrice.'-'.$endPrice; 
                }
                
                $firstPrice+=$sprice;
            }
            //缓存价格区间数据
            cache('priceSection_'.$id, $priceSection, 3600);
        }else{
            $priceSection = cache('priceSection_'.$id);
        }

        $ob = input('ob') ? input('ob') : 'xl';
        $ow = input('ow') ? input('ow') : 'desc';

        $goodsRes = model('goods')->search_goods($id);
        // dump($goodsRes->all());
    	$price=input('price');
        //筛选属性高亮状态处理
        $filterAttr = input('filter_attr');
        $attrValue = array();
        $attrId = array();
        if($filterAttr){
           //白色-1.500G-3 
           $filterAttr = explode('.', $filterAttr);
           foreach ($filterAttr as $k => $v) {
               if($v){
                   $attr = explode('-', $v);
                   $attrValue[]=$attr[0];
                   $attrId[]=$attr[1];
               }
           }
        }
    	$this->assign([
    		'attrRes'=>$attrRes,
            'priceSection' => $priceSection,
            'brandRes' => $brandRes,
            'goodsRes' => $goodsRes,
            'cateId'   => $id,
            'price'    => $price,
            'ob'       => $ob,
            'ow'       => $ow,
            'attrValue'=> $attrValue,
            'attrId'   => $attrId
    		]);
        return view('category');
    }

    public function getCateInfo($id){
    	$mCategory=model('Category');
    	//获取二级和三级子分类
    	$cateRes=$mCategory->getSonCates($id);
    	//获取关联词
    	$cwRes=$mCategory->getCategoryWords($id);
    	//获取关联品牌及推广信息
    	$brands=$mCategory->getCategoryBrands($id);
    	// dump($brands); die;
    	$data=array();
    	$cat=''; 
    	foreach ($cateRes as $k => $v) {
    		$cat.='<dl class="dl_fore1"><dt><a href="'.url('index/Category/index',['id'=>$v['id']]).'" target="_blank">'.$v['cate_name'].'</a></dt><dd>';
			    	foreach ($v['children'] as $k1 => $v1) {
			    		$cat.='<a href="'.url('index/Category/index',['id'=>$v1['id']]).'" target="_blank">'.$v1['cate_name'].'</a>';
			    	}
			$cat.='</dd></dl>
				<div class="item-brands"><ul></ul></div>
				<div class="item-promotions"></div>';
    	}
		
		$channels='';
		foreach ($cwRes as $k => $v) {
			$channels.='<a href="'.$v['link_url'].'" target="_blank">'.$v['word'].'</a>';
		}
		$bransAdContent='';
		$bransAdContent.='
		<div class="cate-brand">';
	            foreach ($brands['brands'] as $k => $v) {
	            	$bransAdContent.=
	            	'<div class="img">
	            		<a href="'.$v['brand_url'].'" target="_blank" title="'.$v['brand_name'].'"><img src="'.config('view_replace_str.__uploads__').'/'.$v['brand_img'].'"></a>
	            	</div>';
	            }
	    $bransAdContent.='</div>';
	    $bransAdContent.='
		<div class="cate-promotion">
	        <a href="'.$brands['promotion']['pro_url'].'" target="_blank"><img width="199" height="97" src="'.config('view_replace_str.__uploads__').'/'.$brands['promotion']['pro_img'].'"></a>
	    </div>';
    	$data['topic_content']=$channels;
    	$data['cat_content']=$cat;
    	$data['brands_ad_content']=$bransAdContent;
    	$data['cat_id']=$id;
    	return json($data);
    }


}
