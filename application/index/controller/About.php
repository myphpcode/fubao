<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-06
 * Time: 14:29
 */

namespace app\index\controller;


class About extends Base
{
    public function index($id){
        //一级分类
//获取首页大模块顶级分类数据开始
        if(cache('cateRes')){
            $cateRes=cache('cateRes');
        }else{
            $cateRes=model('cate')->getComCates();


            $this->assign('cateRes',$cateRes);
        }

      $about= db('aboutus')->where('id',$id)->find();
      $this->assign('about',$about);
     $abouts=  db('aboutus')->select();
        $this->assign('abouts',$abouts);
        return view();
    }

}