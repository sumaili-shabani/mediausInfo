
<?php 
if ($info_job_tag->num_rows() <= 0) {
	# code...
}
else{

	foreach ($info_job_tag->result_array() as $row) {

        
		
		?>

		<div class="col-md-12">
			<div class="row">

				<div class="col-md-12 mb-4">
					<h6 class="mt-30"><i class="fa fa-tag"></i> Informations Basiques </h6>
    				<hr>
    				<div class="col-md-12">
    					<b >Site officiel:</b>&nbsp;&nbsp; <a href="<?php echo($sitewebE) ?>" class="text-info" target="_blank">&nbsp;&nbsp; <?php echo($sitewebE) ?></a>
    				</div>

    				<div class="col-md-12">
    					<b >Secteur d´activité:</b>&nbsp;&nbsp; <?php echo($row['nomcat']) ?>
    				</div>
    				<h6 class="mt-30"><i class="fa fa-book"></i> Détails de l'annonce</h6>
    				<hr>

    				<div class="col-md-12">
    					<b >Poste proposé:</b>&nbsp;&nbsp; <?php echo($row['grade']) ?>
    					<p>
    						<?php echo(nl2br($row['description_job'])) ?>
    					</p>
    					<div>
    						<b >type de contrat:</b>&nbsp;&nbsp; <?php echo($row['nomc']) ?>
    					</div>

    					<div>
    						<b >salaire proposé:</b>&nbsp;&nbsp; <?php echo($row['nomsalaire']) ?>
    					</div>

    					<div>
    						<b >Région:</b>&nbsp;&nbsp; <?php echo($row['localisation']) ?>
    					</div>


    					<div>
    						<b >Nombre de poste(s):</b>&nbsp;&nbsp; <?php echo($row['nombre_post']) ?>
    					</div>
    				</div>

    				<h6 class="mt-30"><i class="fa fa-user"></i> Profil recherché pour le poste</h6>
    				<hr>
    				
    				<div class="col-md-12">
    					<b >Nuveau d'étude demandé doit être :</b>&nbsp;&nbsp; <?php echo($row['qualification']) ?>
    				</div>

    				<h6 class="mt-30"><i class="fa fa-graduation-cap"></i> Critères de l'annonce pour le poste</h6>
    				<hr>
    				
    				<div class="col-md-12">
    					<b >Avoir des compétences :</b>&nbsp;&nbsp; <?php echo(nl2br($row['connaissance'])) ?>
    				</div>


    				<hr>

    				<!-- postyler -->
                    <?php 

                        $today = date('Y-m-d');
                        if ($row['date_fin_depot'] >= $today) {

                            ?>
                            
                             <?php include('formulaire_postyler.php') ?>

                            <?php

                        }
                        else{

                        }

                     ?>


                    
    				
    				<!-- fin  -->

    				

				</div>
				
			</div>

			
			
		</div>

		<?php
	}

}



 ?>
