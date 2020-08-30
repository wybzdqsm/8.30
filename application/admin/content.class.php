<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
class content{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addcon.html");
    }
    function addcon(){
        $cid=$_POST["cid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $imgurl=$_POST["imgurl"];
        $info=$_POST["info"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into content (ctitle,cons,cid,imgurl,info) values ('$ctitle','$cons','$cid','$imgurl','$info')");
        if($db->affected_rows>0){
            echo "<script>alert('插入成功');location.href='/php/mvc/index.php/admin/content/add'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='/php/mvc/index.php/admin/content/add'</script>";
        }

    }


    function showlist(){
        $database=new db();
        $db=$database->db;

        $sql="select * from content as con left join categroy as cat on cat.cid=con.cid where 1=1";

   if(isset($_POST["cid"])&&!empty($_POST["cid"])){
       $sql.=" and con.cid=".$_POST["cid"];
   }
        if(isset($_POST["ctitle"])&&!empty($_POST["ctitle"])){
            $wordkey=$_POST["ctitle"];
            $sql.=" and ctitle like '%".$wordkey."%'";
        }
        if(isset($_POST["order"])&&!empty($_POST["order"])){
            $order=$_POST["order"];
            $sql.=" order by conid ".$order;
        }

        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assgin("data",$arr);
        $smarty->display("admin/showlist.html");
    }
    function show(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assgin("data",$row);
        $smarty->display("admin/show.html");
    }
    function edit(){

         $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assgin("data",$row);
        $smarty->display("admin/editcon.html");
    }
    function editcon(){
      $conid=$_POST["conid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $cid=$_POST["cid"];
        $imgurl=$_POST["imgurl"];
        $info=$_POST["info"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("update content set  ctitle='$ctitle',cons='$cons',cid='$cid',imgurl='$imgurl',info='$info' where conid=".$conid);
        if($db->affected_rows>0){
            echo "<script>alert('修改成功');location.href='/php/mvc/index.php/admin/content/showlist'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='/php/mvc/index.php/admin/content/edit?conid={$conid}'</script>";
        }

    }

    function del(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query(" delete from content where conid=".$conid);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功');location.href='/php/mvc/index.php/admin/content/showlist'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='/php/mvc/index.php/admin/content/showlist'</script>";
        }
    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/php/mvc/".$upload->fullpath;
        echo "$path";
    }
    function tinyuploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/php/mvc/".$upload->fullpath;

        echo json_encode(array('location' => $path));
    }



}