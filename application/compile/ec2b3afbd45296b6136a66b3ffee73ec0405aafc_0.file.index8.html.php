<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:18:44
  from 'E:\wamp64\www\php\mvc\application\template\index\index8.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b60e4da5a85_42197224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec2b3afbd45296b6136a66b3ffee73ec0405aafc' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index8.html',
      1 => 1598775522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b60e4da5a85_42197224 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">移动网站建设</h1>
    <p style="margin: 0 0 10px;display: block;">基于HTML5开发，适用于主流手机浏览器。<br>
        可以实现电脑版网站的所有功能开发，助力移动互联网。
    </p>
</div>
</div>
</div>


<section >
    <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
</section>

<div class="liaojie">
    <div class="lj1">
        <div class="lj2">
            <div class="i1"></div>
            <div class="i2"></div>
            <div class="i3"></div>
            <div class="i4"></div>
        </div>
        <div class="fig">2008
        </div>
        <p>创新互联</p>
    </div>
    <div class="lj1">
        <div class="lj2">
            <div class="i1"></div>
            <div class="i2"></div>
            <div class="i3"></div>
            <div class="i4"></div>
        </div>
        <div class="fig">2008
        </div>
        <p>创新互联</p>
    </div>
    <div class="lj1">
        <div class="lj2">
            <div class="i1"></div>
            <div class="i2"></div>
            <div class="i3"></div>
            <div class="i4"></div>
        </div>
        <div class="fig">2008
        </div>
        <p>创新互联</p>
    </div>
    <div class="lj1">
        <div class="lj2">
            <div class="i1"></div>
            <div class="i2"></div>
            <div class="i3"></div>
            <div class="i4"></div>
        </div>
        <div class="fig">2008
        </div>
        <p>创新互联</p>
    </div>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<div class="about">
 <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div style="background: #F5F6F7">
<!-- 资质荣誉开始 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px; color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</p>
</section>
<div class="honor">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
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
</div>
<!-- 资质荣誉结束 -->


<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px; color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>

    <div class="chengpin">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="cp1">
            <figure>
                <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="">
                <div style="font-size: 20px; font-weight: bold; padding: 20px 0px 10px;color:#000"> <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</div>
                <p>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</a>
                </p>
            </figure>
        </div>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>



    <!-- 联系我们 -->
    <div class="lianxi">
        <div class="con">
            <h2><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["cname"];?>
</h2>
            <p><strong><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["info"];?>
</strong></p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[3], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
           <p><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</p>
            <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

            </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
index/index8.css">


    <?php echo '<script'; ?>
>
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






        var i3=document.querySelectorAll(".i3")
        var i4=document.querySelectorAll(".i4")
        var lj1=document.querySelectorAll(".lj1")

        window.addEventListener("scroll",function(){
            var st=document.documentElement.scrollTop;
            for(var i=0;i<lj1.length;i++){
                if(lj1[i].offsetTop-document.documentElement.clientHeight+200<st){
                    for(var i=0;i<i3.length;i++){
                        i3[i].style.top="32px"
                        i4[i].style.top="-2px"
                    }

                }
            }
        })



        var lianxi=document.querySelector(".lianxi")
        window.addEventListener("scroll",function(){
            var st=document.documentElement.scrollTop;
            if(lianxi.offsetTop-document.documentElement.clientHeight+100<st){

                lianxi.style.top=0;
                lianxi.style.opacity=1;

            }
        })






    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
