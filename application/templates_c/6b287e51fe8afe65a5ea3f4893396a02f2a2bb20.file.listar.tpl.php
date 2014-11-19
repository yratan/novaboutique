<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 21:39:15
         compiled from "application/templates/admin/produto/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127755177533f846e0418e2-54860686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b287e51fe8afe65a5ea3f4893396a02f2a2bb20' => 
    array (
      0 => 'application/templates/admin/produto/listar.tpl',
      1 => 1396829752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127755177533f846e0418e2-54860686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_533f846e1247a9_72745485',
  'variables' => 
  array (
    'titulo' => 0,
    'itens' => 0,
    'item' => 0,
    'categoriaModel' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f846e1247a9_72745485')) {function content_533f846e1247a9_72745485($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="<?php echo base_url();?>
admin/produto/cadastrar/" class="btn btn-success">Cadastrar Produto</a>
   <hr>
   <h3 class="label"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Estoque</th>
		<th>Categoria</th>
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
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->nome;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->estoque;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['categoriaModel']->value->getById($_smarty_tpl->tpl_vars['item']->value->categoria_id)->nome;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->dataCadastro;?>
</td>
	     <td><a title="Editar" class="btn" href="<?php echo base_url();?>
admin/produto/cadastrar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" href="<?php echo base_url();?>
admin/produto/deletar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
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