<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:88:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\search\type.html";i:1537501396;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537500263;}*/ ?>
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

        <!-- JS Library -->
        <script src="/static/assets/js/jquery.js"></script>
        <script class="resources library" src="/static/js/area.js" type="text/javascript"></script>

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
                            <!-- <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><strong class="caret"></strong>&nbsp;购物车</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/secondhand/buycar/index">购物车</a></li>
                                    <li><a href="/secondhand/myrecord/index">我的订单</a></li>
                                    <li><a href="/secondhand/sell/index">出售商品</a></li>
                                </ul>
                            </li> -->
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
    	
        
            <div class="category-search">
                <div class="container">
                    <div class="row category-search-box">
                        <form>
                            <div class="col-md-4 col-sm-4  cat-search-input">
                                <select class="form-control">
                                    <option selected>分类</option>
                                    <option>小卡卡贴</option>
                                    <option>专辑海报</option>
                                    <option>明信写真</option>
                                    <option>衣服配饰</option>
                                    <option>限量定制</option>
                                    <option>其余周边</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4  cat-search-input">
                                <input type="text" class="form-control" placeholder="I want to find...">
                            </div>
                            <div class="col-md-4 col-sm-4  cat-search-input">
                                <button class="btn btn-custom btn-block"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <section class="category-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            &nbsp;
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb pull-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="category.html">Category</a></li>
                                <li>Detail Product</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Browse by Category</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                        <li><a href="#">Smartphone &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Watch &amp; Jewelry &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Clothes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Shoes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Music &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Furniture &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Photography &nbsp;<span class="item-numbers">(242)</span></a></li>
                                        <li><a href="#">Web Development &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Browse by Brand</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="brands">
                                        <li><label><input type="checkbox"> Apple</label></li>
                                        <li><label><input type="checkbox"> Asus</label></li>
                                        <li><label><input type="checkbox"> Acer</label></li>
                                        <li><label><input type="checkbox"> Nexus</label></li>
                                        <li><label><input type="checkbox"> Nokia</label></li>
                                        <li><label><input type="checkbox"> Lenovo</label></li>
                                        <li><label><input type="checkbox"> Samsung</label></li>
                                    </ul>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="category-header no-margin-bottom">
                                <div class="row">
                                    <div class="col-md-4  cat-search-input">
                                        <select class="form-control">
                                            <option>Sort</option>
                                            <option>Newest</option>
                                            <option selected="">Lowest Price</option>
                                            <option>Highest Price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4  cat-search-input">
                                        <select class="form-control">
                                            <option>All Type</option>
                                            <option>New</option>
                                            <option selected="">Used</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 text-right  cat-search-input">
                                        <div class="view-type">
                                            <a href="category.html"  data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-th-list"></i></a>
                                            <a href="category-grid.html"  data-toggle="tooltip" data-placement="top" title="Grid"><i class="fa fa-th"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-results-box">
                                <div class="row">
                                    <div class="col-md-12 search-results">
                                        Keyword : <span>"Lenovo Thinkpad"</span>  Results : <span>23.452</span> items
                                    </div>
                                </div>
                            </div>
                            <div class="list-results">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="item-ads highlight-ads">

                                            <div class="row">

                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-badge featured-ads">
                                                        <a href="#">Featured Ads</a>
                                                    </div>
                                                    <div class="item-img">
                                                        <img alt="" src="assets/img/products/product-1.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-badge hot-ads">
                                                        <a href="#">Hot Ads</a>
                                                    </div>
                                                    <div class="item-img">
                                                        <img alt="" src="assets/img/products/product-2.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Samsung Galaxy Grand Prime 530 8GB Grey</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>

                                                            <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 45</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-badge premium-ads">
                                                        <a href="#">Premium Ads</a>
                                                    </div>
                                                    <div class="item-img">
                                                        <img alt="" src="assets/img/products/product-6.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Samsung Tab 3 V 116</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 60</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-ads highlight-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="assets/img/products/product-7.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="detail.html"><h4>Sony Experia Z2 LTE</h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                            <li class="item-location hidden-xs"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>$ 75</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <ul class="pagination">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="active"><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
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
                        <a href="#"> Home </a>
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
    
    </body>		
</html>