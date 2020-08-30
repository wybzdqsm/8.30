<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 05:55:46
  from 'E:\wamp64\www\php\mvc\application\template\index\index5.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b3f62f2d413_12729498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff32ed3716208b291ab2d2a50b34ba565459537' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index5.html',
      1 => 1598766944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b3f62f2d413_12729498 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">网站没有营销力？一切白费力！</h1>
    <p style="margin: 0 0 10px;display: block;">别人建站帮您<span style="color: #FFFF00;">省</span>钱，我们建站帮你<span style="color: #FFFF00;">挣</span>钱。<br>
        创新互联就在你身边-<span style="color: #FFFF00;font-family: 'HanHei-SC';">营销专家</span>
    </p>
</div>

</div>
</div>
<!-- 头部结束 -->
<!-- 营销 -->
<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="  font-size: 46px;color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
</section>
<div class="section2">
    <p>
        在互联网+时代下，您需要打造营销型PC端电脑网站+手机网站+微信，快速建设真正的响应式营销型网站；<br>通过精准的营销策划+极致的访客体验+整站SEO优化布局，让您的网站轻松排名百度首页的同时转化率提升300%；
    </p>
</div>
<div class="yx">
    <div class="yxleft">

        <div class="yxleft1">
            <h4> <?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][0]["ctitle"];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][0]["info"];?>
</p>
        </div>

        <div class="yxleft1">
            <h4><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][1]["ctitle"];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][1]["info"];?>
</p>
        </div>
    </div>
    <div class="yxright">
        <div class="yxright1">
            <h4><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][2]["ctitle"];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][2]["info"];?>
</p>
        </div>
        <div class="yxright1">
            <h4><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][3]["ctitle"];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['coninfo']->value[0][3]["info"];?>
</p>
        </div>
    </div>
</div>


<!-- 订单 -->

<section style="text-align: center;line-height: 200%;color: #73777A;padding: 10px 0px;">
    <h2 style="color: #FF3300;font-size: 46px; font-family: 'HanHei-SC';">做有视觉冲击力的网站，让您的网络订单“飞”起来！</h2>
</section>
<div class="dingdan">
    <div class="dingdan1">
        <section>
            <h2 style="color: #FFFFFF;font-size: 46px; font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
            <p style="color:#fff;"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</p>
        </section>
    </div>
    <div class="dingdan2">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li style="margin-bottom: 50px">

                <div class="li5">
                    <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:46px;height:46px">
                    <p style="color: #FFFFFF;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</p>
                </div>
                <div class="li6">
                    <img src="<?php echo IMG_ADD;?>
dingdan1.png" alt="" style="width:46px;height:46px">
                    <p style="color: #FFFFFF;">网络栏目菜单</p>
                </div>

            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>

<!-- 推广词 -->
<section>
    <h2 style="font-size: 46px;color: #121212;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["info"];?>
</p>
</section>
<div class="tg">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <div class="tg1">
        <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:130px;height:130px;">
        <h4 style="font-size: 16px;font-weight: bold; padding: 10px 0px 0px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</p>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
index/index5.css">

<?php echo '<script'; ?>
>
    var li5=document.querySelectorAll(".li5")
    var li=document.querySelectorAll(".dingdan2 li")

    for(let i=0;i<li.length;i++){
        li[i].onmouseover=function(){

            li[i].style.transform="rotateX(180deg)";
        }

        li[i].onmouseout=function(){

            li[i].style.transform="rotateX(-180deg)";
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
