{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="{base_url()}admin/entrada/cadastrar/" class="btn btn-success">Cadastrar Entrada</a>
   <hr>
   <form class="form-search" action="{base_url()}admin/entrada/listar/">
	<label>Produto</label>
	<select name="produto_id">
	   <option value="">Todos</option>
	   {foreach from=$produtos item=produto}
	     <option {if $smarty.get.produto_id == $produto->id} selected="selected"{/if} value="{$produto->id}">{$produto->nome}</option>
	   {/foreach}
	</select>
	<label>Fornecedor</label>
	<select name="fornecedor_id">
	   <option value="">Todos</option>
	   {foreach from=$fornecedores item=fornecedor}
	     <option {if $smarty.get.fornecedor_id == $fornecedor->id} selected="selected"{/if} value="{$fornecedor->id}">{$fornecedor->nome}</option>
	   {/foreach}
	</select>
	<button type="submit" class="btn">Filtrar</button>
   </form>
   <h3 class="label">{$titulo}</h3>
   
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Produto</th>
		<th>Fornecedor</th>
		<th>Valor</th>
		<th>Valor Sugerido</th>
		<th>Quantidade</th>
		<th>Total</th>
		<th>Data Compra</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {assign var=totalGeral value=0}
	   {assign var=valorTotalPorQtd value=0}
	   {foreach from=$itens item=item}
	   {assign var=valorTotalPorQtd value=$item->valor * $item->quantidade}
	   <tr>
	     <td>{$item->id} {$total}</td>
	     <td>{$produtoModel->getById($item->produto_id)->nome}</td>
	     <td>{$fornecedorModel->getById($item->fornecedor_id)->nome}</td>
	     <td>R$ {numberFormat($item->valor)}</td>
	     <td>R$ {numberFormat(calculoPorcentagem($item->valor, $percentual))}</td>
	     <td>{$item->quantidade}</td>
	     <td>R$ {numberFormat($valorTotalPorQtd)}</td>
	     <td>{$item->dataCompra}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/entrada/cadastrar/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="{$empresa->id}" href="{base_url()}admin/entrada/deletar/{$item->id}"><i class="icon-remove"></i></a></td>
	   </tr>
	   {assign var=totalGeral value=$totalGeral + $valorTotalPorQtd}
	   {/foreach}
	   <tr class="success"><td colspan='5'>Total:</td><td colspan='4'>R$ {numberFormat($totalGeral)}</td></tr>
	</tbody>
   </table>
   <div class="pagination pagination-centered">
	<ul>{$paginacao}</ul>
   </div>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}