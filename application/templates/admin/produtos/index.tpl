{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <form class="form-horizontal" id="item" method="POST" action="{$base_url}index.php?c=admin&m=criarEmpresaPOST">
   <hr>
   <h3 class="label">{$pageTitle}</h3>
   <table class="table table-striped">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Estoque</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {foreach from=$itens->result() item=item}
	   <tr>
	     <td>{$item->id}</td>
	     <td><a href="{base_url()}admin/produto/cadastrar/{$item->id}">{$item->nome}</a></td>
	     <td>{$item->estoque}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/produto/cadastrar/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn deleteEmpresa" rel="{$item->id}" href="#"><i class="icon-remove"></i></a></td>
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