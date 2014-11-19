{include file="admin/inc/header.tpl"}
<div class="container">
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
   <hr>
   <h3 class="label">Usuários</h3>
   <table class="table table-striped">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Login</th>
		<th></th>
		<th></th>
	   </tr>
	</thead>
	<tbody>
	   {foreach from=$usuarios->result() item=usuario}
	   <tr>
	     <td>{$usuario->id}</td>
	     <td><a href="{base_url()}admin/criarUsuario?id={$usuario->id}">{$usuario->nome}</a></td>
	     <td>{$usuario->email}</td>
	     <td>{$usuario->login}</td>
	     <td><a title="Editar" class="btn" href="{$base_url}index.php?c=admin&m=criarUsuario&id={$usuario->id}""><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn deleteUsuario" rel="{$usuario->id}" href="#"><i class="icon-remove"></i></a></td>
	   </tr>
	   {/foreach}
	</tbody>
   </table>
   <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}