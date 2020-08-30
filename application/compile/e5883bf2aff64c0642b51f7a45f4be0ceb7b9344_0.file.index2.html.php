<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:24:10
  from 'E:\wamp64\www\php\mvc\application\template\index\index2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b9a6a0b3015_18236099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5883bf2aff64c0642b51f7a45f4be0ceb7b9344' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\index2.html',
      1 => 1598790245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b9a6a0b3015_18236099 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 style="font-size: 60px;font-family: 'HanHei-SC';">
        <span style="color: #FFFF00;font-family: 'HanHei-SC';margin-right:10px;">网站建设</span>合作客户精彩案例</h1>
    <p style="margin: 0 0 10px;display: block;">
        <span style="color: #FFFF00;">10年</span>不同的企业需求不同的制作出精美出色的网站<br>
        下一个效果非凡网站就是您的？
    </p>
</div>

</div>
</div>


<!-- 案例 -->
<div class="case">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>

        <li class="case1">
            <a href="<?php echo ENTRY_ADD;?>
/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" target="_blank">
                <p class="p1" >
                    <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="" style="width: 100%; height: 100%;" class="cimg">
                </p>
<!--                <span class="span1">-->
<!--                    <img src="imgs/ca11.png" alt="">-->
<!--                </span>-->
            </a>
            <div class="txt">
                <p class="p2"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</p>
                <i ><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</i>
                <span></span>
            </div>
        </li>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <div class="more">
        <a href="">查看更多网站成功建设案例</a>
    </div>
</div>

<!-- 案例结束 -->

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
/erweima.png" alt="">
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
    // 案例
    // var span1=document.querySelectorAll(".span1")
    var color=["blue","yellow","green","black","orange","purple","#9f76fe","#dfb6f4","#fbf1fb","#fd2596","#d5fdd5","#f1fdd5","#fdd5d5","fdd5f6","#f8c7ca","#956da8","#514569","#00bcd4","#92c760"]
    var case1=document.querySelectorAll(".case1")
    var p1=document.querySelectorAll(".p1")
    var p2=document.querySelectorAll(".p2")
    var tspan=document.querySelectorAll(".txt span")
    var txt=document.querySelectorAll(".txt")
    var txti=document.querySelectorAll(".txt i")
    var cimg=document.querySelectorAll(".cimg")

    for(let i=0;i<case1.length;i++){
        case1[i].onmouseover=function(){
            // span1[i].style.bottom="0";
            tspan[i].style.top="-20%"
            p2[i].style.color="#fff";
            txti[i].style.color="#fff";
            cimg[i].style.transform="translateZ(80px)";
            tspan[i].style.background=color[Math.floor(color.length*Math.random())]
        }
        case1[i].onmouseout=function(){
            // span1[i].style.bottom="-116px"
            tspan[i].style.top="-100%"
            p2[i].style.color="#000";
            txti[i].style.color="#8f8f8f";
            cimg[i].style.transform="translateZ(-80px)";

        }
    }



    window.onscroll=function(){
        var st=document.documentElement.scrollTop;
        for(var i=0;i<case1.length;i++){
            if(case1[i].offsetTop-document.documentElement.clientHeight<st){
                console.log(1)
                case1[i].style.opacity=1;
                console.log(case1[i].style.opacity)
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
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index2.css">

</body>
</html><?php }
}
