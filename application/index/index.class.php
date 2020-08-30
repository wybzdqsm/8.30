<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class index{
function int(){
//$en=new engine();
//$en->settemplatedir(TPL_PATH);
//$en->setcompiledir(COMP_PATH);
//    $en->setcachedir(CACHE_PATH);
//    $en->cache=true;
//    $smarty->setTemplateDir(TPL_PATH);
//   $smarty->setCompileDir(COMP_PATH);
//数据库，关系型数据库、非关系型数据库 数据仓库（分布式数据库）
//php操作数据库   对象的方式访问

//    echo "<pre>";
//    var_dump($db);
   // $db->query("set names utf8");
//    $db->query("insert into demo(name,age,sex) value ('小刚',12,'man')");
//    $db->query("update demo set sex='man' where name='王五'");
//    $db->query("delete from demo where name='小刚'");

//    echo $db->affected_rows;
//    if($db->affected_rows>0){
//        echo "操作成功";
//    }

    //结果集对象

  //关联数组
//   var_dump($result->fetch_assoc());
//    var_dump($result->fetch_assoc());
    //   索引数组$result->fetch_row()；
    //既有关联又有索引数组$result->fetch_array();

    //对于数据库操作语言
   // $db->affected_rows>0  操作记录

    //$en->assgin("data",$arr);
//$en->display("index.html");

    $arr=array();
    $database=new db();
    $db=$database->db;
    $i=0;
    $result=$db->query("select * from categroy where pid=0");
    while($row=$result->fetch_assoc()){
        $arr[]=$row;
        $result1=$db->query("select * from categroy where pid=".$row["cid"]);
        while($row1=$result1->fetch_assoc()){
            $arr[$i]["child"]=$row1;
        }
        $i++;
    }
    $smarty=new smarty();
    $header=new getheader();
    $smarty->assgin("menudata",$header->menudate);
    $smarty->assgin("header",$header->header);
    $smarty->assgin("footer",$header->footer);
    $smarty->display("index/index.html");


//    $_GET["cid"];
//    $smarty=new smarty();
//    $db=new db();
//    $db=$db->db;
//    $cid=$_GET["cid"];
//    $result=$db->query("select * from categroy where cid=".$cid);
//    $currentinfo=$result->fetch_assoc();
//    $result=$db->query("select * from categroy where pid=".$cid);
//    $soninfo=array();
//    while ($row=$result->fetch_assoc()){
//        $soninfo[]=$row;
//    }
//    $coninfo=array();
//    foreach($soninfo as $k=>$v){
//        $cid=$v["cid"];
//        $result=$db->query("select * from content  where cid=$cid");
//        while($row=$result->fetch_assoc()){
//            $coninfo[$k][]=$row;
//        }
//    }
//
//    $header=new getheader();
//    $smarty->assgin("menudata",$header->menudate);
//    $smarty->assgin("header",$header->header);
//    $smarty->assgin("footer",$header->footer);
//    $smarty->assgin("soninfo",$soninfo);
//    $smarty->assgin("currentinfo",$currentinfo);
//    $smarty->assgin("coninfo",$coninfo);
//    $smarty->display("index/index".$_GET["cid"].".html");
}

function del(){
    echo "删除";
}
}