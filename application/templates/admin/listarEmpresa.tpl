{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <form class="form-horizontal" id="empresa" method="POST" action="{$base_url}index.php?c=admin&m=criarEmpresaPOST">
   <hr>
   <h3 class="label">Empresas</h3>
   <table class="table table-striped">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Endereço</th>
		<th>Status</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {foreach from=$empresas->result() item=empresa}
	   <tr>
	     <td>{$empresa->id}</td>
	     <td><a href="{$base_url}index.php?c=admin&m=criarEmpresa&id={$empresa->id}">{$empresa->nome}</a></td>
	     <td>{$empresa->endereco}</td>
	     <td>{if $empresa->status == 1}Ativa{else}Inativa{/if}</td>
	     <td><a title="Editar" class="btn" href="{$base_url}index.php?c=admin&m=criarEmpresa&id={$empresa->id}""><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn deleteEmpresa" rel="{$empresa->id}" href="#"><i class="icon-remove"></i></a></td>
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