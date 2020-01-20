<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-05
 * Time: 15:23
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;

class AboutUs extends Basic
{
 public function index(){
     return 11;
 }
 public function edit(){
     if(request()->isPost()){
         $data=input('post.');


         $save=db('aboutus')->update($data);
         if($save !== false){
             $this->success('修改成功！');
         }else{
             $this->error('修改失败！');
         }
         return;
     }
     $id=input('param.id');
//dump($id);die;
     $res=db('aboutus')->where('id',$id)->find();

     if($res){

         $this->assign('arts',$res);
     }
     else{
//         db('aboutus')->where('id',$id)->insert(['title'=>'测试','content'=>'测试内容']);
     }
     return view();
 }
}