<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 21:49:22
         compiled from "application/templates/admin/saida/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17816797215339baf8061db7-58621698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23c8e0200312981632bb74b26ebefa812a66b40' => 
    array (
      0 => 'application/templates/admin/saida/cadastrar.tpl',
      1 => 1396829753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17816797215339baf8061db7-58621698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5339baf8168db8_13067814',
  'variables' => 
  array (
    'action' => 0,
    'titulo' => 0,
    'produtos' => 0,
    'item' => 0,
    'produto' => 0,
    'cadastros' => 0,
    'cadastro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5339baf8168db8_13067814')) {function content_5339baf8168db8_13067814($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="<?php echo base_url();?>
admin/saida/listar/" class="btn btn-success">Listar Saídas</a>
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
		  <option <?php if ($_smarty_tpl->tpl_vars['item']->value->status==1){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->value->nome;?>
</option>
		<?php } ?>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="produto">Cadastro</label>
      <div class="controls">
	   <select name="cadastro_id" class="required">
		<?php  $_smarty_tpl->tpl_vars['cadastro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cadastro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cadastros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cadastro']->key => $_smarty_tpl->tpl_vars['cadastro']->value){
$_smarty_tpl->tpl_vars['cadastro']->_loop = true;
?>
		  <option <?php if ($_smarty_tpl->tpl_vars['item']->value->cadastro_id==$_smarty_tpl->tpl_vars['cadastro']->value->id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['cadastro']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cadastro']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['cadastro']->value->sobrenome;?>
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
      <label class="control-label" for="produto">Pagamento</label>
      <div class="controls">
	   <select name="pagamento">
		<option <?php if ($_smarty_tpl->tpl_vars['item']->value->pagamento=='1'){?> selected="selected"<?php }?> value="1">Pago</option>
		<option <?php if ($_smarty_tpl->tpl_vars['item']->value->pagamento=='2'){?> selected="selected"<?php }?> value="0">Pendente</option>
	  </select>
      </div>
    </div>
    <div class="control-group">
	<label class="control-label" for="nome">Data da venda</label>
	<div class="controls">
	  <input class="span2  datepicker" name="dataVenda" size="16" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->dataVenda;?>
">
	</div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" />
    <div class="alert hide">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<p class="msg"></p>
    </div>
    <!--<div class="alert alert-success">Sucesso</div>-->
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>