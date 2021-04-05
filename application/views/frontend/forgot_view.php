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
                            <h3>Recupération mot de passe</h3>
                            <p>Si vous avez oublié votre mot de passe, nous vous enverrons par e-mail des instructions pour réinitialiser votre mot de passe.</p>
                            <form method="post" action="<?php echo base_url(); ?>login/recuperaion_password" style="font-size: 12px;">

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
                                   <input type="text" name="user_email" class="form-control form-control-lg" id="default-01" placeholder="Entrez votre adresse E-mail">
                                    <i class="ik ik-mail"></i>
                                </div>
                                
                                
                                <div class="sign-btn text-center">
                                    <button class="btn btn-secondary">Envoyer le lien de reunitialisation</button>
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
