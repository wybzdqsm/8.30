<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:11:48
  from 'E:\wamp64\www\php\mvc\application\template\index\1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b9784656692_06278815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0f053c81c1158d611b38ac1e5497ba8f817914' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\1.html',
      1 => 1598789507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b9784656692_06278815 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<style>
    .hj{
        position: relative;
        width: 1200px;
        background: #fff;
        margin: 0 auto;

    }
    .fd{
        width: 100%;
        color: #fff;
        text-align: center;
        position: absolute;
        /*top: 0px;*/
        /*left: 0px;*/
    }
    .fd h2{
        color: #000;
        font-size: 38px;
        font-weight: normal;
        padding: 30px 0 10px;
    }
    .fd p{
        line-height: 30px;
        font-size: 24px;
    }

</style>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<div class="hj">
<div>
    <img src='<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
' alt="">
</div>

    <div class="fd">
        <h2><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</p>

    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index2.css">


</body>
</html><?php }
}
