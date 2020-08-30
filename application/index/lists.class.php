<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class lists{
    function int(){
        $db=new db();
        $db=$db->db;
        $cid=$_GET["cid"];
        $result=$db->query("select *from categroy where cid=".$cid);
        $currentinfo=$result->fetch_assoc();
        $result=$db->query("select * from content where cid=".$cid);
        $condata=array();
        while($row=$result->fetch_assoc()){
            $condata[]=$row;
        }

        $smarty=new smarty();
        $header=new getheader();
        $smarty->assgin("menudata",$header->menudate);
        $smarty->assgin("header",$header->header);
        $smarty->assgin("footer",$header->footer);
        $smarty->assgin(" currentinfo", $currentinfo);
        $smarty->assgin("condata",$condata);
//             $smarty->display("index/lists.html");
        $smarty->display("index/".$currentinfo["tpl_name"]);

    }
}
