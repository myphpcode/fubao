<?php
namespace app\member\controller;
use app\member\controller\Base;
class Order extends Base
{
	
    public function orderlist(){
        $order = db('order');
        $uid = session('uid');
        //组合条件
        $orderStatus = input('order_status');
        $map = array();
        if(!$orderStatus){
            $orderStatus = 1;
        }
        if($orderStatus == 1){
            $map['id'] = ['>',1];
        }elseif($orderStatus == 2){
            $map['order_status'] = 0;
        }elseif($orderStatus == 3){
            $map['pay_status'] = 0;
        }elseif($orderStatus == 4){
            $map['post_status'] = 1;
        }elseif($orderStatus == 5){
            $map['order_status'] = 1;
        }else{
            $map['id'] = ['>',1];
        }

        //获取数据
        $orderRes = $order->field('id,out_trade_no,user_id,order_total_price,order_status,pay_status,post_status,order_time,name')->where('user_id',$uid)->where('del_status',0)->where($map)->paginate(10,false,['query'=>request()->param()])->each(function($item, $key){
        $orderid = $item["id"]; //获取数据集中的id
        $goodsRes = db('orderGoods')->alias('og')->field('g.mid_thumb,g.goods_name,og.member_price,og.goods_attr_str,og.goods_num')->join('goods g',"g.id = og.goods_id")->where('order_id',$orderid)->select(); //根据ID查询相关其他信息
        $item['goods'] = $goodsRes; //给数据集追加字段num并赋值
        return $item;
        });
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
            'orderRes'=>$orderRes,
            'totalCount'=>$totalCount,
            'notDoneCount'=>$notDoneCount,
            'notPayCount'=>$notPayCount,
            'notGetCount'=>$notGetCount,
            'doneCount'=>$doneCount,
            'orderStatus'=>$orderStatus
            ]);
        return view();
    }

    public function orderDetail(){
        $orderId = input('id');
        if(!$orderId){
            $this->error('非法操作！');
        }
        $orders = db('order')->find($orderId);
        if(!$orders){
            $this->error('非法操作！');
        }
        //订单进度
        $progress = 1;
        if($orders['pay_status'] == 1){
            $progress = 2;
            if($orders['post_status'] == 1){
                $progress = 3;
            }

            if($orders['post_status'] == 2){
                $progress = 4;
                if($orders['order_status'] == 1){
                    $progress = 5;
                }
            }
        }
        //当前订单商品查询
        $goodsRes = db('orderGoods')->alias('og')->field('g.id,g.mid_thumb,g.goods_name,og.member_price,og.goods_attr_str,og.goods_num')->join('goods g',"g.id = og.goods_id")->where('order_id',$orderId)->select(); 
        // dump($goodsRes);
        $this->assign([
            'orders'=>$orders,
            'orderProgress'=>$progress,
            'goodsRes'=>$goodsRes
            ]);
        return view();
    }

    public function orderDel(){
        $orderId = input('id');
        $save = db('order')->update(['id'=>$orderId, 'del_status'=>1]);
        if($save){
            $this->success('删除订单成功！');
        }else{
            $this->error('删除订单失败！');
        }
    }

}
