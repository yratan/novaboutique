{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="{base_url()}admin/saida/cadastrar/" class="btn btn-success">Cadastrar Saída</a>
   
   <hr>
   <form class="form-search" action="{base_url()}admin/saida/listar/">
	<label>Produto</label>
	<select name="produto_id">
	   <option value="">Todos</option>
	   {foreach from=$produtos item=produto}
	     <option {if $smarty.get.produto_id == $produto->id} selected="selected"{/if} value="{$produto->id}">{$produto->nome}</option>
	   {/foreach}
	</select>
	<label>Cadastro</label>
	<select name="cadastro_id">
	   <option value="">Todos</option>
	   {foreach from=$cadastros item=cadastro}
	     <option {if $smarty.get.cadastro_id == $cadastro->id} selected="selected"{/if} value="{$cadastro->id}">{$cadastro->nome}</option>
	   {/foreach}
	</select>
	<label>Pagamento</label>
	<select name="pagamento">
	   <option value="">Todos</option>
	   <option {if $smarty.get.pagamento == "1"} selected="selected"{/if} value="1">OK</option>
	   <option {if $smarty.get.pagamento == "2"} selected="selected"{/if} value="2">Pendente</option>
	</select>
	<button type="submit" class="btn">Filtrar</button>
   </form>
   <h3 class="label">{$titulo}</h3>
   
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Produto</th>
		<th>Cadastro</th>
		<th>Valor</th>
		<th>Pagamento</th>
		<th>Data Venda</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {assign var=totalGeral value=0}
	   {foreach from=$itens item=item}
	   <tr class="{if $item->pagamento == "1"}success{else}error{/if}">
	     <td>{$item->id}</td>
	     <td>{$produtoModel->getById($item->produto_id)->nome}</td>
	     <td>{$cadastroModel->getById($item->cadastro_id)->nome}</td>
	     <td>R$ {numberFormat($item->valor)}</td>
	     <td>{if $item->pagamento == 1}OK{else}Pendente{/if}</td>
	     <td>{$item->dataVenda}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/saida/cadastrar/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="{$item->id}" href="{base_url()}admin/saida/deletar/{$item->id}"><i class="icon-remove"></i></a></td>
	   </tr>
	   {assign var=totalGeral value=$totalGeral + $item->valor}
	   {/foreach}
	   <tr class="success"><td colspan='3'>Total:</td><td colspan='5'>R$ {numberFormat($totalGeral)}</td></tr>
	</tbody>
   </table>
   <div class="pagination pagination-centered">
	<ul>{$paginacao}</ul>
   </div>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}