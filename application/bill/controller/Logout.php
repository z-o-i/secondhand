<?php
	namespace app\bill\controller;
	use think\Controller;
	use app\bill\Model\User;
	use think\Session;

	class Logout extends Basic{
		public function clear(){
			//Session::delete('loginId');

			// 清除session（当前作用域）
			Session::clear();

			return $this->success("注销成功","/bill");
		}
	}
?>