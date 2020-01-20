<?php
namespace app\index\model;
use think\Model;
class Cart extends Model
{
	public function addToCart($goodsId,$goodsAttr='',$goodsNum=1){
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      $key=$goodsId.'-'.$goodsAttr;
      if(isset($cart[$key])){
         $cart[$key]+=$goodsNum;//如果再次之前已经为该商品加入了购物车，那么再次添加只需要修改商品数量
      }else{
         $cart[$key]=$goodsNum;
      }
      $aMonth=time()+30*24*3600;
      setcookie('cart',serialize($cart),$aMonth,'/');
   }

   //清空购物车
   public function clearCart(){
   	 setcookie('cart','',1,'/');
   }

   //删除一条购物车记录
   public function delCart($idAttr){
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      $key=$idAttr;
      unset($cart[$key]);
      $aMonth=time()+30*24*3600;
      setcookie('cart',serialize($cart),$aMonth,'/');
   }

   //批量删除购物车记录
   public function deleteCartGoods($cartValue){
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      $cartValue=explode('@', $cartValue);
      // [
      //    '16-74,76',
      //    '15-68,69'
      // ]
      foreach ($cartValue as $k => $v) {
         unset($cart[$v]);
      }
      $aMonth=time()+30*24*3600;
      setcookie('cart',serialize($cart),$aMonth,'/');
   }

   //修改购物车中的商品数量
   public function updateCart($idAttr,$goodsNum){
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      $key=$idAttr;
      $cart[$key]=$goodsNum;
      $aMonth=time()+30*24*3600;
      setcookie('cart',serialize($cart),$aMonth,'/');
      return json(['error'=>0]);
   }

   //计算下单的商品总价格
   public function doGoodsPriceCount($doGoods){
      $goodsTotalPrice = 0;
      $goods=model('goods');
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      if($doGoods){
         $doGoodsArr = explode('@', $doGoods);
         foreach ($cart as $k => $v) {
            if(!in_array($k, $doGoodsArr)){
               unset($cart[$k]);
            }
         }
         $_cart=array();
         foreach ($cart as $k => $v) {
            $arr=explode('-', $k);//$arr[0]就是商品id，如果存在第二个元素的话$arr[1]代表商品单选属性id字符串
            $memberPrice=$goods->getMemberPrice($arr[0]);
            $_cart[$k]['member_price']=$memberPrice;
            if($arr[1]){
               $goodsAttrPrice=0;
               $goodsAttrRes=db('goods_attr')->alias('ga')->field('ga.*,a.attr_name')->join('attr a',"ga.attr_id = a.id")->where('ga.id','in',$arr[1])->select();
               foreach ($goodsAttrRes as $k1 => $v1) {
                  $goodsAttrPrice+=$v1['attr_price'];
               }
               $_cart[$k]['member_price']+=$goodsAttrPrice;
            }
            $goodsTotalPrice += $_cart[$k]['member_price']*$v;
         }
      }
      return $goodsTotalPrice;

   }

   //读取cookie获取购物车商品
   public function getGoodsListInCart($doGoods=''){
      $goods=model('goods');
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      if($doGoods){
         $doGoodsArr = explode('@', $doGoods);
         foreach ($cart as $k => $v) {
            if(!in_array($k, $doGoodsArr)){
               unset($cart[$k]);
            }
         }
      }
      $_cart=array();
      foreach ($cart as $k => $v) {
         $arr=explode('-', $k);//$arr[0]就是商品id，如果存在第二个元素的话$arr[1]代表商品单选属性id字符串
         $goodsInfo=$goods->field('id,goods_name,mid_thumb,shop_price,markte_price')->find($arr[0]);
         $memberPrice=$goods->getMemberPrice($arr[0]);
         $_cart[$k]['goods_name']=$goodsInfo['goods_name'];
         $_cart[$k]['mid_thumb']=$goodsInfo['mid_thumb'];
         $_cart[$k]['member_price']=$memberPrice;
         $_cart[$k]['shop_price']=$goodsInfo['shop_price'];
         $_cart[$k]['market_price']=$goodsInfo['markte_price'];
         $_cart[$k]['goods_num']=$v;
         $_cart[$k]['goods_id']=$goodsInfo['id'];
         $_cart[$k]['goods_id_attr_id']=$k;//单独保存$k，用于处理复选框问题
         $_cart[$k]['goods_attr_str']='';//商品单选属性字符串初始化
         if($arr[1]){
            // 属性名称  属性值  属性价格
            // 颜色       红色    0          颜色:红色  (￥ 0 元)  
            // 尺寸       XXL     100
            $goodsAttrStr=array();//商品单选属性字符串
            $goodsAttrPrice=0;
            $goodsAttrRes=db('goods_attr')->alias('ga')->field('ga.*,a.attr_name')->join('attr a',"ga.attr_id = a.id")->where('ga.id','in',$arr[1])->select();
            foreach ($goodsAttrRes as $k1 => $v1) {
               $goodsAttrStr[]=$v1['attr_name'].':'.$v1['attr_value'].'(￥ '.$v1['attr_price'].'元)';
               $goodsAttrPrice+=$v1['attr_price'];
            }
            $goodsAttrStr=implode('<br />', $goodsAttrStr);
            $_cart[$k]['goods_attr_str']=$goodsAttrStr;
            $_cart[$k]['member_price']+=$goodsAttrPrice;
            $_cart[$k]['shop_price']+=$goodsAttrPrice;
         }
         $_cart[$k]['subtotal']=$_cart[$k]['member_price']*$v;
      }
      return $_cart;
   }

   //购物车数据改动时，计算选中的商品的总价格、节省价格、总数
   //$recId为选中的商品的id字符串：1,2,3
   public function ajaxCartGoodsAmount($recId){
      //$recId格式：rec_id:15-68,69@16-72,75@16-73,76
      $goods=model('goods');
      $_cart['subtotal_number']=0;//商品总数
      $_cart['goods_amount']=0;//商品会员价总金额
      $_cart['save_total_amount']=0;//优惠节省总金额
      $_cart['shop_total']=0;//商品本店价总金额
      $recIdArr=explode('@', $recId);
      $cart=isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
      //删除未选定的购物车中的商品
      foreach ($cart as $k => $v) {
         //$arr=explode('-', $k);//$arr[0]就是商品id，如果存在第二个元素的话$arr[1]代表商品单选属性id字符串
         if(!in_array($k, $recIdArr)){
            unset($cart[$k]);
         }
      }
      //开始计算商品信息
      foreach ($cart as $k => $v) {
         //计算商品总数
         $_cart['subtotal_number']+=$v;
         //计算商品总会员价（含属性价格）
         $arr=explode('-', $k);//$arr[0]就是商品id，如果存在第二个元素的话$arr[1]代表商品单选属性id字符串
         $memberPrice=$goods->getMemberPrice($arr[0]);
         //计算商品总本店价（含属性价格）
         $shopPrice=$goods->getShopPrice($arr[0]);
         if($arr[1]){
            $goodsAttrPrice=0;
            $goodsAttrRes=db('goods_attr')->field('attr_price')->where('id','in',$arr[1])->select();
            foreach ($goodsAttrRes as $k1 => $v1) {
               $goodsAttrPrice+=$v1['attr_price'];
            }
            $memberPrice+=$goodsAttrPrice;
            $shopPrice+=$goodsAttrPrice;
         }
         $_cart['goods_amount']+=$memberPrice*$v;
         $_cart['shop_total']+=$shopPrice*$v;
      }
      //计算商品总节省
      $_cart['save_total_amount']=$_cart['shop_total']-$_cart['goods_amount'];
      return $_cart;
   }


}
