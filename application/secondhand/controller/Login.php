<?php
    namespace app\secondhand\controller;
    use think\Controller;
    use app\secondhand\Model\User;
    use think\Session;
class Login extends Controller{
    public function index(){
        return $this->fetch();
    }
    private $seed = "!@#()123Aa";
    public function checkLogin($user_nickname=null,$user_pwd=null){
        if($user_nickname==null||$user_pwd==null){
            return $this->error('请输入用户名或密码');
        }
        $user=User::get(['user_nickname'=>$user_nickname]);
        if($user==null){
            return $this->error('用户名不存在');
        }
        Session::set('loginId',$user_nickname);
        if($user->user_pwd != md5($user_pwd.$this->seed)){
            return $this->error('密码错误');
        }
        $this->success("登录成功","/secondhand");
    }
    public function logout(){
        Session::clear();
        return $this->success('注销成功','/secondhand/index/index');
    }
}
?>