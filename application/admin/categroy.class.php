<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
class categroy{
    public $arr=array();
    function int(){
       $smarty=new smarty();
       $database=new db();
       $this->db=$database->db;
        $str="";
      $this->tree(0,$str);

       $smarty->assgin("data",$str);
       $smarty->display("admin/categroy.html");
    }

    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from categroy where pid=".$pid);
        while($row=$result->fetch_assoc()){
            if($row["isshow"]==1){
                $s="可见";
            }else{
                $s="不可见";
            }
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("_",$i).$row["cname"].'</td><td>'.$s.'</td><td><a class="btn add" href="javascript:;" attr="'.$row["cid"].'" >添加</a><a class="btn remove" href="/php/mvc/index.php/admin/categroy/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" >删除</a><a class="btn edit" href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'" >修改</a></td></tr>';
         $this->tree($row["cid"],$str,$i+1);

        }
    }
    function show(){
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from categroy where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);


    }
    function getoption(){
        $this->treeoption(0,$this->arr);
        echo json_encode($this->arr);
    }

    function treeoption($pid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from categroy where pid=".$pid);
        $i=0;
        while($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"],
            );
            $this->treeoption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
  function addpage(){

        $smarty=new smarty();
        $smarty->display("admin/addpage.html");
  }


    function add(){
        if(isset($_POST["cid"])){
            $gid=$_POST["cid"];
        }else{
            $gid=0;
        }
      $cname=$_POST["cname"];
        $isshow=$_POST["isshow"];
        $tpl_name=$_POST["tpl_name"];
        $info=$_POST["info"];
     $path=$_POST["imgurl"];

        $database=new db();
        $db=$database->db;
        $db->query("insert into categroy(cname,pid,isshow,tpl_name,info,imgurl) values('$cname',$gid,$isshow,'$tpl_name','$info','$path')");
        if($db->affected_rows>0){
            header("location:/php/mvc/index.php/admin/categroy");
        }

    }
    function del(){
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from categroy where pid=".$cid);
        if($result->num_rows>0){
            echo "<script>alert('请先删除子目录');location.href='/php/mvc/index.php/admin/categroy'</script>";
        }else {
            $db->query("delete from categroy where cid=" . $cid);
            if ($db->affected_rows > 0) {
                header("location:/php/mvc/index.php/admin/categroy");
            }
        }
    }
    function upload(){
        $smarty=new smarty();
        $smarty->display("admin/upload.html");
    }
    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/php/mvc/".$upload->fullpath;
        echo "$path";
    }

      function edit(){
        echo "修改内容";
      }
    function editcon()
    {
     $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $isshow=$_GET["isshow"];
        $info=$_GET["info"];
        $tpl_name=$_GET["tpl_name"];
        $imgurl=$_GET["imgurl"];

        $database=new db();
        $db=$database->db;
        $result=$db->query("update categroy set cname='{$cname}',pid={$pid},isshow={$isshow},info='{$info}',tpl_name='{$tpl_name}',imgurl='{$imgurl}' where cid=".$cid);
        if($db->affected_rows>0){
            echo "ok";
        }
    }
}
