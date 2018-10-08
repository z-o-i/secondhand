<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\User;
	use think\Session;
	class Update extends Basic{
		public function index(){
			return $this->fetch();
		}
		private $seed = "!@123qwe";
		public function update($loginId=null,$password=null,$checkPwd=null){
			if($loginId==null||$password==null||$checkPwd==null){
				return $this->error('请输入用户名或密码');
			}
			$user=User::get(['loginId'=>$loginId]);
			if($user==null){
				return $this->error('用户名不存在');
			}
			if($password != $checkPwd){
				return $this->error('两次密码不一致');
			}
			if($user != null && $password == $checkPwd){
				$user->pwd = md5($password.$this->seed);
				$user->save();
			}
			$this->success('修改成功','\bill');
		}
	}
?>