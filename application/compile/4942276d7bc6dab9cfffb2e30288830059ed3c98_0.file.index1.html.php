<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 04:31:41
  from 'E:\wamp64\www\php\mvc\application\template\index\index1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b2bad0d8d77_44057280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4942276d7bc6dab9cfffb2e30288830059ed3c98' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index1.html',
      1 => 1598761898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b2bad0d8d77_44057280 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index1.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
animate.js"><?php echo '</script'; ?>
>

    <title>Document</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="banner">
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">
        <span style="color: #FFFF00;font-family: 'HanHei-SC';margin-right:10px;">企业网站建设</span>预算有限？没关系。</h1>
    <p style="margin: 0 0 10px;display: block;">针对中小微企业提供
        <span style="color: #FFFF00;">高端定制网站建设</span>服务<br>
        仅需<strong style="color: #FFFF00;font-size: 46px;font-family: 'HanHei-SC';">2800</strong>，享高品质，低价格。
    </p>
</div>
</div>
</div>



<!-- 网站建设开始  -->
<div class="title">
    <h2><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p style=" text-align: center">
        <pre style="color: #73777A;font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</pre>
    </p>
</div>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="con1">
        <div class="con2">
            <h3 style="margin: 0px;color: #333333;font-size: 24px;font-family: inherit;
                    font-weight: 500;
                    line-height: 1.1;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h3>
            <p style="text-align: center; padding: 10px;"></p>
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:52px;height:57px;">
        </div>
        <div style="margin-left: 60px">
        <p class="p1" ><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</p>
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="con3">
    <div class="con4">
        <a href="">分享网站制作的一些小技巧</a>
    </div>
    <div class="con4">
        <a href="">PC端和移动端的网站建设有哪些区别</a>
    </div>
    <div class="con4">
        <a href="">网站设计的未来发展的趋势</a>
    </div>
</div>
<!-- 网站建设结束 -->


<!-- 精品案例开始 -->
<div class="title2">
    <h2  style="font-size: 46px;color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
 </p>
</div>
<div class="case" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="case1">
        <div class="case2" >
            <a href="" style="color: #337ab7;text-decoration: none;">
                <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="display: block; max-width: 100%;height: auto;vertical-align: middle;">
            </a>
            <div class="case3">
                <a href="" >
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</span>
                    <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h3>
                    <div class="text"><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</div>
                </a>

            </div>
        </div>
    </div>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div>

<!-- 精品案例结束 -->


<!-- 优势开始 -->

<div class="youshi">
    <section>
        <h2 style="font-size: 46px;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
        <p style="margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>
    </section>
    <div class="ys">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="ysicon">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:70px;height:70px;">
            <h3 style="font-size: 24px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</p>

        </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div class="ys2">
        <img src="<?php echo IMG_ADD;?>
y5.png" alt="" style="vertical-align: middle;">
        <div class="ys3 ysimg1">
            <div style="font-size: 30px; font-family: bebasregular;font-weight: bold;">1000</div>
            <p>服务上千客户</p>
        </div>
        <div class="ys3 ysimg2">
            <div style="font-size: 30px; font-family: bebasregular;font-weight: bold;">1</div>
            <p>一对一售后</p>
        </div>
        <div class="ys3 ysimg3">
            <div style="font-size: 30px; font-family: bebasregular;font-weight: bold;">24</div>
            <p>24销售服务</p>
        </div>
        <div class="ys3 ysimg4">
            <div style="font-size: 30px; font-family: bebasregular;font-weight: bold;">H5</div>
            <p>H5响应式</p>
        </div>
        <div class="ys3 ysimg5">
            <div style="font-size: 30px; font-family: bebasregular;font-weight: bold;">10</div>
            <p>10年行业经验</p>
        </div>

    </div>
</div>
<div class="ysbottom">
</div>



<!-- 资质荣誉开始 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px; color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["info"];?>
</p>
</section>
<div class="honor">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[3], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="honor1">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="">
        <div><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<!-- 资质荣誉结束 -->


<!-- 建站流程开始 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px; color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[4]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[4]["info"];?>
</p>
</section>
<div class="liucheng">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[4], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="lc1">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:50px;height:55px;">
        <h4 style="color: #666;font-weight: bold;font-size: 18px;">
            <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

        </h4>
        <pre style="font-size: 10px;text-align: left;margin-left: 20px;margin-top: 30px;line-height: 15px"><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</pre>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="con3">
    <div class="con4">
        <a href="">5大Alexa排名优化方法</a>
    </div>
    <div class="con4">
        <a href="">上海高架限行时间如同服务器维护限制</a>
    </div>
    <div class="con4">
        <a href="">简述高端网站建设中存在的难题</a>
    </div>
