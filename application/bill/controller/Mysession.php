<?php
	namespace app\bill\controller;
	use think\Controller;
	use app\bill\Model\User;
	use think\Session;

	class Mysession {
		
		public function set(){
			Session::set('currentUser','zoi');
			return "OK";
		}

		public function get(){
			$currentUser = Session::get('currentUser');
			if($currentUser){
				return $currentUser;
			}
			return "error";
		}
		public function clear(){
			Session::delete('currentUser');
			return "OK";
		}
	}
?>