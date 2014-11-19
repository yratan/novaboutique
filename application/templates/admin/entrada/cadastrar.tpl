{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="{base_url()}admin/entrada/listar/" class="btn btn-success">Listar Entradas</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="{$action}">
    <hr>
    <h4>{$titulo}</h4>
    <div class="control-group">
      <label class="control-label" for="produto">Produto</label>
      <div class="controls">
	   <select name="produto_id">
		{foreach from=$produtos item=produto}
		  <option {if $produto->id == $item->produto_id} selected="selected"{/if} value="{$produto->id}">{$produto->nome}</option>
		{/foreach}
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="fornecedor">Fornecedor</label>
      <div class="controls">
	   <select name="fornecedor_id">
		{foreach from=$fornecedores item=fornecedor}
		  <option {if $fornecedor->id == $item->fornecedor_id} selected="selected"{/if} value="{$fornecedor->id}">{$fornecedor->nome}</option>
		{/foreach}
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Valor</label>
      <div class="controls">
        <input class="input-xxlarge required money" type="text" id="valor" name="valor" value="{$item->valor}" placeholder="Valor">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Quantidade</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="quantidade" name="quantidade" value="{$item->quantidade}" placeholder="Quantidade">
      </div>
    </div>
    <div class="control-group">
	<label class="control-label" for="nome">Data da compra</label>
	<div class="controls">
	  <input class="span2  datepicker" name="dataCompra" size="16" type="text" value="{$item->dataCompra}">
	</div>
    </div>
    <input type="hidden" name="id" value="{$item->id}" />
    <div class="alert hide">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<p class="msg"></p>
    </div>
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}