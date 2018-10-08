<?php
	namespace app\m3\controller;
	use think\Controller;
	use app\m3\model\User;
	class Index extends Controller{
		public function index(){
			return "m3/index";
		}
		public function showAll(){
			$list = User::all();
			// return "m3/index/showAll";
			// return $list[0]['name'];
			$this->assign('users',$list);
			return  $this->fetch();
		}
		public function register(){
			return $this->fetch();
		}
		public function add(){
			return $this->fetch();
		}
		public function create($name =null,$mobile = null,$address = null){
			if($name == null){
				return "姓名不能为空";
			}
			if($mobile == null){
				return "电话不能为空";
			}
			if($address == null){
				return "地址不能为空";
			}
			$User = new User;
			$User->name = $name;
			$User->mobile = $mobile;
			$User->address = $address;
			$User->save();
			return "插入记录成功";
		}
		public function delete($id = null){
			if($id == null){
				return "删除数据时不能为空";
			}

			$user = User::get($id);//查询数据
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

			$user = User::get($id);//查询数据
			$user->delete();//删除数据
			return "删除成功";
		}
		public function edit($id=null){
			if ($id==null) {
				$this->error("编号不能为空");
				return;
			}
			$user=User::get($id);
			if ($user == null) {
				$this->error("数据不存在");
				return;
			}
			$this->assign('users',$user);
			return $this->fetch(); 
		}


		public function update($id=null){
			if ($id==null) { 
				$this->error("编号不能为空");
			}
			$user = User::get($id);
			if ($user == null) {
				$this->error("更新失败，数据不存在");
				return;
			}
			$result=$user->save(
				$_POST,['id'=>$id]
			);
			if ($result) {
				$this->success("更新成功","/m3/index/showAll");
			}elseif ($result==false) {  
                $this->success('您没有信息变动哦~',"/m3/index/showAll");  
            }
			else {
				$this->error("更新失败".User::getLastSql());
			}
		}
		
	}
?>