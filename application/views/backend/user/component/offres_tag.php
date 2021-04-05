<!-- mon templete de tout! -->
<div class="profiletimeline mt-0">

	<?php 
	$link_postuler = '';
	$opera_job ='';

	$connected_user = $this->session->userdata('id');



	if ($MESOFFRES->num_rows() <= 0) {
		# code...
	}
	else{

		foreach ($MESOFFRES->result_array() as $row) {

		  if ($idrole == 1) {
		  	$url_post = base_url()."user/nouveau_job/".$row['codejob'];
		  	$link_postuler = ' <a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
		  	 <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		  	';
		  }
		  elseif ($idrole == 2) {
		  	$url_post = base_url()."user/nouveau_job/".$row['codejob'];
		  	$link_postuler = ' <a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
		  	<a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		  	';
		  }
		  elseif ($idrole == 3) {
		  	$url_post = base_url()."user/nouveau_job/".$row['codejob'];
		  	$link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>

		  	<a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		  	';
		  }
		  elseif ($idrole == 4) {
		  	$url_post = base_url()."user/nouveau_job/".$row['codejob'];
		  	$link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
		  	
		  	<a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		  	';
		  }
		  else{

		  }

		  if ($row['ceo'] == $connected_user) {

		  	$url_post = base_url()."user/edit_new_job/".$row['codejob'];

		  	$opera_job = '

		  				<a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                        	<i class="fa fa-edit"></i></a>
		  	';
		  }
		  else{
		  	$opera_job = '';

		  }

		  $count_candidat;
		  $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
		  if ($likes->num_rows() > 0) {
		  	foreach ($likes->result_array() as $key_val) {
		  		$count_candidat = $key_val['nombre'];
		  	}
		  }
		  else{
		  	$count_candidat = 0;
		  }


		  ?>
		  <!-- bloc -->
		    <div class="sl-item">
		        <div class="sl-left"> <img src="<?php echo(base_url()) ?>upload/tbl_info/logo.png" alt="user" class="rounded-circle" /> </div>
		        <div class="sl-right">
		            <div> <a href="javascript:void(0)" class="link"><?php echo($row['nom']) ?></a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> <?php echo(nl2br(substr(date(DATE_RFC822, strtotime($row['date_fin_depot'])), 0, 23))) ?>  </span>
		                <div class="mt-20 row">
		                    <div class="col-md-3 col-xs-12"><img src="<?php echo(base_url()) ?>upload/photo/<?php echo($row['logo']) ?>" alt="user" class="img-fluid rounded" /></div>
		                    <div class="col-md-9 col-xs-12">
		                    	<strong>
		                    		<span class="text-primary">
		                    			<?php echo($row['nomcat']) ?> -
		                    		</span>
		                    		<?php echo($row['titre']) ?>
		                    	</strong>

		                        <p> <?php echo(nl2br(substr($row['description_job'], 0,200))) ?>  ... </p> 

		                        <?php echo($link_postuler) ?>

		                        <?php echo($opera_job) ?>
		                        

		                    
		                    </div>
		                </div>
		                <div class="like-comm mt-20"> 


		                    
		                    <a href="javascript:void(0);" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> <?php echo($count_candidat) ?> canditat(s)</a> 
		                </div>
		            </div>
		        </div>
		    </div>
		    <hr>
		    <!-- fin bloc -->
		  <?php



		}
	}



	 ?>
    
    
    
</div>
<!-- jolie templete -->