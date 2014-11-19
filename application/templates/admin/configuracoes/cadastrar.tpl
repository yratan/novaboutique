{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="{$action}">
    <hr>
    <h4>{$titulo}</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Chave</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="chave" name="chave" value="{$item->chave}" placeholder="Chave">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Valor</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="valor" name="valor" value="{$item->valor}" placeholder="Valor">
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