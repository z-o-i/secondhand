<?php
class UserdbAction extends Action{
	public function index(){
		$user=M('User');
		$list=$user->select();
		$this->assign('title','thinkphp演示');
		$this->assign('alist',$list);
		
		$this->display();
	}
	public function add(){
		//D是需要些Model的，M不需要写
		$user=D('User');
		if ($vo=$user->create()){
			echo 'create成功';
			$user->password=md5($user->password);
			$user->createtime=time();
			//扩展函数需要进加载之后使用
			load('extend');
			$user->createip=get_client_ip();
			if ($user->add()){
				$this->success("用户注册成功");
			}else{
				$this->error($user->getError());
			}
		}else{
			echo 'create失败';
			$this->error($user->getError());
		}
	}
	public function del(){
		//D是需要些Model的，M不需要写
		$user=D('User');
		if ($vo=$user->delete($_GET['id'])){
			$this->success("用户删除成功");
		}else{
			$this->error($user->getError());
		}
	}
	public function edit(){
		$user=M('user');
		$id=$_GET['id'];
		$list=$user->where("id=$id")->find();
		
		$this->assign('user',$list);
		$this->assign('title','编辑用户');
		$this->display();
	}
	public function update(){
		$user=M('user');
		if ($vo=$user->create()){
			if ($lineNum=$user->save()){
				$this->success("用户更新成功");
			}else{
				$this->error($user->getError());
			}
		}else{
			$this->error($user->getError());
		}
	}
}
?>