<div class="col-md-12">
	<div class="table-responsive">
		<div class="col-md-12">
			<label class="text-center">Complètez vos compétenses</label>
			<label class="text-center">Ces informations sont nécessaires pour votre profile</label>
		</div>
		<table class="table  table-borderless table-striped">
			<thead>
				<th>nom de la compétense</th>
				<th>mis à jour</th>
				<th>supprimer</th>
			</thead>
			<tbody>
				<?php 
				if ($user_skills->num_rows() > 0) {
					foreach ($user_skills->result_array() as $skills) {
						?>
						<tr>
							<td><?php echo(substr($skills['nomskills'], 0,30)) ?></td>
							<td>
								<?php 
								echo(nl2br(substr(date(DATE_RFC822, strtotime($skills['created_at'])), 0, 23))) 
								?></td>
							<td>
								<a href="<?php echo(base_url()) ?>user/suppresion_operations/delete_users_skills/<?php echo($id_user) ?>/<?php echo($skills['idskills']) ?>" class="btn btn-light btn-icon" onclick="return(confirm('Etes-vous sûr de vouloir le supprimer?'))"><i class="fa fa-trash"></i></a>
							</td>

						</tr>
						<?php
					}
				}
				 ?>
				
			</tbody>
		</table>
		
	</div>
</div>

<!-- Mentions interessées -->
<div class="col-md-12">
	<div class="table-responsive">
		<div class="col-md-12">
			<label class="text-center">Ce qui vous interesse surtout</label>
			<label class="text-center">Ces informations sont nécessaires pour votre profile</label>
		</div>
		<table class="table table-bordered table-borderless table-striped">
			<thead>
				<th>nom de la mention</th>
				<th>mis à jour</th>
				<th>supprimer</th>
			</thead>
			<tbody>
				<?php 
				if ($user_interese->num_rows() > 0) {
					foreach ($user_interese->result_array() as $interesse_plus) {
						?>
						<tr>
							<td><?php echo(substr($interesse_plus['nom'], 0,30)) ?></td>
							<td>
								<?php 
								echo(nl2br(substr(date(DATE_RFC822, strtotime($interesse_plus['created_at'])), 0, 23))) 
								?></td>
							<td>
								<a href="<?php echo(base_url()) ?>user/suppresion_operations/delete_users_interesse/<?php echo($id_user) ?>/<?php echo($interesse_plus['idintersse']) ?>" class="btn btn-light btn-icon" onclick="return(confirm('Etes-vous sûr de vouloir le supprimer?'))"><i class="fa fa-trash"></i></a>
							</td>

						</tr>
						<?php
					}
				}
				 ?>
				
			</tbody>
		</table>
		
	</div>
</div>
<!-- fin interessés -->

<!-- Mentions education et scolarisation de grade -->
<div class="col-md-12">
	<div class="table-responsive">
		<div class="col-md-12">
			<label class="text-center">Etudes faites</label>
			<label class="text-center">Ces informations sont nécessaires pour votre profile</label>
		</div>
		<table class="table table-bordered table-borderless table-striped">
			<thead>
				<th>Nom de l'université</th>
				<th>Grade obtenue</th>
				<!-- <th>description</th>
				<th>Lococalisation</th>
				<th>Année academique</th> -->
				<th>Mis à jour</th>
				<th>Supprimer</th>
			</thead>
			<tbody>
				<?php 
				if ($educations->num_rows() > 0) {
					foreach ($educations->result_array() as $education) {
						?>
						<tr>
							<td><?php echo(substr($education['nom_univ'], 0,30)) ?>  <?php echo(substr($education['gradeobtenu'], 0,30)) ?>...</td>
							<td><?php echo(substr($education['gradeobtenu'], 0,30)) ?> ...</td>
							<!-- <td><?php echo(substr($education['description'], 0,30)) ?> ...</td>
							<td><?php echo(substr($education['localisation'], 0,30)) ?> ...</td>
							<td><?php echo(substr($education['annee_obt'], 0,30)) ?></td> -->
							<td>
								<?php 
								echo(nl2br(substr(date(DATE_RFC822, strtotime($education['created_at'])), 0, 23))) 
								?></td>
							<td>
								<a href="<?php echo(base_url()) ?>user/suppresion_operations/delete_users_education_faite/<?php echo($id_user) ?>/<?php echo($education['idedic']) ?>" class="btn btn-light btn-icon" onclick="return(confirm('Etes-vous sûr de vouloir le supprimer?'))"><i class="fa fa-trash"></i></a>
							</td>

						</tr>
						<?php
					}
				}
				 ?>
				
			</tbody>
		</table>
		
	</div>
</div>
<!-- fin education et scolarisation de grade -->