<?php
namespace app\admin\controller;
use think\Controller;
use catetree\Catetree;
class Doctor extends Basic
{
    public function lst()
    {
    	$docRes=db('doctor')->paginate(10);
    	$this->assign([
    		'docRes'=>$docRes,
    		]);
        return view('list');
    }

    public function add()
    {
       
    	if(request()->isPost()){
    		$data=input('post.');
            echo header("Content-type:text/html;charset=utf-8");

            $data['addtime']=time();
            if(!empty($data['schedule'])){
                $data['schedule']=implode(',',$data['schedule']);
            }
            else{
                $data['schedule']="";
            }

//dump($data);die;
    		//处理图片上传
    		if($_FILES['pic_url']['tmp_name']){
    			$data['pic_url']=$this->upload();
    		}

    		//验证
    		$validate = validate('doctor');

    		if(!$validate->check($data)){
			    $this->error($validate->getError());
			}


            $add=db('doctor')->insert($data);

    		if($add){
    			$this->success('医生添加成功！','lst');
    		}else{
    			$this->error('医生添加失败！');
    		}

    		return;
    	}

        $cate=new Catetree();
        $cateRes=db('cate')->order('sort DESC')->select();
        $cateRes=$cate->catetree($cateRes);
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
        return view();
    }

    public function edit()
    {
    	if(request()->isPost()){
    		$data=input('post.');
    		// $data['link_url'];  http://
            $data['schedule']=implode(',',$data['schedule']);
    		//处理图片上传
    		if($_FILES['pic_url']['tmp_name']){
    			$olddoctors=db('doctor')->field('pic_url')->find($data['id']);
    			$olddoctorImg=IMG_UPLOADS.$olddoctors['pic_url'];
    			if(file_exists($olddoctorImg)){
    				@unlink($olddoctorImg);
    			}
    			$data['pic_url']=$this->upload();
    		}
    		//验证
    		$validate = validate('doctor');
    		if(!$validate->check($data)){
			    $this->error($validate->getError());
			}
    		$save=db('doctor')->update($data);
    		if($save !== false){
    			$this->success('修改医生成功！','lst');
    		}else{
    			$this->error('修改医生失败！');
    		}
    		return;
    	}
    	$id=input('id');
    	$arts=db('doctor')->find($id);
       $schedule=explode(',',$arts['schedule']);//explode 将字符串撕列成数组
        $sstr="00a,00b,01a,01b,02a,02b,03a,03b,04a,04b,05a,05b,06a,06b";
        $sarr=explode(',',$sstr);

        $cate=new Catetree();
        $cateRes=db('cate')->order('sort DESC')->select();
        $cateRes=$cate->catetree($cateRes);
    	$this->assign([
    		'arts'=>$arts,
            'cateRes'=>$cateRes,
            'schedule'=>$schedule,
            'sarr'=>$sarr,
    		]);
        return view();
    }

    public function del($id)
    {
        $doctor=db('doctor');
        $arts=$doctor->field('pic_url')->find($id);
        $pic_urlSrc=IMG_UPLOADS.$arts['pic_url'];
        if(file_exists($pic_urlSrc)){
            @unlink($pic_urlSrc);
        }
    	$del=$doctor->delete($id);
    	if($del){
			$this->success('删除医生成功！','lst');
		}else{
			$this->error('删除医生失败！');
		}
    }

    //上传图片
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('pic_url');
        
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static'. DS .'uploads');
            if($info){
//                return $info->getSaveName();
                return str_replace("\\","/",$info->getSaveName()) ;
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
                die;
            }
        }
    }

    //ueditor图片管理
    public function imglist(){
        $_files=my_scandir();
        $files=array();
        foreach ($_files as $k => $v) {
          if(is_array($v)){
            foreach ($v as $k1 => $v1) {
                $v1=str_replace(UEDITOR, HTTP_UEDITOR, $v1);
                $files[]=$v1;
            }
          }else{
            $v=str_replace(UEDITOR, HTTP_UEDITOR, $v);
            $files[]=$v;
          }
        }
        // dump($files); die;
        $this->assign([
            'imgRes'=>$files,
            ]);
        return view();
    }

    public function delimg(){
        $imgsrc=input('imgsrc');
        $imgsrc=DEL_UEDITOR.$imgsrc;
        if(file_exists($imgsrc)){
            if(@unlink($imgsrc)){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            echo 3;
        }
    }



}