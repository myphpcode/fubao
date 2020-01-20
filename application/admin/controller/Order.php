<?php
namespace app\admin\controller;
use think\Controller;
class Order extends Controller
{
    public function lst()
    {
        $status = 'all'; //要导出的订单的状态，默认为导出所有订单
        if(request()->isPost()){
            $data = input('post.'); 
            $where = array();
            $selectValue = trim($data['select_value']);
            if($data['select_base'] == 'order_trade_no'){
                $where['o.out_trade_no'] = ['=',$selectValue];
            }else{
                $userId = db('user')->where('username', $selectValue)->value('id');
                $where['o.user_id'] = ['=', $userId];
            }
            
        }

        // no_paied  未支付
        // paied     已支付
        // no_post   未发货
        // posted    已发货
        // got_goods 已收货
        $getData = input('get.');
        if(isset($getData['status'])){
            $status = $getData['status'];
            $where = array();
            if($getData['status'] == 'no_paied'){
                $where['o.pay_status'] = ['=',0];
            }elseif($getData['status'] == 'paied'){
                $where['o.pay_status'] = ['=',1];
            }elseif($getData['status'] == 'no_post'){
                $where['o.post_status'] = ['=',0];
            }elseif($getData['status'] == 'posted'){
                $where['o.post_status'] = ['=',1];
            }elseif($getData['status'] == 'got_goods'){
                $where['o.post_status'] = ['=',2];
            }
        }

        if(!isset($where)){
                $where = 1;
            }
    	$orderRes=db('order')->alias('o')->join("user u","o.user_id = u.id")->field('o.id,o.out_trade_no,o.goods_total_price,o.pay_status,o.order_status,o.post_status,o.distribution,o.payment,o.name,o.phone,o.order_time,u.username')->where($where)->order('o.id DESC')->paginate(10,false,['query' => request()->param()]);
    	$this->assign([
    		'orderRes'=>$orderRes,
            'orderStatus'=>$status
    		]);
        return view('list');
    }


    //导出订单
    public function exportOrders(){
        $phpexcelSrc=APP_PATH.'../plus/PHPexcel/PHPExcel.php';
        include($phpexcelSrc);
        $phpexcel=new \PHPExcel();
        $phpexcel->setActiveSheetIndex(0);
        $sheet=$phpexcel->getActiveSheet();
        $getData = input('get.');
        if(isset($getData['status'])){
            $status = $getData['status'];
            $where = array();
            if($getData['status'] == 'no_paied'){
                $where['o.pay_status'] = ['=',0];
            }elseif($getData['status'] == 'paied'){
                $where['o.pay_status'] = ['=',1];
            }elseif($getData['status'] == 'no_post'){
                $where['o.post_status'] = ['=',0];
            }elseif($getData['status'] == 'posted'){
                $where['o.post_status'] = ['=',1];
            }elseif($getData['status'] == 'got_goods'){
                $where['o.post_status'] = ['=',2];
            }else{
                $where['o.post_status'] = ['>',-1];
            }
        }

        if(!isset($where)){
                $where = 1;
            }
        $orderRes=db('order')->alias('o')->join("user u","o.user_id = u.id")->field('o.id,o.out_trade_no,o.goods_total_price,o.pay_status,o.order_status,o.post_status,o.distribution,o.payment,o.name,o.phone,o.order_time,u.username')->where($where)->order('o.id DESC')->select();
        $arr=[
            'id'=>'订单id',
            'out_trade_no'=>'订单编号',
            'goods_total_price'=>'商品总额',
            'pay_status'=>'支付状态',
            'order_status'=>'订单状态',
            'post_status'=>'配送状态',
            'distribution'=>'配送方',
            'payment'=>'支付方式',
            'name'=>'收货人',
            'phone'=>'手机号',
            'username'=>'用户名',
            'order_time'=>'下单时间'
        ];
        array_unshift($orderRes,$arr);
        $row = 0;
        foreach ($orderRes as $k => $v) {
            $row += 1;
            if($v['pay_status'] == 0){
                $v['pay_status'] = '未支付';
            }else{
                $v['pay_status'] = '已支付';
            }

            if($v['order_status'] == 0){
                $v['order_status'] = '未完成';
            }elseif($v['order_status'] == 1){
                $v['order_status'] = '已完成';
            }elseif($v['order_status'] == 2){
                $v['order_status'] = '申请退款';
            }elseif($v['order_status'] == 3){
                $v['order_status'] = '退款成功';
            }

            if($v['post_status'] == 0){
                $v['post_status'] = '未发货';
            }elseif($v['post_status'] == 1){
                $v['post_status'] = '已发货';
            }elseif($v['post_status'] == 2){
                $v['post_status'] = '已收货';
            }

            if($v['payment'] == 1){
                $v['payment'] = '支付宝';
            }elseif($v['payment'] == 2){
                $v['payment'] = '微信';
            }elseif($v['payment'] == 3){
                $v['payment'] = '余额';
            }
            if($k){
               $v['order_time'] = date("Y-m-d H:i:s",$v['order_time']); 
            }
            
            // dump($v['order_time']); die;
            $sheet->setCellValue('A'.$row,$v['id'])
                  ->setCellValue('B'.$row,$v['out_trade_no'])
                  ->setCellValue('C'.$row,$v['goods_total_price'])
                  ->setCellValue('D'.$row,$v['pay_status'])
                  ->setCellValue('E'.$row,$v['order_status'])
                  ->setCellValue('F'.$row,$v['post_status'])
                  ->setCellValue('G'.$row,$v['distribution'])
                  ->setCellValue('H'.$row,$v['payment'])
                  ->setCellValue('I'.$row,$v['name'])
                  ->setCellValue('J'.$row,$v['phone'])
                  ->setCellValue('K'.$row,$v['username'])
                  ->setCellValue('L'.$row,$v['order_time']);
        }
        header('Content-Type: application/vnd.ms-excel');//设置下载前的头信息
        header('Content-Disposition: attachment;filename="dingdan.xlsx"');
        header('Cache-Control: max-age=0');
        $phpwriter=new \PHPExcel_Writer_Excel2007($phpexcel);
        $phpwriter->save('php://output');
    }

