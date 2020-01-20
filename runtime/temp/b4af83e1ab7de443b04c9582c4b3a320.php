<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"F:\2019\fubao\public/../application/index\view\index\index.htm";i:1551680529;s:62:"F:\2019\fubao\public/../application/index\view\common\head.htm";i:1551700570;s:64:"F:\2019\fubao\public/../application/index\view\common\footer.htm";i:1551509804;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0, maximum-scale=1,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>安阳妇幼</title>
    <link rel="stylesheet" href="__index__/css/animate.css">
    <link rel="stylesheet" href="__index__/css/style.css"/>
    <link rel="stylesheet" href="__index__/css/materialize.css"/>
    <link rel="stylesheet" href="__index__/css/swiper.css">
    <link rel="stylesheet" href="__index__/fonts/fonts.css">
    <script src="__index__/js/jquery-3.3.1.js"></script>
    <script src="__index__/js/materialize.js"></script>
    <script type="text/javascript" src="__index__/js/tab.js"></script>
    <script src="__index__/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--<style>-->
    <!--#yscon a{-->
    <!--width: 19%;-->
    <!--}-->
    <!--#yscon a:not(:first-child){-->
    <!--margin-left: 1%;-->
    <!--}-->
    <!--</style>-->
</head>
<body>
<!--首栏目-->
<nav class="nav-extended">
    <div id="slide-out" class="side-nav collapsible" data-collapsible="accordion">
        <p class="Collapsing current">首页</p>
        <p class="Collapsing current"><a href="<?php echo url('index/doctor/lst'); ?>">专家介绍</a></p>
        <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($cate['pid'] == 0 && $cate['show_nav'] == 1): ?>
        <p class="Collapsing current"><?php echo $cate['cate_name']; ?></p>
        <?php if($cate['children']): ?>

        <div class="coll_body">
            <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateChild): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('index/cate/index',array('id'=>$cateChild['id'])); ?>"><?php echo $cateChild['cate_name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
</nav>
<script>
    (function($){
        // 侧边栏
        $(function(){
            $('.button-collapse').sideNav({
                    menuWidth: 300,
                    edge: 'right',
                    closeOnClick: true,
                    draggable: true
                }
            );
        });
        // 手风琴
        // $(".coll_body").eq(0).show();
        $(".Collapsing").click(function(){
            $(this).next(".coll_body").slideToggle(500).siblings(".coll_body").slideUp(500);
        });
    })(jQuery);
