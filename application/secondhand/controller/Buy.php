<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Goods;
use app\secondhand\Model\Record;
use app\secondhand\Model\User;
use think\Session;
use think\Request;
use think\Db;
class Buy extends Basic{
    public function index(){
        //dump(Request::instance());
        Session::get('loginId');
        $id=Request::instance()->post('id');
        //dump($id);
        $goods = Goods::get($id);
        $gnum=Goods::where('id',$id)->value('goods_amount');
        $num='1';
        //$name=Request::instance()->post('name');
        $name=Goods::where('id',$id)->value('goods_name');
        //$price=Request::instance()->post('price');
        $price=Goods::where('id',$id)->value('goods_price');
        //$image=Request::instance()->post('image');
        $image=Goods::where('id',$id)->value('goods_img');
        $toprice=$num*$price;
        $arr=array(
            "id"=>"$id",
            "name"=>"$name",
            "num"=>"$num",
            "price"=>"$price",
            "image"=>"$image",
            "toprice"=>"$toprice"
        );
        $_SESSION["buynow"]=$arr;
        //dump($arr);
        $this->assign('goods',$arr);
        return $this->fetch();
    }
    public function buynow(){
        // 购买之后添加记录
    	Session::get('loginId');
        Session::get('buynow');
    	Session::get('gwc');
        $buynow=$_SESSION["buynow"];
    	$id=$_SESSION["buynow"]["id"];
    	$num=$_SESSION["buynow"]["num"];
    	$goods = Goods::get($id);
        $gid=Goods::where('id',$id)->value('id');
        $gnum=Goods::where('id',$id)->value('goods_amount');
        $tonum=$gnum-$num;
    	if ($tonum==0) {
    		$Goods = Goods::get(['id'=>$id]);
    		$Goods->goods_condition=0;
    		$Goods->goods_amount=$tonum;
        	$Goods->save();
    	}else{
    		$Goods = Goods::get(['id'=>$id]);
    		$Goods->goods_amount=$tonum;
        	$Goods->save();
    	}
    	$loginId=session('loginId');
    	$custom=Db::query("select * from user where user_nickname = '$loginId'");
    	//dump($custom);
    	$find=Db::query("select * from user,goods where goods.goods_owner = user.user_nickname and goods.id='$id'");
    	$Record=new Record;
    	$Record->goods_id = $id;
    	$Record->goods_name = $_SESSION["buynow"]["name"];
    	$Record->goods_price = $_SESSION["buynow"]["price"];
        $Record->goods_toprice = $_SESSION["buynow"]["toprice"];
    	$Record->goods_amount = $_SESSION["buynow"]["num"];
    	$Record->owner_name = $find[0]['goods_owner'];
    	$Record->owner_address = $find[0]['user_address'];
    	$Record->owner_phone = $find[0]['user_phone'];
    	$Record->customer_name = $custom[0]['user_nickname'];
    	$Record->customer_address = $custom[0]['user_address'];
    	$Record->customer_phone = $custom[0]['user_phone'];
    	$Record->save();
        
        if(session('?gwc') != null){
            $arr = $_SESSION["gwc"];
            for($i=0;$i<count($arr);$i++)
                {
                    if($arr[$i]["id"] == $id)
                    {
                        unset($arr[$i]);
                    }
                }
            $_SESSION["gwc"] = $arr;
        }
        unset($buynow);
        return $this->success('购买成功','/secondhand/index/index');
    }
    public function buy(){
    	Session::get('buynow');
    	$arr=$_SESSION["buynow"];
    	dump($arr);
    	$this->assign('goods',$arr);
    	return $this->fetch();
    }
    public function reduce(){
        Session::get('buynow');
        $arr=$_SESSION["buynow"];
        //dump($arr);
    	$id=$_SESSION["buynow"]["id"];
    	$num=$_SESSION["buynow"]["num"];
        $price=$_SESSION["buynow"]["price"];
        $toprice=$_SESSION["buynow"]["toprice"];
        if($num>1)
            {
                //把点到的商品编号减1
                $num-=1;
                $_SESSION["buynow"]["num"] = $num;
                $toprice=$num*$price;
                $_SESSION["buynow"]["toprice"]=$toprice;
            }elseif($num=1){
                $num = 1;
                $_SESSION["buynow"]["num"] = $num;
                $toprice=$num*$price;
                $_SESSION["buynow"]["toprice"]=$toprice;
            }
        return $this->success('操作成功','/secondhand/buy/buy');
    }
    public function add(){
        Session::get('buynow');
    	$id=$_SESSION["buynow"]["id"];
    	$num=$_SESSION["buynow"]["num"];
        $price=$_SESSION["buynow"]["price"];
        $toprice=$_SESSION["buynow"]["toprice"];
        $gnum=Goods::where('id',$id)->value('goods_amount');
        if($num<$gnum)
            {
                //把点到的商品编号加1
                $num += 1;
                $_SESSION["buynow"]["num"]=$num;
                $toprice=$num*$price;
                $_SESSION["buynow"]["toprice"]=$toprice;
            }else{
                $num = $gnum;
                $toprice=$num*$price;
                $_SESSION["buynow"]["toprice"]=$toprice;
                return $this->success('已经是库存最大值','/secondhand/buy/buy');
            }
        return $this->success('操作成功','/secondhand/buy/buy');
    }
    public function gwc(){
        Session::get('gwc');
        $arr=$_SESSION['gwc'];
        for($i=0;$i<count($arr);$i++){
            $arr[$i]['toprice']=$arr[$i]["price"]*$arr[$i]["num"];
        }
        $_SESSION["buynow"]=$arr;
        //dump($arr);
        $this->assign('goods',$arr);
        return $this->fetch();
    }
    public function gwcbuy(){
        // 购买之后添加记录
        Session::get('loginId');
        Session::get('buynow');
        Session::get('gwc');
        $gwcbuy=$_SESSION['buynow'];
        for($i=0;$i<count($gwcbuy);$i++){
            $id=$gwcbuy[$i]["id"];
            //dump($id);
            $num=$gwcbuy[$i]["num"];
            $goods = Goods::get($id);
            $gid=Goods::where('id',$id)->value('id');
            $gnum=Goods::where('id',$id)->value('goods_amount');
            $tonum=$gnum-$num;
            //dump(session('buynow'));
            //$find=Db::query("select goods_condition from goods where id ='$id'");
            if ($tonum==0) {
                $Goods = Goods::get(['id'=>$id]);
                $Goods->goods_condition=0;
                $Goods->goods_amount=$tonum;
                $Goods->save();
            }else{
                $Goods = Goods::get(['id'=>$id]);
                $Goods->goods_amount=$tonum;
                $Goods->save();
            }
            $loginId=session('loginId');
            $custom=Db::query("select * from user where user_nickname = '$loginId'");
            //dump($custom);
            $find=Db::query("select * from user,goods where goods.goods_owner = user.user_nickname and goods.id='$id'");
            $Record=new Record;
            $Record->goods_id = $id;
            $Record->goods_name = $gwcbuy[$i]["name"];
            $Record->goods_price = $gwcbuy[$i]["price"];
            $Record->goods_toprice = $gwcbuy[$i]["toprice"];
            $Record->goods_amount = $gwcbuy[$i]["num"];
            $Record->owner_name = $find[0]['goods_owner'];
            $Record->owner_address = $find[0]['user_address'];
            $Record->owner_phone = $find[0]['user_phone'];
            $Record->customer_name = $custom[0]['user_nickname'];
            $Record->customer_address = $custom[0]['user_address'];
            $Record->customer_phone = $custom[0]['user_phone'];
            $Record->save();
            
            if(session('?gwc') != null){
                $arr = $_SESSION["gwc"];
                dump($arr);
                if($arr[$i]["id"] == $id)
                    {
                        unset($arr[$i]);
                    }
                $_SESSION["gwc"] = $arr;
            }
        }
        unset($gwcbuy);
        return $this->success('购买成功','/secondhand/index/index');
    }
}
?>