    //订单查询
    public function orderSelect(){
        return view();
    }

    public function detail($id){
        $orderInfo = db('order')->alias('o')->join("user u","o.user_id = u.id")->field('o.*,u.username')->find($id);
        $this->assign('orderInfo',$orderInfo);
        return view('detail');
    }

    //删除订单
    public function del($id){
        //删除订单商品表的关联数据
        db('orderGoods')->where('order_id',$id)->delete();
        $del = db('order')->delete($id);
        if($del){
            $this->success('订单删除成功！');
        }else{
            $this->error('订单删除失败！');
        }
    }


    public function edit()
    {
    	if(request()->isPost()){
    		$data=input('post.');
            $userId = db('user')->where('username',$data['username'])->value('id');
            if($userId){
                $data['user_id'] = $userId;
            }
            $data['order_time'] = strtotime($data['order_time']);
            // dump($data); die;
    		//验证
    		$validate = validate('order');
    		if(!$validate->check($data)){
			    $this->error($validate->getError());
			}
    		$save=db('order')->strict(false)->update($data);
    		if($save !== false){
    			$this->success('修改订单成功！','lst');
    		}else{
    			$this->error('修改订单失败！');
    		}
    		return;
    	}
    	$id=input('id');
    	$orderInfo = db('order')->alias('o')->join("user u","o.user_id = u.id")->field('o.*,u.username')->find($id);
    	$this->assign([
    		'orderInfo'=>$orderInfo,
    		]);
        return view();
    }

    public function orderGoods($id){
        $orderGoodsRes = db('orderGoods')->where('order_id',$id)->paginate(10);
        $this->assign([
            'orderGoodsRes' => $orderGoodsRes
            ]);
        return view();
    }

    public function orderGoodsEdit(){
        if(request()->isPost()){
            $data = input('post.');
            $save = db('order_goods')->update($data);
            if($save !== false){
                $this->success('修改订单商品成功！');
            }else{
                $this->error('修改订单商品失败！');
            }
        }
        $orderGoodsId = input('id');
        $orderGoodsInfo = db('orderGoods')->find($orderGoodsId);
        $this->assign([
            'orderGoodsInfo'=>$orderGoodsInfo,
            ]);
        return view();
    }

    public function orderGoodsDel($id){
        $res = db('orderGoods')->delete($id);
        $this->success('删除订单商品成功！');
    }


}