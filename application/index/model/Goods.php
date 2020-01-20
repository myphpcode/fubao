<?php
namespace app\index\model;
use think\Model;
use catetree\Catetree;
class Goods extends Model
{
	 //获取指定推荐位里的商品
   public function getRecposGoods($recposId,$limit=''){
   	$_hotIds=db('rec_item')->where(array('value_type'=>1,'recpos_id'=>$recposId))->select();
		$hotIds=array();
		foreach ($_hotIds as $k => $v) {
			$hotIds[]=$v['value_id'];
		}
		$map['id']=array('IN',$hotIds);
		$recRes=$this->field('id,mid_thumb,goods_name,shop_price,markte_price')->where($map)->limit($limit)->select();
		return $recRes;
   }

   //获取首页一、二级分类下的所有的推荐商品
   public function getIndexRecposGoods($cateId,$recposId){
   			$cateTree= new Catetree();
    		$sonIds=$cateTree->childrenids($cateId,db('category'));
    		$sonIds[]=$cateId;
    		//2、获取新品推荐位里符合条件的商品信息
    		$_recGoods=db('rec_item')->where(array('value_type'=>1,'recpos_id'=>$recposId))->select();
    		$recGoods=array();
    		foreach ($_recGoods as $kk => $vv) {
    			$recGoods[]=$vv['value_id'];
    		}
    		$map['category_id']=array('IN',$sonIds);
    		$map['id']=array('IN',$recGoods);
    		// dump($map); 
    		$goodsRes=db('goods')->where($map)->limit(6)->order('id DESC')->select();
    		return $goodsRes;
   }

   //获取商品会员价
   public function getMemberPrice($goods_id){
      $levelId=session('level_id');
      $levelRate=session('level_rate');
      $goodsInfo=$this->find($goods_id);
      if(session('level_rate')){
        $memberPrice=db('member_price')->where(array('mlevel_id'=>$levelId,'goods_id'=>$goods_id))->find();
        if($memberPrice){
          $price=$memberPrice['mprice'];
        }else{
          $levelRate=$levelRate/100;
          $price=$goodsInfo['shop_price']*$levelRate;
        }
      }else{
        $price=$goodsInfo['shop_price'];
      }
      return $price;//最终会员价
   }

   public function getShopPrice($goods_id){
      $goodsInfo=$this->field('shop_price')->find($goods_id);
      return $goodsInfo['shop_price'];
   }


   public function search_goods($cateId){
    $cateTree= new Catetree();
    $ids = $cateTree->childrenids($cateId,db('category'));
    $ids[] = $cateId;
    // 搜索条件
    $where = array(
        'g.on_sale'=>1,
        // 'g.category_id'=>['in',$ids]
        );
    //价格筛选
    if(input('price')){
      // dump(input('price')); die;
      $priceArr = explode('-', input('price'));
      $where['g.shop_price']=array('between', array($priceArr[0], $priceArr[1]));
    }
    //品牌筛选
    if(input('brand')){
      $where['g.brand_id']=input('brand');
    }
    //自定义属性筛选
    $filterAttr = input('filter_attr');
    $_attrGoodsIds=null;  //array('1,2,3,4','2,3,4,5,6', '2,5,6,7,8,9')
    if($filterAttr){
      $filterAttr = explode('.', $filterAttr);
      foreach ($filterAttr as $k => $v) {
        if($v){
          $_v = explode('-', $v);
          //1,2,3,4
          $attrGoodsIds = db('goodsAttr')->field('GROUP_CONCAT(goods_id) goods_id')->where(array('attr_id'=>$_v[1], 'attr_value'=>$_v[0]))->find();
          if($_attrGoodsIds == null){
            $_attrGoodsIds = explode(',', $attrGoodsIds['goods_id']);
          }else{
            $tempArr = explode(',', $attrGoodsIds['goods_id']);
            $_attrGoodsIds = array_intersect($_attrGoodsIds, $tempArr);
            if(empty($_attrGoodsIds)){
              break;
            }
          }
            if($_attrGoodsIds){
              $where['g.id'] = array('in', $_attrGoodsIds);
            }else{
              $where['g.id'] = array('eq', 0);
            }
        }
      }

    }
    // 排序方式
    $orderBy = 'xl';  
    $orderWay = 'DESC';
    $ob = input('ob');
    $ow = input('ow');
    if($ob && in_array($ob, ['xl','price', 'time', 'pl'])){
      $orderBy = $ob;
      if($ow && in_array($ow, ['asc', 'desc'])){
        $orderWay = $ow;
      }
    }
    //查询获取数据
    // SELECT a.id,a.goods_name,IFNULL(SUM(b.goods_num), 0) xl, (SELECT COUNT(id) FROM tp_comment c WHERE a.id=c.goods_id) pl
    //  FROM tp_goods a 
    //   LEFT JOIN tp_order_goods b 
    //    ON(a.id = b.goods_id AND b.order_id IN(SELECT id FROM tp_order WHERE pay_status=1))
    //     GROUP BY a.id
    //      ORDER BY xl DESC
    $goodsRes = db('goods')->field("g.id, g.goods_name, g.shop_price price, g.time, g.mid_thumb, IFNULL(SUM(b.goods_num), 0) xl, (SELECT COUNT(id) FROM tp_comment c WHERE g.id=c.goods_id) pl, (SELECT group_concat(mid_photo) FROM tp_goods_photo gp WHERE g.id=gp.goods_id) mid_photo, (SELECT group_concat(id) FROM tp_recpos WHERE rec_type=1 AND id IN(SELECT recpos_id FROM tp_rec_item WHERE value_type=1 AND g.id=value_id)) recpos")->alias('g')->join('order_goods b','g.id = b.goods_id AND b.order_id IN(SELECT id FROM tp_order WHERE pay_status=1)','LEFT')->where($where)->group('g.id')->order("$orderBy $orderWay")->paginate(24);

    return $goodsRes;
    }






}
