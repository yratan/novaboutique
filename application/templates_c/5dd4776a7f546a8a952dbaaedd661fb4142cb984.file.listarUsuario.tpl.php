<?php /* Smarty version Smarty-3.1.11, created on 2014-04-07 13:15:23
         compiled from "application/templates/admin/listarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819825235326782e484dd5-43479887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd4776a7f546a8a952dbaaedd661fb4142cb984' => 
    array (
      0 => 'application/templates/admin/listarUsuario.tpl',
      1 => 1396829749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819825235326782e484dd5-43479887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5326782e559259_38701042',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326782e559259_38701042')) {function content_5326782e559259_38701042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <hr>
   <h3 class="label">Usuários</h3>
   <table class="table table-striped">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Login</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
	   <tr>
	     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
</td>
	     <td><a href="<?php echo base_url();?>
admin/criarUsuario?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>
</a></td>
	     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
</td>
	     <td><a title="Editar" class="btn" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarUsuario&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
""><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn deleteUsuario" rel="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
" href="#"><i class="icon-remove"></i></a></td>
	   </tr>
	   <?php } ?>
	</tbody>
   </table>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>