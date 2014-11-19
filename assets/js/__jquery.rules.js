//0.3
$(document).ready(function(){
	
	$base_url = $('body').attr("data-url");
	
	$('#empresa').validate({ errorContainer: $(".txtMsg"), errorLabelContainer: $(".txtError"),
        submitHandler: function() {
			$.ajax({
				type: 'POST',
				data: $("#empresa").serialize(),
				dataType: "json",
				url: $("#empresa").attr("action"),
				success: function(json) {
					if (json.status == "ok") {
						alert("Empresa atualizada");
						//window.location=(json.url);
						history.back();
					} else {
						alert('Erro ao atualizar empresa');
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

	$('.empresaCadastrada').change(function(){
		$.ajax({
			type: 'GET',
			dataType: "json",
			url: $base_url + 'index.php?c=admin&m=ajaxEmpresa&id=' + $(this).val(),
			success: function(json) {
				
				$('.nomeEmpresa').val(json.empresa.nome);
				$('.enderecoEmpresa').val(json.empresa.endereco);
				
			}
		});
	});
	
	$('.deleteEmpresa').click(function(){
		$id = $(this).attr("rel");
		
		if(confirm("Tem certeza que deseja deletar esta empresa?"))
		{
		  $.ajax({
			  type: 'GET',
			  dataType: "json",
			  url: $base_url + 'index.php?c=admin&m=deleteEmpresa&id=' + $id,
			  success: function(json) {
				  if(json.status == "ok")
				  {
					alert("Empresa deletada com sucesso.")
					//window.location=(json.url);
					location.reload();
				  }
				  else
				  {
					alert("Erro ao deletar empresa.")
				  }
			  }
		  });
		}
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