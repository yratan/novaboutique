
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
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="{base_url()}/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="{base_url()}/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="..{base_url()}/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="..{base_url()}/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="..{base_url()}/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="..{base_url()}/assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="..{base_url()}/assets/ico/favicon.png">
  </head>

  <body data-url="{$base_url}">

    <div class="container">
	 
	<form class="form-signin" id="login" action="{$base_url}admin/loginPOST">
	  <h3>Login</h3>
        <input autocomplete="off" type="text" class="input-block-level required" name="login" placeholder="Login">
        <input autocomplete="off" type="password" class="input-block-level required" name="senha" placeholder="Senha">
		<div style="display:none" class="alert alert-error">Login e/ou senha inválidos.</div>
        <button class="btn btn-large btn-primary" type="submit">Entrar</button>
		
      </form>

    </div> <!-- /container -->
   {include file="admin/inc/scripts.tpl"}
  </body>
</html>
