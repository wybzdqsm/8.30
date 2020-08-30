<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 12:23:23
  from 'E:\wamp64\www\php\mvc\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f47a5bb61abd3_90957805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26a5d31013a592b6714c437408032d3f293a1c8e' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\upload.html',
      1 => 1598530999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f47a5bb61abd3_90957805 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="<?php echo ENTRY_ADD;?>
/admin/categroy/uploadfile" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传图片">
</form>

</body>
</html><?php }
}
