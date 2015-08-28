<?php /* Smarty version 3.1.27, created on 2015-08-27 09:59:23
         compiled from "tpl\admin\newslist.html" */ ?>
<?php
/*%%SmartyHeaderCode:1181655dec35b1594d4_34518954%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b02dc9ee4a4edeacd766122de7f48dbfba6d8a' => 
    array (
      0 => 'tpl\\admin\\newslist.html',
      1 => 1440662360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181655dec35b1594d4_34518954',
  'variables' => 
  array (
    'username' => 0,
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55dec35b42e803_40852199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55dec35b42e803_40852199')) {
function content_55dec35b42e803_40852199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1181655dec35b1594d4_34518954';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某管理系统</title>
<link href="web/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="web/css/index.css">

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<style>
</style>

</head>

<body>
<div class="header">
  <div class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          后台新闻管理面板
        </a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="src-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!--存在下拉选项会出现滚动条现象，待解决-->
      <div class="collapse navbar-collapse navbar-self">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#">首页</a>
          </li>
          <li><a href="index.php">查看网站</a></li>
        </ul>
        <div class="navbar-right user">
          <span class="col-md-4"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
          <div class="col-md-8 logout"><a href="admin.php?controller=login&method=loginout">退出登录</a></div>
        </div>
      </div>
    </div>   
  </div>
</div>
<div class="main">
  <div class="col-md-2 sidebar">
    <div class="sidebar-header">
      <h3><a href="">后台管理中心</a></h3>
    </div>
    <button class="btn btn-primary sidebar-btn" type="button">
      点击展开
    </button>
    <ul class="nav nav-sidebar">
      <li class="list-group-item dropdown active"><a href="#">首页</a></li>
      <li class="list-group-item">新闻管理</li>
      <li class="list-group-item"><a href="admin.php?controller=news&method=newsadd">添加新闻</a></li>
      <li class="list-group-item"><a href="admin.php?controller=news&method=newslist">管理新闻</a></li>
    </ul>
  </div>
  <div class="col-md-10 main-content">
      <div class="content-title">
        <h3>新闻管理列表</h3>
      </div>
      <div class="news-list">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>标题</th>
              <th>作者</th>
              <th colspan="2">操作</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
            <tr>
              <th><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</th>
              <th><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</th>
              <th><a href="admin.php?controller=news&method=newsadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">编辑</a></th>
              <th><a href="admin.php?controller=news&method=newsdel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a></th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<tr>
					<th colspan="4">
						暂无新闻
					</th>
				</tr>
			<?php
}
?>
          </tbody>
        </table>
      </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="web/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="web/js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="web/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>