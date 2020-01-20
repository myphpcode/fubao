<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-08
 * Time: 10:44
 */

namespace app\admin\controller;


use think\Controller;

class Admin extends Basic
{
   public function add(){
if(request()->isPost()) {
    $data = input('post.');

    if ($data['password'] != $data['ppwd']) {
        $this->error('两次输入密码不一致');

    }

    $dd['username'] = $data['username'];
    $dd['password'] = md5($data['password']);
    $res = db('admin')->insert($dd);
    if ($res) {
        $this->success('管理员添加成功');

    } else {
        $this->error('管理员添加失败', 'lst');
    }

}
       return view();
   }
   public function lst(){
     $ladmin=  db('admin')->select();
     $this->assign('ladmin',$ladmin);
       return view();
   }
   public function edit(){

        $id = input('get.id');
        $res=db('admin')->where('id',$id)->find();

       return view();
   }
   public function del($id){

       $del = db('admin')->where('id',$id)->delete();
       if($del){
           $this->success('删除成功',"lst");
       }
       else{
           $this->error('删除失败');
       }
   }
}