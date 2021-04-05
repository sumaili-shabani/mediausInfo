<div class="col-md-12">

	<?php 

		if ($nombre_jrs < 0) {
			?>
				<form class="col-md-12 row"  method="post" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/add_job/<?php echo($identrepE) ?>">

					<div class="form-group col-md-12">
						<div class="text-center" align="center">
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
				    </div>

					<div class="form-group col-md-12">
						<label><i class="fa fa-briefcase"></i> Titre de l'offre</label>
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Entrez le titre de l'offre">
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-tag"></i> Selectionnez le service</label>
							<select data-placeholder="votre service" name="ids" class="form-control" required="">
								<?php 
								if ($services->num_rows() > 0) {
									?>
									<option value="">Selectionnez le service </option>
									<?php
									foreach ($services->result_array() as $key) {
										?>
										<option selected value="<?php echo($key['ids']) ?>"><?php echo($key['noms']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-tag"></i> Selectionnez la catégorie de l'offre</label>
							<select data-placeholder="votre categorie" name="idcat" class="form-control" required="">
								<?php 
								if ($categories->num_rows() > 0) {
									?>
									<option value="">Selectionnez la catégorie</option>
									<?php
									foreach ($categories->result_array() as $key) {
										?>
										<option  value="<?php echo($key['idcat']) ?>"><?php echo($key['nomcat']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-home"></i> Selectionnez le type de contrat</label>
							<select data-placeholder="votre categorie" name="idcontrat" class="form-control" required="">
								<?php 
								if ($contrats->num_rows() > 0) {
									?>
									<option value="">Selectionnez le type de contrat</option>
									<?php
									foreach ($contrats->result_array() as $key) {
										?>
										<option  value="<?php echo($key['idc']) ?>"><?php echo($key['nomc']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-money"></i> Selectionnez le  salaire pour l'offre</label>
						<select data-placeholder="votre salaire" name="idsalaire" class="form-control" required="">
							<?php 
							if ($salaires->num_rows() > 0) {
								?>
								<option value="">Selectionnez le salaire</option>
								<?php
								foreach ($salaires->result_array() as $key) {
									?>
									<option  value="<?php echo($key['idsalaire']) ?>"><?php echo($key['nomsalaire']) ?></option>
									<?php
								}
							}

							 ?>
							
						</select>
					</div>

					<!-- nombre de post -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Nombre de poste livré</label>
						<input type="number" min="1" name="nombre_post" id="nombre_post" class="form-control" placeholder="2 poste">
						
					</div>
					<!-- fin nombre de post -->
					<!-- experience recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Experience Professionnel demandé</label>
						<input type="text"  name="experience" id="experience" class="form-control" placeholder="5 ans d'experience dans...">
						
					</div>
					<!-- fin experience  -->

					<!-- grade -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-graduation-cap"></i> Entrer la grade  pour l'offre</label>
						<input type="text" name="grade" id="grade" class="form-control" placeholder="Grade à obtenier">
					</div>
					<!-- fin grade -->

					<!-- localisation recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Entrez la localisation que se fera l'activité</label>
						<input type="text"  name="localisation" id="localisation" class="form-control" placeholder="Nord-kivu goma" required>
						
					</div>
					<!-- fin localisation  -->

					<!-- qulification -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-graduation-cap"></i> Calification  envisagée pour les candidat</label>
						<select data-placeholder="votre salaire" name="qualification" class="form-control" required="">
							<?php 
							if ($gradesT->num_rows() > 0) {
								?>
								<option value="">Selectionnez  la grade</option>
								<?php
								foreach ($gradesT->result_array() as $key) {
									?>
									<option  value="<?php echo($key['nomcalification']) ?>"><?php echo($key['nomcalification']) ?></option>
									<?php
								}
							}

							 ?>
							
						</select>
					</div>
					<!-- fin qualification -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-file-o"></i> Selectionner le fichier de l'offre</label>
						<input type="file"  name="user_image2" id="user_image2" class="form-control" placeholder="Nord-kivu goma" required>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-12">
						<label><i class="fa fa-clock-o"></i> Selectionner la date fin de dépot de l'offre d'emploi</label>
						<input type="date" name="date_fin_depot" id="date_fin_depot" class="form-control" placeholder="fin dépot" required>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-12">
						<label><i class="fa fa-file-o"></i> Entrer les compétenses exigées pour  rectrutement</label>
						<textarea class="form-control" rows="3" name="connaissance" placeholder="avoir des compétenses sur: ...">
							
						</textarea>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- description_job recommande -->
					<div class="form-group col-md-12 mb-2">
						<label><i class="fa fa-book"></i> Entrer la description de l'offre</label>
						<textarea class="form-control" rows="4" name="description_job" placeholder="Parler un peu sur l'offre...">
							
						</textarea>

					</div>
					<!-- fin description_job  -->
				

					

				</form>
			<?php
			include('paiement.php');
		}
		else{

			?>
				<form class="col-md-12 row"  method="post" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/add_job/<?php echo($identrepE) ?>">

					<div class="form-group col-md-12">
						<div class="text-center" align="center">
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
				    </div>

					<div class="form-group col-md-12">
						<label><i class="fa fa-briefcase"></i> Titre de l'offre</label>
						<input type="text" name="titre" id="titre" class="form-control" placeholder="Entrez le titre de l'offre">
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-tag"></i> Selectionnez le service</label>
							<select data-placeholder="votre service" name="ids" class="form-control" required="">
								<?php 
								if ($services->num_rows() > 0) {
									?>
									<option value="">Selectionnez le service </option>
									<?php
									foreach ($services->result_array() as $key) {
										?>
										<option selected value="<?php echo($key['ids']) ?>"><?php echo($key['noms']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-tag"></i> Selectionnez la catégorie de l'offre</label>
							<select data-placeholder="votre categorie" name="idcat" class="form-control" required="">
								<?php 
								if ($categories->num_rows() > 0) {
									?>
									<option value="">Selectionnez la catégorie</option>
									<?php
									foreach ($categories->result_array() as $key) {
										?>
										<option  value="<?php echo($key['idcat']) ?>"><?php echo($key['nomcat']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-home"></i> Selectionnez le type de contrat</label>
							<select data-placeholder="votre categorie" name="idcontrat" class="form-control" required="">
								<?php 
								if ($contrats->num_rows() > 0) {
									?>
									<option value="">Selectionnez le type de contrat</option>
									<?php
									foreach ($contrats->result_array() as $key) {
										?>
										<option  value="<?php echo($key['idc']) ?>"><?php echo($key['nomc']) ?></option>
										<?php
									}
								}

								 ?>
								
							</select>
						
					</div>

					<div class="form-group col-md-6">
						<label><i class="fa fa-money"></i> Selectionnez le  salaire pour l'offre</label>
						<select data-placeholder="votre salaire" name="idsalaire" class="form-control" required="">
							<?php 
							if ($salaires->num_rows() > 0) {
								?>
								<option value="">Selectionnez le salaire</option>
								<?php
								foreach ($salaires->result_array() as $key) {
									?>
									<option  value="<?php echo($key['idsalaire']) ?>"><?php echo($key['nomsalaire']) ?></option>
									<?php
								}
							}

							 ?>
							
						</select>
					</div>

					<!-- nombre de post -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Nombre de poste livré</label>
						<input type="number" min="1" name="nombre_post" id="nombre_post" class="form-control" placeholder="2 poste">
						
					</div>
					<!-- fin nombre de post -->
					<!-- experience recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Experience Professionnel demandé</label>
						<input type="text"  name="experience" id="experience" class="form-control" placeholder="5 ans d'experience dans...">
						
					</div>
					<!-- fin experience  -->

					<!-- grade -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-graduation-cap"></i> Entrer la grade  pour l'offre</label>
						<input type="text" name="grade" id="grade" class="form-control" placeholder="Grade à obtenier">
					</div>
					<!-- fin grade -->

					<!-- localisation recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-pencil"></i> Entrez la localisation que se fera l'activité</label>
						<input type="text"  name="localisation" id="localisation" class="form-control" placeholder="Nord-kivu goma" required>
						
					</div>
					<!-- fin localisation  -->

					<!-- qulification -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-graduation-cap"></i> Calification  envisagée pour les candidat</label>
						<select data-placeholder="votre salaire" name="qualification" class="form-control" required="">
							<?php 
							if ($gradesT->num_rows() > 0) {
								?>
								<option value="">Selectionnez  la grade</option>
								<?php
								foreach ($gradesT->result_array() as $key) {
									?>
									<option  value="<?php echo($key['nomcalification']) ?>"><?php echo($key['nomcalification']) ?></option>
									<?php
								}
							}

							 ?>
							
						</select>
					</div>
					<!-- fin qualification -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-6">
						<label><i class="fa fa-file-o"></i> Selectionner le fichier de l'offre</label>
						<input type="file"  name="user_image2" id="user_image2" class="form-control" placeholder="Nord-kivu goma" required>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-12">
						<label><i class="fa fa-clock-o"></i> Selectionner la date fin de dépot de l'offre d'emploi</label>
						<input type="date" name="date_fin_depot" id="date_fin_depot" class="form-control" placeholder="fin dépot" required>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- fichier_job recommande -->
					<div class="form-group col-md-12">
						<label><i class="fa fa-file-o"></i> Entrer les compétenses exigées pour  rectrutement</label>
						<textarea class="form-control" rows="3" name="connaissance" placeholder="avoir des compétenses sur: ...">
							
						</textarea>
						
					</div>
					<!-- fin fichier_job  -->

					<!-- description_job recommande -->
					<div class="form-group col-md-12 mb-2">
						<label><i class="fa fa-book"></i> Entrer la description de l'offre</label>
						<textarea class="form-control" rows="4" name="description_job" placeholder="Parler un peu sur l'offre...">
							
						</textarea>

					</div>
					<!-- fin description_job  -->
				

					 <!-- sumition -->
					<div class="form-group col-md-12">
						<input type="hidden" name="identrep" value="<?php echo($identrepE) ?>">
						<input type="submit" name="valuder" value="Enregitrer" class="btn btn-secondary btn-block">
					</div>
					<!-- fin -->

				</form>
						
			<?php

		}

	?>
		

</div>