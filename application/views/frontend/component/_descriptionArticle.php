<div class="tab-pane show active" id="enter-1" role="tabpanel">
    <div class="row">

    	<?php 

		$this->db->limit(4);
		$query2  =  $this->db->get_where("profile_article", array(
			'idcat'		=>	$key['idcat']
		));
		if ($query2->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($query2->result_array() as $row) {

				$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$row['idart']." ");
				if ($vues->num_rows() <=0) {
					$nombre_vue = 0;
				}
				else{
					foreach ($vues->result_array() as $key_vue) {
						$nombre_vue = $key_vue['total'];
					}
				}

				?>
				<!-- debit bloc -->
					
				<div class="col-3">
		            <!-- Item post -->
		            <div>
		                <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="wrap-pic-w hov1 trans-03">
		                   <img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>"
		                        alt="IMG" style="height: 150px;">
		                </a>
		                <div class="p-t-10">
		                    
		                    <span class="cl8">
		                        
		                        <span class="f1-s-3 m-rl-3">
		                            <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?>  
		                        </span>
		                        <span class="f1-s-3">
		                            <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 15));?>
		                        </span>
		                    </span>
		                </div>
		            </div>
		        </div>
				<!-- fin bloc -->
				<?php

				

				?>


				
				<?php
				# code...
			}
		}


	?>


	


        
       
    </div>
</div>