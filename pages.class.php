<?php
header("content-type:text/html;charset=utf8");
class pages{
    public $fullpath;
    public $pages=10;
    public $currentpages;
    public $total=200;
    private function geturlinfo(){
        $originpath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

        $search=substr(strchr($originpath,"?"),1);
        $reg='/&*pages=\d*/';
        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $this->currentpages=$_GET["pages"];
        }else{
            $this->currentpages=0;
        }

        $this->fullpath=$path."?".$search."&pages=";

    }
    public function  show(){
       $this->geturlinfo();
       $str="";
       $str.="<a href='{$this->fullpath}0'>[首页]</a>";
      $up= $this->currentpages-1>0?$this->currentpages-1:0;
        $str.="<a href='{$this->fullpath}$up'>[上一页]</a>";
        $start=$this->currentpages-floor($this->pages/2)<0?$this->currentpages:$this->currentpages-floor($this->pages/2);
       $end=$this->currentpages+$this->pages>($this->total/$this->pages)?($this->total/$this->pages):$this->currentpages+$this->pages;
        for($i=$start;$i<$end;$i++){
            if($i==$this->currentpages){
                $style="style=color:red";
            }else{
                $style="";
            }
            $str.="<a href='{$this->fullpath}{$i}' $style>[{$i}]</a>";
        }
        $next=$this->currentpages+1>($this->total/$this->pages)?($this->total/$this->pages):$this->currentpages+1;
        $str.="<a href='{$this->fullpath}$next'>[下一页]</a>";
        $last=$this->total/$this->pages-1;
        $str.="<a href='{$this->fullpath}$last'>[尾页]</a>";
        echo $str;
}

}
$pages=new pages();
$pages->show();