 $(document).on("ready" ,function(){
          listaAlquiler();

          //lista();
          $("#btn_alquiler").click(function(){
                  get_categoria(); 
          });

          $("#cbCategoria").change(function(){
            var categoria=$("#cbCategoria").val();
              get_cuartel(categoria);
          });
          $("#cbCuartel").change(function(){
            var id_cuartel=$("#cbCuartel").val();
             get_nicho(id_cuartel);
          });

			});
        var get_categoria=function(){
          html="";
                    $("#cbCategoria").html(html);
                    event.preventDefault(); 
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/Get_categoria",
                        type:"POST",
                        success:function(respuesta){
                          //alert(respuesta);
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_categoria"]+"> "+registros[i]["categoria"]+" </option>";   
                            };
                            $("#cbCategoria").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');     
                        }
                    });
        }
        var get_cuartel=function(categoria){
          html="";
                    $("#cbCuartel").html(html);
                    event.preventDefault(); 
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_cuartel",
                        type:"POST",
                        data:{categoria:categoria},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_cuartel"]+"> "+registros[i]["nombre_cuartel"]+" </option>";   
                            };
                            $("#cbCuartel").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh'); 
                        }
                    });
        }
        var  get_nicho=function(id_cuartel){
                    html="";
                    $("#cbNicho").html(html);
                    event.preventDefault(); 
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_nicho",
                        type:"POST",
                        data:{id_cuartel:id_cuartel},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_nicho"]+"> "+registros[i]["nicho"]+" </option>";   
                            };
                            $("#cbNicho").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');    
                        }
                    });
        }
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
                                    {"data":"categoria"},
                                    {"data":"nombre_cuartel"},
                                    {"data":"numero_nicho"},
                                    {"data":"nivel"},
                                    {"data":"nombre"},
                                    {"data":"responsable"},
                                    {"data":"fecha_inicio"},
                                    {"data":"fecha_final"},
                                    {"data": "EstadoA", "defaultContent": "<button>Estado</button>", "class": "center","render": function ( data, type, full, meta ) 
                                        {
                                          var i=data;
                                          if(i==1)
                                          {
                                            return '<a href="'+data+'"><span class="label label-sm label-success"> Pago</span></a>'  
                                          }else{
                                            return '<a href="'+data+'"><span class="label label-sm label-danger"> Vencido</span></a>'  
                                          }
                                       }
                                     },
                                    {"defaultContent":"<button class='btn btn-xs btn-danger' data-toggle='modal' data-target='#VentanaModificarEntidad' data-rel='tooltip' title='View'><i class='ace-icon fa fa-trash-o bigger-120'></i> </button>"}

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

     /*function lista()
					{
						event.preventDefault();
						$.ajax({
              "url": base_url+"index.php/Alquiler/get_alquiler",
							type:"POST",
							success:function(respuesta){
								alert(respuesta);

							}
						});
					}*/
