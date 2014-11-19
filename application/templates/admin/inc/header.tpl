
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nova Boutique - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{base_url()}/assets/css/bootstrap.css" rel="stylesheet">
	  <link href="{base_url()}/assets/css/style.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="{base_url()}/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="{base_url()}assets/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
	
    <link href="{base_url()}/assets/css/datepicker.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    {include file="admin/inc/scripts.tpl"}

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{base_url()}/assets/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{base_url()}/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{base_url()}/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{base_url()}/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{base_url()}/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body data-url="{$base_url}">
    
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
	    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </a>
          <a class="brand" href="{base_url()}">Nova Boutique</a>
            <div class="nav-collapse collapse">
            <ul class="nav">
			  <li><a href="{base_url()}admin">Início</a></li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Compras<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/entrada/cadastrar">Cadastrar</a></li>
					<li><a href="{base_url()}admin/entrada/listar">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/saida/cadastrar">Cadastrar</a></li>
					<li><a href="{base_url()}admin/saida/listar">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/cadastro/cadastrar/">Cadastrar</a></li>
					<li><a href="{base_url()}admin/cadastro/listar/">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fornecedores<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/fornecedor/cadastrar/">Cadastrar</a></li>
					<li><a href="{base_url()}admin/fornecedor/listar/">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/produto/cadastrar">Cadastrar</a></li>
					<li><a href="{base_url()}admin/produto/listar">Listar</a></li>
					<li><a href="{base_url()}admin/produto/categorias">Categorias</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/criarUsuario">Cadastrar</a></li>
					<li><a href="{base_url()}admin/listarUsuario">Listar</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações<b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{base_url()}admin/configuracoes/cadastrar">Cadastrar</a></li>
					<li><a href="{base_url()}admin/configuracoes/listar">Listar</a></li>
				  </ul>
			  </li>
              
              
            </ul>
          </div>
		  <p class="navbar-text pull-right">Olá {$nomeUsuario} <a href="{base_url()}admin/logout">(Sair)</a></p>
		  
        </div>
	  </div>
    </div>