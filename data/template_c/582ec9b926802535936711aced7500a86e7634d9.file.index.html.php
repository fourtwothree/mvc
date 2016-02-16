<?php /* Smarty version Smarty-3.1-DEV, created on 2015-12-04 16:13:37
         compiled from "tpl\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5917566146c72f7107-15810102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582ec9b926802535936711aced7500a86e7634d9' => 
    array (
      0 => 'tpl\\index\\index.html',
      1 => 1449216791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5917566146c72f7107-15810102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_566146c741ae50_36677965',
  'variables' => 
  array (
    'data' => 0,
    'news' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566146c741ae50_36677965')) {function content_566146c741ae50_36677965($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>news</title>
<link rel="stylesheet" type="text/css" href="img/css/newslist.css" />
</head>

<body>
	<div id="header">
		<div id="logo"><img src="images/logo.jpg" /></div>
		<div id="twitter">Shanghai Changlei</div>
		<div id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Application</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>
	
	<div id="box">
		<ul class="info">
		<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
			<li>
				<a href="#"><img src="images/jaw crusher.jpg" /></a>
				<h2><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</p>
				<a class="moreInfo" href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">+ more info</a>
			</li>
		<?php } ?>	
		</ul>
	</div>
	<div id="about">
		<h2>关于我们</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
	</div>
	<div id="footer">
		<div id="copyRight">
			Copyright©Sitename.com <a href="#">mining machine for sale</a> All Rights Reserved<br />
<a href="#">Home</a> | <a href="#">Contact</a> | <a href="#">Application</a>										</div>
	</div>

</body>
</html>
<?php }} ?>
