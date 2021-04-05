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
							                                 <th>Nom de la calification pour l'emploi</th>
							                                 <th>Mis à jour</th>
							                                 <th>Editer</th>  
							                                 <th>Supprimer</th>  
							                            </tr>  
							                       </thead> 
							                        <tfoot>  
							                            <tr>   
							                                 <th>Nom de la calification pour l'emploi</th>
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
				            <label><i class="fa fa-pencil"></i> nom de la calification pour l'emploi</label>
				            <i class="fa fa-pencil"></i>
				            <input type="text" name="nomcalification" id="nomcalification" class="form-control" placeholder="Entrez le nom de la calification pour l'emploi">
				          
				        </div>
		                
		                
		            </div>
		            <div class="modal-footer">
		                
	                    <input type="hidden" name="idcalification" id="idcalification" />  
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
           $('.modal-title').text("Ajout d'une calification pour l'emploi");  
           $('#action').val("Add");  
      });

      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/fetch_calification'; ?>",  
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
           var nomcalification = $('#nomcalification').val(); 
 
           var action = $('#action').val();

           // alert(nomcalification+" "+action);


           if(nomcalification != '')
            {

	            if (action =="Add") {
	                 
	                $.ajax({  
	                     url:"<?php echo base_url() . 'admin/operation_calification/Add'?>",  
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
                         url:"<?php echo base_url() . 'admin/modification_calification'?>",  
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
           var idcalification = $(this).attr("idcalification");  
           $.ajax({  
                url:"<?php echo base_url(); ?>admin/fetch_single_calification",  
                method:"POST",  
                data:{idcalification:idcalification},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal').modal('show');  
                     $('#nomcalification').val(data.nomcalification);
                     $('.modal-title').text("modification d'une calification pour l'emploi "+data.nomcalification);  
                     $('#idcalification').val(idcalification);  
                     $('#action').val("Edit");  
                }  
           });  
      });

      $(document).on('click', '.delete', function(){
          var idcalification = $(this).attr("idcalification");
          if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
		              url:"<?php echo base_url(); ?>admin/suppression_calification",
		              method:"POST",
		              data:{idcalification:idcalification},
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
