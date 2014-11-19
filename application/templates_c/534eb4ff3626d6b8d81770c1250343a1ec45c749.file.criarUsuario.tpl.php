<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 20:48:47
         compiled from "application\templates\admin\criarUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69095327519f1add62-33761906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '534eb4ff3626d6b8d81770c1250343a1ec45c749' => 
    array (
      0 => 'application\\templates\\admin\\criarUsuario.tpl',
      1 => 1395061929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69095327519f1add62-33761906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5327519f273a15_27568936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327519f273a15_27568936')) {function content_5327519f273a15_27568936($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="usuario" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarUsuarioPOST">
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