<?php
	namespace app\bill2\controller;
	use think\Controller;
	use app\bill2\Model\Bill;
	class Delete extends Basic{
		public function index($id = null){
			if($id == null){
				return "删除数据时不能为空";
			}

			$bill = Bill::get($id);//查询数据
			if ($bill==null) {
				$this->error("数据不存在");
				return;
			}

			$result=$bill->delete();
			if ($result) {
				$this->success("删除成功");
			}
			else{
				$this->error("删除失败");
			}

			$bill = Bill::get($id);//查询数据
			$bill->delete();//删除数据
			return "删除成功";
		}
		public function edit($id=null){
			if ($id==null) {
				$this->error("编号不能为空");
				return;
			}
			$bill=Bill::get($id);
			if ($bill == null) {
				$this->error("数据不存在");
				return;
			}
			$this->assign('bill',$bill);
			return $this->fetch();
		}
		public function update($id=null){
			if ($id==null) { 
				$this->error("编号不能为空");
				return;
			}
			$bill = Bill::get($id);
			if ($bill == null) {
				$this->error("更新失败，数据不存在");
				return;
			}
			$result=$bill->save($_POST,['id'=>$id]);
			
			if ($result) {
				$this->success("更新成功","/bill2/Find/index");
			}elseif ($result==false) {  
                $this->success("您没有信息变动哦~","/bill2/Find/index");
            }
			else {
				$this->error("更新失败".Bill::getLastSql());
			}
		}
	}
?>