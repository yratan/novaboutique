<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 21:52:26
         compiled from "application/templates/admin/criarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513976897532678150dc678-38712614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2eb943965b54f291e02d8497a6f2e812c5f9351' => 
    array (
      0 => 'application/templates/admin/criarUsuario.tpl',
      1 => 1396829748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513976897532678150dc678-38712614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53267815132051_85166107',
  'variables' => 
  array (
    'base_url' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53267815132051_85166107')) {function content_53267815132051_85166107($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="usuario" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/criarUsuarioPOST/">
    <hr>
    <h4>Usuário</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>
" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
" placeholder="Email">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="login">Login</label>
      <div class="controls">
        <input autocomplete="off" class="input-xxlarge required" type="text" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->login;?>
" placeholder="Login">
      </div>
    </div>
	<div class="control-group">
      <label class="control-label" for="senha">Senha</label>
      <div class="controls">
        <input class="input-xxlarge" type="password" id="senha" name="senha"  placeholder="Senha">
      </div>
    </div>
	<div class="control-group">
      <label class="control-label" for="senha2">Repita a senha</label>
      <div class="controls">
        <input class="input-xxlarge" type="password" id="senha2" name="senha2" value="" placeholder="Repita a senha">
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
" />
    <div style="display:none" class="alert alert-error">Login e/ou senha inválidos.</div>
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>