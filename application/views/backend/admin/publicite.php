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
                                    	<div id="load_data"></div>
			                            		<div id="load_data_message"></div>


			                           <div class="col-md-12">
                                         <div class="row">
                                           <div class="col-md-12">

                                           	<a href="" class="btn btn-dim btn-sm btn-secondary-light pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
	           																&nbsp;&nbsp;&nbsp;&nbsp;
                                             <button class="btn btn-dim btn-sm btn-secondary-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal2"><i class="fa fa-plus"></i>Effectuer l'opération</button>
                                           </div>
                                         </div>
                                      </div>
                                      <!-- insertion de tableau -->
                                      <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="user_data" class="table table-member table-bordered">
                                                <thead class="tb-member-head thead-light">  
                                                    <tr> 
                                                    	  <th width="10%">Avatar</th> 
                                                      	<th width="20%">Nom de la vidéo</th>  
                                                        <th width="20%">Description </th> 
                                                        <th width="10%">Catégorie </th> 
                                                        <th width="10%">Type </th>  
				                                                <th width="20%">Mise à jour</th>
				                                                 
				                                                
				                                                <th width="5%">Opération</th> 
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
														                       			<a href="javascript:void(0);" idart="<?= $key['idart']?>" class="btn btn-warning btn-sm update">
														                       				<i class="fa fa-edit"></i>
														                       			</a>
														                       		</td>
														                       		<td>
														                       			<a href="javascript:void(0);" idart="<?= $key['idart']?>" class="btn btn-danger btn-sm update">
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
                                                        <th width="10%">Avatar</th> 
                                                      	<th width="20%">Nom de la vidéo</th>  
                                                        <th width="20%">Description </th> 
                                                        <th width="10%">Catégorie </th> 
                                                        <th width="10%">Type </th>  
				                                                <th width="20%">Mise à jour</th>
				                                                 
				                                                
				                                                <th width="5%">Opération</th> 
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
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

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

				                
				                <div class="form-group jf-inputwithicon col-md-12">
		                        <label><i class="fa fa-edit"></i> La description  de l'article</label>
		                        <textarea class="form-control" name="description" id="description" placeholder="Parler un peu sur la description de l'article"></textarea>
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

				                            	<input type="hidden" name="idcat" id="idcat">
				                            	<input type="hidden" name="type" id="type">

				                            	<input type="hidden" name="idart" id="idart" />
             									        <input type="hidden" name="operation" id="operation" />
			                    				     <input type="submit" name="action" id="action" class="btn btn-primary btn-lg" value="Add" />
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

    <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal2">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage des émissions</span>
                        
                    </div>
                    <div class="nk-block">

                    	<!-- insertion de tableau -->
                      <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="user_data2" class="table table-member ">
                                <thead class="tb-member-head thead-light">  
                                    <tr>
                                    		<th width="5%">
                                        	<button type="button" name="delete_all" id="delete_all" class="btn btn-secondary btn-xs"><i class="fa fa-plus"></i> &nbsp;Ajouter</button>
                                        </th> 
                                        <th width="5%">Avatar</th>
                                      	<th width="20%">Nom de la vidéo</th>  
                                        <th width="20%">Description </th> 
                                        <th width="10%">Catégorie </th> 
                                        <th width="10%">Type </th>  
                                        <!-- <th width="20%">Mise à jour</th> -->
                                         
                                        
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
						                       			<a href="javascript:void(0);" idart="<?= $key['idart']?>" class="btn btn-warning btn-sm update">
						                       				<i class="fa fa-edit"></i>
						                       			</a>
						                       		</td>
						                       		<td>
						                       			<a href="javascript:void(0);" idart="<?= $key['idart']?>" class="btn btn-danger btn-sm update">
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
                                        <th width="5%">
                                        	<button type="button" name="delete_all2" id="delete_all2" class="btn btn-secondary btn-xs"><i class="fa fa-plus"></i> &nbsp;Ajouter</button>
                                        </th> 
                                        <th width="5%">Avatar</th>
                                      	<th width="20%">Nom de la vidéo</th>  
                                        <th width="20%">Description </th> 
                                        <th width="10%">Catégorie </th> 
                                        <th width="10%">Type </th>  
                                        
                                        <th width="5%">Modifier</th> 
                                        <th width="5%">Supprimer</th> 
                                    </tr>  
                               </tfoot>   
                                
                            </table>
                        </div>
                      </div>
                      <!-- fin insertion tableau -->
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal2-->

   


  	<script type="text/javascript">
  		$(document).ready(function(){
  			//alert("boom");
  		});
  	</script>

  	 <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

     	var  $message = '';

          $('#add_button').click(function(e){
         			 e.preventDefault();  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des publictés  d'informations");  
               $('#action').val("Add");

          })  
          // var dataTable = $('#user_data').DataTable();

          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_publicite'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 0, 0],  
                         "orderable":false,  
                    },  
               ],  
          });

          var dataTable2 = $('#user_data2').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_article_pub'; ?>",  
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

               var idcat = $('#idcat').val(); 
               var type = $('#type').val(); 

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


               if(nom != '' && description !='' && idcat !='' && type !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_article'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
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
                             url:"<?php echo base_url() . 'admin/modification_article'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  

                             		 var message =  data;
                                 showSuccessMessage(message);

                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');
                                  $('.modal-title').text("");
                                  $('#userModal2').modal('show');  
                                  dataTable.ajax.reload(); 
                                  dataTable2.ajax.reload(); 
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
               var idart = $(this).attr("idart");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_article",  
                    method:"POST",  
                    data:{idart:idart},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');
                         $('#userModal2').modal('hide');  
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);

                         $('#idcat').val(data.idcat);
                         $('#type').val(data.type);

                         $('#user_uploaded_image').html(data.user_image);
                         
                         $('.modal-title').text("modification de la vidéo  "+data.nom);  
                         $('#idart').val(idart);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idart = $(this).attr("idart");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_article",
                      method:"POST",
                      data:{idart:idart},
                      success:function(data)
                      {
                         var message =  data;
                         showSuccessMessage(message); 

                         dataTable.ajax.reload();
                         dataTable2.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            var erreur = "opération annulée :)";
	          	showErrrorMessage(erreur);
	          }

          });


          $(document).on('click', '.delete2', function(){
              var idp = $(this).attr("idp");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_publicite",
                      method:"POST",
                      data:{idp:idp},
                      success:function(data)
                      {
                         var message =  data;
                         showSuccessMessage(message);
											    

                         dataTable.ajax.reload();
                         dataTable2.ajax.reload();
                      }
                    });
	          }
	          else
	          {
	            var erreur = "opération annulée :)";
	          	showErrrorMessage(erreur);
	          }

          });



           $("#category_pro").on("change", function(t) {

			     	   var idcat = $(this).val();
		          	if (idcat !='') {
		          		$('#idcat').val(idcat);
		          	}
		          	else{

		          		$('#idcat').val("");
		          		var erreur = "Veillez complèter la catégorie d'information 😰";
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
		          			var erreur = "Veillez complèter le type de l'article  😰";
		          		  showErrrorMessage(erreur);
		          	}
			    });






				  $('.delete_checkbox').click(function(){
            if($(this).is(':checked'))
            {
             $(this).closest('tr').addClass('removeRow');
            }
            else
            {
             $(this).closest('tr').removeClass('removeRow');
            }
          });


          $('#delete_all').click(function(event){
              event.preventDefault();
                var checkbox = $('.delete_checkbox:checked');
              if(checkbox.length > 0)
              {
                 var checkbox_value = [];
                 $(checkbox).each(function(){
                  checkbox_value.push($(this).val());
                 });

                 // alert("idart:"+checkbox_value);
                 $.ajax({
                    url:"<?php echo base_url(); ?>admin/operation_publicite",
                    method:"POST",
                    data:{
                      checkbox_value:checkbox_value
                    },
                    success:function()
                    {
                      $('.removeRow').fadeOut(1500);
                      dataTable.ajax.reload();
                      dataTable2.ajax.reload();
                    }
                 });
              }
              else
              {
         
                showErrrorMessage("veillez selectionner un article  approprié🙆");
               
              }
              
           });


          $(document).on('click', '.activer', function(){
              var idp = $(this).attr("idp");

              if(confirm("Etes-vous sûre de vouloir activer la publicité?"))
		          {
		            
		           		$.ajax({
	                      url:"<?php echo base_url(); ?>admin/activation_publicite",
	                      method:"POST",
	                      data:{idp:idp},
	                      success:function(data)
	                      {
	                         var message =  data;
												   showSuccessMessage(message);
	                         dataTable.ajax.reload();
	                         dataTable2.ajax.reload();
	                      }
	                    });
		          }
		          else
		          {
		            showErrrorMessage("opération annulée 🙆");
		          }

          });

          $(document).on('click', '.desactiver', function(){
              var idp = $(this).attr("idp");

              if(confirm("Etes-vous sûre de vouloir desactiver la publicité?"))
		          {
		            
		           		$.ajax({
	                      url:"<?php echo base_url(); ?>admin/desactivation_publicite",
	                      method:"POST",
	                      data:{idp:idp},
	                      success:function(data)
	                      {
	                         // Swal.fire("succès!", ''+data, "success");
	                         var message =  data;
												    showSuccessMessage(message);

	                         dataTable.ajax.reload();
	                         dataTable2.ajax.reload();
	                      }
	                    });
		          }
		          else
		          {
		            showErrrorMessage("opération annulée 🙆");
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
