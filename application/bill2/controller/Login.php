<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\User;
	use think\Session;
	class Login extends Controller{
		public function index(){
			return $this->fetch();
		}
		private $seed = "!@#()123Aa";
		public function checkLogin($loginId=null,$password=null){
			if($loginId==null||$password==null){
				return $this->error('请输入用户名或密码');
			}
			$user=User::get(['loginId'=>$loginId]);
			if($user==null){
				return $this->error('用户名不存在');
			}
			Session::set('loginId',$loginId);
			if($user->pwd != md5($password.$this->seed)){
				return $this->error('密码错误');
			}
		$this->success("登录成功","/bill2");

		}
		public function logout(){
			Session::clear();
			return $this->success('注销成功','/bill2/index/index');
		}
	}
?>