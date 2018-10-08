<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\index\index.html";i:1538961507;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
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
    	
        
        <section class="hero">
            <div class="container text-center">
                <h2 class="hero-title">Find an Awesome Things Here</h2>
                <p class="hero-description hidden-xs">Find all things you need on Azoiz. We give you a simple way.</p>
                <div class="row hero-search-box">
                    <form action="/secondhand/search/index" method="post">
                        <div class="col-md-6 col-sm-6 search-input">
                            <input type="text" class="form-control input-lg search-first" placeholder="I want to find..." name="searchkey">
                        </div>
                        <div class="col-md-6 col-sm-6 search-input">
                            <button class="btn btn-custom btn-block btn-lg" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=1"><i class="fa fa-picture-o shortcut-icon icon-blue"></i></a>
                                    <a href="/secondhand/search/category?searchkey=1"><h3>小卡卡贴</h3></a>
                                    <span class="total-items"><?php echo $c; ?></span>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=2"><i class="fa fa-gift shortcut-icon icon-green"></i></a>
                                    <a href="/secondhand/search/category?searchkey=2"><h3>专辑海报</h3></a>
                                    <span class="total-items"><?php echo $p; ?></span>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=3"><i class="fa fa-instagram shortcut-icon icon-brown"></i></a>
                                    <a href="/secondhand/search/category?searchkey=3"><h3>明信写真</h3></a>
                                    <span class="total-items"><?php echo $w; ?></span>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=4"><i class="fa fa-black-tie shortcut-icon icon-violet"></i></a>
                                    <a href="/secondhand/search/category?searchkey=4"><h3>衣服配饰</h3></a>
                                    <span class="total-items"><?php echo $cl; ?></span>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=5"><i class="fa fa-heart shortcut-icon icon-red"></i></a>
                                    <a href="/secondhand/search/category?searchkey=5"><h3>限量定制</h3></a>
                                    <span class="total-items"><?php echo $l; ?></span>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="shortcut">
                                    <a href="/secondhand/search/category?searchkey=6"><i class="fa fa-angellist shortcut-icon icon-orange"></i></a>
                                    <a href="/secondhand/search/category?searchkey=6"><h3>其余周边</h3></a>
                                    <span class="total-items"><?php echo $s; ?></span>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-header">
                                    <h2>Featured</h2>
                                </div>
                                <form action="/secondhand/product/add" method="post">
                                <div id="featured-products" class="owl-carousel owl-carousel-featured">
                                    <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($goods) ? array_slice($goods,0,6, true) : $goods->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-img-grid">
                                                    <img alt="" src="<?php echo $a['goods_img']; ?>" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="/secondhand/product/detail?id=<?php echo $a['id']; ?>"><h4><?php echo $a['goods_name']; ?></h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="#">Electronics</a> , <a href="#">Smartphone</a></li>
                                                        <li class="item-category"><i class="fa fa-bookmark"></i><?php echo $a['goods_quality']; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>¥ <?php echo $a['goods_price']; ?></h3>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <!-- <ul>
                                                            <li><button type="submit" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top"><i class="fa fa-shopping-cart"></i></button></li>
                                                        </ul> -->
                                                        <input type="hidden"  name="id" value="<?php echo $a['id']; ?>"/>
                                                        <input type="hidden" name="name" value="<?php echo $a['goods_name']; ?>"/>
                                                        <input type="hidden" name="price" value="<?php echo $a['goods_price']; ?>"/>
                                                        <input type="hidden" name="image" value="<?php echo $a['goods_img']; ?>"/>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="widget">
                            <div class="widget-header">
                                <h3>Quick Signup</h3>
                            </div>
                            <div class="widget-body">
                                <form action="/secondhand/register/checkRegister">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="nickName" id="user_nickname" name="user_nickname">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control input-lg" placeholder="Password" id="user_pwd" name="user_pwd">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="realName" id="user_realname" name="user_realname">
                                    </div>
                                    <div class="form-group">
                                        <select id="s_province" name="s_province" class="form-control" style="width: auto;display:inline;"></select>
                                        <select id="s_city" name="s_city" class="form-control" style="width: auto;display:inline;"></select>
                                        <select id="s_county" name="s_county" class="form-control" style="width: auto;display:inline;"></select>
                                        <script type="text/javascript">_init_area();</script>
                                        <input type="text" class="form-control input-lg" style="width: auto;display:inline;" id="user_address" name="user_address" placeholder="address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="phone" id="user_phone" name="user_phone">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label class="string optional" for="terms">
                                                <input type="checkbox" id="terms" style="">
                                                <a href="#">I Agree with Term and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-block btn-custom">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-header">
                                <h3>Trends</h3>
                            </div>
                            <div class="widget-body">
                                <ul class="trends">
                                    <li><a href="#">SuperJunior &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">EXO &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">Bigbang &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">TVXQ &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">李易峰 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">华晨宇 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    <li><a href="#">周杰伦 &nbsp;<span class="item-numbers">(242)</span></a></li>
                                    <li><a href="#">张杰 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="banner-widget">
                            <img src="http://placehold.it/600x275" alt="banner" class="img-responsive">
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <div class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-database"></i></span>
                            <div data-refresh-interval="100" data-speed="3000" data-to="7803" data-from="0" class="item-count">7803</div>
                            <span class="item-info">Items</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-user-plus"></i></span>
                            <div data-refresh-interval="50" data-speed="5000" data-to="427" data-from="0" class="item-count">427</div>
                            <span class="item-info">Sellers</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-map-marker"></i></span>
                            <div data-refresh-interval="80" data-speed="5000" data-to="639" data-from="0" class="item-count">639</div>
                            <span class="item-info">Locations</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-counter">
                            <span class="item-icon"><i class="fa fa-users"></i></span>
                            <div data-refresh-interval="80" data-speed="5000" data-to="1548" data-from="0" class="item-count">1548</div>
                            <span class="item-info">Members</span>
                        </div>
                    </div>
                </div>
            </div> <!-- / .counter -->
        </div>
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
    <!-- Essentials -->
        <script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/static/assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="/static/assets/plugins/counter/jquery.countTo.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // ===========Featured Owl Carousel============
                if ($(".owl-carousel-featured").length > 0) {
                    $(".owl-carousel-featured").owlCarousel({
                        items: 3,
                        lazyLoad: true,
                        pagination: true,
                        autoPlay: 5000,
                        stopOnHover: true
                    });
                }

                // ==================Counter====================
                $('.item-count').countTo({
                    formatter: function (value, options) {
                        return value.toFixed(options.decimals);
                    },
                    onUpdate: function (value) {
                        console.debug(this);
                    },
                    onComplete: function (value) {
                        console.debug(this);
                    }
                });
            });
        </script>
    
    </body>		
</html>