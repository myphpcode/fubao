<?php
namespace app\admin\controller;
use think\Controller;
class User extends Controller
{
    public function lst()
    {
    	$userRes=db('user')->field('u.*, ml.level_name,ml.bom_point,ml.top_point')->alias('u')->join('member_level ml',"u.points >= ml.bom_point AND ml.top_point >= u.points")->order('u.id DESC')->paginate(2);
    	$this->assign([
    		'userRes'=>$userRes,
    		]);
        return view('list');
    }

    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');
    		//验证
    		$validate = validate('user');
    		if(!$validate->check($data)){
			    $this->error($validate->getError());
			}
            $data['password'] = md5($data['password']);
            if(!$data['register_time']){
                $data['register_time'] = time();
            }else{
                $data['register_time'] = strtotime($data['register_time']);
            }

            if(!$data['points']){
                $data['points'] = 0;
            }

    		$add=db('user')->insert($data);
    		if($add){
    			$this->success('添加用户成功！','lst');
    		}else{
    			$this->error('添加用户失败！');
    		}
    		return;
    	}
        return view();
    }

    public function edit()
    {
        if(request()->isPost()){
            $data=input('post.');
            //验证
            $validate = validate('user');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            if($data['password']){
                $data['password'] = md5($data['password']);
            }else{
                unset($data['password']);
            }
            
            if(!$data['register_time']){
                $data['register_time'] = time();
            }else{
                $data['register_time'] = strtotime($data['register_time']);
            }

            if(!$data['points']){
                $data['points'] = 0;
            }

            $save=db('user')->update($data);
            if($save !== false){
                $this->success('修改用户成功！','lst');
            }else{
                $this->error('修改用户失败！');
            }
            return;
        }
        $id = input('id');
        $userInfo=db('user')->find($id);
        $this->assign([
            'userInfo'=>$userInfo
            ]);
        return view();
    }

    public function del($id)
    {
        $user=db('user');
        $orderRes = db('order')->where('user_id', $id)->select();
        if($orderRes){
            $this->error('该用户存在下单记录！');
        }
        $del=$user->delete($id);
    	if($del){
			$this->success('删除用户成功！','lst');
		}else{
			$this->error('删除用户失败！');
		}
    }



}