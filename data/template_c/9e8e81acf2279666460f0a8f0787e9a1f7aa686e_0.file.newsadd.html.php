<?php /* Smarty version 3.1.27, created on 2015-08-27 11:11:24
         compiled from "tpl\admin\newsadd.html" */ ?>
<?php
/*%%SmartyHeaderCode:91755ded43c091ed3_07175145%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8e81acf2279666460f0a8f0787e9a1f7aa686e' => 
    array (
      0 => 'tpl\\admin\\newsadd.html',
      1 => 1440666681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91755ded43c091ed3_07175145',
  'variables' => 
  array (
    'username' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ded43c3a0c47_73166138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ded43c3a0c47_73166138')) {
function content_55ded43c3a0c47_73166138 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91755ded43c091ed3_07175145';
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
        <h3>发表新文章</h3>
      </div>
      <div class="form-main">
        <form name="news" method="post" action="admin.php?controller=news&method=newsadd">
          <table class="table table-bordered">
            <tbody>
              <tr><th colspan="2"><span>标题</span><input name="title" type="text"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"></th></tr>
              <tr><th colspan="2"><span>内容</span><textarea name="content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></th></tr>
              <tr>
                <th><span>作者</span><input name="author" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
"></th>
                <th><span>出处</span><input name="froms" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['froms'])===null||$tmp==='' ? '' : $tmp);?>
"></th>
              </tr>
            </tbody>
          </table>
          <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
          <div class="submit"><button type="submit" name="submit" class="btn btn-primary">提交</button></div>
        </form>
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