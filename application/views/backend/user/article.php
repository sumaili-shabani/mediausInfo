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
                                    	<div class="col-md-12">
                                           <div class="row">
                                             <div class="col-md-12">

                                             	<a href="" class="btn btn-dim btn-sm btn-outline-secondary pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
		           																&nbsp;&nbsp;&nbsp;&nbsp;
                                               <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
                                             </div>
                                           </div>
                                        </div>
                                        
		                                          <!-- insertion de tableau -->
		                                          <div class="col-md-12">
		                                            <div class="table-responsive">
		                                                <table id="user_data" class="table table-member ">
		                                                    <thead class="tb-member-head thead-light">  
		                                                        <tr> 
		                                                        	  <th width="5%">fichier</th>
                                                                <th width="5%">Avatar</th>  
			                                                        	<th width="20%">Nom de la vidéo</th>  
			                                                          <th width="20%">Description </th> 
			                                                          <th width="10%">Catégorie </th> 
			                                                          <th width="10%">Type </th>  
								                                                <th width="20%">Mise à jour</th>
								                                                 
								                                                
								                                                <th width="5%">Modifier</th> 
								                                                <th width="5%">Supprimer</th>  
		                                                        </tr>  
		                                                   </thead> 

		                                                   <tbody>
		                                                   	<?php
																	                       	foreach ($articles->result_array() as $key) {
																	                       		?>
																	                       		<tr>

                                                              <?php 

                                                              if ($key['type'] == 'texte') {
                                                                ?>
                                                                <td>
                                                                  <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                    <span><i class="fa fa-file" ></i></span>
                                                                </div>
                                                                </td>
                                                                <?php
                                                              }
                                                              else{
                                                                ?>
                                                                <td>
                                                                  <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                    <span><i class="fa fa-video-camera"></i></span>
                                                                </div>
                                                                <?php
                                                              }


                                                               ?>

                                                              <!-- <td>
                                                                <img src="<?php echo(base_url()) ?>upload/video/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35">
                                                              </td> -->


																		                       		<td>
																		                       			<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['photo']) ?>" class="img img-responsive img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35">
																		                       		</td>
																		                       		<td><?php echo(substr($key['nom'], 0,20)) ?>...</td>
																		                       		<td><?php echo(substr($key['description'], 0,20)) ?>...</td>
																		                       		<td><?php echo(substr($key['nom_cat'], 0,10)) ?></td>

                                                              <td><?php echo(substr($key['type'], 0,10)) ?></td>
																		                       		<td><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>
																		                       		
																		                       		
																		                       		<td>
																		                       			<a href="javascript:void(0);" idart="<?= $key['idart']?>" class="btn btn-secondary btn-icon update">
																		                       				<i class="fa fa-edit"></i>
																		                       			</a>
																		                       		</td>
																		                       		<td>
																		                       			<a href="" idart="<?= $key['idart']?>" class="btn btn-danger btn-icon delete">
																		                       				<i class="fa fa-trash"></i>
																		                       			</a>
																		                       		</td>

																	                       		</tr>

																	                       		<?php
																	                       	}

																                       	?> 
		                                                   </tbody>

		                                                   <tfoot>  
		                                                        <tr>  
		                                                            <th width="5%">fichier</th>
                                                                <th width="5%">Avatar</th>  
                                                                <th width="20%">Nom de la vidéo</th>  
                                                                <th width="20%">Description </th> 
                                                                <th width="10%">Catégorie </th> 
                                                                <th width="10%">Type </th>  
                                                                <th width="20%">Mise à jour</th>
                                                                 
                                                                
                                                                <th width="5%">Modifier</th> 
                                                                <th width="5%">Supprimer</th>   
		                                                        </tr>  
		                                                   </tfoot>   
		                                                    
		                                                </table>
		                                            </div>
		                                          </div>
		                                          <!-- fin insertion tableau -->
                                    	<!-- fin de mes scripts -->

                                    		<!-- implementation modal article -->
		                                    <div class="col-md-12">
		                                    	
			                                    	<div class="modal fade full-window-modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
									                            <div class="modal-dialog" role="document">
									                                <div class="modal-content">
									                                    <div class="modal-header">
									                                        <h5 class="modal-title text-center" id="fullwindowModalLabel">Modal title</h5>
									                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									                                    </div>
									                                    <div class="modal-body">
										                                    <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12  row">
	                    		
																	                    		<div class="form-group col-md-12">
																					                     <label> <i class="fa fa-edit"></i> Entrer le nom de l'article</label>
																					                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrer le nom de l'article" />
																					                </div>

																					                 <div class="form-group col-md-6">
																	                            <label><i class="fa fa-hand-o-down"></i> Catégorie de l'information</label>
																	                             <select name="category_pro" id="category_pro" class="form-control ">
																	                             	<?php 
																	                             	if ($categories->num_rows() > 0) {
																	                             		?>
																	                             		<option value="">Selectionnez la catégorie de l'information</option>
																	                             		<?php
																	                             		foreach ($categories->result_array() as $key) {
																	                             			?>
																	                             			<option value="<?php echo($key['idcat']) ?>"><?php echo($key['nom']) ?></option>
																	                             			<?php
																	                             		}
																	                             	}
																	                             	else{

																	                             		?>                             		
																	                             		<option value="">Aucune catégorie n'est diponible</option>
																	                             		<?php
																	                             	}
																	                             	?>
																	                             	
																	                             </select> 
																	                        </div>

																	                        <div class="form-group col-md-6">
																	                            <label><i class="fa fa-file-o"></i> le type de l'information</label>
																	                             <select name="type_pro" id="type_pro" class="form-control">
																	                             	  <option value="">Selectionnez le type de l'information</option>
																		                             	<option value="texte">texte</option>
																		                             	<option value="video">video</option>
																	                             </select> 
																	                        </div>

																	                        <div class="form-group col-md-12">
																	                            <label><i class="fa fa-camera"></i> Selectionner l'image de l'article</label>
																	                            <input type="file" name="user_image" id="user_image" class="form-control" />
																	                            
																	                         </div>

																					                <div class="form-group col-md-12 lien" style="display: none;">
																					                     <label> <i class="fa fa-globe"></i> le lien de l'article</label>
																					                     <input type="url" name="lien" id="lien" class="form-control" placeholder="https://youtube.com/" />
																					                </div>

																					                
																					                <div class="form-group jf-inputwithicon col-md-12 description_bloc">
																	                            <label><i class="fa fa-edit"></i> La description  de l'article</label>
																	                            <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l'article">

																	                            </textarea>
																	                        </div>

																	                        <div class="form-group jf-inputwithicon col-md-12 description_mod" style="display: none;">
																	                           <span class="description_mod"></span>
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

																	                    		
																	                    		<div class="col-md-12" style="margin-bottom: 20px;">
																	                    			<div class="row">
																	                    				<div class="col-md-4"></div>
																	                    				<div class="col-md-4">

																	                    					<div class="buysell-field form-action text-center mb-2">
																					                            <div>

																					                            	<input type="hidden" name="id_user" id="id_user" class="id_user">

																					                            	<input type="hidden" name="idcat" id="idcat">
																					                            	<input type="hidden" name="type" id="type">

																					                            	<input type="hidden" name="idart" id="idart" />
																	             									        <input type="hidden" name="operation" id="operation" />
																				                    				     <input type="submit" name="action" id="action" class="btn btn-secondary btn-lg" value="Add" />
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
									                                    </div>
									                                    
									                                </div>
									                            </div>
									                        </div>
		                                    </div>
		                                    <!-- fin implementation modal article -->








                                        
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

        <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

     	var  $message = '';

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des nos articles  d'informations");  
               $('#action').val("Add");
               $('.description_mod').hide(); 
               $('.description_bloc').show();  
          })  
          var dataTable = $('#user_data').DataTable();
          // var dataTable = $('#user_data').DataTable({  
          //      "processing":true,  
          //      "serverSide":true,  
          //      "order":[],  
          //      "ajax":{  
          //           url:"<?php echo base_url() . 'user/fetch_padding_article'; ?>",  
          //           type:"POST"  
          //      },  
          //      "columnDefs":[  
          //           {  
          //                "targets":[0, 0, 0],  
          //                "orderable":false,  
          //           },  
          //      ],  
          // });

          $(document).on('submit', '#user_form', function(event){  
               // event.preventDefault();  
               var nom = $('#nom').val();  
               var description = $('#description').val(); 
               var lien = $('#lien').val(); 

               var idcat = $('#idcat').val(); 
               var type = $('#type').val(); 

               var extension 	= $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '' )  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {   

                        event.preventDefault(); 
                         var erreur = "Invalid Image File";
                  			 showErrrorMessage(erreur);  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description !='' && idcat !='' && type !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'user/operation_padding_article'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                // Swal.fire('succès', ''+data, 'success'); 
                                var message =  data;
						 										showSuccessMessage(message); 

                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'user/modification_padding_article'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  // Swal.fire('succès', ''+data, 'success'); 

                                  var message =  data;
						 											showSuccessMessage(message);


                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                	event.preventDefault(); 
                  var erreur = "Tous les champs doivent être remplis";
                  showErrrorMessage(erreur);
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idart = $(this).attr("idart");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_padding_article",  
                    method:"POST",  
                    data:{idart:idart},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show'); 
                         $('.description_mod').show(); 
                         $('.description_bloc').hide();
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);

                         $('#idcat').val(data.idcat);
                         $('#type').val(data.type);
                         $('#id_user').val(data.id_user);

                         $('.description_mod').html(data.text_description);

                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification de l'article  "+data.nom);  
                         $('#idart').val(idart);   
                         $('#action').val("Edit"); 
                         $('.textarea').summernote(); 
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idart = $(this).attr("idart");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>user/supression_padding_article",
                      method:"POST",
                      data:{idart:idart},
                      success:function(data)
                      {
                         // Swal.fire("succès!", ''+data, "success"); 
                         $message =  data;
											    !function(o) {
											        var $data = "Opération reussie avec succès 👌";
											      toastr.clear(), o.Toast("<h5>"+$data+"!!!</h5><p>"+$message+".</p>", "success");
											   }(NioApp, jQuery); 

                         dataTable.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            
	            var erreur = "opération annulée :)";
	            showErrrorMessage(erreur);
	          }

          });



           $("#type_pro").on("change", function(t) {

			     	var type = $(this).val();
	          	if (type !='') {
	          		$('#type').val(type);

	          		if (type =='texte') {
	          			$('.lien').hide();
	          		}
	          		if (type =='video') {
	          			$('.lien').fadeIn(1000);
	          		}
	          	}
	          	else{

	          		  $('#type').val("");

	          		  showErrrorMessage("Erreur lors de l'opération!!! <br/>Veillez complèter le type de l'article  😰");
	          		
	          		
	          	}
			    });

		     $("#category_pro").on("change", function(t) {

			     	var idcat = $(this).val();
		          	if (idcat !='') {
		          		$('#idcat').val(idcat);
		          	}
		          	else{

		          		$('#idcat').val("");

		          		showErrrorMessage("Erreur lors de l'opération!!! <br/>Veillez complèter la catégorie d'information 😰");
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