</script>
<header>
    <div id="name_box_w">
        <!--电脑显示 -->
        <div class="hide-on-med-and-down" style="position: fixed;width: 100%;background-color: #fff;">
            <div class="Top">
                <div class="header">
                    <div class="left">欢迎访问安阳市妇幼保健院官网！</div>
                    <div class="right">
                        <a href="#" class="left">加入收藏</a>
                        <a href="#" class="left jiange">联系我们</a>
                        <a href="#" class="left jiange">办公室OA系统</a>
                        <div class="left weixin jiange">官方微信
                            <div class="wximg"><i class="sanjiao"></i><img src="__index__/image/erweima.png" alt="官方微信"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <ul class="clearfix">
                    <li class="nav">
                        <a href="/" class="O-nav">首页</a>
                    </li>
                    <li class="nav">
                        <a href="<?php echo url('index/doctor/lst'); ?>" class="O-nav">专家介绍</a>
                    </li>
                    <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($cate['pid'] == 0 && $cate['show_nav'] == 1): ?>
                    <li class="nav">

                        <a href="<?php echo url('index/cate/index',array('id'=>$cate['id'])); ?>" class="O-nav"><?php echo $cate['cate_name']; ?></a>

                        <?php if($cate['children']): ?>
                        <ul class="nav-2">
                            <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateChild): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo url('index/cate/index',array('id'=>$cateChild['id'])); ?>" class="omit"><?php echo $cateChild['cate_name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="hide-on-med-and-down" style="height: 100px"></div>
        <!-- 手机显示 -->
        <div class="hide-on-large-only tou">
            <div class="Name">安阳市妇幼保健院</div>
            <div id="top_icon">
                <a class="button-collapse waves-effect waves-light" data-activates="slide-out" id="menu_open">
                    <i class="samll material-icons" style="color: #212020;">menu</i>
                </a>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</header>
    <!--电脑轮播-->
    <div class="swiper-container demo1">
        <div class="swiper-wrapper">
            <a class="swiper-slide">
                <img src="__index__/image/banner(1).png" alt="" class="hide-on-small-only" />
            </a>
            <a class="swiper-slide">
                <img src="__index__/image/banner(2).png" alt="" class="hide-on-small-only" />
            </a>
            <a class="swiper-slide">
                <img src="__index__/image/banner(3).png" alt="" class="hide-on-small-only" />
            </a>
        </div>
        <div class="swiper-pagination"></div>
        <!--&lt;!&ndash; Add Arrows &ndash;&gt;-->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!--手机轮播-->
    <div class="swiper-container demo2">
        <div class="swiper-wrapper">
            <a class="swiper-slide" title="">
                <img src="__index__/image/banner(1).png" alt="" class="hide-on-med-and-up" />
            </a>
            <a class="swiper-slide" title="">
                <img src="__index__/image/banner(2).png" alt="" class="hide-on-med-and-up" />
            </a>
            <a class="swiper-slide" title="">
                <img src="__index__/image/banner(3).png" alt="" class="hide-on-med-and-up" />
            </a>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!--导航栏-->
    <!--<div class="hide-on-med-and-down">-->
    <div>
        <div class="daohang">
            <a class="lanmu">
                <div class="correct"><i class="icon-01"></i><span>预约挂号</span></div>
                <div class="opposite"><i class="icon-1"></i><span>预约挂号</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-02"></i><span>联系我们</span></div>
                <div class="opposite"><i class="icon-2"></i><span>联系我们</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-03"></i><span>门诊就诊指南</span></div>
                <div class="opposite"><i class="icon-3"></i><span>门诊就诊指南</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-04"></i><span>住院就诊指南</span></div>
                <div class="opposite"><i class="icon-4"></i><span>住院就诊指南</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-05"></i><span>内网登录</span></div>
                <div class="opposite"><i class="icon-5"></i><span>内网登录</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-06"></i><span>院长信箱</span></div>
                <div class="opposite"><i class="icon-6"></i><span>院长信箱</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-07"></i><span>农合医保</span></div>
                <div class="opposite"><i class="icon-7"></i><span>农合医保</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-08"></i><span>院区分布</span></div>
                <div class="opposite"><i class="icon-8"></i><span>院区分布</span></div>
            </a>
            <a class="lanmu">
                <div class="correct"><i class="icon-09"></i><span>资料下载</span></div>
                <div class="opposite"><i class="icon-9"></i><span>资料下载</span></div>
            </a>
        </div>
    </div>
    <!--广告通知-->
    <div class="tab hide-on-small-only wow bounceIn">
        <ul class="tab-nav">
            <li class="actived"> <a href="javascript:;">新闻资讯</a> </li>
            <li> <a href="javascript:;">通知公告</a> </li>
        </ul>
        <div class="content-wrap clearfix">
            <div class="content-item current">
<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
               <a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>" class="tu4">
                    <div style="background: url('/static/uploads/<?php echo $vo['thumb']; ?>') no-repeat center center;background-size: cover;"></div>
                    <p class="omit"><?php echo $vo['title']; ?></p>
                   <span>查看详情</span>
                </a>
