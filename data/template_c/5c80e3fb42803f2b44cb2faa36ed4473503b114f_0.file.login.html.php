<?php /* Smarty version 3.1.27, created on 2015-08-27 06:44:58
         compiled from "tpl\admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2228255de95ca590b40_68234048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1440650103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2228255de95ca590b40_68234048',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55de95ca5ed748_21726828',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55de95ca5ed748_21726828')) {
function content_55de95ca5ed748_21726828 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2228255de95ca590b40_68234048';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="web/css/login.css">
  <?php echo '<script'; ?>
 src="web/js/jQuery.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="container">
		<div class="login">
			<div class="login-title">
				<h3>Admin Panel Login</h3>
			</div>
			<div class="login-body">
				<form method="post" action="http://localhost/news/admin.php?controller=login&&method=login">
					<div class="login-account">
						<input type="text" placeholder="User ID" name="username"/>
						<span class="glyphicons glyphicons-user"></span>
					</div>
					<div class="login-password">
						<input type="password" placeholder="Password" name="password" /><span class="glyphicons glyphicons-lock"></span>
					</div>
					<button type="submit" class="btn btn-submit">Login</button>
				</form>
			</div>
			<div class="login-others">
				<div class="forget-password"><a href="">Forgot Password?</a></div>
				<div class="remenber-password"><input type="checkbox" /><span>Remember Me</span></div>
			</div>
		</div>
	</div>
  <?php echo '<script'; ?>
 src="web/js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>