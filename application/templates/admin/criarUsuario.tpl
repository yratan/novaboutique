{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="usuario" method="POST" action="{$base_url}admin/criarUsuarioPOST/">
    <hr>
    <h4>Usuário</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$usuario->nome}" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="email" name="email" value="{$usuario->email}" placeholder="Email">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="login">Login</label>
      <div class="controls">
        <input autocomplete="off" class="input-xxlarge required" type="text" id="login" name="login" value="{$usuario->login}" placeholder="Login">
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
    <input type="hidden" name="id" value="{$usuario->id}" />
    <div style="display:none" class="alert alert-error">Login e/ou senha inválidos.</div>
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}