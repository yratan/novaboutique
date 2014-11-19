<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 22:06:35
         compiled from "application/templates/admin/entrada/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7940792195339c3a69ab5d8-01557747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76761668167bc4f85c9ae9dc94faf6462d87248a' => 
    array (
      0 => 'application/templates/admin/entrada/listar.tpl',
      1 => 1396829751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7940792195339c3a69ab5d8-01557747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5339c3a6ca5f94_41916164',
  'variables' => 
  array (
    'produtos' => 0,
    'produto' => 0,
    'titulo' => 0,
    'itens' => 0,
    'item' => 0,
    'total' => 0,
    'produtoModel' => 0,
    'percentual' => 0,
    'valorTotalPorQtd' => 0,
    'empresa' => 0,
    'totalGeral' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5339c3a6ca5f94_41916164')) {function content_5339c3a6ca5f94_41916164($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="<?php echo base_url();?>
admin/entrada/cadastrar/" class="btn btn-success">Cadastrar Entrada</a>
   <hr>
   <form class="form-search" action="<?php echo base_url();?>
admin/entrada/listar/">
	<label>Produto</label>
	<select name="produto_id">
	   <option value="">Todos</option>
	   <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value){
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
	     <option <?php if ($_GET['produto_id']==$_smarty_tpl->tpl_vars['produto']->value->id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->value->nome;?>
</option>
	   <?php } ?>
	</select>
	<button type="submit" class="btn">Filtrar</button>
   </form>
   <h3 class="label"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
   
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Produto</th>
		<th>Valor</th>
		<th>Valor Sugerido</th>
		<th>Quantidade</th>
		<th>Total</th>
		<th>Data Compra</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   <?php $_smarty_tpl->tpl_vars['totalGeral'] = new Smarty_variable(0, null, 0);?>
	   <?php $_smarty_tpl->tpl_vars['valorTotalPorQtd'] = new Smarty_variable(0, null, 0);?>
	   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	   <?php $_smarty_tpl->tpl_vars['valorTotalPorQtd'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->valor*$_smarty_tpl->tpl_vars['item']->value->quantidade, null, 0);?>
	   <tr>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['produtoModel']->value->getById($_smarty_tpl->tpl_vars['item']->value->produto_id)->nome;?>
</td>
	     <td>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['item']->value->valor);?>
</td>
	     <td>R$ <?php echo numberFormat(calculoPorcentagem($_smarty_tpl->tpl_vars['item']->value->valor,$_smarty_tpl->tpl_vars['percentual']->value));?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->quantidade;?>
</td>
	     <td>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['valorTotalPorQtd']->value);?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->dataCompra;?>
</td>
	     <td><a title="Editar" class="btn" href="<?php echo base_url();?>
admin/entrada/cadastrar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
" href="<?php echo base_url();?>
admin/entrada/deletar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-remove"></i></a></td>
	   </tr>
	   <?php $_smarty_tpl->tpl_vars['totalGeral'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalGeral']->value+$_smarty_tpl->tpl_vars['valorTotalPorQtd']->value, null, 0);?>
	   <?php } ?>
	   <tr class="success"><td colspan='5'>Total:</td><td colspan='4'>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['totalGeral']->value);?>
</td></tr>
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