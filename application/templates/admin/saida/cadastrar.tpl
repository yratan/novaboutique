{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="{base_url()}admin/saida/listar/" class="btn btn-success">Listar Saídas</a>
  <form class="form-horizontal" id="createGeneric" method="POST" action="{$action}">
    <hr>
    <h4>{$titulo}</h4>
    <div class="control-group">
      <label class="control-label" for="produto">Produto</label>
      <div class="controls">
	   <select name="produto_id">
		{foreach from=$produtos item=produto}
		  <option {if $item->status == 1} selected="selected"{/if} value="{$produto->id}">{$produto->nome}</option>
		{/foreach}
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="produto">Cadastro</label>
      <div class="controls">
	   <select name="cadastro_id" class="required">
		{foreach from=$cadastros item=cadastro}
		  <option {if $item->cadastro_id == $cadastro->id} selected="selected"{/if} value="{$cadastro->id}">{$cadastro->nome} {$cadastro->sobrenome}</option>
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
      <label class="control-label" for="produto">Pagamento</label>
      <div class="controls">
	   <select name="pagamento">
		<option {if $item->pagamento == '1'} selected="selected"{/if} value="1">Pago</option>
		<option {if $item->pagamento == '2'} selected="selected"{/if} value="0">Pendente</option>
	  </select>
      </div>
    </div>
    <div class="control-group">
	<label class="control-label" for="nome">Data da venda</label>
	<div class="controls">
	  <input class="span2  datepicker" name="dataVenda" size="16" type="text" value="{$item->dataVenda}">
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