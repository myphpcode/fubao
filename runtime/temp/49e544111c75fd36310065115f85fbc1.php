<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"F:\2019\fubao\public/../application/index\view\article\index.htm";i:1551664958;s:62:"F:\2019\fubao\public/../application/index\view\common\head.htm";i:1551685050;s:63:"F:\2019\fubao\public/../application/index\view\common\right.htm";i:1551668460;s:64:"F:\2019\fubao\public/../application/index\view\common\footer.htm";i:1551509804;}*/ ?>
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
<div class="Wwhole"><img src="__index__/image/Wwhole.jpg" alt=""></div>
<div class="Wbox por container">
    <div class="row">
        <div class="Wtab wow bounceIn col s12 m12 l9 xl10">
            <ul class="clearfix">
                <li class="actived"><?php echo $cname; ?></li>

            </ul>
            <div class="content-wrap PPbox">
             <?php echo $arts['content']; ?>
            </div>
        </div>
    </div>
    <!--右侧-->
    <div class="WF hide-on-med-and-down wow bounceIn">
    <div class="WFimg"><img src="__index__/image/WF-1.png" alt=""></div>
    <a href="<?php echo url('index/cate/index','id=19'); ?>" class="Wa1"><i class="WFicon1"></i><p>特色专科</p></a>
    <a href="<?php echo url('index/doctor/lst'); ?>"><i class="WFicon2"></i><p>专家介绍</p></a>
    <a href="#"><i class="WFicon3"></i><p>预约挂号</p></a>
    <a href="#"><i class="WFicon4"></i><p>联系我们</p></a>
    <div class="WFer"><img src="__index__/image/erweima.png" alt=""></div>
</div>
</div>

<!--底部导航栏-->
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