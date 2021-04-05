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

	                                           
	                                             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
	                                           </div>
	                                         </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">

											<div class="table-responsive">
												<table id="user_data" class="table table-hover table-custom spacing5 ">  
							                       <thead>  
							                            <tr>   
							                                 <th>Nom de paquet</th>
							                                 <th>Nom de service</th>
							                                 <th>Prix</th>
							                                 <th>Nombre des jours</th>
							                                 <th>Nom des publications</th>
							                                 <th>Mis à jour</th>
							                                 <th>Editer</th>  
							                                 <th>Supprimer</th>  
							                            </tr>   
							                       </thead>

							                       <tfoot>
							                            <tr>   
							                                 <th>Nom de paquet</th>
							                                 <th>Nom de service</th>
							                                 <th>Prix</th>
							                                 <th>Nombre des jours</th>
							                                 <th>Nom des publications</th>
							                                 <th>Mis à jour</th>
							                                 <th>Editer</th>  
							                                 <th>Supprimer</th>
							                            </tr> 
							                       </tfoot>   
							                     </table>
											</div>

											
									    </div>
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

       <!-- Modal Setup New Project -->
		<div class="modal fade new-project-modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <p class="modal-title text-center" id="exampleModalLabel"></p>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		             <form method="post" id="user_form" enctype="multipart/form-data">
			            <div class="modal-body">

			            	<div class="form-group col-md-12 jf-inputwithicon">
					             <label><i class="fa fa-home"></i> selectionnez un service</label>
					            <select class="form-control" name="id_service" id="id_service">
					            	<option value="">selectionnez un service</option>
					            	<?php 
					            	foreach ($services as $service) {
					            		echo '<option value="'.$service["ids"].'">'.$service["noms"].'</option>';
					            	}

					            	 ?>

					            </select>
					            
					        </div>

					        <div class="form-group col-md-12 jf-inputwithicon">
					            <label><i class="fa fa-edit"></i> le nom du paquet</label>
					            <input type="text" name="nompaquet" id="nompaquet" class="form-control" placeholder="Entrez le nom du paquet">
					          
					        </div>

			            	<div class="form-group col-md-12 jf-inputwithicon">
					            <label><i class="fa fa-money"></i> le prix du paquet</label>
					            <input type="number" name="prix" id="prix" class="form-control" placeholder="Entrez le prix du paquet" min="0">
					          
					        </div>

					        <div class="form-group col-md-12 jf-inputwithicon">
					            <label><i class="fa fa-pencil"></i> le nombre du jour pour ce paquet</label>
					            <input type="number" name="nombre_jour" id="nombre_jour" class="form-control" placeholder="Entrez le nombre du jour pour ce paquet" min="0">
					          
					        </div>

					        <div class="form-group col-md-12 jf-inputwithicon">
					            <label><i class="fa fa-pencil"></i> nombre de publication pour ce paquet</label>
					            <input type="number" name="nombre_pub" id="nombre_pub" class="form-control" placeholder="Entrez le nombre de publication pour ce paquet" min="0">
					          
					        </div>
			               
			            </div>
			            <div class="modal-footer">
			                
			                <input type="hidden" name="ids" id="ids" /> 
		                    <input type="hidden" name="idpaquet" id="idpaquet" />  
		                    <input type="submit" name="action" id="action" class="btn btn-round btn-success" value="Add" />  
		                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
			            </div>
		        	</form>
		        </div>
		    </div>
		</div>
		<!-- feed-post-modal -->  

	<script type="text/javascript" language="javascript" >  
	  $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajout d'une compétense");  
           $('#action').val("Add");  
      });

     $(document).on('change', '#id_service', function(){
      	var ids = $(this).val();
      	if (ids !='') {
      		$('#ids').val(ids);
      	}
      	else{
      		
      		showErrrorMessage("veillez selectionner un service");
      	}
      	
      	
      })

      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/fetch_paquet'; ?>",  
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
           var prix 		= $('#prix').val();
           var nompaquet 	= $('#nompaquet').val();

           var nombre_jour  = $('#nombre_jour').val();
           var nombre_pub 	= $('#nombre_pub').val();
           var ids 			= $('#ids').val(); 
 
           var action 		= $('#action').val();

           // alert(ids+" "+ids+" nompaquet:"+nompaquet+" nbr jours:"+nombre_jour+" nbr de pub:"+nombre_pub+" prix:"+prix+" $");


           if(prix != '' && ids != '' && nompaquet != '' && nombre_jour != '' && nombre_pub != '')
            {

	            if (action =="Add") {

	            	// alert("ids "+ids+" nompaquet:"+nompaquet+" nbr jours:"+nombre_jour+" nbr de pub:"+nombre_pub+" prix:"+prix+" $");
	                 
	                $.ajax({  
	                     url:"<?php echo base_url() . 'admin/operation_paquet/Add'?>",  
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
		        else if (action == 'Edit') {
		        	$.ajax({  
                         url:"<?php echo base_url() . 'admin/modification_paquet'?>",  
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
	            }

            }
            else
            {
            	showErrrorMessage("Tous les champs doivent être remplis"); 
            }
             
      }); 

      $(document).on('click', '.update', function(){  
           var idpaquet = $(this).attr("idpaquet");  
           $.ajax({  
                url:"<?php echo base_url(); ?>admin/fetch_single_paquet",  
                method:"POST",  
                data:{idpaquet:idpaquet},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal').modal('show');  
                     $('#prix').val(data.prix);
                     $('#nompaquet').val(data.nompaquet);
                     $('#nombre_jour').val(data.nombre_jour);
                     $('#nombre_pub').val(data.nombre_pub);
                     $('#ids').val(data.ids);
                     $('.modal-title').text("modification de paquet "+data.nompaquet);  
                     $('#idpaquet').val(idpaquet);  
                     $('#action').val("Edit");  
                }  
           });  
      });

      $(document).on('click', '.delete', function(){
          var idpaquet = $(this).attr("idpaquet");
          if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
		              url:"<?php echo base_url(); ?>admin/suppression_paquet",
		              method:"POST",
		              data:{idpaquet:idpaquet},
		              success:function(data)
		              {
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
