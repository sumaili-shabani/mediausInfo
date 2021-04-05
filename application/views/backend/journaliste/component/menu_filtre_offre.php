<div class="col-md-12">
	

	<!-- formulaire recherche -->
	<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                    <div class="card-body col-md-12" id="prefetch">

                        <div class="input-group mb-2 mr-sm-2">
                            
                            <input type="text" class="form-control typeahead search_text" id="inlineFormInputGroupUsername2" placeholder="Rechecher un candidat...">
                            
                        </div>
                        
                    </div>
               </div>
            </div>
        </div>
    </div>
    <!-- fin recherche -->

    <h6>Filtrer les candidats par:</h6>
	<hr>


	<h5 class="text-center">Catégorie de l'offre*</h5>
	<hr>

	<div class="col-md-12">
		<?php
		 if ($cat_category->num_rows() > 0) {
		 	foreach ($cat_category->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" idcat="<?php echo($key['idcat']) ?>" class="idcat">
		 			<a href="javascript:void(0);" class="idcat" idcat="<?php echo($key['idcat']) ?>"><?php echo($key['nomcat']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>


	<h5 class="text-center">Type de contrat*</h5>
	<hr>
	<div class="col-md-12">
		<?php
		 if ($cat_contrat->num_rows() > 0) {
		 	foreach ($cat_contrat->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" idcontrat="<?php echo($key['idcontrat']) ?>" class="idcontrat">
		 			<a href="javascript:void(0);" class="idcontrat" idcontrat="<?php echo($key['idcontrat']) ?>"><?php echo($key['nomc']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>

	<h5 class="text-center">Type de salaire*</h5>
	<hr>
	<div class="col-md-12">
		<?php
		 if ($cat_salaire->num_rows() > 0) {
		 	foreach ($cat_salaire->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" idsalaire="<?php echo($key['idsalaire']) ?>" class="idsalaire">
		 			<a href="javascript:void(0);" class="idsalaire" idsalaire="<?php echo($key['idsalaire']) ?>"><?php echo($key['nomsalaire']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>

	<h5 class="text-center">Niveau d'étude*</h5>
	<hr>

	<div class="col-md-12">
		<?php
		 if ($cat_qualification->num_rows() > 0) {
		 	foreach ($cat_qualification->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" qualification="<?php echo($key['qualification']) ?>" class="qualification">
		 			<a href="javascript:void(0);" class="qualification" qualification="<?php echo($key['qualification']) ?>"><?php echo($key['qualification']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>
</div>