<?php /* Smarty version Smarty-3.1.11, created on 2014-05-04 23:16:33
         compiled from "application/templates/admin/entrada/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19487906385339c3b1a31c39-57364717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3c476711bc4ffa80b0acb9425c8c75e95be083' => 
    array (
      0 => 'application/templates/admin/entrada/cadastrar.tpl',
      1 => 1398307247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19487906385339c3b1a31c39-57364717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5339c3b1b6f9a0_61069958',
  'variables' => 
  array (
    'action' => 0,
    'titulo' => 0,
    'produtos' => 0,
    'produto' => 0,
    'item' => 0,
    'fornecedores' => 0,
    'fornecedor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5339c3b1b6f9a0_61069958')) {function content_5339c3b1b6f9a0_61069958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="<?php echo base_url();?>
admin/entrada/listar/" class="btn btn-success">Listar Entradas</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
    <hr>
    <h4><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h4>
    <div class="control-group">
      <label class="control-label" for="produto">Produto</label>
      <div class="controls">
	   <select name="produto_id">
		<?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value){
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
		  <option <?php if ($_smarty_tpl->tpl_vars['produto']->value->id==$_smarty_tpl->tpl_vars['item']->value->produto_id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->value->nome;?>
</option>
		<?php } ?>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="fornecedor">Fornecedor</label>
      <div class="controls">
	   <select name="fornecedor_id">
		<?php  $_smarty_tpl->tpl_vars['fornecedor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fornecedor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fornecedores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fornecedor']->key => $_smarty_tpl->tpl_vars['fornecedor']->value){
$_smarty_tpl->tpl_vars['fornecedor']->_loop = true;
?>
		  <option <?php if ($_smarty_tpl->tpl_vars['fornecedor']->value->id==$_smarty_tpl->tpl_vars['item']->value->fornecedor_id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['fornecedor']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['fornecedor']->value->nome;?>
</option>
		<?php } ?>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Valor</label>
      <div class="controls">
        <input class="input-xxlarge required money" type="text" id="valor" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->valor;?>
" placeholder="Valor">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Quantidade</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="quantidade" name="quantidade" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->quantidade;?>
" placeholder="Quantidade">
      </div>
    </div>
    <div class="control-group">
	<label class="control-label" for="nome">Data da compra</label>
	<div class="controls">
	  <input class="span2  datepicker" name="dataCompra" size="16" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->dataCompra;?>
">
	</div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" />
    <div class="alert hide">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<p class="msg"></p>
    </div>
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>