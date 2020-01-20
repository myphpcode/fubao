<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\php\wamp\www\fubao\public/../application/admin\view\doctor\edit.htm";i:1551322744;s:69:"D:\php\wamp\www\fubao\public/../application/admin\view\common\top.htm";i:1517578989;s:70:"D:\php\wamp\www\fubao\public/../application/admin\view\common\left.htm";i:1551858471;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>河南相映红</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__admin__/style/bootstrap.css" rel="stylesheet">
    <link href="__admin__/style/font-awesome.css" rel="stylesheet">
    <link href="__admin__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__admin__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__admin__/style/demo.css" rel="stylesheet">
    <link href="__admin__/style/typicons.css" rel="stylesheet">
    <link href="__admin__/style/animate.css" rel="stylesheet">
    <script src="__plus__/ueditor/ueditor.config.js"></script>
    <script src="__plus__/ueditor/ueditor.all.min.js"></script>
    <script src="__plus__/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__admin__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__admin__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <li>
                            <a href="<?php echo url('Index/clearCache'); ?>" class="login-area dropdown-toggle">
                                <section>
                                    <h2><span class="profile"><span><i class="menu-icon fa fa-trash-o">&nbsp;&nbsp;</i>清空缓存</span></span></h2>
                                </section>
                            </a>
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

    <!-- /头部 -->
    
    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->








                    <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">文章模块</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('Cate/lst'); ?>">
                                <span class="menu-text">文章分类</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('Article/lst'); ?>">
                                <span class="menu-text">文章管理</span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">医生管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Doctor/lst'); ?>">
                                    <span class="menu-text">医生列表</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Doctor/add'); ?>">
                                    <span class="menu-text">医生添加</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">医院概况</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('AboutUs/edit',['id'=>1]); ?>">
                                    <span class="menu-text">医院简介</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AboutUs/edit',['id'=>2]); ?>">
                                    <span class="menu-text">现任领导</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AboutUs/edit',['id'=>3]); ?>">
                                    <span class="menu-text">联系我们</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>





                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">医生管理</a>
                    </li>
                                        <li class="active">修改医生</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改医生</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $arts['id']; ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">姓名</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" value="<?php echo $arts['name']; ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">职称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="ranks" value="<?php echo $arts['ranks']; ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">科室</label>
                            <div class="col-sm-6">
                                <select name="department">
                                    <option value="">请选择</option>


                                    <option <?php if($arts['department']  == 1): ?> selected="selected" <?php endif; ?> value="1" >儿内科</option>
                                    <option <?php if($arts['department']  == 2): ?> selected="selected" <?php endif; ?> value="2">妇产科</option>
                                    <option <?php if($arts['department']  == 3): ?> selected="selected" <?php endif; ?> value="3">乳腺科</option>
                                    <option <?php if($arts['department']  == 4): ?> selected="selected" <?php endif; ?> value="4">生殖遗传</option>
                                    <option <?php if($arts['department']  == 5): ?> selected="selected" <?php endif; ?> value="5">耳鼻喉科</option>
                                    <option <?php if($arts['department']  == 6): ?> selected="selected" <?php endif; ?> value="6">保健部</option>
                                    <option <?php if($arts['department']  == 7): ?> selected="selected" <?php endif; ?> value="7">儿外科</option>
                                    <option <?php if($arts['department']  == 8): ?> selected="selected" <?php endif; ?>  value="8">口腔科</option>
                                    <option <?php if($arts['department']  == 9): ?> selected="selected" <?php endif; ?> value="9">医技辅助</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">简介</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="intro"><?php echo $arts['intro']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">擅长</label>
                            <div class="col-sm-6">

                                <textarea class="form-control" name="skilled"><?php echo $arts['skilled']; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">排班表</label>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <?php if(is_array($sarr) || $sarr instanceof \think\Collection || $sarr instanceof \think\Paginator): if( count($sarr)==0 ) : echo "" ;else: foreach($sarr as $k=>$vo): ?>

                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" <?php if(in_array($vo,$schedule)): ?>checked="checked"<?php endif; ?> value="<?php echo $vo; ?>" class="colored-blue">
                                        <span class="text"><?php switch((int)($k/2)): case "0": ?>周日<?php break; case "1": ?>周一<?php break; case "2": ?>周二<?php break; case "3": ?>周三<?php break; case "4": ?>周四<?php break; case "5": ?>周五<?php break; case "6": ?>周六<?php break; endswitch; if($k%2 == 0): ?>上午<?php else: ?>下午<?php endif; ?></span>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>


                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="pic_url" type="file">
                                <?php if($arts['pic_url']): ?>
                                    <img src="__uploads__/<?php echo $arts['pic_url']; ?>" height="30">
                                <?php else: ?>
                                    暂无缩略图
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

        <!--Basic Scripts-->
    <script src="__admin__/style/jquery_002.js"></script>
    <script src="__admin__/style/bootstrap.js"></script>
    <script src="__admin__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__admin__/style/beyond.js"></script>
    <script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    </script>


</body></html>