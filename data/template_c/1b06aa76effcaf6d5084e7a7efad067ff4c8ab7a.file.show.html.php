<?php /* Smarty version Smarty-3.1-DEV, created on 2015-12-04 16:13:40
         compiled from "tpl\index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:7794566146daa9c1f4-63597133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b06aa76effcaf6d5084e7a7efad067ff4c8ab7a' => 
    array (
      0 => 'tpl\\index\\show.html',
      1 => 1449216804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7794566146daa9c1f4-63597133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_566146daafb0d7_33202764',
  'variables' => 
  array (
    'data' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566146daafb0d7_33202764')) {function content_566146daafb0d7_33202764($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="img/css/content.css">
</head>

<body>
	<div id="header">
		<div id="twitter">Shanghai Changlei</div>
		<ul id="nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Applications</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Contact us</a></li>
		</ul>
	</div>
	<div id="box">
		<div id="content">
			<h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
			<span>Time: <?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['data']->value['dateline']);?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Editor：<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</span>
			<div>
				<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

			</div>
		</div>
	</div>
	<div id="about">
		<h2>关于我们</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
	</div>
	<div id="footer">
		<div id="copyRight">
		Copyright©Sitename.com. <a href="">dreamtemplate.com.</a> All Rights Reserved
		<br/>
		<a href="">Home</a> | <a href="">Contact</a> | <a href="">RSS</a>
		</div>
	</div>
</body>
</html>
<?php }} ?>
