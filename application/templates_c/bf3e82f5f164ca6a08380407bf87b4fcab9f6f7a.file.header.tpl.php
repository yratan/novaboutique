<?php /* Smarty version Smarty-3.1.11, created on 2014-04-23 23:41:11
         compiled from "application/templates/admin/inc/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1150407329532678151379c3-55881145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3e82f5f164ca6a08380407bf87b4fcab9f6f7a' => 
    array (
      0 => 'application/templates/admin/inc/header.tpl',
      1 => 1398307248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150407329532678151379c3-55881145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53267815172197_71720823',
  'variables' => 
  array (
    'base_url' => 0,
    'nomeUsuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53267815172197_71720823')) {function content_53267815172197_71720823($_smarty_tpl) {?>
<!DOCTYPE html>
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
    <link href="<?php echo base_url();?>
assets/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
	
    <link href="<?php echo base_url();?>
/assets/css/datepicker.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo $_smarty_tpl->getSubTemplate ("admin/inc/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
        <div class="container-fluid">
	    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </a>
          <a class="brand" href="<?php echo base_url();?>
">Nova Boutique</a>
            <div class="nav-collapse collapse">
            <ul class="nav">
			  <li><a href="<?php echo base_url();?>
admin">Início</a></li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Compras<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/entrada/cadastrar">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/entrada/listar">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/saida/cadastrar">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/saida/listar">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/cadastro/cadastrar/">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/cadastro/listar/">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fornecedores<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/fornecedor/cadastrar/">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/fornecedor/listar/">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/produto/cadastrar">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/produto/listar">Listar</a></li>
					<li><a href="<?php echo base_url();?>
admin/produto/categorias">Categorias</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/criarUsuario">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/listarUsuario">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>
admin/configuracoes/cadastrar">Cadastrar</a></li>
					<li><a href="<?php echo base_url();?>
admin/configuracoes/listar">Listar</a></li>
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