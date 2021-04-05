<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="jf-title">
				<h6 class="text-center">Autres informations</h6>
				<div class="text-center">Ces informations sont nécessaires pour votre profile</div>
			</div>
		</div>

		<!-- debut de formulaire -->
									
		<div class="col-md-12">
			<div class="row">

				<div class="col-md-12">
					<div class="">

						<div class="col-md-12" align="center">
							<div class="row jf-sortandview">
								<div class="col-md-3">
									<a href="" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i>Actualisez</a>
								</div>
								<div class="col-md-3">
									<a href="javascript:void(0);"  role="button" id="add_button" data-toggle="modal" data-target="#userModal3" class="btn btn-secondary btn-sm">Edication</a>
								</div>
								<div class="col-md-3">
									<a href="javascript:void(0);"  role="button" id="add_button" data-toggle="modal" data-target="#userModal2" class="btn btn-secondary btn-sm">Interesser</a>
								</div>
								<div class="col-md-3">
									<a href="javascript:void(0);"  role="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-secondary btn-sm">Compétense</a>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
								
							</div>
						</div>
						

					</div>
				</div>



				<p class="text-danger text-center"><?php echo form_error('first_name'); ?></p>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p>
					        	
									        </p>
											<?php
									        if($this->session->flashdata('message'))
									        {
									            echo '
									            <div class="alert alert-success">
										            <button class="close" data-dismiss="alert">
										            	<i class="fa fa-check"></i>
										            </button>
									                '.$this->session->flashdata("message").'
									            </div>
									            ';
									        }
									        elseif ($this->session->flashdata('message2')) {
									          echo '
									            <div class="alert alert-danger">
									            	<button class="close" data-dismiss="alert">x</button>
									                '.$this->session->flashdata("message2").'
									            </div>
									            ';
									        }
									        else{

									        }
									        ?>
									        <p>
									        	
									        </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-md-12">
				<!-- détail des données de l'utilisateur -->
				<?php include('details.php') ?>
				<!-- fin detail -->
					
				</div>

				

			</div>

		</div>

		<!-- fin -->



	</div>
</div>