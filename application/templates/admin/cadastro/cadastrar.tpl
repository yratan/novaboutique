{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="{base_url()}admin/cadastro/listar/" class="btn btn-success">Listar Clientes</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="{$action}">
    <hr>
    <h4>{$titulo}</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$item->nome}" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="sobrenome">Sobrenome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="sobrenome" name="sobrenome" value="{$item->sobrenome}" placeholder="Sobrenome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="endereco">Endereço</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="endereco" name="endereco" value="{$item->endereco}" placeholder="Endereço">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="telefone">Telefone</label>
      <div class="controls">
        <input class="input-xxlarge telefone" type="text" id="telefone" name="telefone" value="{$item->telefone}" placeholder="Telefone">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="celular">Celular</label>
      <div class="controls">
        <input class="input-xxlarge celular" type="text" id="celular" name="celular" value="{$item->celular}" placeholder="Celular">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="email" name="email" value="{$item->email}" placeholder="Email">
      </div>
    </div>
    <input type="hidden" name="id" value="{$item->id}" />
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
{include file="admin/inc/footer.tpl"}