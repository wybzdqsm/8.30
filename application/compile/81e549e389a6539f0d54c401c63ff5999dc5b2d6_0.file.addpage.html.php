<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 02:18:05
  from 'E:\wamp64\www\php\mvc\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48695d22d6f0_19615889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e549e389a6539f0d54c401c63ff5999dc5b2d6' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\addpage.html',
      1 => 1598579505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48695d22d6f0_19615889 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/categroy/add" style="margin-top: 30px;margin-bottom: 30px" method="post">
    <input type="text" placeholder="添加一级栏目" name="cname"><br>
    <select name="isshow" id="">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select><br>
    <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
    栏目描述：<textarea name="info" cols="30" rows="10"></textarea>
    <input type="hidden" value="hidden" name="imgurl">
    <div class="upload">

    </div>

<!--    <input type="file" name="file">-->
    <input type="submit" value="提交">
</form>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.createView({
        parent: document.querySelector(".upload")
    })
    uploadObj.up("<?php echo ENTRY_ADD;?>
/admin/categroy/uploadfile",function (e){
       $("input[type=hidden]").val(e[0]);
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
