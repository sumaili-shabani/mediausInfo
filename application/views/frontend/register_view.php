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
                        <!-- <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="<?php echo base_url(); ?>"><img src="<?php echo($icone_info) ?>" alt=""></a>
                            </div>
                            <h3>Création de compte</h3>
                            <p>Créer un nouveau compte dans notre système </p>
                            <form method="post" action="<?= base_url(); ?>login/register_validation" style="font-size: 12px;">

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
                                     
	                                <input type="text" name="first_name" class="form-control form-control-lg" id="first_name" placeholder="Entrez votre nom" required="">
                                    <i class="ik ik-user"></i>
                                </div>

                                <div class="form-group">
                                   <input type="text" name="mail_ok" class="form-control form-control-lg" id="default-01" placeholder="E-mail ou nom d'utilisateur" required>
                                    <i class="ik ik-mail"></i>
                                </div>
                                <div class="form-group">
                                     
	                                <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Entez votre mot de passe" required>
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1" required>
                                            <span class="custom-control-label">&nbsp;<a href="javascript:void(0);">J'accepte Politique de confidentialité</a></span>
                                        </label>
                                    </div>
                                    
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-secondary">S'enregistrer</button>
                                </div>
                            </form>
                            <div class="register">
                                <p>Vous avez déjà un compte ? <a href="<?php echo(base_url()) ?>login">S'identifier</a></p>
                            </div>
                        </div> -->
                        <?php include('inscription.php') ?>
                    </div>
                </div>
            </div>
        </div>
        

        <?php include '_script.php'; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('change', '#id_province', function(){
            
                    var country_id = $(this).val();

                    if(country_id != '')
                    {
                      // alert(country_id);
                       $.ajax({
                          url:"<?php echo base_url(); ?>login/fetch_ville_requete",
                          method:"POST",
                          data:{idp:country_id},
                          success:function(data)
                          {
                             $('#id_ville').html(data);
                             $('#idp').val(country_id);
                          }
                       });
                    }
                    else
                    {

                       showErrrorMessage("veillez selectionner la province");

                    }
                    // alert(idv);
                  });

                $(document).on('change', '#id_ville', function(){
                
                    var id_ville = $(this).val();

                    if(id_ville != '')
                    {

                      $('#idv').val(id_ville);
                      
                    }
                    else
                    {
                       showErrrorMessage("veillez selectionner la ville");

                    }
                    // alert(idv);
                  });


                const showErrrorMessage = function(erreur) {
                  'use strict';
                  resetToastPosition();
                  $.toast({
                    heading: 'Danger',
                    text: erreur,
                    showHideTransition: 'slide',
                    icon: 'error',
                    loaderBg: '#f2a654',
                    position: 'top-right'
                  })
                };

                const showSuccessMessage = function(message) {
                  'use strict';
                  resetToastPosition();
                  $.toast({
                    heading: 'Success',
                    text: message,
                    showHideTransition: 'slide',
                    icon: 'success',
                    loaderBg: '#f96868',
                    position: 'top-right'
                  })
                };

            });
        </script>
    </body>
</html>
