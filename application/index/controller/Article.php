<?php
namespace app\index\controller;

class Article extends Base
{
    /**
     * @param $id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index($id)
    {
        //一级分类
//获取首页大模块顶级分类数据开始
        if(cache('cateRes')){
            $cateRes=cache('cateRes');
        }else{
            $cateRes=model('cate')->getComCates();


            $this->assign('cateRes',$cateRes);
        }
    	//当前文章内容
        $cacheName=$id.'_arts';
        if(cache($cacheName)){
            $arts=cache($cacheName);
        }else{
            $arts=db('article')->find($id);
            if($this->config['cache'] == '是'){
                cache($cacheName,$arts,$this->config['cache_time']);
            }
        }
//

        $prev =db('article')->where('id','<',$id)->where('cate_id',$arts['cate_id'])->order('id desc')->limit(1)->value('id');
        $next =db('article')->where('id','>',$id)->where('cate_id',$arts['cate_id'])->order('id asc')->limit(1)->value('id');
$prevt=db('article')->where('id',$prev)->field('title')->find();
        $nextt=db('article')->where('id',$next)->field('title')->find();

        //每个分类
        $cid=$arts['cate_id'];

       $cate= db('cate')->where('id',$cid)->find();

$cname=$cate['cate_name'];


    	$this->assign([
    	    'cate'=>$cate,
    		'cname'=>$cname,
    		'arts'=>$arts,
            'prev'=>$prev,
            'next'=>$next,
             'prevt'=>$prevt,
            'nextt'=>$nextt
    		]);

        return $this->fetch('index');


    }
}
