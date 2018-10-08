<?php  
	namespace app\bill\controller;  
	use think\Controller;  
	class Basic extends Controller{  
    	//定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。  
    	public function _initialize(){  
        	if(!session('loginId')){
        		// if(!Session::has('loginId'))  
            	return $this->error('请先登录系统','/bill/login/index');  
        	}  
    	}   
}  