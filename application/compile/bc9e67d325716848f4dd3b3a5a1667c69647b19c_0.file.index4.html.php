<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 05:21:32
  from 'E:\wamp64\www\php\mvc\application\template\index\index4.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b375c5d6d01_55686439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9e67d325716848f4dd3b3a5a1667c69647b19c' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index4.html',
      1 => 1598764732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b375c5d6d01_55686439 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">定制<span style="color: #FFFF00;font-family: 'HanHei-SC';margin-right:10px;">网站建设</span></h1>
    <p style="margin: 0 0 10px;display: block;">做企业<span style="color: #FFFF00;">需要</span>的网站，更做企业<span style="color: #FFFF00;">想要</span>的网站<br>
        创新互联就在你身边-专业<span style="color: #FFFF00;font-family: 'HanHei-SC';">建站十年</span>
    </p>
</div>

</div>
</div>
<!-- 头部结束 -->

<!-- 怎么做 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
</section>
<div class="wm">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="wm1">
        <div class="wm2">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:50px;height:50px;margin-bottom: -10px;">
            <h4 style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

            </h4>
        </div>
    </div>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!-- 怎么做 -->


<!-- 解决问题 -->
<div class="wt">
    <div class="wt2">
        <section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
            <h2 style="font-size: 46px;font-family: 'HanHei-SC';text-align: left;color: #FC920E;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
            <p style="text-align: left;color: #FFFFFF; padding-right: 40%;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</p>
        </section>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="wt3">
            <i>
                <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:40px;height:40px;"></i>
            <p>
                <strong><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</strong><br>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

            </p>
        </div>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>



<!-- 解决问题 -->


<!-- 做什么 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="font-size: 46px;font-family: 'HanHei-SC';color:#121212;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>
</section>
<div class="dowhat">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="dleft">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="">
    </div>
    <div class="dright">
        <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
        <p >
          <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

        </p>
        <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</a>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div class="dingzhi">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[3], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="dz2">
        <div class="dzright">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="display: block; max-width: 100%; height: auto;">
        </div>
        <div class="dzleft" style="margin-top: -200px" >
            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            <p >
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

            </p>

            <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</a>
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>




<div class="ggdz"style=" transition: all 1s ease 0s, opacity 2s ease 0s;opacity: 0;padding: 30px 0px;width: 1200px; margin-right: auto; margin-left: auto;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[4], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="gdleft">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="">
    </div>
    <div class="gdright">
        <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
        <p >
            <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

        </p>

        <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</a>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

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

<!-- 做什么 -->

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index4.css">
<?php echo '<script'; ?>
>

    window.onfocus=function(){
        dzright.style.transform="rotateY(-180deg)";
    }

    //   做什么
    var dowhat=document.querySelector(".dowhat")

    console.log(dowhat.offsetTop-document.documentElement.clientHeight)

    window.addEventListener("scroll",function(){
        var st=document.documentElement.scrollTop;
        if(dowhat.offsetTop-document.documentElement.clientHeight<st){
            dowhat.style.animationName="leftSpeedIn";
        }
    },false)




    // 网站定制

    var dzleft=document.querySelector(".dzleft")
    var dzright=document.querySelector(".dzright")
    var dingzhi=document.querySelector(".dingzhi")
    dzleft.style.opacity=1
    dzright.style.opacity=1
    console.log(dingzhi.offsetTop)

    window.addEventListener("scroll",function(){
        var st=document.documentElement.scrollTop;
        if(dingzhi.offsetTop-document.documentElement.clientHeight<st){
            console.log(1)
            dzright.style.transform="rotateY(180deg)";

        }
    },false)

    window.addEventListener("scroll",function(){
        var st=document.documentElement.scrollTop;
        if(dingzhi.offsetTop-document.documentElement.clientHeight<st){
            console.log("a")
            dzleft.style.transform="translateY(200px)";
        }
    },false)


    //高端定制
    var ggdz=document.querySelector(".ggdz")
    console.log(ggdz)
    console.log(ggdz.offsetTop-document.documentElement.clientHeight)
    window.addEventListener("scroll",function(){
        var st=document.documentElement.scrollTop;
        if(ggdz.offsetTop-document.documentElement.clientHeight+50<st){
            ggdz.style.opacity=1
        }
    },false)

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
