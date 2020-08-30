<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class categroy{
    function int(){
     $_GET["cid"];
      $smarty=new smarty();
      $db=new db();
      $db=$db->db;
      $cid=$_GET["cid"];
      $result=$db->query("select * from categroy where cid=".$cid);
      $currentinfo=$result->fetch_assoc();
      $result=$db->query("select * from categroy where pid=".$cid);
      $soninfo=array();
      while ($row=$result->fetch_assoc()){
          $soninfo[]=$row;
      }
        $coninfo=array();
       foreach($soninfo as $k=>$v){
           $cid=$v["cid"];
           $result=$db->query("select * from content  where cid=$cid");
           while($row=$result->fetch_assoc()){
                $coninfo[$k][]=$row;
           }
       }

        $header=new getheader();
        $smarty->assgin("menudata",$header->menudate);
        $smarty->assgin("header",$header->header);
        $smarty->assgin("footer",$header->footer);
        $smarty->assgin("soninfo",$soninfo);
        $smarty->assgin("currentinfo",$currentinfo);
        $smarty->assgin("coninfo",$coninfo);
      $smarty->display("index/index".$_GET["cid"].".html");
    }
}