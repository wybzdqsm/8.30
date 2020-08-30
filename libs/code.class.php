<?php
namespace libs;
class code{
    public $type;
    public $width;
    public $height;
    public $codelen;
    public $seed;
    public $fontsize;
    public $fontangle;
    public $linenum;
    public $linewidth;
    public $pixnum;
    public $fontfile;
    function __construct(){
        global $config;
         $this->type=$config["code"]["type"]?$config["code"]["type"]:"png";
         $this->width=$config["code"]["width"]?$config["code"]["width"]:160;
         $this->height=$config["code"]["height"]?$config["code"]["height"]:50;
        $this->codelen=$config["code"]["codelen"]?$config["code"]["codelen"]:4;
         $this->seed=$config["code"]["seed"]?$config["code"]["seed"]:"abcdefhkmnoprstuvwxyzABCDEFGHKLMNOPRSTUVWXYZ345678";
        $this->fontsize=$config["code"]["fontsize"]?$config["code"]["fontsize"]:array("min"=>20,"max"=>35);
         $this->fontangle=$config["code"]["fontangle"]?$config["code"]["fontangle"]:array("min"=>-15,"max"=>15);
         $this->linenum=$config["code"]["linenum"]?$config["code"]["linenum"]:array("min"=>1,"max"=>5);
        $this->linewidth=$config["code"]["linewidth"]?$config["code"]["linewidth"]:array("min"=>1,"max"=>3);
        $this->pixnum=$config["code"]["pixnum"]?$config["code"]["pixnum"]:array("min"=>80,"max"=>150);
        $this->fontfile=$config["code"]["fontfile"]?$config["code"]["fontfile"]:"E:\wamp64\www\php\mvc\application\static/font/demo.TTF";

    }
    function createcanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->setcolor());
    }
    private function setcolor($type="background"){
          $r=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        $g=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        $b=$type=="background"?mt_rand(20,125):mt_rand(126,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    private function gettext(){
        $str="";
        for($i=0;$i<$this->codelen;$i++){
            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];
        }
        return $str;
    }
    private function settext()
    {
        $str = $this->gettext();
        $this->str=strtolower($str);
        for ($i = 0; $i < $this->codelen; $i++) {
             $size=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
            $angle=mt_rand($this->fontangle["min"],$this->fontangle["max"]);
            $space=$this->width/($this->codelen*2+1);
            $box=imagettfbbox($size,$angle,$this->fontfile,$str[$i]);
            imagettftext($this->image, $size, $angle, mt_rand(max($space*($i*2-1),0)+5,$space*($i*2+1)-5), ($box[0]-$box[7])+mt_rand(0,$this->height-($box[0]-$box[7])), $this->setcolor("a"), "E:\wamp64\www\php\mvc\application\static/font/demo.TTF", $str[$i]);
        }
    }
    private function setline()
    {
        $num = mt_rand($this->linenum["min"], $this->linenum["max"]);
        for ($i = 0; $i < $num; $i++) {
            $x1 = mt_rand(0, $this->width / 2);
            $x2 = mt_rand($this->width / 2, $this->width);
            $y1 = mt_rand(0, $this->height);
            $y2 = mt_rand(0, $this->height);
            imagesetthickness($this->image, mt_rand($this->linewidth["min"], $this->linewidth["max"]));
            imageline($this->image, $x1, $y1, $x2, $y2,$this->setcolor("a"));
        }
    }
    private function setpix(){
        $num=mt_rand($this->pixnum["min"],$this->pixnum["max"]);
        for($i=0;$i<$num;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->setcolor());
        }
    }
   function out(){

    header("content-type:image/".$this->type);
    $this->createcanvas();
    $this->settext();
    $this->setline();
    $this->setpix();
   $outtype="image".$this->type;
   //写入cookie
       //setcookie("code",$this->str,"0","/");
       $_SESSION["code"]=$this->str;
   $outtype($this->image);
   imagedestroy($this->image);

}
}
//$code=new code();
//$code->codelen=5;
//$code->out();