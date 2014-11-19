<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 21:02:17
         compiled from "application\templates\admin\criarEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16192532754c9db6b54-36641014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1371a8575f19ac5f86b87fc6cd2eebb940e7e34' => 
    array (
      0 => 'application\\templates\\admin\\criarEmpresa.tpl',
      1 => 1395061930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16192532754c9db6b54-36641014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'empresa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_532754ca01dfd3_22216440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532754ca01dfd3_22216440')) {function content_532754ca01dfd3_22216440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="empresa" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php?c=admin&m=criarEmpresaPOST">
    <hr>
    <h4>Empresa</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->nome;?>
" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Endereço</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="endereco" name="endereco" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->endereco;?>
" placeholder="End.">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="status">Status</label>
      <div class="controls">
	   <select name="status">
		<option <?php if ($_smarty_tpl->tpl_vars['empresa']->value->status==1){?> selected="selected"<?php }?> value="1">Ativa</option>
		<option <?php if ($_smarty_tpl->tpl_vars['empresa']->value->status==2){?> selected="selected"<?php }?> value="2">Inativa</option>
	   </select>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->id;?>
" />
    <!--<div class="alert alert-success">Sucesso</div>-->
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>