<?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<p class="clearfix"></p>-->
                <div class="CK"><a href="<?php echo url('index/cate/index',array('id'=>28)); ?>">查看更多</a></div>
            </div>
            <div class="content-item">
                <div class="tonggao">
                    <div class="Zbox">
                        <div>
                            <div class="Znews">
                                <?php if(is_array($tnotice) || $tnotice instanceof \think\Collection || $tnotice instanceof \think\Paginator): $i = 0; $__LIST__ = $tnotice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="Ztime">
                                    <p class="Zday"><?php echo date('d',$vo['addtime']); ?></p>
                                    <p class="Zdays"><?php echo date('Y/m',$vo['addtime']); ?></p>
                                </div>

                                <div class="Zxin">
                                    <p class="Ztitle omit"><?php echo $vo['title']; ?></p>
                                    <p class="Zdeta"><?php echo $vo['description']; ?>...<a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>">查看详情</a></p>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <ul class="Zlist">
                                <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>

                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <a href="<?php echo url('index/cate/index',array('id'=>29)); ?>" class="Zgeng">查看更多公告</a>
                        </div>
                        <div class="Zimg">
                            <img src="__index__/image/tonggao.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--广告通知-手机-->
    <div class="wow bounceIn hide-on-large-only">
        <!--<div class="Rexpert-0">新闻资讯/通知公告</div>-->
        <div class="tab2 wow bounceIn">
            <ul class="tab-nav clearfix">
                <li class="actived"> <a href="javascript:;">新闻资讯</a> </li>
                <li> <a href="javascript:;">通知公告</a> </li>
            </ul>
            <div class="content-wrap clearfix">
                <div class="content-item current">
                    <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="#" class="Rxuan">
                        <img src="__index__/image/erweima.png" alt="">
                        <div>
                            <p><?php echo $vo['title']; ?></p>
                            <p class="omit2"><?php echo $vo['description']; ?></p>
                        </div>
                    </a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="content-item Rtong">
                    <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('/index/article/index',array('id'=>$vo['id'])); ?>" class="omit"><?php echo $vo['title']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--特色专科-->
    <div class="section wow bounceIn hide-on-med-and-down">
        <div class="SSS">
            <h1 class="Te">特色专科</h1>
            <div class="Departments clearfix">
                <a href="<?php echo url('index/article/index',array('id'=>44)); ?>"><i class="icon-r1"></i><p>儿内呼吸科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>45)); ?>"><i class="icon-r2"></i><p>新生儿科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>46)); ?>"><i class="icon-r3"></i><p>儿童神经康复科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>47)); ?>"><i class="icon-r4"></i><p>儿外科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>48)); ?>"><i class="icon-r5"></i><p>儿童重症监护室</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>49)); ?>"><i class="icon-r6"></i><p>生理产科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>50)); ?>"><i class="icon-r7"></i><p>病理产科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>51)); ?>"><i class="icon-r8"></i><p>妇科</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>52)); ?>"><i class="icon-r9"></i><p>产房</p></a>
                <a href="<?php echo url('index/article/index',array('id'=>53)); ?>"><i class="icon-r0"></i><p>妇产重症监护室</p></a>
            </div>
            <div class="CK2"><a href="<?php echo url('index/cate/index',array('id'=>19)); ?>">查看更多</a></div>
            <div class="Doctor"><img src="__index__/image/Doctor.png" alt=""></div>
        </div>
    </div>
    <!--特色专科-手机-->
    <div class="wow bounceIn hide-on-large-only ">
        <div class="Rexpert-0">特色专科</div>
        <div class="Rsection clearfix">
            <a href="<?php echo url('index/article/index',array('id'=>44)); ?>"><i class="icon-r1"></i><p>儿内呼吸科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>45)); ?>"><i class="icon-r2"></i><p>新生儿科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>46)); ?>"><i class="icon-r3"></i><p>儿童神经康复科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>47)); ?>"><i class="icon-r4"></i><p>儿外科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>48)); ?>"><i class="icon-r5"></i><p>儿童重症监护室</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>49)); ?>"><i class="icon-r6"></i><p>生理产科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>50)); ?>"><i class="icon-r7"></i><p>病理产科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>51)); ?>"><i class="icon-r8"></i><p>妇科</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>52)); ?>"><i class="icon-r9"></i><p>产房</p></a>
            <a href="<?php echo url('index/article/index',array('id'=>53)); ?>"><i class="icon-r0"></i><p>妇产重症监护室</p></a>
        </div>
    </div>
    <!--专家介绍-->
    <div class="wow bounceIn expert hide-on-med-and-down">
        <div class="SSS por">
            <h1 class="Jie">专家介绍</h1>
            <div class="expert-0">
                <ul class="expert-1" id="ykeshi">
                    <li class="XZ">儿内科</li>
                    <li>妇产科</li>
                    <li>乳腺科</li>
                    <li>生殖遗传</li>
                    <li>耳鼻喉科</li>
                    <li>保健部</li>
                    <li>儿外科</li>
                    <li>口腔科</li>
                    <li>医技辅助</li>
                    <li><a href="<?php echo url('index/doctor/lst'); ?>">更多专家 +</a></li>
                </ul>
                <div class="swiper-container demo3">
                    <div class="swiper-wrapper" id="yscon">

                     <!--   <a href="#" class="swiper-slide">
                            <img src="__index__/image/expert-1.png" alt="" class="" />
                            <p>李丽英(副主任医师)</p>
                        </a>-->

                    </div>
                    <!--<div class="swiper-pagination"></div>-->
                    <!--&lt;!&ndash; Add Arrows &ndash;&gt;-->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var ykeshi =0;
        $(function(){


            ykeshi = 0;

            var url="<?php echo url('index/yisheng'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    ykeshi:ykeshi,
                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(data){
                    console.log(data);
                    $('#yscon').empty().append(data);
                    aa();
                },
            })
        })
        $('#ykeshi li').click(function(){
            // $('#xcon').html('');
            ykeshi =  $(this).index();
            // console.log(ykeshi);
            var url="<?php echo url('index/yisheng'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    ykeshi:ykeshi,
                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(data){
                    console.log(data);
                    $('#yscon').empty().append(data);
                    aa();
                },
            })
        })
    </script>
    <!--专家介绍-手机-->
    <div class="wow bounceIn hide-on-large-only Rexpert">
        <div class="Rexpert-0">专家介绍</div>
        <div class="clearfix por">
            <ul class="Rexpert-1" id="mykeshi">
                <li class="XZ">儿内科</li>
                <li>妇产科</li>
                <li>乳腺科</li>
                <li>生殖遗传</li>
                <li>耳鼻喉科</li>
                <li>保健部</li>
                <li>儿外科</li>
                <li>口腔科</li>
                <li>医技辅助</li>
                <li><a href="<?php echo url('index/doctor/lst'); ?>">更多专家 +</a></li>
            </ul>
            <ul class="Rexpert-2" id="myxcon">

            </ul>
        </div>
    </div>
    <script>
        var mykeshi =0;
        $(function(){


            mykeshi = 0;

            var url="<?php echo url('index/myisheng'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    mykeshi:mykeshi,
                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(data){
                    console.log(data);
                    $('#myxcon').empty().append(data);
                    aa();
                },
            })
        })
        $('#mykeshi li').click(function(){
            // $('#xcon').html('');
            mykeshi =  $(this).index();
            // console.log(mykeshi);
            var url="<?php echo url('index/myisheng'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    mykeshi:mykeshi,
                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text
                success:function(data){
                    console.log(data);
                    $('#myxcon').empty().append(data);
                    aa();
                },
            })
        })
    </script>
    <!--专家坐诊-->
    <div class="wow bounceIn zuozhen hide-on-med-and-down">
        <div class="SSS por">
            <h1 class="Jie">专家坐诊</h1>
            <div class="zuozhen-0">
                <div class="zuozhen-3"></div>
                <ul class="zuozhen-1" id="keshi">
                    <li class="XZ">儿内科</li>
                    <li>妇产科</li>
                    <li>乳腺科</li>
                    <li>生殖遗传</li>
                    <li>耳鼻喉科</li>
                    <li>保健部</li>
                    <li>儿外科</li>
                    <li>口腔科</li>
                    <li>医技辅助</li>
                </ul>
                <div class="zuozhen-2">
                    <div class="Xline clearfix">
                        <p></p>
                        <p>周一</p>
                        <p>周二</p>
                        <p>周三</p>
                        <p>周四</p>
                        <p>周五</p>
                        <p>周六</p>
                        <p>周日</p>
                    </div>
                    <div class="clearfix">
                        <div class="Xlist">
                            <p>上午</p>
                            <p>下午</p>
                        </div>
                        <div class="Xyisheng" id="xcon">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var keshi =0;
        $(function(){
            console.log(keshi);
            keshi =  0
            var url="<?php echo url('index/reg'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    keshi:keshi,
                    age:22

                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text

                success:function(data){
                    // console.log(data);
                    $('#xcon').empty().append(data);


                },

            })
        })

        $('#keshi li').click(function(){
            // $('#xcon').html('');
            keshi =  $(this).index();
            var url="<?php echo url('index/reg'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    keshi:keshi,


                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text

                success:function(data){
                    // console.log(data);
                    $('#xcon').empty().append(data);


                },

            })
            // })

           })

    </script>
    <!--专家坐诊-手机-->
    <div class="wow bounceIn hide-on-large-only">
        <div class="Rexpert-0">专家坐诊</div>
        <div class="clearfix por">
            <ul class="Rexpert-1" id="mkeshi">
                <li class="XZ">儿内科</li>
                <li>妇产科</li>
                <li>乳腺科</li>
                <li>生殖遗传</li>
                <li>耳鼻喉科</li>
                <li>保健部</li>
                <li>儿外科</li>
                <li>口腔科</li>
                <li>医技辅助</li>
            </ul>
            <div class="Rzuozhen-2">
                <div class="Rzuozhen-line clearfix">
                    <p></p>
                    <p>上午</p>
                    <p>下午</p>
                </div>
                <div class="Rzuozhen-por">
                    <div class="Rzuozhen-list">
                        <p>周一</p>
                        <p>周二</p>
                        <p>周三</p>
                        <p>周四</p>
                        <p>周五</p>
                        <p>周六</p>
                        <p>周日</p>
                    </div>
                    <div class="RXyisheng" id="mxcon">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var mkeshi =0;
        $(function(){

            mkeshi =  0
            var url="<?php echo url('index/mreg'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    mkeshi:mkeshi,
                    age:22

                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text

                success:function(data){
                    // console.log(data);
                    $('#mxcon').empty().append(data);


                },

            })
        })

        $('#mkeshi li').click(function(){
            // $('#xcon').html('');
            mkeshi =  $(this).index();
            console.log(mkeshi);
            var url="<?php echo url('index/mreg'); ?>";
            $.ajax({
                url:url,
                type:'POST', //GET
                async:true,    //或false,是否异步
                data:{
                    mkeshi:mkeshi,


                },
                timeout:500,    //超时时间
                dataType:'json',    //返回的数据格式：json/xml/html/script/jsonp/text

                success:function(data){
                    // console.log(data);
                    $('#mxcon').empty().append(data);


                },

            })
            // })

        })

    </script>
    <!--宣传图-->
    <div class="wow bounceIn Leaflets hide-on-med-and-down">
        <div class="LeafletsImg">
            <!--1-->
            <div style="background: url(__index__/image/Leaflets-1.png) no-repeat center;background-size: cover;"><a href="<?php echo url('index/cate/index',array('id'=>39)); ?>" style="background-color: #FD4464;">健康教育 +</a></div>
            <!--8-->
            <div style="background-color: #768DFD">
                <ul class="leaflets-T">
                    <?php if(is_array($huhuan) || $huhuan instanceof \think\Collection || $huhuan instanceof \think\Paginator): $i = 0; $__LIST__ = $huhuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--3-->
            <div style="background: url(__index__/image/Leaflets-1.png) no-repeat center;background-size: cover;"><a href="<?php echo url('index/cate/index',array('id'=>40)); ?>" style="background-color: #F99E00;">医护园地 +</a></div>
            <!--10-->
            <div style="background-color: #A970FB">
                <ul class="leaflets-T">
                    <?php if(is_array($jiedu) || $jiedu instanceof \think\Collection || $jiedu instanceof \think\Paginator): $i = 0; $__LIST__ = $jiedu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--5-->
            <div style="background: url(__index__/image/Leaflets-1.png) no-repeat center;background-size: cover;"><a href="<?php echo url('index/cate/index',array('id'=>41)); ?>" style="background-color: #17BF84;">学科建设 +</a></div>
            <!--2-->
            <div style="background-color: #FD4464">
                <ul class="leaflets-T">
                    <?php if(is_array($jiankang) || $jiankang instanceof \think\Collection || $jiankang instanceof \think\Paginator): $i = 0; $__LIST__ = $jiankang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--7-->
            <div style="background: url(__index__/image/Leaflets-1.png) no-repeat center;background-size: cover;"><a href="<?php echo url('index/cate/index',array('id'=>42)); ?>" style="background-color: #768DFD;">护患心声 +</a></div>
            <!--4-->
            <div style="background-color: #F99E00">
                <ul class="leaflets-T">
                    <?php if(is_array($yihu) || $yihu instanceof \think\Collection || $yihu instanceof \think\Paginator): $i = 0; $__LIST__ = $yihu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--9-->
            <div style="background: url(__index__/image/Leaflets-1.png) no-repeat center;background-size: cover;"><a href="<?php echo url('index/cate/index',array('id'=>43)); ?>" style="background-color: #A970FB;">政策解读 +</a></div>
            <!--6-->
            <div style="background-color: #17BF84">
                <ul class="leaflets-T">
                    <?php if(is_array($xueke) || $xueke instanceof \think\Collection || $xueke instanceof \think\Paginator): $i = 0; $__LIST__ = $xueke;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('index/article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="LeafletsTxt">
            <a href="<?php echo url('index/cate/index',array('id'=>45)); ?>">
                <img src="__index__/image/LeafletsTxt-1.png" alt=""><p>院报在线阅读</p>
            </a>
            <a href="<?php echo url('index/cate/index',array('id'=>45)); ?>">
                <img src="__index__/image/LeafletsTxt-2.png" alt=""><p>院报在线阅读</p>
            </a>
            <a href="<?php echo url('index/cate/index',array('id'=>45)); ?>">
                <img src="__index__/image/LeafletsTxt-3.png" alt=""><p>院报在线阅读</p>
            </a>
        </div>
    </div>
<!--底部导航栏-->
<div class="BottomBar hide-on-med-and-down">
    <div class="bar">
        <div class="clearfix">
            <a href="/">首页</a>
            <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($cate['pid'] == 0 && $cate['show_nav'] == 1): ?>
            <a href="<?php echo url('index/cate/index',array('id'=>$cate['id'])); ?>"><?php echo $cate['cate_name']; ?></a>

            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="BottomBar-1">
        <div class="BottomXin">
            <div><img src="__index__/image/erweima.png" alt=""></div>
            <ul>
                <li>地址:河南省安阳市解放大道92号</li>
                <li>联系电话:0372-3285209</li>
                <li>乘车路线:市内可乘1路、11路、37路、38路公交到达</li>
                <li>友情链接:趣医网安阳市妇幼保健院</li>
                <li>豫ICP备13018883号</li>
            </ul>
        </div>
        <div class="BottomMing">
            <div>服务声明：本网站旨在提供医患互动交流平台，问题回答结果建议性内容，不能作为诊断医疗的依据！</div>
            <div>上班时间：    上午8:00~12：00 下午14:30~17:30    急诊科实行全年24小时开放就诊（节假日正常）</div>
        </div>
    </div>
    <div class="Copyright">Copyright(C) 2014 All Rights Reserved www.ayfy.com.cn 版权所有 严禁转载！技术支持：河南相映红信息技术有限公司</div>
</div>
<div class="hide-on-large-only RBottom">
    <!--<div class="RBottom">-->
    <div class="RBottom-img"><img src="__index__/image/erweima.png" alt=""></div>
    <ul>
        <li>地址:河南省安阳市解放大道92号</li>
        <li>联系电话:0372-3285209</li>
        <li>乘车路线:市内可乘1路、11路、37路、38路公交到达</li>
        <li>友情链接:趣医网安阳市妇幼保健院</li>
        <li>豫ICP备13018883号</li>
    </ul>
    <!--</div>-->
</div>
<script src="__index__/js/swiper.js"></script>
<script>
    // <!--swiper 轮播 -->
    var swiper1 = new Swiper('.demo1', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiper2 = new Swiper('.demo2', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
    // $(function(){
    function  aa() {
        var swiper3 = new Swiper('.demo3', {
            slidesPerView : 5,
            spaceBetween : 10,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    }
    // })
</script>
<!--导航栏翻转-->
<script>
    $(function(){
        $(".lanmu").hover(function(){
            $(this).find(".correct").removeClass("test");
            $(this).find(".opposite").removeClass('test2');
            $(this).find(".correct").addClass("test2");
            $(this).find(".opposite").addClass('test');
        },function(){
            $(this).find(".correct").removeClass("test2");
            $(this).find(".opposite").removeClass("test");
            $(this).find(".correct").addClass("test");
            $(this).find(".opposite").addClass('test2');
        });
        aa();
    });
</script>
<!--tab切换-->
<script>
    $(window).ready(function() {
        $('.tab').tabChange({
            name: '.tab',
            invoke: 0,
            behavior: 'click',
            effect:'fade'
        });
        $('.tab2').tabChange({
            name: '.tab2',
            invoke: 0,
            behavior: 'click',
            effect:'fade'
        });
    })
</script>
<!--XZ样式-->
<script>
    $('.expert-1 li,.zuozhen-1 li,.Rexpert-1 li').click(function(){
        $(this).addClass('XZ').siblings().removeClass('XZ');
    })
</script>
</body>
</html>