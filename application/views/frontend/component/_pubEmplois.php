<div class="p-l-10 p-rl-0-sr991">
   
 

    <!-- debit publicite -->
	<?php 

		if ($pub_publicite3->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($pub_publicite3->result_array() as $row) {

					?>

					<!-- phto de partainer -->
					
					<div class="flex-c-s p-b-50">
				        <a target="_blank" href="<?php echo($row['url'])?>">
				            <img class="max-w-full" src="<?php echo(base_url())?>upload/galery/<?php echo($row['image'])?>"
				                alt="IMG" style="width: 100%;">
				        </a>
				    </div>
					<!-- fin photo -->

					
					<?php
				
				# code...
			}
		}


	?>
	<!-- bublicite -->



    

    <!-- Popular Posts -->
    <div class="p-b-30" style="margin-top: 10px;">
        <div class="how2 how2-cl4 flex-s-c">
            <h3 class="f1-m-2 cl3 tab01-title">
                Nos favorites informations
            </h3>
        </div>
        <ul class="p-t-35">

        	<?php 
				if ($padding_articles->num_rows() <=0) {
					# code...
				}
				else{
					foreach ($padding_articles->result_array() as $key) {

						$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key['idart']." ");
						if ($vues->num_rows() <=0) {
							$nombre_vue2 = 0;
						}
						else{
							foreach ($vues->result_array() as $key_vue) {
								$nombre_vue2 = $key_vue['total'];
							}
						}
						
						?>


			             <li class="flex-wr-sb-s p-b-30">
			                <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="size-w-10 wrap-pic-w hov1 trans-03">
			                    <img src="<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>">
			                </a>
			                <div class="size-w-11">
			                    <h6 class="p-b-4">
			                        <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="f1-s-5 cl3 hov-cl10 trans-03">
			                            <?php echo (substr($key['nom'], 0,95)); ?> ...
			                        </a>
			                    </h6>
			                    <span class="cl8 txt-center p-b-24">
			                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
			                            <i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?> 
			                        </a>
			                        <span class="f1-s-3 m-rl-3">
			                            -
			                        </span>
			                        <span class="f1-s-3">
			                            <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?>
			                        </span>
			                    </span>
			                </div>
			            </li>
				
						<?php
					}

					
				}

			 ?>

           
        </ul>
        <hr>
    </div>


</div>