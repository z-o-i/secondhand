<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\Bill;
	use think\Request;
	class Add extends Controller{
		public function index(){
			return $this->fetch();
		}
		public function check($kinds=null,$price=null){
			if($kinds==null||$price==null){
				$this->error("请输入类别或金额");
				return;
			}
			$Bill = new Bill;
			$Bill->kinds = $kinds;
			$Bill->price = $price;
			$Bill->logDate = time();
			$Bill->save();
			$this->success("提交成功","/bill2");

		}
	}
?>