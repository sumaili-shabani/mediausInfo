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
	                                      <!-- insertion de tableau -->
	                                      <div class="col-md-12">
	                                        <div class="table-responsive">
	                                            <table id="user_data" class="table dataTable no-footer dtr-inline collapsed">
	                                                <thead class="tb-member-head thead-light">  
	                                                    <tr>  
	                                                        <th width="45%">Nom de la catégorie</th>  
			                                                <th width="45%">Mise à jour</th>
			                                                 
			                                                
			                                                <th width="5%">Modifier</th> 
			                                                <th width="5%">Supprimer</th>  
	                                                    </tr>  
	                                               </thead> 

	                                               <tfoot>  
	                                                    <tr>  
	                                                        <th width="45%">Nom de la catégorie</th>  
			                                                <th width="45%">Mise à jour</th>
			                                                 
			                                                
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
				                     <label> <i class="fa fa-edit"></i> Entrer le nom d'une catégorie</label>
				                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le nom de la catégorie d'informations" />
				                </div>

                    		
                    		<div class="col-md-12" style="margin-bottom: 20px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idcat" id="idcat" />
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
               $('.modal-title').text("Paramètrage des catégories d'informations");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_category_info'; ?>",  
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
               
               var action = $('#action').val();


               if(nom != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_category_info'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_category_info'?>",  
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
                  showErrrorMessage("Tous les champs doivent être remplis");
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idcat = $(this).attr("idcat");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_category_info",  
                    method:"POST",  
                    data:{idcat:idcat},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         
                         $('.modal-title').text("modification de la catégorie  "+data.nom);  
                         $('#idcat').val(idcat);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idcat = $(this).attr("idcat");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_category_info",
                      method:"POST",
                      data:{idcat:idcat},
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
	            showErrrorMessage("opération annulée :)");
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
