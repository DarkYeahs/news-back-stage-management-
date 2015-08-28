<?php /* Smarty version 3.1.27, created on 2015-08-14 03:32:19
         compiled from "tpl\admin\error.html" */ ?>
<?php
/*%%SmartyHeaderCode:203955cd45237ebb54_53880422%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd43252a76e0ded5be55c048ddce3408291ec3d' => 
    array (
      0 => 'tpl\\admin\\error.html',
      1 => 1439515929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203955cd45237ebb54_53880422',
  'variables' => 
  array (
    'loginErrorMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cd45238c5463_40244868',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cd45238c5463_40244868')) {
function content_55cd45238c5463_40244868 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203955cd45237ebb54_53880422';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
<!--
 * Created on 2015��8��12��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
-->
 <head>
  <title> </title>
 </head>
 <body>
 <div class="errorMsg"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['loginErrorMsg']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
 </body>
</html>
<?php }
}
?>