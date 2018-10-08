<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\buy\buy.html";i:1537182477;s:73:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\layout.html";i:1537499484;}*/ ?>
<!DOCTYPE HTML>
<html lang="zh-CN">
    <head>
    	<title>
结算
</title>
    	<meta charset="utf-8" />
    	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    	<script src="/static/bootstrap-3.3.7-dist/js/jquery.min.js" ></script>
        <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	<script class="resources library" src="/static/js/area.js" type="text/javascript"></script>
    	
<script>
    function add(){
        document.forms.buy.action="/secondhand/buy/add";
        document.forms.buy.submit();
    }
    function reduce(){
        document.forms.buy.action="/secondhand/buy/reduce";
        document.forms.buy.submit();
    }
    function buy(){
        document.forms.buy.action="/secondhand/buy/buynow";
        document.forms.buy.submit();
    }
</script>

    	
<style>
    body{
        padding-top:100px;
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
        <form method="post" id="buy" action="/secondhand/buy/buy">
            <table>
                    <tr>
                        <td><text class="title"><?php echo $goods['name']; ?></text></td>
                    </tr>
                    <tr>
                        <td>价格：</td>
                        <td><?php echo $goods['price']; ?></td>
                    </tr>
                    <tr>
                        <td>数量：</td>
                        <td>
                            <button class="glyphicon glyphicon-minus" onclick="reduce();"></button>
                            <?php echo $goods['num']; ?>
                            <button class="glyphicon glyphicon-plus" onclick="add();"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>总价：</td>
                        <td><?php echo $goods['toprice']; ?></td>
                    </tr>
                    <input type="hidden" id="gid" name="gid" value="<?php echo $goods['id']; ?>"/>
                    <tr>
                        <td><a href="/secondhand/buycar/index"><input type="button" value="返回"></a></td>
                        <td><input type="submit" value="确认购买" onclick="buy();"></td>
                    </tr>
            </table>
        </form>
    </div>
</div>

    </body>		
</html>