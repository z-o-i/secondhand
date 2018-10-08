<?php
namespace app\secondhand\controller;
use think\Controller;
use app\secondhand\Model\Goods;
use think\Request;
use think\Session;
use think\Db;
class Product extends Controller{
    public function detail($id=null){
        Session::get('loginId');
        $goods = Goods::get($id);
        $gid=Goods::where('id',$id)->value('id');
        //echo "$gid";
        $this->assign('goods',$goods);
        $find=Db::query("SELECT user_address FROM `user`,`goods` WHERE user.user_nickname = goods.goods_owner AND goods.id='$gid'");
        $arr2 = array_column($find, 'user_address');
        //dump($arr2);
        $ex=explode("-", $arr2[0]);
        //dump($ex);
        $this->assign('find',$ex);
        $pic=Db::query("SELECT image FROM `pic` WHERE goods_id = '$gid'");
        $arr3 = array_column($pic, 'image');
        //print_r($arr3);
        $this->assign('pic',$arr3);
        $owner=Db::query("SELECT goods_owner FROM `goods` WHERE id = '$gid'");
        $arr4 = array_column($owner, 'goods_owner');
        //print_r($arr4);
        $sameowner=Db::query("SELECT * FROM `goods` WHERE goods_owner = '$arr4[0]' AND id<>'$gid' ");
        $this->assign('more',$sameowner);
        $type=Db::query("select case goods_type when 1 then '小卡卡贴' when 2 then '专辑海报' when 3 then '明信写真' when 4 then '衣服配饰' when 5 then '限量定制' when 6 then '其它周边' end as type from goods where goods.id='$gid'");
        $this->assign('type',$type);
        $typenum=Db::query("select goods_type from goods where goods.id='$gid'");
        //dump($typenum[0]['goods_type']);
        $this->assign('typenum',$typenum);
        return $this->fetch();
    }

    public  function add(){
        Session::set('gwc');
        $ids=Request::instance()->post('id');
        //dump($ids);
        $goods = Goods::get($ids);
        $gnum=Goods::where('id',$ids)->value('goods_amount');
        $num='1';
        $name=Request::instance()->post('name');
        $price=Request::instance()->post('price');
        $image=Request::instance()->post('image');
        if(empty($_SESSION["gwc"])){
            //购物车为空
            $arr[]=array(
                "id"=>"$ids",
                "name"=>"$name",
                "num"=>"$num",
                "gnum"=>"$gnum",
                "price"=>"$price",
                "image"=>"$image"
            );
            $_SESSION["gwc"]=$arr;
            //print_r($arr);
        }
        else{
            //购物车不为空
            $arr = $_SESSION["gwc"];
            //print_r($arr);
            //把购物车的状态取出来
            $chuxian = false;
            //定义一个变量；用来表示是否出现，默认是未出现
            foreach ($arr as $v) {
                //如果这里面有这件商品
                //dump($v);
                if ($v["id"] == $ids) //如果取过来的$v[0]（商品的代号）等于$ids那么就证明购物车中已经有了这一件商品
                {
                    $chuxian = true;
                    //如果出现，直接把chuxian改成true
                }
            }
            if($chuxian)
            {
                //购物车中有此商品
                for($i=0;$i<count($arr);$i++)
                {
                    if($arr[$i]["id"] == $ids && $arr[$i]["num"]<$gnum)
                    {
                        //把点到的商品编号加1
                        $arr[$i]["num"] += 1;
                    }elseif ($arr[$i]["id"] == $ids) {
                        $arr[$i]["num"] = $gnum;
                        return $this->error('已是库存最大数量','/secondhand/buycar/index');
                    }
                }
                $_SESSION["gwc"] = $arr;
            }
            else
            {
                //这里就只剩下：购物车里有东西，但是并没有这件商品
                $asg = array(
                    "id"=>"$ids",
                    "name"=>"$name",
                    "num"=>"$num",
                    "gnum"=>"$gnum",
                    "price"=>"$price",
                    "image"=>"$image"
                );
                //设一个小数组
                $arr[] = $asg;
                $_SESSION["gwc"]=$arr;
            }
        }
        //print_r($arr);
        $this->assign('goods',$arr);
        return $this->success('成功加入购物车','/secondhand/buycar/index');
    }
}
?>