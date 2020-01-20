<?php
namespace app\member\controller;
use think\Controller;
class Base extends Controller
{
    public $config;//配置项数组


    public function _initialize(){
        $this->checkLogin();//访问会员中心之前先检查是否登录
        $this->getUserInfo();
    	$this->_getFooterArts();//获取并分配底部帮助信息
        $this->_getNav();//获取并分配导航
    	$this->_getConfs();//获取并分配配置项，为config赋值
        $this->_getCates();
    }
    
    public function checkLogin(){
        $uid =session('uid');
        if(!$uid){
            $this->error('请先登录！','member/Account/login');
        }
    }

    public function getUserInfo(){
        $uid =session('uid');
        $leftUserInfo = db('userInfo')->where('user_id', $uid)->find();
        $registerType = db('user')->where('id', $uid)->value('register_type');
        $this->assign([
            'leftUserInfo'=>$leftUserInfo,
            'registerType'=>$registerType,
            ]);
    }

    private function _getCates(){
        $cateRes=model('Category')->getCates();
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
    }

    private function _getFooterArts(){
        $mArticle=model('Article');
        if(cache('helpCateRes')){
            $helpCateRes=cache('helpCateRes');
        }else{
            $helpCateRes=$mArticle->getFooterArts();//底部帮助信息
            cache('helpCateRes',$helpCateRes,3600);
        }
    	if(cache('shopInfoRes')){
            $shopInfoRes=cache('shopInfoRes');
        }else{
            $shopInfoRes=$mArticle->getShopInfo();//底部网店信息
            cache('shopInfoRes',$shopInfoRes,3600);
        }
    	$this->assign([
    		'helpCateRes'=>$helpCateRes,
            'shopInfoRes'=>$shopInfoRes,
    		]);
    }

    private function _getNav(){
        if(cache('navRes')){
            $navRes=cache('navRes');
        }else{
            $_navRes=db('nav')->order('sort DESC')->select();
            $navRes=array();
            foreach ($_navRes as $k => $v) {
                $navRes[$v['pos']][]=$v;
            }
            cache('navRes',$navRes,3600);
        }
    	$this->assign([
    		'navRes'=>$navRes,
    		]);
    }

    private function _getConfs(){
        if(cache('confRes')){
            $confRes=cache('confRes');
        }else{
            $confRes=model('Conf')->getConfs();
            cache('confRes',$confRes,3600);
        }
        $this->config=$confRes;
        $this->assign([
            'configs'=>$confRes,
            ]);
    }


}
