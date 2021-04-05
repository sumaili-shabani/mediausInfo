
<div class="col-md-12">
	<div class="row">

		<div class="col-md-12 bg-light">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h6 align="center" class="mt-30 text-center"><i class="fa fa-tag"></i> N'hesitez pas vous pouvez déjà y postyler</h6>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		
		
		<div class="col-md-12">
			<form class="row" method="post" enctype="multipart/form-data" action="<?= base_url(); ?>user/reply_job/<?php echo($row['codejob']) ?>">

				<div class="form-group col-md-12 mb-2" style="margin-top: 10px;">
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

			    <div class="col-md-12">
			    	<div class="row">

			    		<div class="col-md-6 form-group">
					    	<label> <i class="fa fa-briefcase"></i> Expérience professionnelle </label>
					    	<select name="experienceP" class="form-control" required>
					    		<option selected value="< 1 ans">< 1 ans</option>
					    		<option value="< 5 ans">< 5 ans</option>
					    		<option value="< 10 ans">< 10 ans</option>
					    		<option value="+ 10 ans">+10 ans</option>
					    	</select>
					    </div>

					    
			    		<div class="col-md-6 form-group">
					    	<label> <i class="fa fa-graduation-cap"></i> Niveau d'étude </label>
					    	<select name="niveau" class="form-control" required>
					    		<option selected value="Dimplômé">Dimplômé</option>
					    		<option value="Licencié">Licencié</option>
					    		<option value="Gradué">Gradué</option>
					    		<option value="Licencié 3 cycle">Licencié 3 cycle</option>
					    	</select>
					    </div>

					    <div class="col-md-12 form-group">
					    	<label> <i class="fa fa-language"></i> Langue parlée </label>
					    	<select name="langue" class="form-control" required>
					    		
					    		<option value="Anglais courant">Anglais courant</option>
					    		<option value="Swahili courant">Swahili courant</option>
					    		<option value="Lingala courant">Lingala courant</option>
					    		<option value="Tshikongo courant">Tshikongo courant</option>
					    		<option selected value="Français courant">Français courant</option>
					    	</select>
					    </div>

					    <div class="col-md-12 form-group">
					    	<label> <i class="fa fa-fax"></i> Avez-vous déjà  suivi des formations professionnelles ?</label>
					    	<select name="formation" class="form-control" required>
					    		
					    		<option value="Non pas encore !">Non pas encore !</option>
					    		<option selected value="Oui j'en ai plus suivi">Oui j'en ai plus suivi</option>
					    	</select>
					    </div>


			    	</div>
			    </div>

				<div class="col-md-12 form-group mb-2">
					<label><i class="fa fa-pencil"></i> Répondez aux exigences des compétences pour faire motivation au recruteur</label>
					<textarea class="form-control" name="motivation" id="motivation" placeholder="Répondez aux exigences des compétences pour faire motivation au recruteur" rows="5" required>
						
					</textarea>

				</div>

				<div class="col-md-12 form-group mb-2">
					<label><i class="fa fa-file-o"></i> Atacher votre lettre de motivation</label>
					<input type="file" name="user_image3" id="user_image3" class="form-control" required>
				</div>
				<div class="col-md-12">

					<input type="hidden" name="titre" class="form-control" value="<?php
					echo($row['nomcat'].' '.$row['titre']) ?>">

					<input type="hidden" name="ceo" class="ceo" value="<?php
					echo($row['ceo']) ?>">

					<input type="hidden" name="idjob" class="idjob" value="<?php
					echo($row['idjob']) ?>">

					<input type="hidden" name="codejob" class="codejob" value="<?php
					echo($row['codejob']) ?>">

					<input type="submit" name="envoyer" class="btn btn-secondary btn-block" value="Envoyer">
				</div>
			</form>
		</div>
		
	</div>
</div>