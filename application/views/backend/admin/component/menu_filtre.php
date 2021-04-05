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


	<h5 class="text-center">Sexe*</h5>
	<hr>

	<div class="col-md-12">
		<?php
		 if ($cat_sexe->num_rows() > 0) {
		 	foreach ($cat_sexe->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" sexe="<?php echo($key['sexe']) ?>" class="sexe">
		 			<a href="javascript:void(0);" class="sexe" sexe="<?php echo($key['sexe']) ?>"><?php echo($key['sexe']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>


	<h5 class="text-center">Provinces*</h5>
	<hr>
	<div class="col-md-12">
		<?php
		 if ($cat_province->num_rows() > 0) {
		 	foreach ($cat_province->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" idp="<?php echo($key['idp']) ?>" class="idp">
		 			<a href="javascript:void(0);" class="idp" idp="<?php echo($key['idp']) ?>"><?php echo($key['nomp']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>

	<h5 class="text-center">Villes*</h5>
	<hr>

	<div class="col-md-12">
		<?php
		 if ($cat_ville->num_rows() > 0) {
		 	foreach ($cat_ville->result_array() as $key) {
		 		?>
		 		<div class="col-md-12">
		 			<input type="checkbox" name="choix" idv="<?php echo($key['idv']) ?>" class="idv">
		 			<a href="javascript:void(0);" class="idv" idv="<?php echo($key['idv']) ?>"><?php echo($key['nomv']) ?></a>
		 		</div>
		 		<?php
		 	}
		 } 

		 ?>
	</div>
</div>