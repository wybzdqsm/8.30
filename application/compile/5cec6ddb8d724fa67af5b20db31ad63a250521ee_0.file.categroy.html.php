<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 14:29:09
  from 'E:\wamp64\www\php\mvc\application\template\admin\categroy.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a66356a2011_19355371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cec6ddb8d724fa67af5b20db31ad63a250521ee' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\categroy.html',
      1 => 1598711334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a66356a2011_19355371 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">

    <title>Document</title>
</head>
<body>
<!--<?php echo var_dump($_smarty_tpl->tpl_vars['data']->value);?>
-->
<div class="container">

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table-bordered table">
   <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
     <table>
         <tr><td>没有数据</td></tr>
     </table>
    <?php }?>
</div>
<style>
    .pannel{
        width:40%;height:50%;background: #fff;box-shadow: 0 0 4px #000;position: fixed;
        left:0;right:0;top:20%;margin: auto;z-index: 1;display: none;
    }
</style>
<div class="pannel addpannel">
    <div class="close">X</div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/categroy/add" method="post">
    <input type="text" name="cname">
        <input type="hidden" name="cid">
        <select name="isshow" id="">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述：<textarea name="info" cols="40" rows="3"></textarea>
        <input type="submit" value="提交">
    </form>
</div>


<div class="pannel editpannel">
    <div class="close">X</div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/categroy/add" method="post">
        <input type="text" name="cname">
        <select name="pid" id="opts" >
        </select>
        <input type="hidden" name="cid">
        <select name="isshow" id="isshow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模板"><br>
        栏目描述：<textarea name="info" cols="40" rows="3"></textarea>

        <div class="editupload">

        </div>
        <input type="hidden" name="imgurl" id="imgurl" >
        <input type="button" value="修改">
    </form>
</div>




<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
categroy.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.createView({
        parent: document.querySelector(".editupload")
    })
    uploadObj.up("<?php echo ENTRY_ADD;?>
/admin/categroy/uploadfile",function (e){
        $("#imgurl").val(e[0]);
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
