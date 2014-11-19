<?php /* Smarty version Smarty-3.1.11, created on 2014-04-06 21:49:47
         compiled from "application/templates/admin/produto/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226648471533f644d38c201-44175455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51acecb832a45e0cbc3a39117a9975063e97aa48' => 
    array (
      0 => 'application/templates/admin/produto/cadastrar.tpl',
      1 => 1396829752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226648471533f644d38c201-44175455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_533f644d3facb4_40285829',
  'variables' => 
  array (
    'action' => 0,
    'titulo' => 0,
    'item' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f644d3facb4_40285829')) {function content_533f644d3facb4_40285829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
  <a href="<?php echo base_url();?>
admin/produto/listar/" class="btn btn-success">Listar Produtos</a>
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
      <label class="control-label" for="categoria_id">Categoria</label>
      <div class="controls">
	   <select name="categoria_id">
		<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
		  <option <?php if ($_smarty_tpl->tpl_vars['categoria']->value->id==$_smarty_tpl->tpl_vars['item']->value->categoria_id){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nome;?>
</option>
		<?php } ?>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="foto">Foto</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="foto" name="foto" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->foto;?>
" placeholder="Foto">
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" />
    <input type="hidden" name="estoque" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->estoque;?>
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