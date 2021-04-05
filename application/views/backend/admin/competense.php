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
							                                 <th>Nom de la compétense pour l'emploi</th>
							                                 <th>Mis à jour</th>
							                                 <th>Editer</th>  
							                                 <th>Supprimer</th> 
							                            </tr>   
							                       </thead>

							                       <tfoot>
							                            <tr>   
							                                 <th>Nom de la compétense pour l'emploi</th>
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
				            <label><i class="fa fa-linkedin"></i> le nom de la compétense pour l'emploi</label>
				            <input type="text" name="nomcompetense" id="nomcompetense" class="form-control" placeholder="Entrez le nom de la compétense pour l'emploi">
				          
				        </div>
		                
		                
		            </div>
		            <div class="modal-footer">
		                
	                    <input type="hidden" name="idcompetense" id="idcompetense" />  
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

     var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/fetch_competense'; ?>",  
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
           var nomcompetense = $('#nomcompetense').val(); 
 
           var action = $('#action').val();

           // alert(nomcompetense+" "+action);


           if(nomcompetense != '')
            {

	            if (action =="Add") {
	                 
	                $.ajax({  
	                     url:"<?php echo base_url() . 'admin/operation_competense/Add'?>",  
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
                         url:"<?php echo base_url() . 'admin/modification_competense'?>",  
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
           var idcompetense = $(this).attr("idcompetense");  
           $.ajax({  
                url:"<?php echo base_url(); ?>admin/fetch_single_competense",  
                method:"POST",  
                data:{idcompetense:idcompetense},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal').modal('show');  
                     $('#nomcompetense').val(data.nomcompetense);
                     $('.modal-title').text("modification d'une compétense pour l'emploi "+data.nomcompetense);  
                     $('#idcompetense').val(idcompetense);  
                     $('#action').val("Edit");  
                }  
           });  
      });

     
     

      $(document).on('click', '.delete', function(){
          var idcompetense = $(this).attr("idcompetense");
          if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
		              url:"<?php echo base_url(); ?>admin/suppression_competense",
		              method:"POST",
		              data:{idcompetense:idcompetense},
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
