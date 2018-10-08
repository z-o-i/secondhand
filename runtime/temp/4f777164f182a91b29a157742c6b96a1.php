<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\product\buycar.html";i:1535619063;s:73:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\layout.html";i:1534656584;}*/ ?>
<!DOCTYPE HTML>

<html lang="zh-CN">
<head>
	<title>
商品
</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script src="/static/bootstrap-3.3.7-dist/js/jquery.min.js" ></script>
    <script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script class="resources library" src="/static/js/area.js" type="text/javascript"></script>
	
<script>
</script>

	
<style>
    body{
        padding-top:100px;
    }
    .user{
        display: flex;
        width: 600px;
        border: 1px solid ;
        justify-content: space-around;
        margin-bottom: 20px;
    }
    .product{
        width: 1200px;
        border: 1px solid ;
        display: flex;
        justify-content: space-between;
    }
    .describe{
        border: 1px solid ;
        justify-content: space-between;
        flex-wrap: wrap;
        width: 500px;
    }
    table{
        border-collapse:separate; border-spacing:30px;
    }
    .title{
        font-size: 24px;
        font-family: 黑体;
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
    <div class="sell">
        <div class="user">
            <div class="name">
                <span>卖家：</span>
                <span><?php echo $goods['goods_owner']; ?></span>
            </div>
            <div class="time">
                <span>最近编辑时间：</span>
                <span>2018-08-01</span>
                <span>12:25:37</span>
            </div>
        </div>
        <div class="product">
            <div class="pic">
                <img src ="../../<?php echo $goods['goods_img']; ?>" title="<?php echo $goods['goods_name']; ?>" width="600px" height="600px">
            </div>
            <div class="describe">
                <iframe name=my style='display:none'></iframe>
                <form action="/secondhand/product/buycar" method="post" target=my>
                    <table>
                        <tr>
                            <td><text class="title"><?php echo $goods['goods_name']; ?></text></td>
                        </tr>
                        <tr>
                            <td>二手价：</td>
                            <td><?php echo $goods['goods_price']; ?></td>
                        </tr>
                        <tr>
                            <td>质量：</td>
                            <td><?php echo $goods['goods_quality']; ?></td>
                        </tr>
                        <tr>
                            <td>所在地：</td>
                            <td><?php echo $find[0]; ?></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="加入购物车"></td>
                            <td><input type="button" value="立即购买"></td>
                        </tr>
                        <input type="hidden" id="id" name="id" value="<?php echo $goods['id']; ?>"/>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="detail">
        <p class="title">商品介绍</p>
        <text><?php echo $goods['goods_introduce']; ?></text>
    </div>
</div>

</body>		
</html>