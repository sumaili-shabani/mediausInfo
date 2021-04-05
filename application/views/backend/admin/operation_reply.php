 <div class="row">

 	<div class="col-md-6">
 		<div class="col-md-12">

 			<div class="row">
			    <!-- menu oper -->
			    <div class="col-lg-12 col-md-7">
			        <div class="card">

			        	<div class="col-md-12">
			        		<div class="row">
			        			<div class="col-md-4"></div>
			        			<div class="col-md-4">
			        				<!-- <a href="javascript:void(0)" class="btn btn-secondary btn-xs select_all" id="#select_all" data-toggle="modal" data-target="#userModal3"><i class="fa fa-send"></i>Répondre</a> -->
			        			</div>
			        			<div class="col-md-4"></div>
			        		</div>
			        	</div>

			        	<?php include('component/detailjob.php') ?>
			            
			            <?php include('component/menu_entrep.php') ?>
			        </div>
			    </div>

	 		</div>
 			
 		</div>
 		
 	</div>

 	<div class="col-md-6">
 		<div class="row">


 			<?php 



 			if ($user_reply->num_rows() <= 0) {
 				# code...
 			}
 			else{

 				foreach ($user_reply->result_array() as $row) {
 					
 					?>
 					<div class="col-md-12 mb-3">
		 				<div class="row">
		 					<div class="col-md-2 text-center">
		 						<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($row['image']) ?>" class="rounded-circle" width="80">
		 					</div>
		 					<div class="col-md-7">
		 						<div class="col-md-12">
		 							<b>Nom:</b> <a href="<?php echo(base_url()) ?>entreprise/detail_user/<?php echo($row['id_user']) ?>" class="text-primary"> <?php echo($row['first_name']) ?> <?php echo($row['last_name']) ?> &nbsp;&nbsp;<a href="tel:<?php echo($row['telephone']) ?>"><i class="fa fa-mobile-phone"></i></a></a>
		 							<p>
		 								<a href="mailto:<?php echo($row['email']) ?>" class="text-primary"> <?php echo($row['email']) ?></a>
		 							</p>
		 						</div>

		 						<div class="col-md-12">
		 							<b>Niveau d'étude:</b>&nbsp;&nbsp; <span class="text-warning"><?php echo($row['niveau']) ?></span>
		 						</div>

		 						<div class="col-md-12">
		 							<b>Expérience professionnelle:</b>&nbsp;&nbsp <?php echo($row['experienceP']) ?>
		 						</div>

		 						<div class="col-md-12">
		 							<b>Formations:</b>&nbsp;&nbsp; <?php echo($row['formation']) ?>
		 						</div>
		 						<div class="col-md-12">
		 							<b>Langue parlé:</b>&nbsp;&nbsp; <?php echo($row['langue']) ?>
		 						</div>


		 						<div class="col-md-12">
		 							<b>Compétences:</b>&nbsp;&nbsp; <?php echo(nl2br(substr($row['motivation'], 0,100))) ?>
		 						</div>

		 						<div class="col-md-12">
		 							<?php 

		 							if ($row['etat'] == 0) {
		 								?>
		 								<!-- <a  href="<?php echo(base_url()) ?>entreprise/validation_demande_emploi/<?php echo($row['idd']) ?>/<?php echo($row['id_user']) ?>/<?php echo($row['codejob']) ?>" onclick="return confirm('Etes-vous sûre de vouloir accepter cette demande ?')" class="text-success"><i class="fa fa-check"></i> Approuvé cette demande</a> -->
		 								<?php
		 							}
		 							else{
		 								
		 							}

		 							 ?>
		 							
		 						</div>

		 					</div>
		 					<div class="col-md-2">

		 						<a href="<?php echo(base_url()) ?>upload/reply/<?php echo($row['fichier']) ?>" target="_blank" class="btn btn-info"><i class="ik ik-share"></i>pdf</a>
		 						
		 						<p>
		 							<?php 

		 							if ($row['etat'] == 0) {
		 								
		 							}
		 							else{
		 								?>
		 								<div class="col-md-12 mt-5">
		 									<a  href="javascript:void(0);" class="btn btn-success btn-icon"><i class="fa fa-check"></i></a>
		 								</div>

		 								<div class="col-md-3 mt-5">
		 									<input type="checkbox" name="" class="delete_checkbox" value="<?php echo($row['email']) ?>">
		 								</div>
		 								
		 								<?php
		 							}

		 							 ?>
		 						</p>
		 						
		 					</div>
		 					<div class="col-md-12">
		 						<hr>
		 					</div>
		 				</div>
		 			</div>
 					<?php
 				}

 			}


 			 ?>


 			
 			
 		</div>
 	</div>							
    
  </div>








  <!-- modal -->
   <div class="modal fade" id="userModal3">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title">information personnele aux termes de contrat</div> 
                </div>
                
              

                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">

                            
                         <form method="POST" id="user_form2" class="col-md-12">

                         <div class="col-md-12">
                                <div class="row">

                                  <div class="col-md-12">
                                      <label><i class="fa fa-edit"></i> Sujet</label>
                                      <input type="text" name="sujet" id="sujet1" class="form-control" placeholder="entrer le sujet du massage">
                                     
                                   </div>
                                    
                                   <div class="col-md-12">
                                      <label><i class="fa fa-envelope"></i> Message</label>
                                      <textarea class="form-control" id="message1" name="message" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Quoi de news?">
                                        
                                      </textarea>
                                     
                                   </div>

                                </div>
                            </div>
                            

                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">

                    <button type="submit" class="btn btn-secondary" name="valider" id="envoyer_message">
                        <i class="fa fa-send"></i> Envoyer
                    </button>
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> fermer</a>
                </div> 
                </form>
                
            </div>
        </div>
    </div>
  <!-- fin modal -->

