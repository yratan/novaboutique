{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="{base_url()}admin/cadastro/cadastrar/" class="btn btn-success">Cadastrar Cliente</a>
   <hr>
   <h3 class="label">{$titulo}</h3>
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Data Cadastro</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {foreach from=$itens item=item}
	   <tr>
	     <td>{$item->id}</td>
	     <td>{$item->nome} {$item->sobrenome}</td>
	     <td>{$item->email}</td>
	     <td>{$item->dataCadastro}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/cadastro/cadastrar/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="{$empresa->id}" href="{base_url()}admin/cadastro/deletar/{$item->id}"><i class="icon-remove"></i></a></td>
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