{include file="admin/inc/header.tpl"}
<div class="container">
   <form class="form-horizontal" id="createGeneric" method="POST" action="{$action}">
    <hr>
    <h4>Categoria</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$item->nome}" placeholder="Nome">
      </div>
    </div>
    <input type="hidden" name="id" value="{$item->id}" />
    <div class="alert hide">
	<button type="button" class="close" data-dismiss="alert">?</button>
	<p class="msg"></p>
    </div>
    <!--<div class="alert alert-success">Sucesso</div>-->
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
   <hr>
   <h3 class="label">Categorias</h3>
   <table class="table table-bordered">
	<thead>
	   <tr>
		<th>Id</th>
		<th>Nome</th>
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
	     <td>{$item->dataCadastro}</td>
	     <td><a title="Editar" class="btn" href="{base_url()}admin/produto/categorias/{$item->id}"><i class="icon-pencil"></i></a></td>
	     <td><a title="Remover" class="btn delete" rel="{$item->id}" href="{base_url()}admin/produto/categoriaDeletar/{$item->id}"><i class="icon-remove"></i></a></td>
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