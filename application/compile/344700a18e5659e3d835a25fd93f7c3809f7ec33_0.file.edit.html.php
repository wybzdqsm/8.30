<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 14:17:21
  from 'E:\wamp64\www\php\mvc\application\template\admin\editcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f451d71827a32_98167400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344700a18e5659e3d835a25fd93f7c3809f7ec33' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\editcon.html',
      1 => 1598365036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f451d71827a32_98167400 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery2.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="<?php echo ENTRY_ADD;?>
/admin/content/edit" method="post">
        <div class="form-group" >
            <label for="cid">所属分类</label>
            <select class="form-control" id="cid" name="cid">

            </select>
        </div>
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle"  name="ctitle" placeholder="标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="cons">内容主题</label>

            <input type="text" class="form-control" id="cons"  name="cons" placeholder="内容" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cons'];?>
">
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
edit.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
