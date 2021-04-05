


<div class="col-md-12">

	<div class="col-md-12 text-center">
		<div class="logo-centered">
	        <a href="<?php echo base_url(); ?>"><img src="<?php echo($icone_info) ?>" alt="" style="width: 150px; height: 60px;"></a>
	    </div>
	    <h3>Création de compte</h3>
	    <p>Créer un nouveau compte dans notre système </p>

	</div>

	<ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
               
        <li class="nav-item">
            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#users_view" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-group"></i> Compte candidat</a>
        </li>

         <li class="nav-item">
            <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#entreprise_view" role="tab" aria-controls="pills-timeline" aria-selected="true"><i class="fa fa-university"></i> Compte entreprise</a>
        </li>
       

    </ul>
     <hr>

    <div class="tab-content" id="pills-tabContent">
    	 <!-- interface candidat -->
        <div class="tab-pane fade show active" id="users_view" role="tabpanel" aria-labelledby="pills-timeline-tab">

        	<div class="authentication-form mx-auto" style="padding: 10px 0;">
                
                <form method="post" action="<?= base_url(); ?>login/register_validation" style="font-size: 12px;">

                	<div class="form-group">
                        <?php
                        if($this->session->flashdata('message'))
                        {
                            echo '
                            <div class="alert alert-success">
                            <button class="close" data-dismiss="alert">x</button>
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
                    </div>

                    <div class="form-group">
                         
                        <input type="text" name="first_name" class="form-control form-control-lg" id="first_name" placeholder="Entrez votre nom" required="">
                        <i class="ik ik-user"></i>
                    </div>

                    <div class="form-group">
                       <input type="text" name="mail_ok" class="form-control form-control-lg" id="default-01" placeholder="E-mail ou nom d'utilisateur" required>
                        <i class="ik ik-mail"></i>
                    </div>
                    <div class="form-group">
                         
                        <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Entez votre mot de passe" required>
                        <i class="ik ik-lock"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1" required>
                                <span class="custom-control-label">&nbsp;<a href="javascript:void(0);">J'accepte Politique de confidentialité</a></span>
                            </label>
                        </div>
                        
                    </div>
                    <div class="sign-btn text-center">
                        <button class="btn btn-secondary">S'enregistrer</button>
                    </div>
                </form>
                <div class="register">
                    <p>Vous avez déjà un compte ? <a href="<?php echo(base_url()) ?>login">S'identifier</a></p>
                </div>
            </div>

        </div>
        <!-- fin interface -->

        <!-- interface entreprise -->
        <div class="tab-pane fade " id="entreprise_view" role="tabpanel" aria-labelledby="pills-profile-tab">
           <div class="authentication-form mx-auto col-md-12" style="padding: 10px 0;">
                
                <form method="post" action="<?= base_url(); ?>login/register_validation_entreprise" style="font-size: 12px;" class="row">

                	<div class="form-group">
                        <?php
                        if($this->session->flashdata('message'))
                        {
                            echo '
                            <div class="alert alert-success">
                            <button class="close" data-dismiss="alert">x</button>
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
                    </div>

                    <div class="form-group col-md-12">
                         
                        <input type="text" name="nom" class="form-control form-control-lg" id="first_name" placeholder="Entrez le nom de l'entreprise" required="">
                        <i class="ik ik-clipboard"></i>
                    </div>


                    <div class="form-group col-md-12">
                         
                        <input type="text" name="first_name" class="form-control form-control-lg" id="first_name" placeholder="Entrez votre nom du ceo" required="">
                        <i class="ik ik-user"></i>

                    </div>

                    <div class="form-group col-md-12">
                       <input type="text" name="mail_ok" class="form-control form-control-lg" id="default-01" placeholder="E-mail ou nom d'utilisateur" required>
                        <i class="ik ik-mail"></i>
                    </div>

                    <div class="form-group jf-inputwithicon col-md-6">

						<select data-placeholder="votre pays" name="idPays" class="form-control" required="">
							<?php 
							if ($pays->num_rows() > 0) {
								?>
								<option value="">Selectionnez votre pays</option>
								<?php
								foreach ($pays->result_array() as $key2) {
									?>
									<option selected value="<?php echo($key2['idPays']) ?>"><?php echo($key2['nompays']) ?></option>
									<?php
								}
							}
							else{

							}

							 ?>
							
						</select>
						<i class="ik ik-map"></i>
					</div>

					<div class="form-group col-md-6">
						<div class="form-group jf-inputwithicon">
							
							<select data-placeholder="votre province" name="idprovince" id="id_province" class="form-control" required>
								<?php 
								if ($provinces->num_rows() > 0) {
									?>
									<option value="">Selectionnez votre province</option>
									<?php
									foreach ($provinces->result_array() as $key2) {
										?>
										<option value="<?php echo($key2['idp']) ?>"><?php echo($key2['nomp']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
							<i class="ik ik-map-pin"></i>
						</div>
						
					</div>

					<div class="form-group col-md-6">
						<div class="form-group jf-inputwithicon">

							<select data-placeholder="votre ville" name="idville" id="id_ville" class="form-control" required>
								
								
							</select>
							<i class="ik ik-minimize"></i>
						</div>
						
					</div>


                    <div class="form-group col-md-6">
                         
                        <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Mot de passe" required>
                        <i class="ik ik-lock"></i>
                    </div>


                    <div class="form-group col-md-12">
                         
                        <textarea name="description" class="form-control" placeholder="La description de l'entreprise">
			        		
			        	</textarea>
                    </div>


                    <div class="row form-group col-md-12">
                        <div class="col-md-12 text-left">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1" required>
                                <span class="custom-control-label">&nbsp;<a href="javascript:void(0);">J'accepte Politique de confidentialité</a></span>
                            </label>
                        </div>

                        <div class="sign-btn text-center form-group col-md-12">

                        	<input type="hidden" name="idp" id="idp" placeholder="idp" />
	        		        <input type="hidden" name="idv" id="idv" placeholder="idv" />
	                        <button class="btn btn-secondary">S'enregistrer</button>
	                    </div>
                        
                    </div>
                    
                </form>
                
            </div>
        </div>
        <!-- fin interface -->


    </div>


	
</div>