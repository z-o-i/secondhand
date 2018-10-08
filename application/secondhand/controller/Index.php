<?php
	namespace app\secondhand\controller;
	use think\Controller;
    use app\secondhand\Model\Goods;
    use think\Session;
    use think\Db;
	class Index extends Controller{
		public function index(){
            Session::get('loginId');
            $find=Db::query("select * from goods where goods_condition = 1 and goods_amount >0");
            $this->assign('goods',$find);
            $card=Db::query("select * from goods where goods_type=1 and goods_condition = 1 and goods_amount >0");
            $c=count($card);
            $this->assign('c',$c);
            $poster=Db::query("select * from goods where goods_type=2 and goods_condition = 1 and goods_amount >0");
            $p=count($poster);
            $this->assign('p',$p);
            $write=Db::query("select * from goods where goods_type=3 and goods_condition = 1 and goods_amount >0");
            $w=count($write);
            $this->assign('w',$w);
            $clothes=Db::query("select * from goods where goods_type=4 and goods_condition = 1 and goods_amount >0");
            $cl=count($clothes);
            $this->assign('cl',$cl);
            $limit=Db::query("select * from goods where goods_type=5 and goods_condition = 1 and goods_amount >0");
            $l=count($limit);
            $this->assign('l',$l);
            $some=Db::query("select * from goods where goods_type=6 and goods_condition = 1 and goods_amount >0");
            $s=count($some);
            $this->assign('s',$s);
			return $this->fetch();
		}
	}
?>