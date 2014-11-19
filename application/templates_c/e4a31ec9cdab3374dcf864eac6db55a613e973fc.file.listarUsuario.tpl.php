<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 20:48:44
         compiled from "application\templates\admin\listarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150155327519c790425-20918237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4a31ec9cdab3374dcf864eac6db55a613e973fc' => 
    array (
      0 => 'application\\templates\\admin\\listarUsuario.tpl',
      1 => 1395061929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150155327519c790425-20918237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5327519c99fe22_46650811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327519c99fe22_46650811')) {function content_5327519c99fe22_46650811($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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