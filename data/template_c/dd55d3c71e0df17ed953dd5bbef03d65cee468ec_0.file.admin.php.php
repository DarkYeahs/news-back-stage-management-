<?php /* Smarty version 3.1.27, created on 2015-08-12 14:32:40
         compiled from "F:\php\news\admin.php" */ ?>
<?php
/*%%SmartyHeaderCode:527455cb3ce8d44b40_33279088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd55d3c71e0df17ed953dd5bbef03d65cee468ec' => 
    array (
      0 => 'F:\\php\\news\\admin.php',
      1 => 1439382661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527455cb3ce8d44b40_33279088',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cb3ce8db8e72_01865215',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cb3ce8db8e72_01865215')) {
function content_55cb3ce8db8e72_01865215 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '527455cb3ce8d44b40_33279088';
echo '<?php
';?>/*
 * Created on 2015Äê8ÔÂ10ÈÕ
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	header("Content-type: text/html;charset=gb123");
 	require_once("config.php");
 	require_once("framework/pc.php");
 	pc::run($config);
<?php echo '?>';

}
}
?>