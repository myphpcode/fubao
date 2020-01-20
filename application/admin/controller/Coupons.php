<?php
namespace app\admin\controller;
use think\Controller;
class Coupons extends Controller
{
    public function lst()
    {
    	$couponsRes=db('coupons')->order('id DESC')->paginate(6);
    	$this->assign([
    		'couponsRes'=>$couponsRes,
    		]);
        return view('list');
    }

    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');
            $data['start_date'] = strtotime($data['start_date']);
            $data['end_date'] = strtotime($data['end_date']);
            $data['add_time'] = time();
    		$add=db('coupons')->insert($data);
    		if($add){
    			$this->success('添加优惠券成功！','lst');
    		}else{
    			$this->error('添加优惠券失败！');
    		}
    		return;
    	}
        return view();
    }

    public function edit()
    {
    	if(request()->isPost()){
    		$data=input('post.');
            $data['start_date'] = strtotime($data['start_date']);
            $data['end_date'] = strtotime($data['end_date']);
            //验证
   //  		$validate = validate('coupons');
   //  		if(!$validate->check($data)){
			//     $this->error($validate->getError());
			// }
    		$save=db('coupons')->update($data);
    		if($save !== false){
    			$this->success('修改优惠券成功！','lst');
    		}else{
    			$this->error('修改优惠券失败！');
    		}
    		return;
    	}
    	$id=input('id');
    	$coupons=db('coupons')->find($id);
    	$this->assign([
    		'coupons'=>$coupons,
    		]);
        return view();
    }

    public function del($id)
    {
    	$del=db('coupons')->update(['id'=>$id, 'del_status'=>1]);
    	if($del){
			$this->success('禁用优惠券成功！','lst');
		}else{
			$this->error('禁用优惠券失败！');
		}
    }





}