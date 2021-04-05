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
                                    	<div class="col-md-12 mb-2">
                                    		<a href="" class="btn btn-outline-secondary pull-left"><i class="fa fa-refresh"></i> actualisez</a>
                                    	</div>

                                    	<!-- mes scripts commencent -->
                                    	<div class="col-sm-12 table-responsive">
                                    		<table id="users_table" class="table dataTable no-footer" role="grid" style="">
	                                            <thead>
	                                                <tr>
	                                                	<td>
	                                                		Les Opérations

	                                                	</td>

	                                                	

	                                                	<td>
	                                                		Profile complet des ceo et leurs entreprises

	                                                	</td>
	                                                	
	                                                	<td>
	                                                		Montant
	                                                	</td>
	                                                	<td>
	                                                		Mobile
	                                                	</td>
	                                                	<td>
	                                                		Token de transation
	                                                	</td>
	                                                	
	                                                	
	                                                </tr>

	                                            </thead>
	                                            <tbody>

	                                            	<?php 
	                                            	if ($padding->num_rows() <=  0) {
	                                            		
	                                            		?>
	                                            		<td colspan="6">Aucun paiement n'est à présent disponible</td>
	                                            		<?php
	                                            	}
	                                            	else{

	                                            		foreach ($padding->result_array() as $key ) {
	                                            			# code...
	                                            			?>
	                                            			 <tr role="row" class="odd">
			                                            	    <td>
			                                            	    	<?php 
			                                            	    	if ($key['etat_paiement'] ==0) {
			                                            	    		
			                                            	    		?>
			                                            	    		<div class="table-actions">

				                                                           <input type="checkbox" name="delete_checkbox" value="<?php echo($key['idp']) ?>" class="delete_checkbox">
				                                                           &nbsp;
				                                                            <a href="javascript:void(0);" idp="<?php echo($key['idp']) ?>" class="btn btn-danger btn-icon invvalider_liste"><i class="ik ik-trash-2 text-white"></i></a>
				                                                        </div>
			                                            	    		<?php
			                                            	    	}
			                                            	    	else{
			                                            	    		?>
			                                            	    		<div class="table-actions">

				                                                           <input type="checkbox" name="delete_checkbox" value="<?php echo($key['idp']) ?>" class="delete_checkbox">
				                                                           &nbsp;
				                                                            <a href="javascript:void(0);" idp="<?php echo($key['idp']) ?>" class="btn btn-secondary btn-icon"><i class="fa fa-eye text-white"></i></a>
				                                                        </div>
			                                            	    		<?php

			                                            	    	}

			                                            	    	 ?>
			                                            	    	

			                                                        
			                                            	    	
			                                            	    </td>
			                                                    
			                                                    <td>

			                                                    	<div class="col-md-12">
			                                                    		<div class="row">

			                                                    			<div class="col-md-4">
			                                                    				<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="table-user-thumb" alt="">
			                                                    				&nbsp;
			                                                    				<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['logo']) ?>" class="table-user-thumb" alt="">
			                                                    			</div>



			                                                    			<div class="col-md-8">
			                                                    				
					                                                    	    <div class="col-md-12">
					                                                    			<?php echo($key['first_name']) ?>
					                                                    			<?php echo($key['last_name']) ?>
					                                                    		</div>
					                                                    		<div class="col-md-12">
					                                                    			<a href="tel:<?php echo($key['telephone']) ?>" class="text-primary">
					                                                    				<i class="fa fa-phone"></i>
					                                                    				&nbsp;&nbsp;<?php echo($key['telephone']) ?>
					                                                    			</a>
					                                                    		</div>
					                                                    		<div class="col-md-12 text-success">
					                                                    			<?php echo($key['nom']) ?>
					                                                    		</div>
			                                                    			</div>
			                                                    		</div>
			                                                    	</div>
			                                                    	
			                                                    </td>

			                                                    <td class="sorting_1"><?php echo($key['montant']) ?> $</td>
			                                                    <td>
				                                                    
				                                                    <?php 
				                                                    if ($key['motif'] == "m-pesa") {
				                                                    	?>
				                                                    	<img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;">
				                                                    	<?php
				                                                    }
				                                                    else if ($key['motif'] == "airtel money") {
				                                                    	?>
				                                                    	<img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;">
				                                                    	<?php
				                                                    }
				                                                    else{
				                                                    	echo("module de paiement inconu");
				                                                    }
				                                                    ?>
				                                                </td>
			                                                     <td class="sorting_1">
			                                                     	
			                                                     	<div class="table-actions">
			                                                           <i class="fa fa-key"></i> &nbsp;<?php echo($key['token']) ?>&nbsp;
			                                                            <a href="<?php echo(base_url()) ?>admin/facture/<?php echo($key['codeFacture']) ?>"  class="btn btn-primary btn-icon"><i class="fa fa-print text-white"></i></a>
			                                                        </div>

			                                                        

			                                                     </td>
			                                                    
			                                                </tr>
	                                            			<?php
	                                            		}

	                                            	}

	                                            	 ?>
	                                                
	                                                
	                                               

	                                            </tbody>
	                                            <tfoot role="row" class="odd">
	                                                <tr>
	                                                	<td>
	                                                		Les opérations
	                                                	</td>
	                                                	<td>
	                                                		Profile complet des ceo et leurs entreprises
	                                                	</td>
	                                                	
	                                                	<td>
	                                                		Montant
	                                                	</td>
	                                                	<td>
	                                                		Mobile
	                                                	</td>
	                                                	<td>
	                                                		Token de transation
	                                                	</td>
	                                                	
	                                                	
	                                                </tr>

	                                            </tfoot>
	                                        </table>
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

        <script type="text/javascript">
        	$(document).ready(function() {

        		$('#users_table').dataTable();

        		 $('.delete_checkbox').click(function(){
	              if($(this).is(':checked'))
	              {
	               $(this).closest('tr').addClass('bg-red');
	              }
	              else
	              {
	               $(this).closest('tr').removeClass('bg-red');
	              }
	            });

        		

        		  $('.invvalider_liste').click(function(event){
                  event.preventDefault();
                  var checkbox = $('.delete_checkbox:checked');

                  if(confirm("Etes-vous sûre de vouloir le valider?"))
                  {
                    
                      if(checkbox.length > 0)
	                  {
	                   var checkbox_value = [];
	                   $(checkbox).each(function(){
	                    checkbox_value.push($(this).val());

	                   });

	                   // alert("email:"+checkbox_value);
	                   $.ajax({
	                        url:"<?php echo base_url(); ?>admin/invalider_multiple_fausse_tranaction",
	                        method:"POST",
	                        data:{
	                            checkbox_value:checkbox_value
	                        },
	                        success:function(data)
	                        {
	                            
	                            showSuccessMessage(data);
	                            
	                            $('.bg-red').fadeOut(1500);

	                            
	                        }
	                   });
	                  }
	                  else
	                  {
	                    showErrrorMessage("veillez selectionner au moins une fausse transaction");
	                   
	                  }

                  }
                  else
                  {

                    showErrrorMessage("opération annulée");

                  }

		             
	            });


        		

        		

	           

	            const showErrrorMessage = erreur=> {
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
