 $(document).on("ready" ,function(){
          listaAlquiler();
          lista();
			});
      var listaAlquiler=function()
                {
                    var table=$("#tabla-alquiler").DataTable({
                     "processing":true,
                     "serverSide":false,
                      "scrollY": 350,
                      "scrollX": true,
                      "scrollCollapse": true,
                      "paging":         true,
                     destroy:true,

                         "ajax":{
                                    "url": base_url+"index.php/Alquiler/get_alquiler",
                                    "method":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                    {"data":"id_nicho"},
                                    {"data":"nombre_cuartel"},
                                    {"data":"categoria"},
                                    {"data":"categoria"},
                                    {"data":"categoria"},
                                    {"data":"categoria"},
                                    {"data":"categoria"},
                                    {"data":"categoria"},
                                    {"defaultContent":"<a  class='tooltip-info' data-toggle='modal' data-target='#VentanaModificarEntidad' data-rel='tooltip' title='View'><span class='gree'> <i class='ace-icon fa fa-pencil-square-o bigger-120'></i> </span></a><a type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><i class='fa fa-trash-o'></i></a>"}

                                ],

                                "language":idioma_espanol
                    });             
                        			   	
                }

 

        var idioma_espanol=
                {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

     function lista()
					{
						event.preventDefault();
						$.ajax({
              "url": base_url+"index.php/Alquiler/get_alquiler",
							type:"POST",
							success:function(respuesta){
								console.log(respuesta);

							}
						});
					}
