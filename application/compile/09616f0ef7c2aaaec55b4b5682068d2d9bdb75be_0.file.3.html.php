<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 12:07:47
  from 'E:\wamp64\www\php\mvc\application\template\index\3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a4513c95563_62576859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09616f0ef7c2aaaec55b4b5682068d2d9bdb75be' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\3.html',
      1 => 1598702866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a4513c95563_62576859 (Smarty_Internal_Template $_smarty_tpl) {
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
   浪漫之恋
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
   <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
