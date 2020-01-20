<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\php\wamp\www\fubao\public/../application/admin\view\login\index.htm";i:1552043248;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0, maximum-scale=1,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>河南相映红后台登陆</title>
    <style>
        html,body{height: 100%;}
        html{font-size: 100px;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;}
        body{font-size: 14px;font-weight: 400;font-family: "Helvetica Neue", Helvetica, "Hiragino Sans GB","Microsoft YaHei",Arial, sans-serif;line-height: 1.5;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: 100%;color: #333;margin: 0 auto;}
        input,select,textarea,button{outline: 0;border: 0;background: none;vertical-align: middle;}
        input[type="radio"],input[type="checkbox"]{margin: 0;padding: 0;}
        /*============图标=============*/
        [class*="icon"]{display: inline-block;vertical-align: middle;background-repeat: no-repeat;background-position: center;background-size: 100% 100%;}
        .icon-1{background-image: url("__admin__/images/3.png");width: 20px;height: 20px;flex: none;}
        .icon-2{background-image: url("__admin__/images/4.png");width: 20px;height: 20px;flex: none;}
        .icon-3{background-image: url("__admin__/images/5.png");width: 20px;height: 20px;flex: none;}
        .Hpor{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .Hba{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("__admin__/images/1.jpg") no-repeat center center;
            background-size: cover;
        }
        .Hbox{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 300px;
            height: auto;
            padding: 30px;
            border-radius: 6px;
            /*border: 1px solid #aaa;*/
            box-shadow: 0 0 6px #fff;
            background-color: rgba(255,255,255,.4);
        }
        .Hinp{
            height: 34px;
            display: flex;
            align-items: center;
            padding: 0 12px;
            border-radius: 6px;
            border: 1px solid #79BEFF;
            margin-bottom: 18px;
            overflow: hidden;
        }
        .Hinp input{
            flex: 1;
            height: 30px;
            margin-left: 10px;
        }
        .Hyan{
            height: 34px;
            display: flex;
            align-items: center;
            margin-bottom: 18px;
        }
        .Hyan div{
             height: 34px;
             display: flex;
             align-items: center;
             padding: 0 12px;
             border-radius: 6px;
             border: 1px solid #79BEFF;
             overflow: hidden;
         }
        .Hyan input{
            width: 70%;
            height: 30px;
            margin-left: 10px;
        }
        .Hyan p{
            margin-left: 16px;
            width: 66px;
            height: 34px;
            flex: none;
            background-color: #f00;
        }
        .Hdeng{
            display: block;
            width: 100%;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 8px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            background-color: #47A6FF;
            text-decoration: none;
            letter-spacing: 4px;
            outline: 0;
        }
        .Htxt{
            position: absolute;
            top: -55px;
            left: 0;
            right: 0;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #fff;
        }
        .Hban{
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: #3A5B7A;
        }
        .Hyan p img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="Hpor">
    <div class="Hba"></div>
    <div class="Hbox">
        <form method="post" action="<?php echo url(''); ?>">
        <div class="Htxt">河南相映红后台管理中心</div>
        <div class="Hinp">
            <i class="icon-1"></i> <input type="text" placeholder="请输入用户名" name="username">
        </div>
        <div class="Hinp">
            <i class="icon-2"></i> <input type="text" placeholder="请输入密码" name="password">
        </div>
        <div class="Hyan">
            <div><i class="icon-3"></i> <input type="text" placeholder="验证码" name="code"></div><p><?php echo captcha_img(); ?> </p>
        </div>
        <!--<a href="#" class="Hdeng">登录</a>-->
            <button type="submit" class="btn Hdeng">登录</button>
        </form>
    </div>
    <div class="Hban">河南相映红信息技术有限公司版权所属</div>
</div>
</body>
</html>