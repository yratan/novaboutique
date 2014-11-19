//0.3
$(document).ready(function(){
	
	$base_url = $('body').attr("data-url");
	
	$('.money').mask('000.000.000.000.000,00', {reverse: true});
	$('.celular').mask('(00) 00000-0000');
	$('.telefone').mask('(00) 0000-0000');
	$('.cnpj').mask('00.000.000/0000-00');
	$(".datepicker").datepicker({
		dateFormat: 'dd-mm-yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior'
	});
	
	//$("li.dropdown a").click(function(e)
	//{
	//	//alert('a');
	//	$(this).next('ul.dropdown-menu').css("display", "block");
	//	e.stopPropagation();
	//});
	
	//$('[data-toggle=dropdown]').each(function(){this.addEventListener('click',function(){},false);});

	
	$('form#createGeneric').validate({ errorContainer: $(".txtMsg"), errorLabelContainer: $(".txtError"),
        submitHandler: function() {
			$.ajax({
				type: 'POST',
				data: $("form#createGeneric").serialize(),
				dataType: "json",
				url: $("form#createGeneric").attr("action"),
				success: function(json) {
					if (json.status == "ok")
					{
						
						if (json.redirect)
						{
							window.location=json.redirect;	
						}
						
						if (json.insert == '1')
						{
							$('input').val('');
							$('.alert .msg').html('Conteúdo cadastrado com sucesso.');
						}
						else
						{
							$('.alert .msg').html('Conteúdo atualizado com sucesso.');
						}
						
						$('.alert').addClass('alert-success');
						$('.alert').fadeIn();
						setTimeout(function(){$('.alert').fadeOut() },5000);
					}
					else
					{
						$('.alert .msg').html('Erro ao cadastrar/atualizar conteúdo.');
						$('.alert').addClass('alert-error');
						$('.alert').fadeIn();
					}
				}
			});
		}
	});

	$('#usuario').validate({ errorContainer: $(".txtMsg"), errorLabelContainer: $(".txtError"),
        submitHandler: function() {
			$.ajax({
				type: 'POST',
				data: $("#usuario").serialize(),
				dataType: "json",
				url: $("#usuario").attr("action"),
				success: function(json) {
					if (json.status == "ok") {
						alert("Usuário atualizado");
						history.back();
					}else if (json.status == "errorSenha") {
						$('.alert-error').text(json.msg).fadeIn().delay(5000).fadeOut();;
					} else {
						alert('Erro ao atualizar usuário');
					}
				}
			});
		}
	});
	
	
	$('#login').validate({ errorContainer: $(".txtMsg"), errorLabelContainer: $(".txtError"),
        submitHandler: function() {
			$.ajax({
				type: 'POST',
				data: $("#login").serialize(),
				dataType: "json",
				url: $("#login").attr("action"),
				success: function(json) {
					if (json.status == "ok") {
						window.location = json.url;
					} else {
						$('.alert-error').fadeIn('fast').delay(5000).fadeOut();
					}
				}
			});
		}
	});

	
	//$('.icon-stop').live('click', function()
	//{
	//	$(this).parents('tr').removeClass('error');
	//	$(this).parents('tr').find('a').addClass('cancel');
	//	$(this).parents('tr').find('a').removeClass('icon-stop');
	//	$(this).parents('tr').find('a').addClass('icon-remove');
	//	return false;
	//});
	//
	//$('.delete:not(.icon-stop)').live('click', function()
	//{
	//	$id = $(this).attr("rel");
	//	$url = $(this).attr("href");
	//	$$ = $(this);
	//	$$.parents('tr').addClass('error');
	//	$$.removeClass('icon-remove').addClass('icon-stop');
	//	
	//	setTimeout(function()
	//	{
	//		if ($$.hasClass('cancel'))
	//		{
	//			alert('cancela ajax');
	//			$$.parents('tr').removeClass('error');
	//			$$.removeClass('cancel');
	//			
	//		}
	//		else
	//		{
	//			$.ajax({
	//			  type: 'GET',
	//			  dataType: "json",
	//			  url: $url,
	//			  success: function(json)
	//			  {
	//				if(json.status == "ok")
	//				{
	//					$$.parents('tr').fadeOut();
	//				}
	//				else
	//				{
	//				  alert("Erro ao deletar.")
	//				}
	//				}
	//			});
	//		}
	//		
	//	}, 5000);
	//	
	//	return false;
	//});
	
	$('.delete').live('click', function()
	{
		$url = $(this).attr("href");
		$$ = $(this);
		$$.parents('tr').addClass('error');
		if (confirm('Tem certeza?')) {
			$.ajax({
			  type: 'GET',
			  dataType: "json",
			  url: $url,
			  success: function(json)
			  {
				if(json.status == "ok")
				{
					$$.parents('tr').fadeOut();
				}
				else
				{
				  alert("Erro ao deletar.")
				}
				}
			});
		}
		else
		{
			$$.parents('tr').removeClass('error');
		}
		
		return false;
	});
	
	$('.deleteUsuario').click(function(){
		$id = $(this).attr("rel");
		
		if(confirm("Tem certeza que deseja deletar este usuário?"))
		{
		  $.ajax({
			  type: 'GET',
			  dataType: "json",
			  url: $base_url + 'index.php?c=admin&m=deleteUsuario&id=' + $id,
			  success: function(json) {
				  if(json.status == "ok")
				  {
					alert("Usuário deletado com sucesso.")
					//window.location=(json.url);
					location.reload();
				  }
				  else
				  {
					alert("Erro ao deletar usuário.")
				  }
			  }
		  });
		}
	});

});