$(document).ready( function () {

	$(document).on('click','.btn-checks', function () {

		var id 			= $(this).attr('data-id-campaign');
		var data 		= new Date();
		var dia     	= data.getDate();           // 1-31
		var mes     	= data.getMonth();          // 0-11 (zero=janeiro)
		var ano     	= data.getFullYear();		// ano com 4 digitos.
		var str_data 	= dia + '/' + (mes+1) + '/' + ano;

		$.ajax({
			type: "GET",
			url: "http://localhost/ad-ooh/admin/checks_admin/getCampaigns/" + id + "",
			dataType: "json",
			success: function (resposta) {
				if (resposta.erro === 0) {
					$('.modal_dinamico_checks').append(
						'<div class="modal fade" data-backdrop="static" id="modal_checks' + id + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
							'<div class="modal-dialog" role="document">' +
								'<div class="modal-content">' +
									'<div class="modal-header">' +
										'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
										'<h2 class="modal-title text-center" id="myModalLabel"><span class="label label-info">Check dia '+str_data+'</span></h2>' +
									'</div>' +
									'<div class="modal-body"><p style="text-align: center"><strong> Verifique se a campanha esta correta.</strong></p>' +
										'<form action="" method="post" accept-charset="utf-8" class="form-horizontal">' +
										'<hr />' +
											'<div id="fileuploader">Upload Foto</div>'+
											'<div class="form-group">'+
												'<div class="col-sm-10 return_checks" >'+
													'<div class="col-sm-3 img_photo_check">'+
														'<img src="" alt="">'+
														'<input type="hidden" value="" name="photos_checks[]">'+
														'<a href="#" class="btn btn-danger btn-apagar-checks"><i class="glyphicon glyphicon-trash"></i> Apagar Foto</a>'+
													'</div>'+
												'</div>'+
											'</div>'+
										'</form>' +
									'</div>'+
									'<div class="modal-footer">' +
										'<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>' +
										'<button type="submit" class="btn btn-primary" data-id-campaign="' + id + '">Salvar</button>' +
									'</div>' +
								'</div>' +
							'</div>' +
						'</div>');
					$("#fileuploader").uploadFile({
						url:"http://localhost/ad-ooh/admin/checks_admin/uploadMcDonalds/",
						fileName:"foto_check",
						returnType: 'json',
						onSuccess: function (file, data) {
							$('.ajax-file-upload-statusbar').hide();

							if (data.erro === 0){
								$('.return_checks').append('<div class="col-sm-3 img_photo_check"><img src="http://localhost/ad-ooh/uploads/mcdonalds/'+ data.file_name +'" alt=""><input type="hidden" value="'+ data.file_name +'" name="photos_checks[]"><a href="#" class="btn btn-danger btn-apagar-checks"><i class="glyphicon glyphicon-trash"></i> Apagar Foto</a></div>');
							}else{
								alert(data.msg);
							}
						},
						onError: function (file, status, errMsg) {

							alert(file +'<br>'+ errMsg);

						}
					}),
					$('#modal_checks'+id).modal('show');

					$('#modal_checks'+id).on('hidden.bs.modal', function (e) {
						$(this).remove();
					})
				}else {
					alert(resposta.msg);
				}
			},

			error: function () {
				alert('Erro ao realizar check!');
			}

		})
	});

	$(document).on('click','.btn-apagar-checks', function () {

		if (confirm("Deseja pagar esta foto?")){

			$(this).parent().remove();

		}else{
			return false;
		}

	});

	$(document).on('click','.btn-alterar-status-cliente', function () {

		var id 		= $(this).attr('data-id-cliente');
		var status 	= $('[name="active"]').val();

		$.ajax({
			type: "GET",
			url: "http://localhost/ad-ooh/admin/home_admin/getClientes/" + id + "",
			dataType: "json",
			success: function (resposta) {
				if (resposta.erro === 0) {
					$('.modal_dinamico').append('<div class="modal fade" data-backdrop="static" id="modal_cliente' + id + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
						'<div class="modal-dialog" role="document">' +
						'<div class="modal-content">' +
						'<div class="modal-header">' +
						'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
						'<h4 class="modal-title" id="myModalLabel">Alterando o status do cliente [ #'+resposta.id_costumers+']</h4>' +
						'</div>' +
						'<div class="modal-body"><p style="text-align: center"><strong>Status Atual: '+resposta.active +'</strong></p>' +
						'<form action="" method="post" accept-charset="utf-8" class="form-horizontal">' +
						'<hr />' +
						'<label for="status">Alterar Status: </label>' +
						'<select name="active" class="form-control">' +
						'<option value="'+status+'">Não</option>' +
						'<option value="1">Sim</option>' +
						'</select><br>' +
						'</form>' +
						'</div>' +
						'<div class="modal-footer">' +
						'<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>' +
						'<button type="button" class="btn btn-primary btn-atualizar-status-cliente" data-id-cliente="' + id + '">Atualizar</button>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'</div>');
					$('#modal_cliente'+id).modal('show');

					$('#modal_cliente'+id).on('hidden.bs.modal', function (e) {
						$(this).remove();
					})
				}else {
					alert(resposta.msg);
				}
			},

			error: function () {
				alert('Erro ao buscar cliente.');
			}

		})
	});

	$(document).on('click','.btn-atualizar-status-cliente', function () {

			var status 			= $('[name="active"]').val();
			var id_costumers 	= $(this).attr('data-id-cliente');

		$.ajax({
			type: "POST",
			url: "http://localhost/ad-ooh/admin/home_admin/mudarStatus/",
			data: {input_status: status, input_id: id_costumers},
			dataType: "json",
			success: function (resposta) {
				if (resposta.erro == 0) {
					location.reload(alert(resposta.msg));
				} else {
					alert(resposta.msg);
				}
			},
			error: function () {
				alert('Erro ao salvar status.');
			}
		});
	});


	$('.btn_apagar_registro').on('click', function(){

		if (confirm("Deseja pagar este registro?")){
			return true;
		}else{
			return false;
		}

	});


	document.querySelector("#control-sidebar-theme-demo-options-tab > div > ul");
	
	var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};

	$('.input_telefone').mask(SPMaskBehavior, spOptions);


	$('.table_list_data').DataTable({
		"language": {
			"sEmptyTable": "Nenhum registro encontrado",
			"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
			"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
			"sInfoFiltered": "(Filtrados de _MAX_ registros)",
			"sInfoPostFix": "",
			"sInfoThousands": ".",
			"sLengthMenu": "_MENU_ resultados por página",
			"sLoadingRecords": "Carregando...",
			"sProcessing": "Processando...",
			"sZeroRecords": "Nenhum registro encontrado",
			"sSearch": "Pesquisar",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			},
			"oAria": {
				"sSortAscending": ": Ordenar colunas de forma crescente",
				"sSortDescending": ": Ordenar colunas de forma decrescente"
			},
			"select": {
				"rows": {
					"_": "Selecionado %d linhas",
					"0": "Nenhuma linha selecionada",
					"1": "Selecionado 1 linha"
				}
			}
		}
	});

	$('.sidebar-menu').tree()
} );
