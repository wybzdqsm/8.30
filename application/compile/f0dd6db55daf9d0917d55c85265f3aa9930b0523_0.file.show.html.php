<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 11:09:44
  from 'E:\wamp64\www\php\mvc\application\template\index\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a3778015ce4_16127264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0dd6db55daf9d0917d55c85265f3aa9930b0523' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\show.html',
      1 => 1598452091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a3778015ce4_16127264 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index1.css">

    <title>Document</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<!-- 网站建设开始  -->
<div class="title">
    <h2>成都网站建设</h2>
    <p style=" text-align: center">
    <pre style="color: #000;font-weight: bold">1v1网页设计制    网页定制开发    网络营销推广，售后无忧！</pre>
    </p>
</div>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
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
            <p style="text-align: center; padding: 10px;">成都做网站800元起</p>
            <img src="<?php echo IMG_ADD;?>
c0.png" alt="" style="width:52px;height:57px;">
        </div>
        <p class="p1">中小型企业官网宣传<br>做网站在互联网上宣传企业</p>
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
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
