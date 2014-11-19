{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
  <form class="form-horizontal" id="empresa" method="POST" action="{$base_url}index.php?c=admin&m=criarEmpresaPOST">
    <hr>
    <h4>Empresa</h4>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="nome" name="nome" value="{$empresa->nome}" placeholder="Nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Endereço</label>
      <div class="controls">
        <input class="input-xxlarge required" type="text" id="endereco" name="endereco" value="{$empresa->endereco}" placeholder="End.">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="status">Status</label>
      <div class="controls">
	   <select name="status">
		<option {if $empresa->status == 1} selected="selected"{/if} value="1">Ativa</option>
		<option {if $empresa->status == 2} selected="selected"{/if} value="2">Inativa</option>
	   </select>
      </div>
    </div>
    <input type="hidden" name="id" value="{$empresa->id}" />
    <!--<div class="alert alert-success">Sucesso</div>-->
    <div class="form-actions">
	<button type="submit" class="btn btn-primary">Salvar</button>
     </div>
  </form>
  <a href="javascript:history.back()" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}