<?php /* Smarty version Smarty-3.1.11, created on 2014-03-17 14:33:01
         compiled from "application\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179865326f98dad49a9-91112213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00aadef5a6cf7063b8d7100272accc8bc3550c04' => 
    array (
      0 => 'application\\templates\\admin\\login.tpl',
      1 => 1395061929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179865326f98dad49a9-91112213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5326f98dbb76f9_77119682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5326f98dbb76f9_77119682')) {function content_5326f98dbb76f9_77119682($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Iron Safety - Atestados - Login</title>
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
    <link href="<?php echo base_url();?>
/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>
/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="..<?php echo base_url();?>
/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="..<?php echo base_url();?>
/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="..<?php echo base_url();?>
/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="..<?php echo base_url();?>
/assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="..<?php echo base_url();?>
/assets/ico/favicon.png">
  </head>

  <body data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">

    <div class="container">
	 
	<form class="form-signin" id="login" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/loginPOST">
	  <h3>Login</h3>
        <input autocomplete="off" type="text" class="input-block-level required" name="login" placeholder="Login">
        <input autocomplete="off" type="password" class="input-block-level required" name="senha" placeholder="Senha">
		<div style="display:none" class="alert alert-error">Login e/ou senha inválidos.</div>
        <button class="btn btn-large btn-primary" type="submit">Entrar</button>
		
      </form>

    </div> <!-- /container -->
   <?php echo $_smarty_tpl->getSubTemplate ("admin/inc/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html>
<?php }} ?>