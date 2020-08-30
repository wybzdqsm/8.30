<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 08:23:42
  from 'E:\wamp64\www\php\mvc\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a108ecfa918_74450324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a8ffc81a907c939c411920ac9cb70f6dcdf3856' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\index\\header.html',
      1 => 1598689421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a108ecfa918_74450324 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index1.css">
    <style>

    </style>
    <title>Document</title>
</head>
<body>
<div class="header">
    <div class="nav">
        <div class="topbg">
            <div class="topnav">
                <div class="topcon">
                    <div class="logo">
                        <img src="<?php echo IMG_ADD;?>
logo.png" alt="" style="vertical-align: middle;">
                    </div>
                    <div class="navlink">

                        <ul style="padding: 0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menudata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <li class="navli">
                                <a href="<?php echo ENTRY_ADD;?>
/index/categroy?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                              <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                                <ul style="width:130px;padding: 0">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                                    <li >
                                        <a href="<?php echo ENTRY_ADD;?>
/index/lists/int?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                                        </a>
                                    </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>

                                <?php }?>
                            </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



</body>
</html><?php }
}
