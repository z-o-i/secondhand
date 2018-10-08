<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\file\index.html";i:1535961788;s:73:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\layout.html";i:1534656584;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
商品信息
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

    .searchNav{
        margin: 0 auto;
        width: 850px;
    }
    .searchValue{
        width: 800px;
    }
    .searchBtn{
        height:26px;
        width: auto;
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
                    <li><a href="/secondhand/record/index">我的订单</a></li>
                    <li><a href="/secondhand/sell/index">我要卖</a></li>
                    <!-- <li>当前登录用户：<?php echo \think\Request::instance()->session('loginId'); ?></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <form action="/secondhand/file/upload" enctype="multipart/form-data" method="post">
            <table>
                <tr>
                    <td>商品名称：</td>
                    <td><input type="text" id="goods_name" name="goods_name"/></td>
                </tr>
                <tr>
                    <td>上传图片：</td>
                    <td><input type="file" name="image[]" id=""/></td>
                    <td><input type="file" name="image[]" id=""/></td>
                    <td><input type="file" name="image[]" id=""/></td>
                </tr>

                <input type="hidden" id="goods_owner" name="goods_owner" value="<?php echo \think\Session::get('loginId'); ?>"/>

                <tr><td><input type="submit" value="上传" /></td></tr>
            </table>
        </form>
    </div>
</div>

</body>		
</html>