<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-08
 * Time: 17:11
 */

namespace app\admin\controller;
use think\Controller;
use think\Session;
class Login extends Controller
{
 public function index(){
     if(request()->isPost()){
         $data=input('post.');
   if(!captcha_check($data['code'])){
       $this->error('验证码不正确');
   }
  $res = db('admin')->where(['username'=>$data['username'],'password'=>md5($data['password'])])->find();
   if($res){
     session("id",$res['id']);
     session('username',$res['username']);
       $this->success('登陆成功',url('index/index'));
   }
   else{
       $this->error('您输入的用户名或密码不正确');
   }
     }

      return view();
 }
public function logout(){
session(null);
return $this->success('成功退出系统',url('login/index'));
}
}