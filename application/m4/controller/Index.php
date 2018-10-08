<?php
	namespace app\m4\controller;
	use think\Controller;
	use app\m4\model\Zy;
	class Index extends Controller{
		public function show(){
			$list = Zy::all();
			$this->assign('Zy',$list);
			return $this->fetch();
		}
		public function delete($id=null){
			if($id==null){
				return "删除数据时不能为空";
			}
			$user=Zy::get($id);
			if ($user==null) {
				$this->error("数据不存在");
				return;
			}
			$result=$user->delete();
			if ($result) {
				$this->success("删除成功");
			}
			else{
				$this->error("删除失败");
			}
		}
		public function edit1($id=null){
			if ($id=null) {
				$thie->error("编号不能为空");
				return;
			}
			$user=Zy::get($id);
			if ($user==null) {
				$this->error("数据不存在");
				return;
			}
			$this->assign('user',$list);
			return $this->fetch(); 
			
		}
		public function update($id=null){
			if ($id=null) {
				$this->error("编号不能为空");
			}
			$user = Zy::get($id);
			if ($user == null) {
				$this->error("更新失败，数据不存在");
				return;
			}
			$result=$user->save(
				$_POST,['id'=>$id]
			);
			if ($result) {
				$this->success("更新成功","m4/index/show");
			} else {
				$this->error("更新失败".User::getLastSql());
			}
			
		}
	}
?>