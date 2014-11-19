{include file="admin/inc/header.tpl"}
<div class="container">
  <a href="{$base_url}" class="btn btn-mini">Voltar</a>
  <form target="_self" class="form-horizontal" method="POST" id="geraAtestado" action="{$base_url}index.php?c=admin&m=imprimirAtestado">
    <hr>
    <h4 class="label">Dados da empresa</h4>
    <div class="control-group">
      <label class="control-label" for="empresaCadastrada">Empresa cadastrada</label>
      <div class="controls">
	   <select class="input-xxlarge empresaCadastrada" name="empresaCadastrada">
		{foreach from=$empresas->result() item=empresa}
		   <option value="{$empresa->id}">{$empresa->nome}</option>
		{/foreach}
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="empresa">Empresa</label>
      <div class="controls">
        <input class="input-xxlarge nomeEmpresa" type="text" id="empresa" name="empresa" placeholder="Empresa">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="endereco">Endereço</label>
      <div class="controls">
        <input class="input-xxlarge enderecoEmpresa" type="text" id="endereco" name="endereco" placeholder="Endereço">
      </div>
    </div>
    <hr>
    <h4 class="label">Exame</h4>
    <div class="control-group">
      <label class="control-label" for="data">Data do exame</label>
      <div class="controls">
        <input type="text" id="data" name="data" placeholder="Data">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="tipoDeAtestado">Tipo de atestado</label>
      <div class="controls">
        <select name="tipoDeAtestado">
		<option value="ocupacional">Ocupacional</option>
		<option value="medico">Médico</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="tipoDeExame">Tipo de exame</label>
      <div class="controls">
	   <select name="tipoDeExame">
		<option value="admissional">Admissional</option>
		<option value="periodico">Periódico</option>
		<option value="mudanca">Mudança</option>
		<option value="retorno">Retorno</option>
		<option value="demissional">Demissional</option>
	   </select>
      </div>
    </div>
    
    <hr>
    <h4 class="label">Dados do funcionário</h4>
    <div class="control-group">
      <label class="control-label" for="sr">O Sr(a).</label>
      <div class="controls">
        <input type="text" id="sr" name="sr" placeholder="Nome funcionário">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="idade">Idade</label>
      <div class="controls">
        <input type="text" id="idade" name="idade" placeholder="Idade">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="rg">Rg</label>
      <div class="controls">
        <input type="text" id="rg" name="rg" placeholder="Rg">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="estCivil">Est.Civil</label>
      <div class="controls">
        <input type="text" id="estCivil" name="estCivil" placeholder="Est.Civil">
      </div>
    </div>
    <hr>
    <h4 class="label">Riscos</h4>
    <div class="control-group">
      <label class="control-label" for="riscoFisico">Físicos</label>
      <div class="controls">
	   <select name="riscoFisico">
		<option value="">Sem risco</option>
		<option value="Ruído">Ruído</option>
		<option value="Calor">Calor</option>
		<option value="Iluminação">Iluminação</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="riscoQuimico">Químicos</label>
      <div class="controls">
	   <select name="riscoQuimico">
		<option value="">Sem Risco</option>
		<option value="Poeira">Poeira</option>
		<option value="Solventes">Solventes</option>
		<option value="Tintas">Tintas</option>
		<option value="Fumos metálicos">Fumos metálicos</option>
		<option value="Óleo corte">Óleo corte</option>
		<option value="Hidrocarbonetos">Hidrocarbonetos</option>
		<option value="Outros">Outros</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="riscoBiologico">Biológicos</label>
      <div class="controls">
	   <select name="riscoBiologico">
		<option value="">Sem Risco</option>
		<option value="Doenças Infectocontagiantes">Doenças Infectocontagiantes</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="riscoErgonomico">Ergonômicos</label>
      <div class="controls">
	   <select name="riscoErgonomico">
		<option value="">Sem Risco</option>
		<option value="Postura Trabalho">Postura Trabalho</option>
		<option value="Movimentos Repetitivos">Movimentos Repetitivos</option>
		<option value="Levantamento de Peso">Levantamento de Peso</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="riscoAcidentes">Acidentes</label>
      <div class="controls">
	   <select name="riscoAcidentes">
		<option value="">Sem Risco</option>
		<option value="Quebra">Quebra</option>
		<option value="Quebradura">Quebradura</option>
		<option value="Choque elétrico">Choque elétrico</option>
		<option value="Outros">Outros</option>
	   </select>
      </div>
    </div>
    <hr>
    <h4 class="label">Conclusão</h4>
    <div class="control-group">
      <label class="control-label" for="considerado">Considerado</label>
      <div class="controls">
	   <select name="considerado">
		<option value="">Selecione</option>
		<option value="Apto">Apto</option>
		<option value="Inapto">Inapto</option>
	   </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="funcao">Função</label>
      <div class="controls">
	   <input type="text" id="funcao" name="funcao" placeholder="Função">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="examesComplementares">Exames complementares</label>
      <div class="controls">
	   <textarea id="examesComplementares" name="examesComplementares" rows="3"></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="obs">Observações</label>
      <div class="controls">
	   <textarea id="obs" name="obs" rows="3"></textarea>
      </div>
    </div>
    <div class="form-actions">
	<button type="submit"  class="btn btn-primary">Gerar atestado</button>
     </div>
  </form>
  <a href="{$base_url}" class="btn btn-mini">Voltar</a>
<hr>
{include file="admin/inc/footer.tpl"}     