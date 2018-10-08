<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Record;
use think\Session;
use think\Db;
class Myrecord extends Basic{
	public function index(){
		$loginId=session('loginId');
		$list = Record::all();
		$find=Db::query("select * from record where owner_name='$loginId' or customer_name ='$loginId'");
		if($find==null){
			return $this->redirect('null');
		}else{
			$this->assign('record',$find);
			$find1=Db::query("SELECT owner_address,customer_address FROM record WHERE owner_name='$loginId' or customer_name ='$loginId'");
			$arr = array_column($find1, 'owner_address');
	        $arr2 = array_column($find1, 'customer_address');
	        $ex=explode("-", $arr[0]);
	        $ex2=explode("-", $arr2[0]);
	        $this->assign('find',$ex);
	        $this->assign('find2',$ex2);
			return $this->fetch();
		}
	}
	public function null(){
		return $this->fetch();
	}
}
?>