</div>
<div class="lianjie">
    <div class="lianjie1">
        <a href="" style="margin-left: 0;">德阳网站建设</a>
        <a href="">广汉网站建设</a>
        <a href="">南充网站建设</a>
        <a href="">眉山网站设计</a>
        <a href="">宜宾网站制作</a>
        <a href="">北京网站设计</a>
        <a href="">广州网站制作</a>
        <a href="">云娜网站设计</a>
        <a href="">小程序开发</a>
        <a href="">服务器托管</a>
        <a href="">四川网站建设</a>
        <a href="">乐山做网站</a>
        <a href="">营销网站建设</a>
        <a href="">四川做网站</a>
        <a href="">企业网站建设公司</a>
        <a href="">成都网站制作</a>
        <a href="">成都网站设计</a>
        <a href="">佛山App开发</a>
        <a href="">网络营销推广</a>
        <a href="">网站建设</a>
    </div>
</div>

<!-- 建站流程结束 -->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- 侧边栏 -->
<div class="cbnav">
    <ul >
        <li class="li1" style="background:#33cee5;">
            <a href="#">
                <img src="<?php echo IMG_ADD;?>
cb1.png" alt="" style="width:40px;height:40px;padding-left:15px;" >
                <p>1683211881</p>
            </a>
        </li>
        <li class="li1">
            <a href="#">
                <img src="<?php echo IMG_ADD;?>
cb2.png" alt="" style="width:30px;height:30px;padding-left:20px;" >
                <p>028-86922220</p>
            </a>
        </li>
        <li class="li1">
            <a href="#">
                <img src="<?php echo IMG_ADD;?>
cb3.png" alt="" style="width:30px;height:30px;padding-left:20px;" >
                <p>13518219792</p>
            </a>
        </li>
        <li class="li1 li2">
            <a href="#">
                <img src="<?php echo IMG_ADD;?>
cb4.png" alt="" style="width:30px;height:30px;padding-left:20px;" >
                <p>创新互联</p>
                <div class="erweima" >
                    <img src="<?php echo IMG_ADD;?>
erweima.png" alt="">
                </div>
            </a>
        </li>
        <li class="li1 li3" >
            <a href="#">
                <img src="<?php echo IMG_ADD;?>
cb5.png" alt="" style="width:30px;height:30px;padding-left:20px;" >
                <p style="border:none">返回顶部</p>
            </a>
        </li>
    </ul>
</div>

<div class="zixun">
    <div class="zixun2">
        <div class="zixun3">

        </div>
    </div>
</div>





<?php echo '<script'; ?>
>
    var con2=document.querySelectorAll(".con2")
    var img=document.querySelectorAll(".con1 img")
    var h3=document.querySelectorAll(".con2 h3")
    var p=document.querySelectorAll(".con2 pre")


    //    网站建设
    for(let i=0;i<con2.length;i++){
        con2[i].onmouseover=function(){
            con2[i].style.background="#00C1DE"
            // img[i].src="imgs/c1"+i+".png"
            h3[i].style.color="#fff"


        }
        con2[i].onmouseout=function(){
            con2[i].style.background="#F5F6F6"
            // img[i].src="imgs/c"+i+".png"
            h3[i].style.color="#797979"
        }
    }


    //精品案例
    var case2=document.querySelectorAll(".case2")
    var case3=document.querySelectorAll(".case3")
    var case3a=document.querySelectorAll(".case3 a")

    for(let i=0;i<case2.length;i++){
        case2[i].onmouseover=function(){
            case3[i].style.display="block"
        }
        case2[i].onmouseout=function(){
            case3[i].style.display="none"
        }
    }

    for(let i=0;i<case3.length;i++){
        case3[i].onmouseover=function(){
            case3a[i].style.marginTop="10px"
        }
        case3[i].onmouseout=function(){
            case3a[i].style.marginTop="30px"
        }
    }



    //  侧边导航栏
    var li1=document.querySelectorAll(".li1")
    var li2=document.querySelector(".li2")
    var li3=document.querySelector(".li3")
    var erweima=document.querySelector(".erweima")
    var st=document.documentElement.scrollTop;
    console.log(li1)
    for(let i=0 ;i<li1.length;i++){
        li1[i].addEventListener("mouseover",function(){
            for(var j=0;j<li1.length;j++){

                li1[j].style.background="#fff"

            }
            this.style.background="#33cee5"
        },false)

    }
    li2.addEventListener("mouseover",function(){
        erweima.style.display="block"
    },false)
    li2.addEventListener("mouseout",function(){
        erweima.style.display="none"
    },false)


    li3.addEventListener("click",function(){
        animate(document.documentElement,{
            scrollTop:0
        },500)

    })

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
