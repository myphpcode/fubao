<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"F:\2019\fubao\public/../application/admin\view\doctor\add.htm";i:1550805705;s:61:"F:\2019\fubao\public/../application/admin\view\common\top.htm";i:1517578989;s:62:"F:\2019\fubao\public/../application/admin\view\common\left.htm";i:1550735405;}*/ ?>
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
                                        <li class="active">添加医生</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增医生</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">姓名</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">职称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="ranks" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">科室</label>
                            <div class="col-sm-6">
                                <select name="department">
                                    <option value="">请选择</option>

                                    <option value="1">儿内科</option>
                                    <option value="2">妇产科</option>
                                    <option value="3">乳腺科</option>
                                    <option value="4">生殖遗传</option>
                                    <option value="5">耳鼻喉科</option>
                                    <option value="6">保健部</option>
                                    <option value="7">儿外科</option>
                                    <option value="8">口腔科</option>
                                    <option value="9">医技辅助</option>
                                </select>
                            </div>
                        </div>
                      <!--  <div class="form-group">
                        <label for="username" class="col-sm-2 control-label no-padding-right">置顶</label>
                        <div class="col-sm-6">
                            <div class="radio" style="float:left; padding-right:10px;">
                                <label>
                                    <input name="show_top" value="1" class="colored-blue" type="radio">
                                    <span class="text">是</span>
                                </label>
                            </div>
                            <div class="radio" style="float:left;">
                                <label>
                                    <input name="show_top" value="0" checked="checked" class="colored-blue" type="radio">
                                    <span class="text">否</span>
                                </label>
                            </div>
                        </div>
                    </div> -->

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">简介</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="intro"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">擅长</label>
                            <div class="col-sm-6">

                                <textarea class="form-control" name="skilled"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">排班表</label>
                            <div class="col-sm-6">
                                <div class="checkbox">

                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="00a" class="colored-blue">
                                        <span class="text">周日上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="00b" class="colored-blue">
                                        <span class="text">周日下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="01a" class="colored-blue">
                                        <span class="text">周一上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="01b" class="colored-blue">
                                        <span class="text">周一下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="02a" class="colored-blue">
                                        <span class="text">周二上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="02b" class="colored-blue">
                                        <span class="text">周二下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="03a" class="colored-blue">
                                        <span class="text">周三上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="03b" class="colored-blue">
                                        <span class="text">周三下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="04a" class="colored-blue">
                                        <span class="text">周四上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="04b" class="colored-blue">
                                        <span class="text">周四下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="05a" class="colored-blue">
                                        <span class="text">周五上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="05b" class="colored-blue">
                                        <span class="text">周五下午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="06a" class="colored-blue">
                                        <span class="text">周六上午</span>
                                    </label>
                                    <label style="margin-right:15px;">
                                        <input type="checkbox" name="schedule[]" value="06b" class="colored-blue">
                                        <span class="text">周六下午</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="pic_url" type="file">
                            </div>
                        </div>
                     <!--   <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea id="content" name="content"></textarea>
                            </div>
                        </div> -->
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

    <!-- toolbars: [['fullscreen', 'source', 'undo', 'redo','bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','selectall', 'cleardoc']] -->


</body></html>