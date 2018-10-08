<?php
	namespace app\bill\controller;
	use think\Controller;
	use app\bill\Model\User;
	use think\Session;

	class Login extends Controller{
		private $seed ="!@#()123Aa";

		public function index(){
			return  $this->fetch();
		}
		
		
		public function checkLogin($loginId=null,$password=null){
		if ($loginId==null || $password==null) {
			$this->error("请输入用户名或密码");
			return;
		}

		$user = User::get(['loginId'=>$loginId]);
		if ($user == null) {
			$this->error("用户不存在");
			return;
		}
		
		Session::set('loginId',$loginId);
		
		/*if ($user->pwd != md5($password)) {
			$this->error("用户或密码不存在");
			return;
		}*/

		if ($user->pwd != md5($password.$this->seed)) {
			$this->error("用户或密码不存在");
			return;
		}
		
		$this->success("登录成功","/bill");
		}

}
?>