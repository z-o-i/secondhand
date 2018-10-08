<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\Bill;
	use think\Request;
	class Image extends Controller{
		public function index(){
			return $this->fetch();
		}
		public function upload(){
			
		}
	}
?>