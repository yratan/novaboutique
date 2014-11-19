<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 22:01:39
         compiled from "application/templates/admin/saida/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11861449705339c39e87d076-87524183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c4e540a2e63f71a4243d2abdef8043f1e26763d' => 
    array (
      0 => 'application/templates/admin/saida/listar.tpl',
      1 => 1396829753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11861449705339c39e87d076-87524183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5339c39ea24e19_81394867',
  'variables' => 
  array (
    'produtos' => 0,
    'produto' => 0,
    'cadastros' => 0,
    'cadastro' => 0,
    'titulo' => 0,
    'itens' => 0,
    'item' => 0,
    'produtoModel' => 0,
    'cadastroModel' => 0,
    'totalGeral' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5339c39ea24e19_81394867')) {function content_5339c39ea24e19_81394867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
   <a href="<?php echo base_url();?>
admin/saida/cadastrar/" class="btn btn-success">Cadastrar Saída</a>
   
   <hr>
   <form class="form-search" action="<?php echo base_url();?>
admin/saida/listar/">
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
	<label>Cadastro</label>
	<select name="cadastro_id">
	   <option value="">Todos</option>
	   <?php  $_smarty_tpl->tpl_vars['cadastro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cadastro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cadastros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cadastro']->key => $_smarty_tpl->tpl_vars['cadastro']->value){
$_smarty_tpl->tpl_vars['cadastro']->_loop = true;
?>
	     <option <?php if ($_GET['cadastro_id']==$_smarty_tpl->tpl_vars['cadastro']->value->id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['cadastro']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cadastro']->value->nome;?>
</option>
	   <?php } ?>
	</select>
	<label>Pagamento</label>
	<select name="pagamento">
	   <option value="">Todos</option>
	   <option <?php if ($_GET['pagamento']=="1"){?> selected="selected"<?php }?> value="1">OK</option>
	   <option <?php if ($_GET['pagamento']=="2"){?> selected="selected"<?php }?> value="2">Pendente</option>
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
		<th>Cadastro</th>
		<th>Valor</th>
		<th>Pagamento</th>
		<th>Data Venda</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   <?php $_smarty_tpl->tpl_vars['totalGeral'] = new Smarty_variable(0, null, 0);?>
	   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	   <tr class="<?php if ($_smarty_tpl->tpl_vars['item']->value->pagamento=="1"){?>success<?php }else{ ?>error<?php }?>">
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['produtoModel']->value->getById($_smarty_tpl->tpl_vars['item']->value->produto_id)->nome;?>
</td>
	     <td><?php echo $_smarty_tpl->tpl_vars['cadastroModel']->value->getById($_smarty_tpl->tpl_vars['item']->value->cadastro_id)->nome;?>
</td>
	     <td>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['item']->value->valor);?>
</td>
	     <td><?php if ($_smarty_tpl->tpl_vars['item']->value->pagamento==1){?>OK<?php }else{ ?>Pendente<?php }?></td>
	     <td><?php echo $_smarty_tpl->tpl_vars['item']->value->dataVenda;?>
</td>
	     <td><a title="Editar" class="btn" href="<?php echo base_url();?>
admin/saida/cadastrar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" href="<?php echo base_url();?>
admin/saida/deletar/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><i class="icon-remove"></i></a></td>
	   </tr>
	   <?php $_smarty_tpl->tpl_vars['totalGeral'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalGeral']->value+$_smarty_tpl->tpl_vars['item']->value->valor, null, 0);?>
	   <?php } ?>
	   <tr class="success"><td colspan='3'>Total:</td><td colspan='5'>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['totalGeral']->value);?>
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