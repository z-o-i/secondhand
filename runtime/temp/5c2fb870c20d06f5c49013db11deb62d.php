<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\product\detail.html";i:1537922510;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
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
        function add(){
            document.forms.addgwc.action="/secondhand/product/add";
            document.forms.addgwc.submit();
        }
        function buy(){
            document.forms.addgwc.action="/secondhand/buy/index";
            document.forms.addgwc.submit();
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
                        <div class="col-md-12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="/secondhand/index/index">Home</a></li>
                                <li>Category</li>
                                <li>Detail Product</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" id="addgwc">
                                        <div class="post">
                                            <div class="post-price">
                                                ¥ <?php echo $goods['goods_price']; ?>
                                            </div>
                                            <div class="post-title">
                                                <h2><?php echo $goods['goods_name']; ?></h2>
                                            </div>
                                            <div class="post-meta">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i> 2 minutes ago</li>
                                                    <li><i class="fa fa-bars"></i> <a href="/secondhand/search/category?searchkey=<?php echo $typenum[0]['goods_type']; ?>"><?php echo $type[0]['type']; ?></a></li>
                                                        <?php if($find[0]==$find[1]) {?>
                                                    <li><i class="fa fa-map-marker"></i> <a href="category.html">
                                                        <?php echo $find[1]; ?> <?php echo $find[2]; ?>
                                                    </a></li>
                                                        <?php }else{  ?>
                                                    <li><i class="fa fa-map-marker"></i> <a href="category.html">
                                                        <?php echo $find[0]; ?> <?php echo $find[1]; ?>
                                                    </a></li>
                                                        <?php }  ?>
                                                    <li><i class="fa fa-bookmark"></i> <?php echo $goods['goods_quality']; ?></li>
                                                </ul>
                                            </div>
                                            <div class="flexslider post-images">
                                                <ul class="slides">
                                                    <?php if(is_array($pic) || $pic instanceof \think\Collection || $pic instanceof \think\Paginator): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                                                    <li data-thumb="<?php echo $a; ?>">
                                                        <img alt="" src="<?php echo $a; ?>" />
                                                    </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>

                                            </div>
                                            <div class="post-body">
                                                <h4><strong><?php echo $goods['goods_name']; ?></strong></h4>
                                                <p><?php echo $goods['goods_introduce']; ?></p>
                                            </div>
                                            <div class="post-footer">
                                                <div class="row">
                                                    <div class="col-xs-6">    
                                                        <button class="btn btn-info" onclick="buy();"><i class="fa fa-paypal"></i> <span class="hidden-xs hidden-sm">立即购买</span></button>
                                                        <button class="btn btn-warning" onclick="add();"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm">加入购物车</span></button>
                                                    </div>
                                                    <input type="hidden" id="id" name="id" value="<?php echo $goods['id']; ?>"/>
                                                    <input type="hidden" id="name" name="name" value="<?php echo $goods['goods_name']; ?>"/>
                                                    <input type="hidden" id="price" name="price" value="<?php echo $goods['goods_price']; ?>"/>
                                                    <input type="hidden" id="image" name="image" value="<?php echo $goods['goods_img']; ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <h2>More From <?php echo $goods['goods_owner']; ?></h2>
                                    </div>
                                    <div class="row">
                                        <?php if(is_array($more) || $more instanceof \think\Collection || $more instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($more) ? array_slice($more,0,3, true) : $more->slice(0,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$more): $mod = ($i % 2 );++$i;?>
                                        <div class="col-md-4">
                                            <div class="item-ads-grid">
                                                <div class="item-img-grid">
                                                    <img alt="" src="<?php echo $more['goods_img']; ?>" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4><?php echo $more['goods_name']; ?></h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="/secondhand/search/category?searchkey=<?php echo $typenum[0]['goods_type']; ?>"><?php echo $type[0]['type']; ?></a></li>
                                                            <?php if($find[0]==$find[1]) {?>
                                                        <li><i class="fa fa-map-marker"></i>
                                                            <?php echo $find[1]; ?> <?php echo $find[2]; ?>
                                                        </li>
                                                            <?php }else{  ?>
                                                        <li><i class="fa fa-map-marker"></i>
                                                            <?php echo $find[0]; ?> <?php echo $find[1]; ?>
                                                        </li>
                                                            <?php }  ?>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i><?php echo $more['goods_quality']; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>¥ <?php echo $more['goods_price']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Seller</h3>
                                </div>
                                <div class="widget-body text-center">
                                    <img alt="avatar" src="/static/assets/img/people/gie.jpg" class="seller-avatar img-responsive">
                                    <h2 class="seller-name"><?php echo $goods['goods_owner']; ?></h2>
                                    <p class="seller-detail">Location: 
                                        <?php if($find[0]==$find[1]){?>
                                    <strong><?php echo $find[1]; ?> <?php echo $find[2]; ?></strong><br/>
                                    <?php }else{  ?>
                                    <strong><?php echo $find[0]; ?> <?php echo $find[1]; ?></strong><br/>
                                    <?php }  ?>
                                    </strong><br/>
                                        Joined : <strong>21 June 2010</strong></p>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Browse by Category</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                        <li><a href="/secondhand/search/category?searchkey=1">小卡卡贴 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="/secondhand/search/category?searchkey=2">专辑海报 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="/secondhand/search/category?searchkey=3">明信写真 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="/secondhand/search/category?searchkey=4">衣服配饰 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="/secondhand/search/category?searchkey=5">限量定制 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="/secondhand/search/category?searchkey=6">其余周边 &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Browse by Brand</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="brands">
                                        <li><label>SuperJunior</label></li>
                                        <li><label>EXO</label></li>
                                        <li><label>Bigbang</label></li>
                                        <li><label>TVXQ</label></li>
                                        <li><label>李易峰</label></li>
                                        <li><label>华晨宇</label></li>
                                        <li><label>周杰伦</label></li>
                                        <li><label>张杰</label></li>
                                    </ul>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer">
                <div class="container">
                <ul class="pull-left footer-menu">
                    <li>
                        <a href="/secondhand/index/index"> Home </a>
                        <a href="#"> About us </a>
                        <a href="#"> Contact us </a>
                    </li>
                </ul>
                <ul class="pull-right footer-menu">
                    <li>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Essentials -->
        <script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/static/assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="/static/assets/plugins/counter/jquery.countTo.js"></script>
        <script defer src="/static/assets/plugins/flexslider/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // ===============Flexslider=====================
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                    directionNav: false,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });

                // ==========tooltip initial=================
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    
    </body>		
</html>