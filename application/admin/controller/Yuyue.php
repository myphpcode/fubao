<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-07
 * Time: 14:26
 */

namespace app\admin\controller;

use think\Controller;

class Yuyue extends Basic
{
   public function index(){
  $res =  db('yuyue')->paginate('10');

  $this->assign('res',$res);
       return view();
   }
   public function del($id){
    $del=db('yuyue')->delete($id);
    if($del){
       $this->success("删除成功",'index');
    }
    else{
    $this->error('删除失败');
    }
   }

}