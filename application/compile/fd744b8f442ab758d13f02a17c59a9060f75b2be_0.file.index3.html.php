<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 03:08:58
  from 'E:\wamp64\www\php\mvc\application\template\index\index3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b184ae90bd2_56647307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd744b8f442ab758d13f02a17c59a9060f75b2be' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index3.html',
      1 => 1598756937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b184ae90bd2_56647307 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>响应式网站</title>
</head>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
animate.js"><?php echo '</script'; ?>
>
<body>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="banner">
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">企业为什么要建
        <span style="color: #FFFF00;font-family: 'HanHei-SC';margin-right:10px;">响应式网站</h1>
    <p style="margin: 0 0 10px;display: block;">
        互联网多屏时代1个响站可实现360全平台营销<br>
    <p style="font-size: 18px;font-family: 'HanHei-SC';">
        <span> ✔成本低 </span>
        <span style="margin-left:30px;">✔体验好</span>
        <span style="margin-left:30px;">✔易推广</span>
        <span style="margin-left:30px;">✔流量大</span>
        <span style="margin-left:30px;">✔客源多</span>
        <span style="margin-left:30px;">✔易运维</span>

    </p>
    </p>
</div>
</div>
</div>


<!-- 响应式网站优势 -->
<div class="xys">
    <section>
        <h2 style="font-size: 46px;color: #01E188;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["info"];?>
</p>
    </section>
    <div class="xys1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="xys2">
            <div class="xys3" >
                <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:60px;height:60px;">
            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</p>
            <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<!-- 响应式网站优势 -->

<!-- 响应式网站优势 2-->
<div class="good">
    <div class="good1">
        <section>
            <h2 style="font-size: 46px;color: #01E188;font-family: 'HanHei-SC';"><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["info"];?>
</p>
        </section>
    </div>
    <div class="good2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="good3">
            <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width:50px;height:55px;">
            <h4 style="font-size: 14px; font-weight: bold; color: #313131;margin-top:0px;"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            <p> <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>
        </div>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="good4">
        <div class="good5">
            <div class="qiqiu1 qiqiu">
                <p>10</p>
                <span style="line-height: 34px;display: block;color: #333;">年行业经验</span>
            </div>
            <div class="qiqiu2 qiqiu">
                <p>1000</p>
                <span style="line-height: 34px;display: block;color: #333;">服务上千客户</span>
            </div>
            <div class="qiqiu3 qiqiu">
                <p>99%</p>
                <span style="line-height: 34px;display: block;color: #333;">客户续费率</span>
            </div>
            <div class="qiqiu4 qiqiu">
                <p>24</p>
                <span style="line-height: 34px;display: block;color: #333;">7*24小时服务支持</span>
            </div>
            <div class="qiqiu5 qiqiu">
                <p>0</p>
                <span style="line-height: 34px;display: block;color: #333;">元快速备案</span>
            </div>
        </div>
        <div class="bolang1 bl"></div>
        <div class="bolang2 bl"></div>

    </div>
</div>



<!-- 响应式网站优势 2-->

<!-- 全面营销 -->
<div class="yx">
    <section>
        <h2 style="font-size: 46px;color: #01E188;font-family: 'HanHei-SC';">全方位响应式营销时代，你准备好了吗？</h2>
        <p>十年巨变！ 移动互联网一颠覆我们的时代，商业、社交、视频、新闻、工作等领域。移动应用渗透率已超过80%，<br>在团购、旅游和零售业，移动端收入规模已超过PC端，手机已经成为企业不可或缺的线上阵地。
        </p>
    </section>
</div>


<!-- 全面营销 -->
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
        //气球波浪晃动
        var qiqiu=document.querySelectorAll(".qiqiu")
        var good4=document.querySelector(".good4")
        var bl=document.querySelectorAll(".bl")



        function move(){
            for(var i=0;i<qiqiu.length;i++){
                qiqiu[i].style.top=qiqiu[i].offsetTop+5+"px"
                qiqiu[i].style.left=qiqiu[i].offsetLeft+10+"px"
            }
            for(var i=0;i<bl.length;i++){

                bl[i].style.left=bl[i].offsetLeft+10+"px"
            }
        }

        function move2(){
            for(var i=0;i<qiqiu.length;i++){
                qiqiu[i].style.top=qiqiu[i].offsetTop-5+"px"
                qiqiu[i].style.left=qiqiu[i].offsetLeft-10+"px"
            }
            for(var i=0;i<bl.length;i++){

                bl[i].style.left=bl[i].offsetLeft-10+"px"
            }
        }

        window.onscroll=function(){
            var st=document.documentElement.scrollTop;
            if(good4.offsetTop-document.documentElement.clientHeight-100==st){
                move();
                move2();

            }
        }





        good4.onmouseover=function(){
            move();
        }
        good4.onmouseout=function(){
            move2();
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
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index3.css">


</body>
</html><?php }
}
