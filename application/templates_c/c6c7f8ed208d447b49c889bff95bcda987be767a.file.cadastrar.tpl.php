<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 21:54:29
         compiled from "application/templates/admin/cadastro/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12245128415341f745c09938-04644652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c7f8ed208d447b49c889bff95bcda987be767a' => 
    array (
      0 => 'application/templates/admin/cadastro/cadastrar.tpl',
      1 => 1396829750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12245128415341f745c09938-04644652',
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
  'unifunc' => 'content_5341f745d5ee05_03443042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341f745d5ee05_03443042')) {function content_5341f745d5ee05_03443042($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="<?php echo base_url();?>
admin/cadastro/listar/" class="btn btn-success">Listar Clientes</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
    <hr>
    <h4><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->nome;?>
" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="sobrenome">Sobrenome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="sobrenome" name="sobrenome" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->sobrenome;?>
" placeholder="Sobrenome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="endereco">Endereço</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="endereco" name="endereco" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->endereco;?>
" placeholder="Endereço">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="telefone">Telefone</label>
      <div class="controls">
        <input class="input-xxlarge telefone" type="text" id="telefone" name="telefone" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->telefone;?>
" placeholder="Telefone">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="celular">Celular</label>
      <div class="controls">
        <input class="input-xxlarge celular" type="text" id="celular" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->celular;?>
" placeholder="Celular">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->email;?>
" placeholder="Email">
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