<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-03-02
 * Time: 17:05
 */

namespace app\index\controller;


class Doctor extends Base
{
  function index($id){

      //一级分类
//获取首页大模块顶级分类数据开始
      if(cache('cateRes')){
          $cateRes=cache('cateRes');
      }else{
          $cateRes=model('cate')->getComCates();


          $this->assign('cateRes',$cateRes);
      }
$doc= db('doctor')->where('id',$id)->find();
      $tdoc=db('doctor')->where('department',$doc['department'])->select();

      $temp=array();
      for ($i=0;$i<14;$i++){
          $temp[$i]=array();
      }

      $schedule=$doc['schedule'];
      $schedule=explode(',',$schedule);
//上午
      if(in_array('01a',$schedule)){
          $aa= "<a href='javascript:void(0)' data-time='01a'>预约</a>";
          array_push($temp[0],$aa);
      }

      if(in_array('02a',$schedule)){
          $aa=  "<a href='javascript:void(0)' data-time='02a'>预约</a>";
          array_push($temp[1],$aa);
      }

      if(in_array('03a',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='03a'>预约</a>";
          array_push($temp[2],$aa);
      }

      if(in_array('04a',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='04a'>预约</a>";
          array_push($temp[3],$aa);
      }

      if(in_array('05a',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='05a'>预约</a>";
          array_push($temp[4],$aa);
      }

      if(in_array('06a',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='06a'>预约</a>";
          array_push($temp[5],$aa);
      }

      if(in_array('00a',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='00a'>预约</a>";
          array_push($temp[6],$aa);
      }
      //下午
      if(in_array('01b',$schedule)){
          $aa=  "<a href='javascript:void(0)' data-time='01b' >预约</a>";
          array_push($temp[7],$aa);
      }

      if(in_array('02b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='02b' >预约</a>";
          array_push($temp[8],$aa);
      }

      if(in_array('03b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='03b'>预约</a>";
          array_push($temp[9],$aa);
      }

      if(in_array('04b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='04b'>预约</a>";
          array_push($temp[10],$aa);
      }

      if(in_array('05b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='05b'>预约</a>";
          array_push($temp[11],$aa);
      }

      if(in_array('06b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='06b'>预约</a>";
          array_push($temp[12],$aa);
      }

      if(in_array('00b',$schedule)){
          $aa=  "<a href='javascript:void(0)'  data-time='00b'>预约</a>";
          array_push($temp[13],$aa);
      }
      $ts01="";
      for ($i=0;$i<14;$i++){
          $ts= implode('',$temp[$i]);

          $ts01=$ts01."<p>".$ts."</p>";

      }


      $this->assign([
          'doc'=>$doc,
              "schedule"=>$ts01,
              'tdoc'=>$tdoc
              ]
      );


      return view();


  }
  public function lst(){
      //一级分类
//获取首页大模块顶级分类数据开始
      if(cache('cateRes')){
          $cateRes=cache('cateRes');
      }else{
          $cateRes=model('cate')->getComCates();


          $this->assign('cateRes',$cateRes);
      }

      $keshi = input('post.keshi');
  if(!empty($keshi)){

      $ldoc = db('doctor')->paginate(4);
      $this->assign('ldoc',$ldoc);

      return view();
  }
  else{
      $ldoc = db('doctor')->paginate(4);
      $this->assign('ldoc',$ldoc);
      return view();
  }

  }
  public function keshi(){

      $keshi = input('post.keshi');


$keshi+=1;
$str="";
      if(!empty($keshi)){
          $ldoc = db('doctor')->where('department',$keshi)->select();
          foreach ($ldoc as $k =>$v){
          $str1="<a href='".url('index/doctor/index',['id'=>$v['id']])."' class='Wnei row Wjs'>
                    <img class='col s4 m2 l2 xl2' src='/static/uploads/".$v['pic_url']."' alt=''>
                    <div class='WneiD col s8 m10 l10 xl10'>
                        <p class='Wjieshao'>姓名：".$v['name']."</p>
                        <p class='Wjieshao'>职务：".$v['ranks']."</p>
                        <p class='Wjieshao omit2'>擅长：".$v['skilled']."</p>
                        <p class='Wjieshao'>简介：".$v['intro']."</p>
                    </div>
                </a>";
         $str=$str1.$str;
          }
         return $str;
      }
      else{
        return "000";
      }




  }
  public function yuyue(){
      $data=input('post.');
      if(!captcha_check($data['code'])) {
          // 校验失败
          $this->error('验证码不正确');
      }
      unset($data['code']);
         $res = db('yuyue')->insert($data);

   if($res){
       $tstr="您于".$data['yytime']."成功预约".$data['doctor']."医生";
     echo json_encode($tstr);
   }
   else{
       $tstr="预约失败";
       echo $tstr;
   }
  }



}