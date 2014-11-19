<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 14:33:01
         compiled from "application\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256815326f98d518449-53620477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04e38045c062eceed5b6b37d9007f8db3357e675' => 
    array (
      0 => 'application\\templates\\admin\\index.tpl',
      1 => 1395061929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256815326f98d518449-53620477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5326f98d5d5863_47944971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326f98d5d5863_47944971')) {function content_5326f98d5d5863_47944971($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
    <div class="row">
      <div class="span3">
        <h3 class="label">Empresas</h3>
        <ul>
          <li><a href="/atestado/index.php?c=admin&m=criarEmpresa">Criar</a></li>
          <li><a href="/atestado/index.php?c=admin&m=listarEmpresa">Listar</a></li>
         </ul>
      </div>
      <div class="span3">
        <h3 class="label">Atestado</h3>
        <ul>
          <li><a href="/atestado/index.php?c=admin&m=geraAtestado">Novo atestado</a></li>
         </ul>
      </div>
      <div class="span3">
        <h3 class="label">Usuário</h3>
        <ul>
          <li><a href="/atestado/index.php?c=admin&m=criarUsuario">Criar</a></li>
          <li><a href="/atestado/index.php?c=admin&m=listarUsuario">Listar</a></li>
         </ul>
      </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
     <?php }} ?>