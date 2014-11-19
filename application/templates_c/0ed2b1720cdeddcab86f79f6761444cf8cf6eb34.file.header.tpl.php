<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 21:02:12
         compiled from "application\templates\admin\inc\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53025326f98d5f76c9-22314775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed2b1720cdeddcab86f79f6761444cf8cf6eb34' => 
    array (
      0 => 'application\\templates\\admin\\inc\\header.tpl',
      1 => 1395086528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53025326f98d5f76c9-22314775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5326f98d7a1035_23461108',
  'variables' => 
  array (
    'base_url' => 0,
    'nomeUsuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326f98d7a1035_23461108')) {function content_5326f98d7a1035_23461108($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nova Boutique - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>
/assets/css/bootstrap.css" rel="stylesheet">
	  <link href="<?php echo base_url();?>
/assets/css/style.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo base_url();?>
/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>
/assets/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>
/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>
/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>
/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>
/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo base_url();?>
">Nova Boutique</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url();?>
admin">Início</a></li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entradas<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/novaEntrada">Nova Entrada</a></li>
					<li><a href="<?php echo base_url();?>
admin/listarCadastros">Listar Entradas</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saídas<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/novaSaida">Nova Saída</a></li>
					<li><a href="<?php echo base_url();?>
admin/listarCadastros">Listar Saídas</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/novoCadastro">Novo Cadastro</a></li>
					<li><a href="<?php echo base_url();?>
admin/listarCadastros">Listar Cadastros</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/produto/cadastrar">Novo Produto</a></li>
					<li><a href="<?php echo base_url();?>
admin/produto/listar">Listar Produtos</a></li>
					<li><a href="<?php echo base_url();?>
admin/produto/categorias">Categorias</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/criarUsuario">Novo Usuário</a></li>
					<li><a href="<?php echo base_url();?>
admin/listarUsuario">Listar Usuários</a></li>
				  </ul>
			  </li>
              
              
            </ul>
          </div>
		  <p class="navbar-text pull-right">Olá <?php echo $_smarty_tpl->tpl_vars['nomeUsuario']->value;?>
 <a href="<?php echo base_url();?>
admin/logout">(Sair)</a></p>
		  
        </div>
	  </div>
    </div><?php }} ?>