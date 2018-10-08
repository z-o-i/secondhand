<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\User;
use think\Session;
class Register extends Controller{
    public function index(){
        return $this->fetch();
    }
    private $seed = "!@#()123Aa";
    public function checkRegister($user_nickname=null,$user_pwd=null,$user_realname=null,$user_address=null,$user_phone=null,$s_province=null,$s_city=null,$s_county=null){
        if($user_nickname == null){
            return "昵称不能为空";
        }
        if($user_pwd == null){
            return "密码不能为空";
        }
        if($user_realname == null){
            return "真实姓名不能为空";
        }
        if($user_address == null){
            return "地址不能为空";
        }
        if($user_phone == null){
            return "联系方式不能为空";
        }
        $User= new User;
        $User->user_nickname=$user_nickname;
        $User->user_pwd=md5($user_pwd.$this->seed);
        $User->user_realname=$user_realname;
        $User->user_address=$s_province.'-'.$s_city.'-'.$s_county.'-'.$user_address;
        $User->user_phone=$user_phone;
        $User->save();
        return $this->success('注册成功','/secondhand/index/index');
    }
    public function logout(){
        Session::clear();
        return $this->success('注销成功','/secondhand/index/index');
    }
}
?>