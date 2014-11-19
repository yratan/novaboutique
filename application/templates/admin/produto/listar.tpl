{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="{base_url()}admin/produto/cadastrar/" class="btn btn-success">Cadastrar Produto</a>
   <hr>
   <h3 class="label">{$titulo}</h3>
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Estoque</th>
		<th>Categoria</th>
		<th>Data Cadastro</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {foreach from=$itens item=item}
	   <tr>
	     <td>{$item->id}</td>
	     <td>{$item->nome}</td>
	     <td>{$item->estoque}</td>
	     <td>{$categoriaModel->getById($item->categoria_id)->nome}</td>
	     <td>{$item->dataCadastro}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/produto/cadastrar/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="{$item->id}" href="{base_url()}admin/produto/deletar/{$item->id}"><i class="icon-remove"></i></a></td>
	   </tr>
	   {/foreach}
	</tbody>
   </table>
   <div class="pagination pagination-centered">
	<ul>{$paginacao}</ul>
   </div>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}