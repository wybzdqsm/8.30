<?php
//if(!defined("MVC")){
//    die("非法侵入");
//}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class show{
    function int(){
        $db=new db();
        $db=$db->db;
        $conid=$_GET["conid"];

        $result=$db->query("select * from content where conid=".$conid);
        $condata=$result->fetch_assoc();

        $smarty=new smarty();
        $header=new getheader();
        $smarty->assgin("menudata",$header->menudate);
        $smarty->assgin("header",$header->header);
        $smarty->assgin("footer",$header->footer);
        $smarty->assgin("condata",$condata);
       $smarty->display("index/show.html");

    }
}
