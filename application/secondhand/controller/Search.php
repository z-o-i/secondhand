<?php
	namespace app\secondhand\controller;
	use think\Controller;
    use app\secondhand\Model\Goods;
    use think\Session;
    use think\Request;
    use think\Db;
	class Search extends Controller{
        public function index(){
            Session::get('loginId');
            $searchkey=Request::instance()->post('searchkey');
            //echo "$searchkey";
            $find=Db::query("SELECT * FROM `goods` WHERE goods_name like '%$searchkey%' and goods_condition = 1");
            //dump($find);
            if ($find == null) {
                return $this->redirect('null');
            }else{
                $count=count($find);
                $this->assign('count',$count);
                $this->assign('key',$searchkey);
                $this->assign('goods',$find);
            }
            return $this->fetch();
        }
        public function category(){
            Session::get('loginId');
            $searchkey=Request::instance()->get('searchkey');
            //echo "$searchkey";
            $find=Db::query("SELECT * FROM `goods` WHERE goods_type = '$searchkey' and goods_condition = 1 and goods_amount>0");
            //dump($find);
            $count=count($find);
            $this->assign('count',$count);
            $this->assign('key',$searchkey);
            $this->assign('goods',$find);
            return $this->fetch();
        }
        public function null(){
            return $this->fetch();
        }
	}
?>