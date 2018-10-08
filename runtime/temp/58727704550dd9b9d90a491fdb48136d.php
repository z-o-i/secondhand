<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\buycar\index.html";i:1538966127;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>Azoiz</title>
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
    img{
        width:150px;
        height:150px;
    }
    a{
        text-decoration: none;
        color: black;
    }
    footer{
        margin-left: 900px;
        margin-bottom: 30px;
    }
</style>
<script>
    function buy(){
        document.forms.buy.action="/secondhand/buy/gwc";
        document.forms.buy.submit();
    }
</script>

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
                <div class="col-md-12 col-sm-12">
                    <div>
                        <table>
                            <tr>
                                <!-- <td>全选</td> -->
                                <td>商品</td>
                                <td>单价</td>
                                <td>数量</td>
                                <td>库存</td>
                                <!-- <td>操作</td> -->
                            </tr>
                            <?php if(is_array($buycar) || $buycar instanceof \think\Collection || $buycar instanceof \think\Paginator): $i = 0; $__LIST__ = $buycar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$buycar): $mod = ($i % 2 );++$i;?>
                            <form method="post" id="buy">
                                <tr>
                                    <!-- <td><input type="checkbox"></td> -->
                                    <td><img src="<?php echo $buycar['image']; ?>" alt="<?php echo $buycar['name']; ?>"><?php echo $buycar['name']; ?></td>
                                    <td><?php echo $buycar['price']; ?></td>
                                    <td>
                                        <a href="/secondhand/buycar/reduce?cid=<?php echo $buycar['id']; ?>&&?cnum=<?php echo $buycar['num']; ?>&&gnum=<?php echo $buycar['gnum']; ?>"><input type="button" value="-" onclick="reduce()"></a>
                                        <input name="num" type="text" value="<?php echo $buycar['num']; ?>" style="width:30px">
                                        <a href="/secondhand/buycar/add?cid=<?php echo $buycar['id']; ?>&&?cnum=<?php echo $buycar['num']; ?>&&gnum=<?php echo $buycar['gnum']; ?>"><input type="button" value="+" ></a>
                                    </td>
                                    <td id="gnum"><?php echo $buycar['gnum']; ?></td>
                                    <!-- <td><a href="/secondhand/buycar/delete?id=<?php echo $buycar['id']; ?>">删除</a></td> -->
                                    <input type="hidden" value="<?php echo $buycar['id']; ?>" name="id">
                                </tr>
                            </form>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>共<?php echo $c; ?>样商品</p>
        <p>总价：<?php echo $price; ?></p>
        <input type="submit" value="立即结算" onclick="buy()" />
        <a href="/secondhand/buycar/clear"><input type="submit" value="清空购物车"></a>
    </footer>
    <div class="footer">
        <div class="container">
            <ul class="pull-left footer-menu">
                <li>
                    <a href="#"> Home </a>
                    <a href="#"> About us </a>
                    <a href="#"> Contact us </a>
                </li>
            </ul>
            <ul class="pull-right footer-menu">
                <li>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">Azoiz</a></li>
            </ul>
        </div>
    </div>
</div>

    </body>		
</html>