<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Atestado ::.</title>
<link href="css.css" rel="stylesheet" type="text/css" />
{literal}
<style type="text/css">
<!--
.style3 {font-size: 13px}
.tabela {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}

-->
</style>
<script type="text/JavaScript">
<!--
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
//-->
</script>
{/literal}
</head>
<!--onload="MM_callJS('window.print();')-->
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<table width="993">
  <tr>
    <td width="490" valign="top"><table width="490" height="816" border="1" align="left" bordercolor="#009900" bgcolor="#FFFFFF">
      <tr>
        <td width="777">
			<table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" align="center"><img src="/assets/img/logo_medicina.jpg" width="77" height="81" /></td>
              <td width="80%" align="center" valign="top"><strong>IRON SAFETY Assessoria em Seguran&ccedil;a S/S Ltda</strong><br />
                Servi&ccedil;os M&eacute;dicos a Ind&uacute;stria e Com&eacute;rcio<br />
                <span class="style3"><br />
                  Rua Marconi, 131 - 3&ordm; andar - CJ. 312 - Tel/Fax: 3120-5613/3256-2624</span> <br />
                <span class="style3">Dra.Carmem Fumiko Mori - M&eacute;dica Respons&aacute;vel<br />
                  M&eacute;dica do Trabalho - CRM 28154 - MTB 7881</span></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="100%" class="tabela" cellpadding="0" cellspacing="0">
            <tr>
              <td width="46%" rowspan="2" align="right" valign="middle" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATESTADO:</strong></td>
              <td width="54%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeAtestado"] == 'ocupacional'}x{/if}) SA&Uacute;DE OCUPACIONAL </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">( {if $data["tipoDeAtestado"] == 'medico'}x{/if} ) M&Eacute;DICO </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="412" valign="middle">&nbsp;<strong>Empresa:</strong> {$data["empresa"]} <br />
          &nbsp;<strong>Endere&ccedil;o:</strong> {$data["endereco"]}<br />
          &nbsp;Em cumprimento &agrave; Lei 610/50 e/ou Lei 6514/77 e 7855/89 - Artigo 168 -&nbsp;<br />
          &nbsp;&sect;1&ordm; e &nbsp;3&ordm; e &nbsp;Portarias N&ordm;s &nbsp;3214/78, 3164/82, 12/83, 24/94 e 8/96 do Minist&eacute;rio &nbsp;do &nbsp;Trabalho para fins de exame: <br />
          
          <table width="100%" class="tabela">
            <tr>
              <td width="37%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'admissional'}x{/if})&nbsp;ADMISSIONAL</td>
              <td width="32%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'periodico'}x{/if})&nbsp;PERI&Oacute;DICO</td>
              <td width="31%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'retorno'}x{/if})&nbsp;RETORNO AO TRABALHO </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'mudanca'}x{/if})&nbsp;MUDAN&Ccedil;A DE FUN&Ccedil;&Atilde;O </td>
              <td align="left" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'demissional'}x{/if})&nbsp;DEMISSIONAL</td>
            </tr>
          </table>
            <strong>Atesto que o Sr.(a) :</strong>&nbsp;{$data["sr"]}<br />
          &nbsp; <strong>Portador(a) do R.G. n&ordm;.</strong>&nbsp;{$data["rg"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Idade:</strong> {$data["idade"]}&nbsp;&nbsp;&nbsp;<strong><br />
            &nbsp;      Estado Civil:</strong>&nbsp;{$data["estCivil"]}&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;          <strong>Exposto aos riscos ocupacionais:</strong><br />
          <table width="100%" align="center" class="tabela">
            <tr>
              <td width="50%" align="left" bgcolor="#CCCCCC">({if $data["riscoFisico"]}x{/if}) Riscos físicos: {$data["riscoFisico"]}</td>
              <td width="50%" align="left" bgcolor="#CCCCCC">({if $data["riscoErgonomico"]}x{/if}) Riscos ergonômicos: {$data["riscoErgonomico"]}</td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoQuimico"]}x{/if}) Riscos químicos: {$data["riscoFisico"]}</td>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoAcidentes"]}x{/if}) Acidentes: {$data["riscoAcidentes"]}</td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoBiologico"]}x{/if}) Riscos biológicos: {$data["riscoBiologico"]}</td>
              <td align="left" bgcolor="#CCCCCC">({if $semRisco == "1"}x{/if}) Ausência de risco ocupacional específico </td>
            </tr>
          </table>
            <strong>Foi clinicamente examinado(a), sendo considerado:</strong><br />
          <table width="100%" class="tabela">
            <tr>
              <td width="27%" valign="top">( {if $data["considerado"] == 'Apto'}x{/if} ) Apto&nbsp;( {if $data["considerado"] == 'Inapto'}x{/if} ) Inapto </td>
              <td width="73%" valign="top">Para exercer a fun&ccedil;&atilde;o de : {$data["funcao"]} <br /></td>
            </tr>
          </table>
           <strong>Exames complementares: </strong> {$data["examesComplementares"]}<br />
           <strong> Obs:</strong> {$data["obs"]}<br />
          <br />
          <strong>&nbsp;Data: {$data["data"]}</strong></td>
      </tr>
      <tr>
        <td height="">
			<table width="100%" class="tabela">
            <!--DWLayoutTable-->
            <tr>
              <td width="53%" height="50" valign="top"><div align="center"><img src="/assets/img/logo.jpg" width="53" height="97" align="left" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECEBI A 2&ordm; VIA:<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCAL E DATA:<br />
                <br />
                <br />
                <br />
                ______________________<br />
                Assinatura do Trabalhador</div>
                 <font size="1"><br />
                &nbsp;Recolhimento autorizado conforme lei estadual 610/50&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
              <td width="47%" align="left" valign="top"><table width="52%" align="right">
                  <tr>
                    <td height="60" align="center"><br />
                        _______________________________<br />
                      <font size="1">Assinatura do m&eacute;dico examinador</font><br /></td>
                  </tr>
                  <tr>
                    <td align="center"><br />
                      _________________________<br />
                      <font size="1">Nome e CRM do M&eacute;dico do Trabalho <br />
                      respons&aacute;vel ou coordenador do PCMSO </font></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
	<td width="490" valign="top"><table width="490" height="816" border="1" align="left" bordercolor="#009900" bgcolor="#FFFFFF">
      <tr>
        <td width="777">
			<table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" align="center"><img src="/assets/img/logo_medicina.jpg" width="77" height="81" /></td>
              <td width="80%" align="center" valign="top"><strong>IRON SAFETY Assessoria em Seguran&ccedil;a S/S Ltda</strong><br />
                Servi&ccedil;os M&eacute;dicos a Ind&uacute;stria e Com&eacute;rcio<br />
                <span class="style3"><br />
                  Rua Marconi, 131 - 3&ordm; andar - CJ. 312 - Tel/Fax: 3120-5613/3256-2624</span> <br />
                <span class="style3">Dra.Carmem Fumiko Mori - M&eacute;dica Respons&aacute;vel<br />
                  M&eacute;dica do Trabalho - CRM 28154 - MTB 7881</span></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="100%" class="tabela" cellpadding="0" cellspacing="0">
            <tr>
              <td width="46%" rowspan="2" align="right" valign="middle" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATESTADO:</strong></td>
              <td width="54%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeAtestado"] == 'ocupacional'}x{/if}) SA&Uacute;DE OCUPACIONAL </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">( {if $data["tipoDeAtestado"] == 'medico'}x{/if} ) M&Eacute;DICO </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="412" valign="middle">&nbsp;<strong>Empresa:</strong> {$data["empresa"]} <br />
          &nbsp;<strong>Endere&ccedil;o:</strong> {$data["endereco"]}<br />
          &nbsp;Em cumprimento &agrave; Lei 610/50 e/ou Lei 6514/77 e 7855/89 - Artigo 168 -&nbsp;<br />
          &nbsp;&sect;1&ordm; e &nbsp;3&ordm; e &nbsp;Portarias N&ordm;s &nbsp;3214/78, 3164/82, 12/83, 24/94 e 8/96 do Minist&eacute;rio &nbsp;do &nbsp;Trabalho para fins de exame: <br />
          
          <table width="100%" class="tabela">
            <tr>
              <td width="37%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'admissional'}x{/if})&nbsp;ADMISSIONAL</td>
              <td width="32%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'periodico'}x{/if})&nbsp;PERI&Oacute;DICO</td>
              <td width="31%" align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'retorno'}x{/if})&nbsp;RETORNO AO TRABALHO </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'mudanca'}x{/if})&nbsp;MUDAN&Ccedil;A DE FUN&Ccedil;&Atilde;O </td>
              <td align="left" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" bgcolor="#CCCCCC">({if $data["tipoDeExame"] == 'demissional'}x{/if})&nbsp;DEMISSIONAL</td>
            </tr>
          </table>
            <strong>Atesto que o Sr.(a) :</strong>&nbsp;{$data["sr"]}<br />
          &nbsp; <strong>Portador(a) do R.G. n&ordm;.</strong>&nbsp;{$data["rg"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Idade:</strong> {$data["idade"]}&nbsp;&nbsp;&nbsp;<strong><br />
            &nbsp;      Estado Civil:</strong>&nbsp;{$data["estCivil"]}&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;          <strong>Exposto aos riscos ocupacionais:</strong><br />
          <table width="100%" align="center" class="tabela">
            <tr>
              <td width="50%" align="left" bgcolor="#CCCCCC">({if $data["riscoFisico"]}x{/if}) Riscos físicos: {$data["riscoFisico"]}</td>
              <td width="50%" align="left" bgcolor="#CCCCCC">({if $data["riscoErgonomico"]}x{/if}) Riscos ergonômicos: {$data["riscoErgonomico"]}</td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoQuimico"]}x{/if}) Riscos químicos: {$data["riscoFisico"]}</td>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoAcidentes"]}x{/if}) Acidentes: {$data["riscoAcidentes"]}</td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">({if $data["riscoBiologico"]}x{/if}) Riscos biológicos: {$data["riscoBiologico"]}</td>
              <td align="left" bgcolor="#CCCCCC">({if $semRisco == "1"}x{/if}) Ausência de risco ocupacional específico </td>
            </tr>
          </table>
            <strong>Foi clinicamente examinado(a), sendo considerado:</strong><br />
          <table width="100%" class="tabela">
            <tr>
              <td width="27%" valign="top">( {if $data["considerado"] == 'Apto'}x{/if} ) Apto&nbsp;( {if $data["considerado"] == 'Inapto'}x{/if} ) Inapto </td>
              <td width="73%" valign="top">Para exercer a fun&ccedil;&atilde;o de : {$data["funcao"]} <br /></td>
            </tr>
          </table>
           <strong>Exames complementares: </strong> {$data["examesComplementares"]}<br />
           <strong> Obs:</strong> {$data["obs"]}<br />
          <br />
          <strong>&nbsp;Data: {$data["data"]}</strong></td>
      </tr>
      <tr>
        <td height="">
			<table width="100%" class="tabela">
            <!--DWLayoutTable-->
            <tr>
              <td width="53%" height="50" valign="top"><div align="center"><img src="/assets/img/logo.jpg" width="53" height="97" align="left" /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECEBI A 2&ordm; VIA:<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCAL E DATA:<br />
                <br />
                <br />
                <br />
                ______________________<br />
                Assinatura do Trabalhador</div>
                 <font size="1"><br />
                &nbsp;Recolhimento autorizado conforme lei estadual 610/50&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
              <td width="47%" align="left" valign="top"><table width="52%" align="right">
                  <tr>
                    <td height="60" align="center"><br />
                        _______________________________<br />
                      <font size="1">Assinatura do m&eacute;dico examinador</font><br /></td>
                  </tr>
                  <tr>
                    <td align="center"><br />
                      _________________________<br />
                      <font size="1">Nome e CRM do M&eacute;dico do Trabalho <br />
                      respons&aacute;vel ou coordenador do PCMSO </font></td>
                  </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>


</body>
</html>