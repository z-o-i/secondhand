<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Goods;
use think\Session;
use think\Request;
use think\Db;
class Buycar extends Basic{
    public function index($allprice=null){
        Session::get('loginId');
        Session::get('gwc');
        $allprice=null;
        if (session('?gwc') == null) {
        	return $this->redirect('null');
        }else{
        	$arr = $_SESSION["gwc"];
        	$this->assign('buycar',$arr);
            $c=count($arr);
            for($i=0;$i<count($arr);$i++){
                //dump($arr[$i]["price"]);
                //dump($arr[$i]["num"]);
                $allprice+=$arr[$i]["price"]*$arr[$i]["num"];
            }
            $this->assign('c',$c);
            $this->assign('price',$allprice);
            return $this->fetch();
        }
    }
    public function null(){
    	return $this->fetch();
    }
    public function add(){
        $cid=Request::instance()->get('cid');
        //$cnum=Request::instance()->get('cnum');
        $gnum=Request::instance()->get('gnum');
        //dump($cid);
        $arr = $_SESSION["gwc"];
        // foreach ($arr as $v) {
        //     $ids=$v['id'];
        //     //dump($ids);
        // }
        for($i=0;$i<count($arr);$i++){
            if($cid==$arr[$i]['id'] && $arr[$i]["num"]<$gnum && $arr[$i]["num"]>0){
                $arr[$i]["num"] += 1;
            }elseif($arr[$i]["id"] == $cid && $arr[$i]["num"]>=$gnum){
                //$arr[$i]=null;
                $arr[$i]["num"] = $gnum;
            }
        }
        $_SESSION["gwc"] = $arr;
        return $this->success('操作成功','/secondhand/buycar/index');
    }
    public function reduce(){
        $cid=Request::instance()->get('cid');
        //$cnum=Request::instance()->get('cnum');
        $gnum=Request::instance()->get('gnum');
        //dump($cid);
        $arr = $_SESSION["gwc"];
        for($i=0;$i<count($arr);$i++){
            if($cid==$arr[$i]['id'] && $arr[$i]["num"]<=$gnum && $arr[$i]["num"]>1){
                $arr[$i]["num"] -= 1;
            }elseif($arr[$i]["id"] == $cid){
                //$arr[$i]=null;
                unset($arr[$i]);
            }
        }
        $_SESSION["gwc"] = $arr;
        return $this->success('操作成功','/secondhand/buycar/index');
    }
    // public function delete(){
    //     $id=Request::instance()->get('id');
    //     $arr = $_SESSION["gwc"];
    //     for($i=0;$i<count($arr);$i++){
    //         if($arr[$i]['id']==$id){
    //             dump($arr[$i]);
    //             unset($arr[$i]);
    //             //session('$arr[$i]',null);
    //             $_SESSION["gwc"]=$arr;
    //             return $this->success('删除成功','/secondhand/buycar/index');
    //         }
    //     }
    // }
    public function clear(){
        $arr = $_SESSION["gwc"];
        if($arr){
            unset($arr);
            $_SESSION["gwc"] = null;
            return $this->success('操作成功','/secondhand/buycar/index');
        }else{
            return $this->error('操作失败','/secondhand/buycar/index');
        }
    }
}