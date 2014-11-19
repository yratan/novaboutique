<?php /* Smarty version Smarty-3.1.11, created on 2014-04-15 00:02:59
         compiled from "application/templates/admin/configuracoes/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457125575534ca163a27b69-11434088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '876aca87ea49d1f390b0594ba63a1fdc9649fc72' => 
    array (
      0 => 'application/templates/admin/configuracoes/cadastrar.tpl',
      1 => 1396829750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457125575534ca163a27b69-11434088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'titulo' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534ca163d53553_78416869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534ca163d53553_78416869')) {function content_534ca163d53553_78416869($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
    <hr>
    <h4><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Chave</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="chave" name="chave" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->chave;?>
" placeholder="Chave">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Valor</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="valor" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->valor;?>
" placeholder="Valor">
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