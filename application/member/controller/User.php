<?php
namespace app\member\controller;
use app\member\controller\Base;
class User extends Base
{
	
    public function index(){
        $order = db('order');
        $orderGoods = db('orderGoods');
        //我的订单列表
        $myOrder = $order->field('id, goods_total_price, pay_status, post_status, order_status')->where('user_id', session('uid'))->limit(10)->order('id DESC')->select();
        //存放我的订单列表的数组
        $myOrderList = array();
        foreach ($myOrder as $k => $v) {
            $_orderGoods = $orderGoods->alias('og')->field('g.id, g.goods_name, g.mid_thumb')->join('goods g', "g.id = og.goods_id")->where('og.order_id', $v['id'])->select();
            $myOrderList[$k]['order_id'] = $v['id'];
            $myOrderList[$k]['goods_total_price'] = $v['goods_total_price'];
            $myOrderList[$k]['pay_status'] = $v['pay_status'];
            $myOrderList[$k]['post_status'] = $v['post_status'];
            $myOrderList[$k]['order_status'] = $v['order_status'];
            if(count($_orderGoods) == 1){   
                $myOrderList[$k]['goods_id'] = $_orderGoods[0]['id'];
                $myOrderList[$k]['goods_name'] = $_orderGoods[0]['goods_name'];
                $myOrderList[$k]['thumbs'] = $_orderGoods[0]['mid_thumb'];
            }else{
                foreach ($_orderGoods as $k1 => $v1) {
                    $myOrderList[$k]['goods_name'] = '';
                    $myOrderList[$k]['goods_id'][] = $v1['id'];
                    $myOrderList[$k]['thumbs'][] = $v1['mid_thumb'];
                }
            }

            // dump($_orderGoods);
        }
        // dump($myOrderList);
        // dump($myOrder);
        //全部订单的数量
        $totalCount = $order->where('del_status',0)->count();
        //未完成
        $notDoneCount = $order->where(['del_status'=>0, 'order_status'=>0])->count();
        //未支付
        $notPayCount = $order->where(['del_status'=>0, 'pay_status'=>0])->count();
        //待收货
        $notGetCount = $order->where(['del_status'=>0, 'post_status'=>1])->count();
        //已完成订单数量
        $doneCount = $order->where(['del_status'=>0, 'order_status'=>1])->count();
    	$this->assign([
    		'show_right'=>1,
            'totalCount'=>$totalCount,
            'notDoneCount'=>$notDoneCount,
            'notPayCount'=>$notPayCount,
            'notGetCount'=>$notGetCount,
            'doneCount'=>$doneCount,
            'myOrderList' => $myOrderList
    		]);
        return view();
    }

    public function userInfo(){
        $uid = session('uid');
        if(request()->isPost()){
            $data=input('post.');
            //处理图片上传
            if(isset($_FILES['avatar_src']['tmp_name'])){
                $data['avatar_src']=$this->upload();
            }
            if(isset($data['user_id'])){
                if($data['avatar_src'] == null){
                    unset($data['avatar_src']);
                }
                $save=db('userInfo')->where('user_id',$data['user_id'])->update($data);
                if($save !== false){
                    $this->success('修改信息成功！');
                }else{
                    $this->error('修改信息失败！');
                }
            }else{
                $data['user_id'] = $uid;
                $save=db('userInfo')->insert($data);
                if($save !== false){
                    $this->success('添加信息成功！');
                }else{
                    $this->error('添加信息失败！');
                }
            }
            
        }

        
        $userInfo = db('userInfo')->where('user_id', $uid)->find();
        $this->assign([
            'userInfo'=>$userInfo,
            ]);
        return view();
    }

    public function logout(){
    	model('User')->logout();
    	$this->success('退出成功！',url('member/Account/login'));
    }

    //上传图片
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('avatar_src');
        
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS .'uploads');
            if($info){
                return $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
                die;
            }
        }
    }
}
