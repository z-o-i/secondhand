<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:92:"D:\PHP\Apache\Apache24\htdocs\tp5\public/../application/secondhand\view\search\category.html";i:1537926080;s:72:"D:\PHP\Apache\Apache24\htdocs\tp5\application\secondhand\view\model.html";i:1537925222;}*/ ?>
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
                                    <h3>商品分类</h3>
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
                                    <h3>购买趋势</h3>
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
                        <div class="col-md-9 col-sm-9">
                            <div class="search-results-box">
                                <div class="row">
                                    <div class="col-md-12 search-results">
                                        Keyword : <span>"<?php echo $key; ?>"</span>  Results : <span><?php echo $count; ?></span> items
                                    </div>
                                </div>
                            </div>
                            <div class="list-results">
                                <?php if($goods==null) {?>
                                <div class="row">
                                    暂无此类商品，请您再去<a href="/secondhand/index/index">首页</a>逛逛吧
                                </div>
                                <?php }else{  ?>
                                <div class="row">
                                    <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                                    <div class="col-sm-12">
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="<?php echo $a['goods_img']; ?>" width="120px" height="150px">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="/secondhand/product/detail?id=<?php echo $a['id']; ?>"><h4><?php echo $a['goods_name']; ?></h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="/secondhand/search/category?searchkey=<?php echo $a['goods_type']; ?>">Electronics</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i><?php echo $a['goods_quality']; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>¥ <?php echo $a['goods_price']; ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <?php }  ?>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12 text-right">
                                    <ul class="pagination">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div> -->
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
        <!-- Essentials -->
        <script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/static/assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="/static/assets/plugins/counter/jquery.countTo.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    
    </body>		
</html>