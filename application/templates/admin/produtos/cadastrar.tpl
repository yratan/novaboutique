{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="empresa" method="POST" action="{$base_url}index.php?c=admin&m=criarEmpresaPOST">
    <hr>
    <h4>{$pageTitle}</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$item->nome}" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Estoque</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$item->estoque}" placeholder="Nome">
      </div>
    </div>
    <input type="hidden" name="id" value="{$item->id}" />
    <!--<div class="alert alert-success">Sucesso</div>-->
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}