<?php
namespace app\member\controller;
use app\member\controller\Base;
class Address extends Base
{
	
    public function index(){
    	$uid = session('uid');
    	$address = db('adress')->where(['user_id'=>$uid])->find();
    	if(request()->isPost()){
	    	$adress = db('adress');
	        $adData['name'] = input('name');
	        $adData['phone'] = input('phone');
	        $adData['tel'] = input('tel');
	        $adData['province'] = input('province');
	        $adData['city'] = input('city');
	        $adData['country'] = input('country');
	        $adData['address'] = input('address');
	        $adData['email'] = input('email');
	        $adData['zipcode'] = input('zipcode');
	        $adData['sign_building'] = input('sign_building');
	        $adData['user_id'] = $uid;
	        //处理用户收货地址信息  如果是第一次下单，就插入收货地址否则就修改地址
	        if($address){
	            $adress->where('user_id',$uid)->update($adData);
	            $this->success('地址更新成功！');
	        }else{
	            $adress->insert($adData);
	            $this->success('地址添加成功！');
	        }
    	}
    	$this->assign([
    		'uAdress'=>$address
    		]);
        return view();
    }



}
