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
                            <div class="col-md-12 text-center">
                                <div class="text-center">
                                    <a href="<?php echo base_url(); ?>"><img src="<?php echo($icone_info) ?>" alt="" style="width: 150px; height: 60px;"></a>
                                </div>
                                <h3>Connexion et authentification</h3>
                                <p>Connectez-vous à votre compte</p>

                            </div>
                            
                            <form method="post" action="<?php echo base_url(); ?>login/validation" style="font-size: 12px;">

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
                                   <input type="text" name="user_email" class="form-control form-control-lg" id="default-01" placeholder="E-mail ou nom d'utilisateur">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                     
	                                <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Entez votre mot de passe">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Souviens-toi de moi</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="<?php echo(base_url()) ?>login/forgot">Mot de passe oublié?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-secondary">Se connecter</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Nouveau sur notre plateforme?  <a href="<?php echo(base_url()) ?>login/register">Inscrivez-vous ici</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include '_script.php'; ?>
    </body>
</html>
