<?php
	namespace app\bill\controller;
	use think\Controller;
	use app\bill\Model\User;
	use think\Session;

	class Update extends Basic{
		private $seed ="!@#()123Aa";

		public function index(){
			return  $this->fetch();
		}

		public function checkPwd($loginId=null,$password=null,$checkPwd=null){

		if ($loginId==null || $password==null|| $checkPwd==null) {
			$this->error("请输入用户名或密码");
			return;
		}

		$user = User::get(['loginId'=>$loginId]);
		if ($user == null) {
			$this->error("用户不存在");
			return;
		}
		if($password != $checkPwd){
			$this->error("两次密码不一致");
			return;
		}
		
		if($user != null && $password == $checkPwd){
			$user->pwd = md5($password.$this->seed);
			$user->save();
		}
		
		$this->success("修改成功","/bill");
		}
	}
?>


