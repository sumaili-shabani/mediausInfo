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
		                                                <table id="user_data" class="table dataTable no-footer dtr-inline collapsed">
		                                                    <thead class="tb-member-head thead-light">  
		                                                        <tr> 
		                                                        	<th width="10%">Image</th> 
		                                                        	<th width="20%">Nom de la vidéo</th>  
		                                                          <th width="20%">Description </th> 
		                                                          <th width="20%">Lien de la vidéo </th> 
							                                                <th width="20%">Mise à jour</th>
							                                                 
							                                                
							                                                <th width="5%">Modifier</th> 
							                                                <th width="5%">Supprimer</th>  
		                                                        </tr>  
		                                                   </thead> 

		                                                   <tbody>
		                                                   <!-- 	<?php
																	                       	foreach ($videos->result_array() as $key) {
																	                       		?>
																	                       		<tr>
																		                       		<td>
																		                       			<img src="<?php echo(base_url()) ?>upload/video/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35">
																		                       		</td>
																		                       		<td><?php echo(substr($key['nom'], 0,20)) ?>...</td>
																		                       		<td><?php echo(substr($key['description'], 0,20)) ?>...</td>
																		                       		<td><?php echo(substr($key['lien'], 0,10)) ?></td>
																		                       		<td><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>
																		                       		
																		                       		
																		                       		<td>
																		                       			<a href="javascript:void(0);" idv="<?= $key['idv']?>" class="btn btn-warning btn-sm update">
																		                       				<i class="fa fa-edit"></i>
																		                       			</a>
																		                       		</td>
																		                       		<td>
																		                       			<a href="javascript:void(0);" idv="<?= $key['idv']?>" class="btn btn-danger btn-sm update">
																		                       				<i class="fa fa-trash"></i>
																		                       			</a>
																		                       		</td>

																	                       		</tr>

																	                       		<?php
																	                       	}

																                       	?> --> 
		                                                   </tbody>

		                                                   <tfoot>  
		                                                        <tr>  
		                                                            <th width="10%">Image</th> 
			                                                        	<th width="20%">Nom de la vidéo</th>  
			                                                          <th width="20%">Description </th> 
			                                                          <th width="20%">Lien de la vidéo </th> 
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
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                    		
                    		<div class="form-group col-md-12">
				                     <label> <i class="fa fa-edit"></i> Entrer le nom de la vidéo</label>
				                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de la vidéo" />
				                </div>

				                <div class="form-group col-md-12">
				                     <label> <i class="fa fa-globe"></i> le lien de la viéo</label>
				                     <input type="url" name="lien" id="lien" class="form-control" placeholder="https://youtube.com/" />
				                </div>

				                <div class="form-group col-md-12">
                            <label><i class="fa fa-camera"></i> Selectionner l'image de la vidéo</label>
                            <input type="file" name="user_image" id="user_image" class="form-control" />
                            
                         </div>


				                <div class="form-group jf-inputwithicon col-md-12">
		                        <label><i class="fa fa-edit"></i> La description de la Vidéo</label>
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

                    		
                    		<div class="col-md-12" style="margin-bottom: 20px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idv" id="idv" />
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
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->

   


  	<script type="text/javascript">
  		$(document).ready(function(){
  			//alert("boom");
  		});
  	</script>

  	 <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

     	var  $message = '';

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des nos vidéos  d'informations");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_video'; ?>",  
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
               var nom = $('#nom').val();  
               var description = $('#description').val(); 
               var lien = $('#lien').val(); 
               var extension 	= $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '' )  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                          var erreur = "Invalid Image File";
                  				showErrrorMessage(erreur); 
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description !='' && lien !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_video'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_video'?>",  
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
                  var erreur = "Tous les champs doivent être remplis";
                  showErrrorMessage(erreur);
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idv = $(this).attr("idv");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_video",  
                    method:"POST",  
                    data:{idv:idv},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);
                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification de la vidéo  "+data.nom);  
                         $('#idv').val(idv);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idv = $(this).attr("idv");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_video",
                      method:"POST",
                      data:{idv:idv},
                      success:function(data)
                      {
                         // Swal.fire("succès!", ''+data, "success"); 
                         var message =  data;
											   showSuccessMessage(message);

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
