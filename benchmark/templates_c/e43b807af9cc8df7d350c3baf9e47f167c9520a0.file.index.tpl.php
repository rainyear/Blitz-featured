<?php /* Smarty version Smarty-3.1.13, created on 2013-05-29 01:36:53
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145026511751a4eb358e6948-18091241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1369758861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145026511751a4eb358e6948-18091241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a4eb3597e090_14243952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a4eb3597e090_14243952')) {function content_51a4eb3597e090_14243952($_smarty_tpl) {?><html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
  <h1>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h1>
  <hr/>
  <p>Name List</p>
  <ul>
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['name']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
	<?php } ?>
  </ul>
  </body>
</html>
<?php }} ?>