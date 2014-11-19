<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 05:47:46
         compiled from "application/templates/admin/produtos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93471973853267e72b54146-84320380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab289bf9c89bfb89a85d22787a1cf42b7e1663e2' => 
    array (
      0 => 'application/templates/admin/produtos/index.tpl',
      1 => 1395025585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93471973853267e72b54146-84320380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'empresas' => 0,
    'empresa' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53267e72c08c89_32721863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53267e72c08c89_32721863')) {function content_53267e72c08c89_32721863($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <form class="form-horizontal" id="empresa" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarEmpresaPOST">
   <hr>
   <h3 class="label">Empresas</h3>
   <table class="table table-striped">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Endereço</th>
		<th>Status</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   <?php  $_smarty_tpl->tpl_vars['empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empresa']->key => $_smarty_tpl->tpl_vars['empresa']->value){
$_smarty_tpl->tpl_vars['empresa']->_loop = true;
?>
	   <tr>
	     <td><?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
</td>
	     <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarEmpresa&id=<?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['empresa']->value->nome;?>
</a></td>
	     <td><?php echo $_smarty_tpl->tpl_vars['empresa']->value->endereco;?>
</td>
	     <td><?php if ($_smarty_tpl->tpl_vars['empresa']->value->status==1){?>Ativa<?php }else{ ?>Inativa<?php }?></td>
	     <td><a title="Editar" class="btn" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarEmpresa&id=<?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
""><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn deleteEmpresa" rel="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
" href="#"><i class="icon-remove"></i></a></td>
	   </tr>
	   <?php } ?>
	</tbody>
   </table>
   <div class="pagination pagination-centered">
	<ul><?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
</ul>
   </div>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>