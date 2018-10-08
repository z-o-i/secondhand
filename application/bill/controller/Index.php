<?php
	namespace app\bill\controller;
	use think\Controller;
		class Index extends Basic{
			public function Index(){
				return  $this->fetch();
				Session::get('loginId');
			}
		}
?>