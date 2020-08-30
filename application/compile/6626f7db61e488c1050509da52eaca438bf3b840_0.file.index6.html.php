<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:09:47
  from 'E:\wamp64\www\php\mvc\application\template\index\index6.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b50bbcc9fe5_96637758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6626f7db61e488c1050509da52eaca438bf3b840' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index6.html',
      1 => 1598771378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b50bbcc9fe5_96637758 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">商城网站的建设与开发</h1>
    <p style="margin: 0 0 10px;display: block;">专业提供电子商务网站建设与开发及电商个行业解决方案<br>
        <span style="font-family: 'HanHei-SC';font-size: 20px;margin-right: 50px;">✔网上商城</span>
        <span style="font-family: 'HanHei-SC';font-size: 20px;margin-right: 50px;">✔多用户商家入驻商城</span>
        <span style="font-family: 'HanHei-SC';font-size: 20px;">✔微信商城</span>
    </p>
</div>

</div>
</div>
<!-- 头部结束 -->

<section >
    <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
</section>
<div class="shop">
    <ul>

        <li class="shop1">
            <a href="">
                <img src="<?php echo IMG_ADD;?>
shop1.png" alt="" style="width:65px;height:50px;vertical-align: middle;">
                标准商城
            </a>
        </li>
        <li class="shop1">
            <a href="">
                <img src="<?php echo IMG_ADD;?>
shop1.png" alt="" style="width:65px;height:50px;vertical-align: middle;">
                分销商城
            </a>
        </li>
        <li class="shop1">
            <a href="">
                <img src="<?php echo IMG_ADD;?>
shop1.png" alt="" style="width:65px;height:50px;vertical-align: middle;">
                O2O多客户
            </a>
        </li>
        <li class="shop1">
            <a href="">
                <img src="<?php echo IMG_ADD;?>
shop1.png" alt="" style="width:65px;height:50px;vertical-align: middle;">
                代理分销商城
            </a>
        </li>

    </ul>
</div>

<div class="shopbg">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="shop2" style="z-index:1">
<!--        <section style="z-index: 0">-->
<!--            <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h2>-->
<!--            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>-->
<!--        </section>-->
        <div class="shop3">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" >
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<!-- 商城模块 -->

<section >
    <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</p>
</section>
<div class="shangcheng">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="sp1">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:40px;height:40px">
        <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>
    </div>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>


<!-- 适合行业 -->

<div class="hangye" >
    <div class="contain">
        <section >
            <h2 style="font-size: 46px; color: #fff; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
            <p style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>
        </section>
    </div>

    <div class="hy2" style="box-sizing: border-box;margin-left: 100px;">
        <ul style="box-sizing: border-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="hy3" style="height:500px">
                <img src='<?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["imgurl"];?>
' alt="" style="height: 500px">
                <div class="mask">
                    <div class="bg">
                    </div>
                    <div class="content" style="padding:20px;">
                        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:70px;height:70px;">
                        <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h3>
                        <p style="color:#fff;margin-top:40px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>
                    </div>
                </div>
            </li>
           <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>



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




    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index6.css">
    <?php echo '<script'; ?>
>
        var shop1=document.querySelectorAll(".shop1")
        var shop2=document.querySelectorAll(".shop2")

        for(let i=0;i<shop1.length;i++){
            shop1[i].onmouseover=function(){
                shop2[i].style.zIndex=1

            }
            shop1[i].onmouseout=function(){
                shop2[i].style.zIndex=0

            }



            var hy3=document.querySelectorAll(".hy3")
            var hyp=document.querySelectorAll(".content p")
            var bg=document.querySelectorAll(".bg")
            var content=document.querySelectorAll(".content")
            for(let i=0;i<hy3.length;i++){
                hy3[i].onmouseover=function(){
                    hyp[i].style.opacity=1
                    bg[i].style.background="#34b0c4"
                    content[i].style.marginTop="-20px"
                }
                hy3[i].onmouseout=function(){
                    hyp[i].style.opacity=0
                    bg[i].style.background="#161a1d"
                    content[i].style.marginTop="0px"
                }
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
