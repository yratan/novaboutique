{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="{base_url()}admin/produto/listar/" class="btn btn-success">Listar Produtos</a>
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
      <label class="control-label" for="categoria_id">Categoria</label>
      <div class="controls">
	   <select name="categoria_id">
		{foreach from=$categorias item=categoria}
		  <option {if $categoria->id == $item->categoria_id} selected="selected"{/if} value="{$categoria->id}">{$categoria->nome}</option>
		{/foreach}
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="foto">Foto</label>
      <div class="controls">
        <input class="input-xxlarge" type="text" id="foto" name="foto" value="{$item->foto}" placeholder="Foto">
      </div>
    </div>
    <input type="hidden" name="id" value="{$item->id}" />
    <input type="hidden" name="estoque" value="{$item->estoque}" />
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