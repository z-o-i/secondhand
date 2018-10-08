<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Goods;
use think\Request;
use think\Session;
class File extends Basic{
    public function index(){
        Session::get('loginId');
        return $this->fetch();
    }
    public function upload($goods_name=null,Request $request){
        // 获取表单上传文件
        $files = request()->file('image');
        //dump($files);
        // 移动到框架应用根目录/public/uploads/ 目录下
        //$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        foreach ($files as $file){
            $info=$file->rule('mytime')->move(ROOT_PATH . 'public' . DS . 'uploads');
            $filePath = 'uploads/'.$info->getSaveName().'-';
            $filePath=str_replace("\\","/",$filePath);
            //echo "$filePath";
            $Goods = new Goods;
            $Goods->goods_name = $goods_name;
            $Goods->goods_img = $filePath;
            $Goods->save();
            /*if ($info){
                dump($info->getSavename());

            }else{
                dump($info->getError());
            }*/
        }
    }

}
?>