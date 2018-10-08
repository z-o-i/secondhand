<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\register\index.html";i:1537182389;s:73:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\layout.html";i:1537499484;}*/ ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
    <head>
    	<title>
注册
</title>
    	<meta charset="utf-8" />
    	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    	<script src="/static/bootstrap-3.3.7-dist/js/jquery.min.js" ></script>
        <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	<script class="resources library" src="/static/js/area.js" type="text/javascript"></script>
    	
        <script>
        	function myConfirm(){
        		return confirm('将要删除数据，是否继续？');
        	}
            var Gid  = document.getElementById ;
            var showArea = function(){
                Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                    Gid('s_city').value + " - 县/区" +
                    Gid('s_county').value + "</h3>"
            };
            Gid('s_county').setAttribute('onchange','showArea()');
        </script>
    	
    	
<style>
    body{
        padding-top:100px;
    }
    .register{
        border-spacing: 20px;
        border-collapse: separate;
    }
</style>

    </head>
    <body>
    	
    	<div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a href="/secondhand/index/index" class="navbar-brand nav-title">二手周边贩卖市场</a>-->
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <?php if(session('loginId')){  ?>
                        <li><a href="">当前登录用户：<?php echo \think\Session::get('loginId'); ?></a></li>
                        <li><a href="/secondhand/login/logout">注销</a></li>
                        <?php }else{  ?>
                        <li><a href="/secondhand/login/index">请登录</a></li>
                        <li><a href="/secondhand/register/index">现在注册</a></li>
                        <?php }  ?>
                        <li><a href="/secondhand/personal/index">个人中心</a></li>
                        <!--<li><a href="/secondhand/login/logout">注销[<?php echo \think\Session::get('loginId'); ?>]</a></li>-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/secondhand/index/index">首页</a></li>
                        <li><a href="/secondhand/buycar/index">购物车</a></li>
                        <li><a href="/secondhand/myrecord/index">我的订单</a></li>
                        <li><a href="/secondhand/sell/index">我要卖</a></li>
                        <!-- <li>当前登录用户：<?php echo \think\Request::instance()->session('loginId'); ?></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    	
        
    <div>
        <form action="/secondhand/register/checkRegister">
            <table class="register">
                <tr>
                    <td>用户：</td>
                    <td><input type="text" class="form-control" id="user_nickname" name="user_nickname" placeholder="请输入登录名"></td>
                </tr>
                <tr>
                    <td>密码：</td>
                    <td><input type="text" class="form-control" id="user_pwd" name="user_pwd" placeholder="请输入密码"></td>
                </tr>
                <tr>
                    <td>真实姓名：</td>
                    <td><input type="text" class="form-control" id="user_realname" name="user_realname" placeholder="请输入真实姓名"></td>
                </tr>
                <tr>
                    <td>地址：</td>
                    <td>
                        <select id="s_province" name="s_province" class="form-control" style="width: auto;display:inline;"></select>
                        <select id="s_city" name="s_city" class="form-control" style="width: auto;display:inline;"></select>
                        <select id="s_county" name="s_county" class="form-control" style="width: auto;display:inline;"></select>
                        <script type="text/javascript">_init_area();</script>
                        <input type="text" class="form-control" style="width: auto;display:inline;" id="user_address" name="user_address" placeholder="具体地址">
                    </td>
                </tr>
                <tr>
                    <td>联系方式：</td>
                    <td><input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="请输入联系方式"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default"><a href="/secondhand" style="text-decoration:none">返回</a></button></td>
                    <td><button type="submit" class="btn btn-primary">注册</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

    </body>		
</html>