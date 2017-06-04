
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover">Configuración de Usuario</label>
									</div>

								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								ALQUILER 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									DE NICHOS
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														 Alquiler
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#messages">
														Nichos  Vencidos
														<span class="badge badge-danger">4</span>
													</a>
												</li>

												<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														Dropdown &nbsp;
														<i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
													</a>

													<ul class="dropdown-menu dropdown-info">
														<li>
															<a data-toggle="tab" href="#dropdown1">@fat</a>
														</li>

														<li>
															<a data-toggle="tab" href="#dropdown2">@mdo</a>
														</li>
													</ul>
												</li>
											</ul>

											<div class="tab-content">
											<button class="btn btn-sm btn-primary" id="btn_alquiler" data-toggle="modal" data-target="#modalAlquiler">Alquiler</button>
												<div id="home" class="tab-pane fade in active">
														<div class="row">
															<div class="col-xs-12">
																<!-- PAGE CONTENT BEGINS -->
																<div class="row">
																	<div class="col-xs-12">
																		<div class="clearfix">
																			<div class="pull-right tableTools-container"></div>
																		</div>
																		<div class="table-header">
																		NICHOS ALQUILADOS
																		</div>

																		<!-- div.table-responsive -->

																		<!-- div.dataTables_borderWrap -->
																		<div>
																			<table id="tabla-alquiler" class="table table-striped table-bordered table-hover">
																				<thead>
																					<tr>
																						<th>Categía</th>
																						<th>Cuartel</th>
																						<th>Nicho</th>
																						<th>Nivel</th>
																						<th>Difunto</th>
																						<th>Responsable</th>
																						<th>Fecha Incio</th>
																						<th>Fecha Vencimiento</th>
																						<th>Estado</th>
																						<th></th>
																					</tr>
																				</thead>

																				<tbody>

																					
																				</tbody>
																			</table>
																		</div>
																	</div>
																</div>

																<!-- PAGE CONTENT ENDS -->
															</div><!-- /.col -->
														</div><!-- /.row -->
												</div>

												<div id="messages" class="tab-pane fade">
													<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
												</div>

												<div id="dropdown1" class="tab-pane fade">
													<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
												</div>

												<div id="dropdown2" class="tab-pane fade">
													<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
												</div>
											</div>
										</div>
									</div><!-- /.col -->
	
								</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<!-- /.ventana alquiler -->			
<div class="modal fade" id="modalAlquiler" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ALQUILER DE NICHOS </h4>
        </div>
        <div class="modal-body">
         <div class="row">
            <div class="col-xs-12">
                  <!-- FORULARIO PARA REGISTRAR NUEVO FUNCION  -->
                <form class="form-horizontal " id="form-addFuncion" action="<?php echo  base_url();?>Funcion/GetFuncion" method="POST">
                      Datos  de Difunto
                      <div class="hr hr-1 dotted hr-double"></div>
                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Nombre<span class="required">*</span></label>
	                                            <input id="txt_nombredifunto" name="txt_nombrefuncion"  type="text">
	                                         </div>
                                      </div>

                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Apellido Paterno </span></label>
                                                 <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Apellido Materno</span></label>
                                               <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                       </div>
                      Datos  de Cuartel
                      <div class="hr hr-1 dotted hr-double"></div>
                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Categoía<span class="required">*</span></label>
	                                            <select id="cbCategoria" name="cbCategoria" class="selectpicker" data-live-search="true"  title="Elija la Categoria">
	                                            </select>
	                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Cuartel</span></label>
	                                             <select id="cbCuartel" name="cbCuartel" class="selectpicker" data-live-search="true"  title="Elija el Cuartel"></select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Nicho</span></label>
                                               <select id="cbNicho" name="cbNicho" class="selectpicker" data-live-search="true"  title="Elija nicho con su nivel"> </select>
                                            </div>
                                      </div>

                       </div>
                       Datos de La Lompra
                      <div class="hr hr-1 dotted hr-double"></div>
                       <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Nivel <span class="required">*</span></label>
                                               <select id="cbPasaje" name="cbxTipologiaInv" class="selectpicker" data-live-search="true"  title="Elija nivel"> </select>
	                                         </div>
                                      </div>

                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Número</span></label>
                                                 <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Precio</span></label>
                                               <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                       </div>
                     
                      <div class="hr hr-1 dotted hr-double"></div>
                        Datos  de Responsable
                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">NOMBRE <span class="required">*</span></label>
	                                            <input id="txt_nombredifunto" name="txt_nombrefuncion"  type="text">
	                                         </div>
                                      </div>

                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">APELLIDO</span></label>
                                                 <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">TELEFORNO</span></label>
                                               <input id="txt_apellido" name="txt_apellido"  type="text">
                                            </div>
                                      </div>
                       </div>
                      <br>


                     <div class="form-group">
                        <div class="col-md-12 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk"></span>
                            Guardar
                          </button>
                           <button  class="btn btn-danger" data-dismiss="modal">
                             <span class="glyphicon glyphicon-remove"></span>
                            Cancelar
                          </button>
                        </div>
                      </div>
                </form> 
            </div><!-- /.span -->
          </div><!-- /.row -->
        </div>
        <div class="modal-footer">
               <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <div> *Son campos obligatorios </div>
                        </div>
                </div>
        </div>
      </div>
    </div>
  </div>
<!-- /.fin alquiler-->