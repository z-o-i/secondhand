<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Goods;
use app\secondhand\Model\Pic;
use think\Request;
use think\Session;
use think\Db;
class Sell extends Basic{
    public function index(){
        Session::get('loginId');
        return $this->fetch();
    }
    public function upload(Request $request,$goods_name=null,$goods_amount=null,$goods_price=null,$goods_quality=null,$goods_introduce=null,$goods_owner=null,$goods_type=null){
        // 获取表单上传文件
        $files = request()->file('image');
        if($files){
                $Goods = new Goods;
                $Goods->goods_name = $goods_name;
                $Goods->goods_amount = $goods_amount;
                $Goods->goods_price = $goods_price;
                $Goods->goods_quality = $goods_quality;
                $Goods->goods_introduce = $goods_introduce;
                //$Goods->goods_img = $filePath;
                $Goods->goods_owner = $goods_owner;
                $Goods->goods_type = $goods_type;
                $Goods->save();
                //echo "$Goods->id";
                $gid=$Goods->id;
            foreach ($files as $file) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                $info=$file->rule('mytime')->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $filePath = '/uploads/'.$info->getSaveName();
                    $filePath=str_replace("\\","/",$filePath);
                    //echo $info->getFilename();
                    $Pic = new Pic;
                    $Pic->goods_id = $gid;
                    $Pic->image=$filePath;
                    $Pic->save();
                    //dump($Pic);
                    $find=Db::query("update goods set goods_img = '$filePath' where id='$gid'");
                }else{
                    // 上传失败获取错误信息
                    echo $files->getError();
                }
            }
        }
            $this->success("提交成功","/secondhand");
    }
}
?>