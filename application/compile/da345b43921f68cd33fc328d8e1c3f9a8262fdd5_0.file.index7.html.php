<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:37:34
  from 'E:\wamp64\www\php\mvc\application\template\index\index7.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b573e1e5774_72576037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da345b43921f68cd33fc328d8e1c3f9a8262fdd5' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index7.html',
      1 => 1598773052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b573e1e5774_72576037 (Smarty_Internal_Template $_smarty_tpl) {
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
<!-- 头部结束 -->

<!-- 手机网站建设 -->
<section >
    <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
</section>

<div class="contain">
    <h3 style="padding: 32px 0px 33px; font-size: 16px;">
  <span>
      <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][0]["ctitle"];?>

  </span>
        <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][0]["info"];?>

    </h3>
    <h3 style="padding: 32px 0px 33px; font-size: 16px;">
        <span style="padding-left: 170px;">
           <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][1]["ctitle"];?>

        </span>
        <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][1]["info"];?>

    </h3 >
    <h3 style="padding: 32px 0px 33px; font-size: 16px;">
            <span style="padding-left: 230px;">
              <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][2]["ctitle"];?>

            </span>
        <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][2]["info"];?>
。
    </h3>
    <h3 style="padding: 32px 0px 33px; font-size: 16px;">
                <span style="padding-left: 150px;">
                   <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][3]["ctitle"];?>

                </span>
        <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][3]["info"];?>

    </h3>
</div>



<!-- 移动端 -->
<div class="pc">
    <div class="pc1">
        <section >
            <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</p>
        </section>
    </div>
    <div class="pc2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="pc3">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:60px ;height:60px;">
            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            <p style="padding: 0px 10px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>


<div class="mphone" >
    <section >
        <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>
    </section>
    <img src='<?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["imgurl"];?>
' alt="">
</div>


<div style="width:100%;background: #EEEEEE;text-align: center;padding: 20px 0px;">
    <div class="mphone">
        <section >
            <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["cname"];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["info"];?>
</p>
        </section>
        <img src='<?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["imgurl"];?>
' alt="">
    </div>
</div>


<div class="mphone" >
    <section >
        <h2 style="font-size: 46px; color: #121212; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[4]["cname"];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[4]["info"];?>
</p>
    </section>
    <img src='<?php echo $_smarty_tpl->tpl_vars['soninfo']->value[4]["imgurl"];?>
' alt="">
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
index/index7.css">
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
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
