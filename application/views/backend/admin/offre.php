<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php include('_meta.php') ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <!-- menu header -->
            <?php include('_menuheader.php') ?>
            <!-- fin menu header -->

            <div class="page-wrap">
                <!-- navigation -->
                <?php include('_navigation.php') ?>
                <!-- fin navigation -->
                <div class="main-content">
                    <div class="container-fluid">
                        <!-- page header -->
                        <?php include('_page_header.php') ?>
                        <!-- fin de la page header -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                   
                                    <div class="card-block">

                                    	<!-- mes scripts commencent -->



                                    	<!-- insertion de tableau -->
																			<div class="col-md-12">

																				<button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>

																				<div class="table-responsive">
																						<table id="user_data" class="table dataTable no-footer dtr-inline collapsed">
																								<thead class="tb-member-head thead-light">  
																										<tr> 
																												<th width="10%">Image</th> 
																												<th width="20%">Nom de l'offre</th>  
																												<th width="10%">Description </th> 

																												<th width="10%">fichier de l'offre </th>

																												<th width="10%">Lieu </th>
																												<th width="10%">Date debit </th>
																												<th width="10%">Date fin </th>

																												<th width="10%">Mise à jour</th>

																												<th width="5%">Modifier</th> 
																												<th width="5%">Supprimer</th> 
																										</tr>  
																							 </thead> 

																							 <tbody>
																							 
																							 </tbody>

																							 <tfoot>  
																										<tr>  
																												<th width="10%">Image</th> 
																												<th width="20%">Nom de l'offre</th>  
																												<th width="10%">Description </th> 

																												<th width="10%">fichier de l'offre </th>

																												<th width="10%">Lieu </th>
																												<th width="10%">Date debit </th>
																												<th width="10%">Date fin </th>

																												<th width="10%">Mise à jour</th>

																												<th width="5%">Modifier</th> 
																												<th width="5%">Supprimer</th> 
																										</tr>  
																							 </tfoot>   
																								
																						</table>
																				</div>
																			</div>
																			<!-- fin insertion tableau -->
                                    
                                    	<!-- fin de mes scripts -->
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
               
               	<!-- my chat -->
               	<?php include('_my_chat.php') ?>
               	<!-- fin mychat -->

                <!-- chat formullaire -->
                <?php include('__app_chat.php') ?>
                <!-- fin chat -->

                <?php include('_footer.php') ?>
                
            </div>
        </div>
        
        
        

        <?php include('_app_modal.php') ?>

        <?php include('_script.php') ?>

        <!-- modal ajout radio -->
				<div class="modal fade" tabindex="-1" role="dialog" id="userModal">
						<div class="modal-dialog modal-dialog-centered modal-md" role="document">
								<div class="modal-content">
										<a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
										<div class="modal-body modal-body-lg">
												<div class="nk-block-head nk-block-head-xs text-center">
														<span class="nk-block-title modal-title">Paramètrage des maisons</span>
														
												</div>
												<div class="nk-block">

												

													<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
														
														<div class="form-group col-md-12">
																 <label> <i class="fa fa-edit"></i> Entrer le nom de l'offre</label>
																 <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de l'offre" />
														</div>

														

														<div class="form-group col-md-12">
																 <label> <i class="fa fa-home"></i> Entrer le nom de l'entreprise</label>
																 <input type="text" name="societe" id="societe" class="form-control" placeholder="Entrez le nom de l'entreprise" />
														</div>

														<div class="form-group col-md-12">
																 <label> <i class="fa fa-home"></i> Entrer le le lieu</label>
																 <input type="text" name="lieu" id="lieu" class="form-control" placeholder="Lieu de l'offre" />
														</div>

														<div class="form-group col-md-6">
																 <label> <i class="fa fa-calendar"></i> Entrer la date de debit</label>
																 <input type="date" name="date_debit" id="date_debit" class="form-control"  />
														</div>

														<div class="form-group col-md-6">
																 <label> <i class="fa fa-calendar"></i> Entrer la date de fin</label>
																 <input type="date" name="date_fin" id="date_fin" class="form-control"  />
														</div>

														

														<div class="form-group col-md-12">
																<label><i class="fa fa-camera"></i> Selectionner l'image de l'offre</label>
																<input type="file" name="user_image" id="user_image" class="form-control" />
																
														 </div>

														<div class="form-group col-md-12">
																<label><i class="fa fa-file"></i> Attacher le fichier</label>
																<input type="file" name="user_image2" id="user_image2" class="form-control" />
																
														</div>

														


														<div class="form-group jf-inputwithicon col-md-12">
																<label><i class="fa fa-edit"></i> La description de l'offre</label>
																<textarea class="form-control" name="description" id="description" placeholder="Parler un peu sur la vidéo"></textarea>
														</div>


														<div class="col-md-12">
																<div class="row">

																	<div class="col-md-1 mb-2"></div>
																	<div class="col-md-10">
																		<div class="col-md-12">
																			<div class="row">
																				<div class="col-3"></div>
																				<div class="col-6">
																					<div class="col-md-12" style="margin-top: 7px;">
																						<span id="user_uploaded_image"></span>
																					</div>
																				</div>
																				<div class="col-3"></div>
																				
																			</div>
																		</div>
																		
																		
																	</div>
																	<div class="col-md-1"></div>
																	
																</div>
														</div>
														<div class="col-md-12 form-group" align="center">
															 <input type="submit" name="action" id="action" class="btn btn-secondary btn-lg" value="Add" />
														</div>


														
														<div class="form-group col-md-12" style="margin-bottom: 20px;">
															<div class="row">
																<div class="col-md-4"></div>
																<div class="col-md-4">

																	<div class="buysell-field form-action text-center mb-2">
																				<div>

																					<input type="hidden" name="ido" id="ido" />
																					<input type="hidden" name="operation" id="operation" />
																					
																				</div>
																				<div class="pt-3">
																						<a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
																				</div>
																		</div>
																	
																</div>
																<div class="col-md-4"></div>
															</div>
														</div>

													</form>
														
														
												</div><!-- .nk-block -->
										</div><!-- .modal-body -->
								</div><!-- .modal-content -->
						</div><!-- .modla-dialog -->
				</div>
				<!-- fin modal-->

				<script type="text/javascript" language="javascript" >  
		 $(document).ready(function(){  

			var  $message = '';

					$('#add_button').click(function(){  
							 $('#user_form')[0].reset();  
							 $('.modal-title').text("Paramètrage des offres d'emplois");  
							 $('#action').val("Add");  
					})  
					// var dataTable = $('#user_data').DataTable();
					var dataTable = $('#user_data').DataTable({  
							 "processing":true,  
							 "serverSide":true,  
							 "order":[],  
							 "ajax":{  
										url:"<?php echo base_url() . 'admin/fetch_offre'; ?>",  
										type:"POST"  
							 },  
							 "columnDefs":[  
										{  
												 "targets":[0, 0, 0],  
												 "orderable":false,  
										},  
							 ],  
					});

					$(document).on('submit', '#user_form', function(event){  
							 event.preventDefault();  
							 var nom 					= $('#nom').val(); 
							 var societe 			= $('#societe').val(); 
							 var date_debit 	= $('#date_debit').val();  
							 var date_fin 		= $('#date_fin').val(); 
							 var description 	= $('#description').val();  
							 var extension 		= $('#user_image').val().split('.').pop().toLowerCase(); 
							 var extension2 	= $('#user_image2').val().split('.').pop().toLowerCase();
							 var action = $('#action').val();


							 if(extension != '' )  
							 {  
										if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
										{  
												 
												 var message ="Invalid Image File";
												 showErrrorMessage(message);
												 $('#user_image').val('');  
												 return false;  
										}  
							 }

							if (extension2 != '') {
								if(jQuery.inArray(extension2, ['pdf']) == -1)  
								{  

										  var message ="Invalid Format File";
											showErrrorMessage(message);
										 $('#user_image2').val('');  
										 return false;  
								}

							}


							 if(nom != '' && description !='' && societe !='' && date_debit !='' && date_fin !='')
								{

									if (action =="Add") {


											$.ajax({  
													 url:"<?php echo base_url() . 'admin/operation_offre'?>",  
													 method:'POST',  
													 data:new FormData(this),  
													 contentType:false,  
													 processData:false,  
													 success:function(data)  
													 {  
																
																showSuccessMessage(data);
																
																$('#user_form')[0].reset();  
																$('#userModal').modal('hide');  
																dataTable.ajax.reload();  
													 }  
											});


									}
									if (action == 'Edit') {

												$.ajax({  
														 url:"<?php echo base_url() . 'admin/modification_offre'?>",  
														 method:'POST',  
														 data:new FormData(this),  
														 contentType:false,  
														 processData:false,  
														 success:function(data)  
														 {  
																	showSuccessMessage(data);

																	$('#user_form')[0].reset();  
																	$('#userModal').modal('hide');  
																	dataTable.ajax.reload();  
														 }  
												});

									}

								}
								else
								{
									// Swal.fire("Erreur!!!", "Tous les champs doivent être remplis", "error");
									var message = "Tous les champs doivent être remplis";
									showErrrorMessage(message);
								}
 
					});  


					$(document).on('click', '.update', function(){  
							 var ido = $(this).attr("ido");  
							 $.ajax({  
										url:"<?php echo base_url(); ?>admin/fetch_single_offre",  
										method:"POST",  
										data:{ido:ido},  
										dataType:"json",  
										success:function(data)  
										{  
												 $('#userModal').modal('show');  
												 $('#nom').val(data.nom);
												 $('#description').val(data.description);
												 $('#adresse').val(data.adresse);
												 $('#user_uploaded_image').html(data.user_image);

												 $('#societe').val(data.societe);
												 $('#date_debit').val(data.date_debit);
												 $('#date_fin').val(data.date_fin);
												 $('#lieu').val(data.lieu);
												 
												 $('.modal-title').text("modification de la maison  "+data.nom);  
												 $('#ido').val(ido);   
												 $('#action').val("Edit");  
										}  
							 });  
					});

					$(document).on('click', '.delete', function(){
							var ido = $(this).attr("ido");

							if(confirm("Are you sure you want to delete this?"))
						{
							
								$.ajax({
											url:"<?php echo base_url(); ?>admin/supression_offre",
											method:"POST",
											data:{ido:ido},
											success:function(data)
											{
												 showSuccessMessage(data);
												 dataTable.ajax.reload();
											}
										});
						}
						else
						{
							var message = "opération annulée :)";
							showErrrorMessage(message);
						}

					});

					const showErrrorMessage = function(erreur) {
			      'use strict';
			      resetToastPosition();
			      $.toast({
			        heading: 'Danger',
			        text: erreur,
			        showHideTransition: 'slide',
			        icon: 'error',
			        loaderBg: '#f2a654',
			        position: 'top-right'
			      })
			    };

			    const showSuccessMessage = function(message) {
			      'use strict';
			      resetToastPosition();
			      $.toast({
			        heading: 'Success',
			        text: message,
			        showHideTransition: 'slide',
			        icon: 'success',
			        loaderBg: '#f96868',
			        position: 'top-right'
			      })
			    };







		 });  
		 </script>

        
        
    </body>
</html>
