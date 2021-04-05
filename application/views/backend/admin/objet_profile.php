
<div class="col-xl-12 col-lg-12 col-md-12">
    <div class="row">
        <div class="col-md-12">

             <div class="text-center" align="center">
              <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success"><i class="fa fa-check"></i>
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                elseif ($this->session->flashdata('message2')) {
                  echo '
                    <div class="alert alert-danger"><i class="fa fa-question"></i>
                        '.$this->session->flashdata("message2").'
                    </div>
                    ';
                }
                else{

                }
                ?>
            </div>
            
        </div>

    	<div class="col-md-6">
    		<div class="text-center">
    			 <img src="<?= base_url()?>upload/photo/<?php echo($image) ?>" class="img img-responsive img-circle rounded" alt="" style="width: 50%; height: 50%;">
    		</div>
    		<div class="col-md-12">
    			<small class="text-muted">Nom: </small>
                <p><?php echo($first_name) ?></p>

                <small class="text-muted">Postnom: </small>
                <p>
                    <?php echo($last_name) ?>
                </p>

                <small class="text-muted">Email: </small>
            	<p><?php echo($email) ?></p>

                
                
        	</div>
    	</div>
        
        <div class="col-md-6">
           

            <small class="text-muted">Biographie: </small>
            <div>
                <?php echo($biographie) ?>
            </div>
            
            
            <hr>
            <small class="text-muted">Adresse mail: </small> <font class="text-info"><?php echo($email) ?></font>
              <hr>                          
            
            <small class="text-muted">Mobile: </small>
            <?php echo($telephone) ?>
            <hr>
            <small class="text-muted">Date d'anniversaire: </small>
            <p class="m-b-0"><?php echo($date_nais) ?></p>
            <hr>
            <small class="text-muted">Social: </small>
            <p><a href="<?php echo($twitter) ?>" target="_blank"><i class="fa fa-twitter m-r-5"></i> twitter.com</a></p>
            <p><a href="<?php echo($facebook) ?>" target="_blank"><i class="fa fa-facebook m-r-5"></i> facebook.com</a> </p>
            <p><a href="<?php echo($linkedin) ?>" target="_blank"><i class="fa fa-linkedin m-r-5"></i> linkedin.com</a> </p>
        </div>

        <div class="col-md-12"> 

            <!-- <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fpermalink.php%3Fstory_fbid%3D135037915289877%26id%3D114107447382924%26substory_index%3D0&width=500&show_text=true&appId=301499887887474&height=583" width="500" height="583" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->

             <!-- facebook  -->

           <!--  <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0&appId=301499887887474&autoLogAppEvents=1" nonce="zBiQNdvU"></script> -->
            <!-- fin -->

            <!-- <div class="fb-comments" data-href="https://web.facebook.com/photo?fbid=990790031443281&amp;set=a.104826010039692" data-width="" data-numposts="5"></div> -->
        </div>

       


    </div>
</div>
