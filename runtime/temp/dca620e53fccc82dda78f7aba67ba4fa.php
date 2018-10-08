<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\myrecord\index.html";i:1538797429;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>
订单详情
</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <!-- Essential styles -->
        <link rel="stylesheet" href="/static/assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="/static/assets/plugins/font-awesome/css/font-awesome.css" type="text/css"> 

        <!-- Dlapak styles -->
        <link id="theme_style" type="text/css" href="/static/assets/css/style1.css" rel="stylesheet" media="screen">

        <!-- Assets -->
        <link rel="stylesheet" href="/static/assets/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/static/assets/plugins/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="/static/assets/plugins/flexslider/flexslider.css" type="text/css" media="screen" />

        <!-- JS Library -->
        <script src="/static/assets/js/jquery.js"></script>
        <script class="resources library" src="/static/js/area.js" type="text/javascript"></script>

    	
        <script>
            var Gid  = document.getElementById ;
            var showArea = function(){
                Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                    Gid('s_city').value + " - 县/区" +
                    Gid('s_county').value + "</h3>"
            };
            Gid('s_county').setAttribute('onchange','showArea()');
        </script>
    	
    	
<style>
    table{
        border-collapse: separate;
        border-spacing: 20px;
    }
    td{
        padding: 0.3em 1em;
    }
</style>

    </head>
    <body>
    	
    	<div class="wrapper">
            <header class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/secondhand/index/index" class="navbar-brand"><span class="logo"><i class="fa fa-recycle"></i> Azoiz</span></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="new-ads"><a href="#" class="btn btn-ads btn-block">建议</a></li>
                            <?php if(session('loginId')){  ?>
                            <li><a href="/secondhand/login/logout">注销</a></li>
                            <?php }else{  ?>
                            <li><a href="/secondhand/register/index">注册</a></li>
                            <?php }  ?>
                            <li><a href="/secondhand/buycar/index">购物车</a></li>
                            <li><a href="/secondhand/myrecord/index">我的订单</a></li>
                            <li><a href="/secondhand/sell/index">出售商品</a></li>
                            <?php if(session('loginId')){  ?>
                            <li><a href="/secondhand/personal/index"><?php echo \think\Session::get('loginId'); ?></a></li>
                            <?php }else{  ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> <strong class="caret"></strong>&nbsp;</a>
                                <div class="dropdown-menu dropdown-login" style="padding:15px;min-width:250px">
                                    <form action="/secondhand/login/checkLogin">                       
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="fa fa-user"></i></span>
                                                <input type="text" placeholder="用户名" required="required" class="form-control input-login"  name="user_nickname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="addon fa fa-lock"></i></span>
                                                <input type="password" placeholder="密码" required="required" class="form-control input-login"  name="user_pwd">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="checkbox">
                                                <label class="string optional" for="user_remember_me">
                                                    <input type="checkbox" id="user_remember_me" style="">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div> -->
                                        <input type="submit" class="btn btn-custom btn-block" value="Sign In">
                                        <!-- <a href="#" class="btn-block text-center">Forgot password?</a> -->
                                    </form>                                    
                                </div>
                            </li>
                            <?php }  ?>
                        </ul>
                    </div>
                </div>
            </header>
    	
        
    <section class="main">
        <div class="container">
            <div class="row">
                <div>
                    <table>
                        <form>
                            <tr>
                                <td>商品名称：</td>
                                <td>商品数量：</td>
                                <td>商品价格：</td>
                                <td>卖家昵称：</td>
                                <td>发货地址：</td>
                                <td>买家昵称：</td>
                                <td>收货地址</td>
                            </tr>
                            <?php if(is_array($record) || $record instanceof \think\Collection || $record instanceof \think\Paginator): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><?php echo $a['goods_name']; ?></td>
                                <td><?php echo $a['goods_amount']; ?></td>
                                <td><?php echo $a['goods_toprice']; ?></td>
                                <td><?php echo $a['owner_name']; ?></td>

                                <?php if($find[0]==$find[1]){  ?>
                                <td><?php echo $find[1]; ?> <?php echo $find[2]; ?></td>
                                <?php }else{  ?>
                                <td><?php echo $find[0]; ?> <?php echo $find[1]; ?></td>
                                <?php }  ?>


                                <td><?php echo $a['customer_name']; ?></td>
                                <?php if($find2[0]==$find2[1]){  ?>
                                <td><?php echo $find2[1]; ?> <?php echo $find2[2]; ?></td>
                                <?php }else{  ?>
                                <td><?php echo $find2[0]; ?> <?php echo $find2[1]; ?></td>
                                <?php }  ?>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

    </body>		
</html>