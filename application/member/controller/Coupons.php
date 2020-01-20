<?php
namespace app\member\controller;
use app\member\controller\Base;
class Coupons extends Base
{
	
    public function index(){
    	$noUse = 0; //未使用的优惠券数量
    	$Used = 0;//已经使用的优惠券数量
    	$overdue = 0;//已经过期的的优惠券数量
    	$due = 0;//即将到期的优惠券数量
    	$uid = session('uid');
    	if(input('HcStatus')){
    		$HcStatus = input('HcStatus');
    	}else{
    		$HcStatus = 0; //未使用
    	}
    	//获取当前用户已领取、未使用并且未过期的优惠券信息
    	$map['cpt.uid'] = ['=', $uid];
    	if($HcStatus == 0){
	    	$map['cpt.use_status'] = ['=', 0];
	    	$map['cp.end_date'] = ['>', time()];
    	}elseif ($HcStatus == 1) {//查找用户已经使用的优惠券信息
    		$map['cpt.use_status'] = ['=', 1];
    	}elseif ($HcStatus == 2) {//已过期的优惠券信息
    		$map['cpt.use_status'] = ['=', 0];
	    	$map['cp.end_date'] = ['<', time()];
    	}else{//即将到期的优惠券信息，当有效期小于等于3天的时候提示即将到期
    		$map['cpt.use_status'] = ['=', 0];
    		$expiryDate = time() + 259200;
    		//$map['status'] =  array(['=',1],['=',3],'or');
    		$map['cp.end_date'] = array(['<=', $expiryDate], ['>', time()], 'AND'); 
    		// $map['cp.end_date'] = ['>', time()];
    	}


    	$couponRes = db('coupons')->field('cp.*, cpt.uid ,cpt.coupons_id, cpt.use_status, cpt.taken_time')->alias('cp')->join("coupons_taken cpt", "cp.id = cpt.coupons_id")->where($map)->select();
    	
    	$this->assign([
    		'show_right'=>1,
    		'couponRes'=>$couponRes,
    		'HcStatus'=>$HcStatus
    		]);
        return view();
    }



}
