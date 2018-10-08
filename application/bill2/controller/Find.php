<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\Bill;
	use think\Session;
	class Find extends Basic{
		public function index(){
			$list = Bill::all();
			// return "m3/index/showAll";
			// return $list[0]['name'];
			$this->assign('bill',$list);
			return  $this->fetch();
		}
	}
?>