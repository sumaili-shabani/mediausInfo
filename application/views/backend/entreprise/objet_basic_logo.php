<div class="col-md-12">

	<!-- form commence -->
	<form method="post" id="user_form" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/modification_photo_entreprise">

													
    	<div class="row">

    		<div class="col-md-12">
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
    			<label class="label-control"><i class="fa fa-camera"></i> Changer le logo de votre entreprise</label>
       
        		<input type="file" name="user_image" id="user_image" class="form-control" placeholder="selectionner une photo">
    		</div>

            <!-- <div class="col-md-12">
                <label class="label-control"><i class="fa fa-file-o"></i> Changer votre CV</label>
       
                <input type="file" name="user_image2" id="user_image2" class="form-control" placeholder="selectionner votre cv">
            </div> -->
    		<div class="col-md-12" style="margin-top: 5px;">

        		<input type="submit" name="action" id="action" class="btn btn-secondary btn-round btn-block" value="modifier le logo de l'entreprise" />
    		</div>
    	</div>

    </form>
	<!-- fin forme -->
	
</div>