<?php
namespace app\index\controller;
class Index extends Base
{
    public function index()
    {
        //一级分类
//获取首页大模块顶级分类数据开始
        if(cache('cateRes')){
            $cateRes=cache('cateRes');
        }else{
            $cateRes=model('cate')->getComCates();


            $this->assign('cateRes',$cateRes);
        }
//新闻动态
        $news =db('article')->where('cate_id',28)->limit(4)->select();
        $tnotice=db('article')->where(['cate_id'=>29,'show_top'=>1])->limit(1)->select();
        $notice=db('article')->where(['cate_id'=>29,'show_top'=>0])->limit(4)->select();
        $jiankang=db('article')->where('cate_id',39)->limit(5)->select();
        $yihu =db('article')->where('cate_id',40)->limit(5)->select();
        $xueke=db('article')->where('cate_id',41)->limit(5)->select();
        $huhuan=db('article')->where('cate_id',42)->limit(5)->select();
        $jiedu=db('article')->where('cate_id',43)->limit(5)->select();
        $this->assign(
            [
                'news'=>$news,
                'notice'=>$notice,
                'tnotice'=>$tnotice,
                'jiankang'=>$jiankang,
                'yihu'=>$yihu,
                'xueke'=>$xueke,
                'huhuan'=>$huhuan,
                'jiedu'=>$jiedu,

            ]
        );
        return view();
    }
    public function myisheng(){
        $ykeshi = input('post.mykeshi');
        $ykeshi+=1;
        $temp='';
        $res = db('doctor')->where('department', $ykeshi)->select();
        foreach ($res as $k=>$v){
            $temp.="<li>".$v['name']."(".$v['ranks'].")</li>";
        }
        return $temp;
    }
public function yisheng(){
    $ykeshi = input('post.ykeshi');
    $ykeshi+=1;
    $temp='';
    $res = db('doctor')->where('department', $ykeshi)->select();
    foreach ($res as $k=>$v){
        $temp.="<a href='".url('index/doctor/index',array('id'=>$v['id']))."'class='swiper-slide'><img src='/static/uploads/".$v['pic_url'].
            "'alt='' class='' /><p>".$v['name']."(".$v['ranks'].")</p>
                        </a>";
    }
    return $temp;
}
//排班表
   public function reg(){
    $keshi = input('post.keshi');

       $keshi+=1;
//       $keshi=1;
       if(!empty($keshi)) {
//    $table='';

        $res = db('doctor')->where('department', $keshi)->select();
//        dump($res);
        $temp=array();
      for ($i=0;$i<14;$i++){
          $temp[$i]=array();
      }

        foreach($res as $k=>$v){

     $v['schedule'] =explode(',',$v['schedule']);
     //上午
            $url=url("index/doctor/index",["id"=>$v["id"]]);
            
            if(in_array('01a',$v['schedule'])){
              $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[0],$aa);
            }

            if(in_array('02a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[1],$aa);
            }

            if(in_array('03a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[2],$aa);
            }

            if(in_array('04a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[3],$aa);
            }

            if(in_array('05a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[4],$aa);
            }

            if(in_array('06a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[5],$aa);
            }

            if(in_array('00a',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[6],$aa);
            }
          //下午
            if(in_array('01b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[7],$aa);
            }

            if(in_array('02b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[8],$aa);
            }

            if(in_array('03b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[9],$aa);
            }

            if(in_array('04b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[10],$aa);
            }

            if(in_array('05b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[11],$aa);
            }

            if(in_array('06b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[12],$aa);
            }

            if(in_array('00b',$v['schedule'])){
                $aa=  "<a href='".$url."'>".$v['name']."</a>";
                array_push($temp[13],$aa);
            }

        }//foreach
//           dump($temp);
        $ts01="";
               for ($i=0;$i<14;$i++){
            $ts= implode('',$temp[$i]);

             $ts01=$ts01."<p>".$ts."</p>";

           }
//        dump($ts01);
        $table=$ts01;
//      dump($table);die;
$ret=$table;

    }
    else
        $ret=0;
return $ret;

   }//reg

    //mreg
    public function mreg(){
        $mkeshi = input('post.mkeshi');

        $mkeshi+=1;
//       $keshi=1;
        if(!empty($mkeshi)) {
//    $table='';

            $res = db('doctor')->field('name,schedule')->where('department', $mkeshi)->select();
//        dump($res);
            $temp=array();
            for ($i=0;$i<14;$i++){
                $temp[$i]=array();
            }

            foreach($res as $k=>$v){

                $v['schedule'] =explode(',',$v['schedule']);
                //周一
                if(in_array('01a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[0],$aa);
                }
                if(in_array('01b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[1],$aa);
                }
            //周二
                if(in_array('02a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[2],$aa);
                }
                if(in_array('02b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[3],$aa);
                }
 //周三
                if(in_array('03a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[4],$aa);
                }
                if(in_array('03b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[5],$aa);
                }
//周四
                if(in_array('04a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[6],$aa);
                }
                if(in_array('04b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[7],$aa);
                }
//周五

                if(in_array('05a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[8],$aa);
                }
                if(in_array('05b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[9],$aa);
                }
//周六
                if(in_array('06a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[10],$aa);
                }
                if(in_array('06b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[11],$aa);
                }
                //周日
                if(in_array('00a',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[12],$aa);
                }
                //下午

                if(in_array('00b',$v['schedule'])){
                    $aa=  "<a href='".$url."'>".$v['name']."</a>";
                    array_push($temp[13],$aa);
                }


            }//foreach
//           dump($temp);
            $ts01="";
            for ($i=0;$i<14;$i++){
                $ts= implode('',$temp[$i]);

                $ts01=$ts01."<p>".$ts."</p>";

            }
//        dump($ts01);
            $table=$ts01;
//      dump($table);die;
            $ret=$table;

        }
        else
            $ret=0;
        return $ret;

    }//reg

}
