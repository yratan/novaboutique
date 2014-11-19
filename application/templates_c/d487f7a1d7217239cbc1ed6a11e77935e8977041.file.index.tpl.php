<?php /* Smarty version Smarty-3.1.11, created on 2014-04-23 23:41:11
         compiled from "application/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120665897453267831493ab5-51748774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd487f7a1d7217239cbc1ed6a11e77935e8977041' => 
    array (
      0 => 'application/templates/admin/index.tpl',
      1 => 1398307246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120665897453267831493ab5-51748774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_532678314cedb4_88118880',
  'variables' => 
  array (
    'entradas' => 0,
    'entrada' => 0,
    'produtoModel' => 0,
    'saidas' => 0,
    'saida' => 0,
    'cadastroModel' => 0,
    'produtos' => 0,
    'produto' => 0,
    'cadastros' => 0,
    'cadastro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532678314cedb4_88118880')) {function content_532678314cedb4_88118880($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
    <div class="row">
        <div class="span4">
            <h3 class="label">Últimas entradas</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Produto</th>
                       <th>Valor</th>
                       <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['entrada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entrada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entradas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->key => $_smarty_tpl->tpl_vars['entrada']->value){
$_smarty_tpl->tpl_vars['entrada']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['produtoModel']->value->getById($_smarty_tpl->tpl_vars['entrada']->value->produto_id)->nome;?>
</td>
                        <td>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['entrada']->value->valor);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value->quantidade;?>
</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>
                <a href="<?php echo base_url();?>
admin/entrada/cadastrar/" class="btn btn-primary">Cadastrar Entrada</a>
                <a href="<?php echo base_url();?>
admin/entrada/listar/" class="btn btn-success">Ver Todas</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimas Saídas</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Produto</th>
                       <th>Cliente</th>
                       <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['saida'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['saida']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saidas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['saida']->key => $_smarty_tpl->tpl_vars['saida']->value){
$_smarty_tpl->tpl_vars['saida']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['produtoModel']->value->getById($_smarty_tpl->tpl_vars['saida']->value->produto_id)->nome;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cadastroModel']->value->getById($_smarty_tpl->tpl_vars['saida']->value->cadastro_id)->nome;?>
</td>
                        <td>R$ <?php echo numberFormat($_smarty_tpl->tpl_vars['saida']->value->valor);?>
</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>
                <a href="<?php echo base_url();?>
admin/saida/cadastrar/" class="btn btn-primary">Cadastrar Saída</a>
                <a href="<?php echo base_url();?>
admin/saida/listar/" class="btn btn-success">Ver Todas</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimos Produtos</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Nome</th>
                       <th>Estoque</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value){
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->nome;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->estoque;?>
</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>
                <a href="<?php echo base_url();?>
admin/produto/cadastrar/" class="btn btn-primary">Cadastrar Produto</a>
                <a href="<?php echo base_url();?>
admin/produto/listar/" class="btn btn-success">Ver Todos</a>
            </p>
        </div>
        <div class="span4">
            <h3 class="label">Últimos Cadastros</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>Nome</th>
                       <th>Sobrenome</th>
                       <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['cadastro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cadastro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cadastros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cadastro']->key => $_smarty_tpl->tpl_vars['cadastro']->value){
$_smarty_tpl->tpl_vars['cadastro']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['cadastro']->value->nome;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cadastro']->value->sobrenome;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cadastro']->value->email;?>
</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>
                <a href="<?php echo base_url();?>
admin/cadastro/cadastrar/" class="btn btn-primary">Cadastrar Cliente</a>
                <a href="<?php echo base_url();?>
admin/cadastro/listar/" class="btn btn-success">Ver Todos</a>
            </p>
        </div>
    </div>
    
<?php echo $_smarty_tpl->getSubTemplate ("admin/inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>