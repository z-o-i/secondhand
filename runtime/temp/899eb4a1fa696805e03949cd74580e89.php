<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\sell\index.html";i:1538960905;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>
出售商品
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
                <div class="col-md-8 col-sm-8 col-md-offset-2">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>Sell</h3>
                        </div>
                        <div class="widget-body">
                            <form action="/secondhand/sell/upload" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="商品名称：" id="goods_name" name="goods_name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="商品数量：" id="goods_amount" name="goods_amount">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="商品价格：" id="goods_price" name="goods_price">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="商品质量：" id="goods_quality" name="goods_quality">
                                </div>
                                <div class="form-group">
                                    <span>商品分类：</span>
                                    <select id="type" name="goods_type" class="form-control input-lg">
                                        <option value="1">小卡卡贴</option>
                                        <option value="2">专辑海报</option>
                                        <option value="3">明信写真</option>
                                        <option value="4">衣服配饰</option>
                                        <option value="5">限量定制</option>
                                        <option value="6">其它周边</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="商品简介：" id="goods_introduce" name="goods_introduce">
                                </div>
                                <div class="form-group">
                                    <span>图片上传：</span>
                                    <input type="file" name="image[]" id=""/>
                                    <input type="file" name="image[]" id=""/>
                                    <input type="file" name="image[]" id=""/>
                                </div>
                                <input type="hidden" id="goods_owner" name="goods_owner" value="<?php echo \think\Session::get('loginId'); ?>"/>
                                <div class="form-group">
                                    <button class="btn btn-block btn-custom">Sell</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    </body>		
</html>