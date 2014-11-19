<?php /* Smarty version Smarty-3.1.11, created on 2014-04-07 13:32:30
         compiled from "application/templates/admin/configuracoes/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2530289845342d31e44cae9-73395995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90c7dac87aa35eb7917e0e7a9c29499d55caf021' => 
    array (
      0 => 'application/templates/admin/configuracoes/listar.tpl',
      1 => 1396829750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530289845342d31e44cae9-73395995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'itens' => 0,
    'item' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5342d31e51bdb0_37027547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342d31e51bdb0_37027547')) {function content_5342d31e51bdb0_37027547($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <hr>
   <h3 class="label"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
   
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Chave</th>
		<th>Valor</th>
		<th>Data Cadastro</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	   <tr>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->chave;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->valor;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->dataCadastro;?>
</td>
	     <td><a title="Editar" class="btn" href="<?php echo base_url();?>
admin/configuracoes/cadastrar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" href="<?php echo base_url();?>
admin/configuracoes/deletar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-remove"></i></a></td>
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