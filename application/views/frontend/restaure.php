<!doctype html>
<html class="no-js" lang="en">
    <head>
       <?php include('_meta.php'); ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?= base_url('js/dev/img/auth/login-bg.jpg')?>')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="text-center">
                                <a href="<?php echo base_url(); ?>"><img src="<?php echo($icone_info) ?>" alt="" style="width: 150px; height: 60px;"></a>
                            </div>
                            <h3>Reinitialisation de mot de passe</h3>
                            <p>vous êtes au bout de réunitialisation de mot de passe; prière d'entrer les bonnes bonnes informations secretes.</p>
                            <form method="post" action="<?php echo base_url(); ?>login/recupere_passe_word" style="font-size: 12px;">

                            	<div class="form-group">
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

                                <div class="form-group">
                                  <input type="password" name="user_password" class="form-control form-control-lg" id="default-01" placeholder="Nouveau mot de passe">
                                    <i class="ik ik-log"></i>
                                </div>

                                <div class="form-group">
                                  <input type="password" name="user_password2" class="form-control form-control-lg" id="default-01" placeholder="Confirmer votre mot de passe">
                                    <i class="ik ik-log"></i>
                                </div>

                                <div class="form-group">
										                               
						            <input class="form-control" type="hidden"  name="email" id="email" value="<?php echo($email) ?>">

						            <input class="form-control" type="hidden"  name="verification_key" id="verification_key" value="<?php echo($verification_key) ?>">

						            <span class="text-danger"><?php echo form_error('email'); ?></span>
						        </div>
                                
                                
                                <div class="sign-btn text-center">
                                    <button class="btn btn-secondary">Restaurer mon mot de passe</button>
                                </div>
                            </form>
                            <div class="register">
                                <p> <a href="<?php echo(base_url()) ?>login">Revenir à la page de connexion</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include '_script.php'; ?>
    </body>
</html>
