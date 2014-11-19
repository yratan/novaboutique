<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: Atestado ::.</title>
<link href="css.css" rel="stylesheet" type="text/css" />
{literal}
<style type="text/css">
<!--
.style3 {font-size: 12px}
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="MM_callJS('window.print();')">
<table width="993">
  <tr>
    <td width="490" valign="top"><table width="490" height="816" border="1" align="left" bordercolor="#009900" bgcolor="#FFFFFF">
      <tr>
        <td width="777"><table width="100%">
            <tr>
              <td width="20%" align="center"><img src="/assets/img/logo_medicina.jpg" width="77" height="81" /></td>
              <td width="80%" align="center" valign="top"><b>IRON SAFETY Assessoria em Seguran&ccedil;a S/S Ltda</b><br />
                Servi&ccedil;os M&eacute;dicos a Ind&uacute;stria e Com&eacute;rcio<br />
                <span class="style3"><br />
                  Rua Marconi, 131 - 3&ordm; andar - CJ. 312 - Tel/Fax: 3120-5613/3256-2624</span> <br />
                <span class="style3">Dra.Carmem Fumiko Mori - M&eacute;dica Respons&aacute;vel<br />
                  M&eacute;dica do Trabalho - CRM 28154 - MTB 7881</span></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="100%" class="tabela">
            <tr>
              <td width="46%" rowspan="2" align="right" valign="middle" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATESTADO:</strong></td>
              <td width="54%" align="left" bgcolor="#CCCCCC">( {if $data["tipoDeAtestado"] == 'ocupacional'}x{/if}&nbsp;) SA&Uacute;DE OCUPACIONAL </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeAtestado"] == 'medico'}x{/if}&nbsp;) M&Eacute;DICO </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="412" valign="middle">&nbsp;<strong>Empresa:</strong>&nbsp;{$data["empresa"]|utf8_decode} <br />
          &nbsp;<strong>Endere&ccedil;o:</strong>&nbsp;{$data["endereco"]|utf8_decode}<br />
          &nbsp;Em cumprimento &agrave; Lei 610/50 e/ou Lei 6514/77 e 7855/89 - Artigo 168 -&nbsp;<br />
          &nbsp;&sect;1&ordm; e &nbsp;3&ordm; e &nbsp;Portarias N&ordm;s &nbsp;3214/78, 3164/82, 12/83, 24/94 e 8/96 do Minist&eacute;rio &nbsp;do &nbsp;Trabalho para fins de exame: <br />
          
          <table width="100%" class="tabela">
            <tr>
              <td width="37%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'admissional'}x{/if}&nbsp;)&nbsp;ADMISSIONAL</td>
              <td width="32%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'periodico'}x{/if}&nbsp;)&nbsp;PERI&Oacute;DICO</td>
              <td width="31%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'retorno'}x{/if}&nbsp;)&nbsp;RETORNO AO TRABALHO </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'mudanca'}x{/if}&nbsp;)&nbsp;MUDAN&Ccedil;A DE FUN&Ccedil;&Atilde;O </td>
              <td align="left" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'demissional'}x{/if}&nbsp;)&nbsp;DEMISSIONAL</td>
            </tr>
          </table>
            <b>Atesto que o Sr.(a) :</b>&nbsp;{$data["sr"]|utf8_decode}<br />
          &nbsp; <b>Portador(a) do R.G. n&ordm;.</b>&nbsp;{$data["rg"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Idade:</b>&nbsp;{$data["idade"]}&nbsp;&nbsp;&nbsp;<b><br />
            &nbsp;      Estado Civil:</b>&nbsp;{$data["estCivil"]|utf8_decode}&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;          <b>Exposto aos riscos ocupacionais:</b><br />
          <table width="100%" align="center" class="tabela">
            <tr>
              <td width="50%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoFisico"]}x{/if}&nbsp;) Riscos f&iacute;sicos:&nbsp;
              {$data["riscoFisico"]|utf8_decode}              </td>
              <td width="50%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoErgonomico"]}x{/if}&nbsp;) Riscos ergon&ocirc;micos:&nbsp;{$data["riscoErgonomico"]|utf8_decode} </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoQuimico"]}x{/if}&nbsp;) Riscos qu&iacute;micos:&nbsp;{$data["riscoQuimico"]|utf8_decode} </td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoAcidentes"]}x{/if}&nbsp;) Acidentes:&nbsp;{$data["riscoAcidentes"]|utf8_decode} </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoBiologico"]}x{/if}&nbsp;) Riscos biol&oacute;gicos:&nbsp;{$data["riscoBiologico"]|utf8_decode} </td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $semRisco == "1"}x{/if}&nbsp;) Aus&ecirc;ncia de risco ocupacional espec&iacute;fico </td>
            </tr>
          </table>
            <b>Foi clinicamente examinado(a), sendo considerado:</b><br />
          <table width="100%" class="tabela">
            <tr>
              <td width="27%" valign="top">(&nbsp;{if $data["considerado"] == 'Apto'}x{/if}&nbsp;) Apto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;{if $data["considerado"] == 'Inapto'}x{/if}&nbsp;) Inapto </td>
              <td width="73%" valign="top">Para exercer a fun&ccedil;&atilde;o de :&nbsp;{$data["funcao"]} <br /></td>
            </tr>
          </table>
           <b>Exames complementares: </b>&nbsp;{$data["examesComplementares"]|utf8_decode}<br />
          &nbsp;<b>Obs:</b>&nbsp;{$data["obs"]|utf8_decode}<br />
          <br />
          <strong>&nbsp;Data: {$data["data"]|utf8_decode}</strong></td>
      </tr>
      <tr>
        <td height="179"><table width="100%" height="134" class="tabela">
            <!--DWLayoutTable-->
            <tr>
              <td width="53%" height="128" valign="top"><div align="center"><img src="/assets/img/logo.jpg" width="53" height="97" align="left" /><br />
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
    <td width="491" valign="top"><table width="490" height="816" border="1" align="left" bordercolor="#009900" bgcolor="#FFFFFF">
      <tr>
        <td width="777"><table width="100%">
            <tr>
              <td width="20%" align="center"><img src="/assets/img/logo_medicina.jpg" width="77" height="81" /></td>
              <td width="80%" align="center" valign="top"><b>IRON SAFETY Assessoria em Seguran&ccedil;a S/S Ltda</b><br />
                Servi&ccedil;os M&eacute;dicos a Ind&uacute;stria e Com&eacute;rcio<br />
                <span class="style3"><br />
                  Rua Marconi, 131 - 3&ordm; andar - CJ. 312 - Tel/Fax: 3120-5613/3256-2624</span> <br />
                <span class="style3">Dra.Carmem Fumiko Mori - M&eacute;dica Respons&aacute;vel<br />
                  M&eacute;dica do Trabalho - CRM 28154 - MTB 7881</span></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="100%" class="tabela">
            <tr>
              <td width="46%" rowspan="2" align="right" valign="middle" bgcolor="#CCCCCC"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATESTADO:</strong></td>
              <td width="54%" align="left" bgcolor="#CCCCCC">( {if $data["tipoDeAtestado"] == 'ocupacional'}x{/if}&nbsp;) SA&Uacute;DE OCUPACIONAL </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeAtestado"] == 'medico'}x{/if}&nbsp;) M&Eacute;DICO </td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="412" valign="middle">&nbsp;<strong>Empresa:</strong>&nbsp;{$data["empresa"]|utf8_decode} <br />
          &nbsp;<strong>Endere&ccedil;o:</strong>&nbsp;{$data["endereco"]|utf8_decode}<br />
          &nbsp;Em cumprimento &agrave; Lei 610/50 e/ou Lei 6514/77 e 7855/89 - Artigo 168 -&nbsp;<br />
          &nbsp;&sect;1&ordm; e &nbsp;3&ordm; e &nbsp;Portarias N&ordm;s &nbsp;3214/78, 3164/82, 12/83, 24/94 e 8/96 do Minist&eacute;rio &nbsp;do &nbsp;Trabalho para fins de exame: <br />
          
          <table width="100%" class="tabela">
            <tr>
              <td width="37%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'admissional'}x{/if}&nbsp;)&nbsp;ADMISSIONAL</td>
              <td width="32%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'periodico'}x{/if}&nbsp;)&nbsp;PERI&Oacute;DICO</td>
              <td width="31%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'retorno'}x{/if}&nbsp;)&nbsp;RETORNO AO TRABALHO </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'mudanca'}x{/if}&nbsp;)&nbsp;MUDAN&Ccedil;A DE FUN&Ccedil;&Atilde;O </td>
              <td align="left" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["tipoDeExame"] == 'demissional'}x{/if}&nbsp;)&nbsp;DEMISSIONAL</td>
            </tr>
          </table>
            <b>Atesto que o Sr.(a) :</b>&nbsp;{$data["sr"]|utf8_decode}<br />
          &nbsp; <b>Portador(a) do R.G. n&ordm;.</b>&nbsp;{$data["rg"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Idade:</b>&nbsp;{$data["idade"]}&nbsp;&nbsp;&nbsp;<b><br />
            &nbsp;      Estado Civil:</b>&nbsp;{$data["estCivil"]|utf8_decode}&nbsp;&nbsp;&nbsp;&nbsp;<br />
&nbsp;          <b>Exposto aos riscos ocupacionais:</b><br />
          <table width="100%" align="center" class="tabela">
            <tr>
              <td width="50%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoFisico"]}x{/if}&nbsp;) Riscos f&iacute;sicos:&nbsp;
              {$data["riscoFisico"]|utf8_decode}              </td>
              <td width="50%" align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoErgonomico"]}x{/if}&nbsp;) Riscos ergon&ocirc;micos:&nbsp;{$data["riscoErgonomico"]|utf8_decode} </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoQuimico"]}x{/if}&nbsp;) Riscos qu&iacute;micos:&nbsp;{$data["riscoQuimico"]|utf8_decode} </td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoAcidentes"]}x{/if}&nbsp;) Acidentes:&nbsp;{$data["riscoAcidentes"]} </td>
            </tr>
            <tr>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $data["riscoBiologico"]}x{/if}&nbsp;) Riscos biol&oacute;gicos:&nbsp;{$data["riscoBiologico"]|utf8_decode} </td>
              <td align="left" bgcolor="#CCCCCC">(&nbsp;{if $semRisco == "1"}x{/if}&nbsp;) Aus&ecirc;ncia de risco ocupacional espec&iacute;fico </td>
            </tr>
          </table>
            <b>Foi clinicamente examinado(a), sendo considerado:</b><br />
          <table width="100%" class="tabela">
            <tr>
              <td width="27%" valign="top">(&nbsp;{if $data["considerado"] == 'Apto'}x{/if}&nbsp;) Apto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;{if $data["considerado"] == 'Inapto'}x{/if}&nbsp;) Inapto </td>
              <td width="73%" valign="top">Para exercer a fun&ccedil;&atilde;o de :&nbsp;{$data["funcao"]} <br /></td>
            </tr>
          </table>
           <b>Exames complementares: </b>&nbsp;{$data["examesComplementares"]|utf8_decode}<br />
          &nbsp;<b>Obs:</b>&nbsp;{$data["obs"]|utf8_decode}<br />
          <br />
          <strong>&nbsp;Data: {$data["data"]|utf8_decode}</strong></td>
      </tr>
      <tr>
        <td height="179"><table width="100%" height="134" class="tabela">
            <!--DWLayoutTable-->
            <tr>
              <td width="53%" height="128" valign="top"><div align="center"><img src="/assets/img/logo.jpg" width="53" height="97" align="left" /><br />
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
