 <?php

 $first_name;
 $last_name;
 $email;
 $image;
 $telephone;
 $full_adresse;
 $biographie;
 $date_nais;
 $passwords;
 $idrole;

 $facebook;
 $linkedin;
 $twitter ;

 $university;
 $faculte;
 $option ;
 $sexe;
 $photo;

 $idp;
 $idv;
 $cv;

 $nompays;
 $nomp;
 $nomv;

 $id_user;
 $connected_user = $this->session->userdata('entreprise_login');


 foreach ($users as $row) {
  $id_user    = $row["id"];
  $first_name   = $row["first_name"];
  $last_name    = $row["last_name"];
  $email      = $row["email"];
  $image      = $row["image"];
  $telephone    = $row["telephone"];
  $full_adresse = $row["full_adresse"];
  $biographie   = $row["biographie"];
  $date_nais    = $row["date_nais"];
  $passwords    = $row["passwords"];
  $idrole       = $row["idrole"];
  $sexe       = $row["sexe"];

  $facebook     = $row["facebook"];
  $linkedin     = $row["linkedin"];
  $twitter      = $row["twitter"];

  $idp      = $row["idp"];
  $idv      = $row["idv"];

  $cv      = $row["cv"];

  $usT = $this->db->get_where('profile_candidat', array(
    'id'  =>  $row["id"]
  ));

  if ($usT->num_rows() > 0 ) {
    # code...
    foreach ($usT->result_array() as $key) {
       $nompays      = $key["nompays"];
       $nomp      = $key["nomp"];
       $nomv      = $key["nomv"];
    }
  }
  else{

  	 $nompays= "";
     $nomp   = "";
     $nomv   = "";
  }


  
 }

$identrepE;
$ceoE;
$descriptionE;
$nomE;
$idPaysE;
$idcatE;

$typeEntrepE;
$idpE;
$idvE;
$nombreEmployeE;
$sitewebE;
$facebookE;
$twitterE;
$linkedinE;
$logoE;

$nompaysE;
$nompE;
$nomvE;
$nomcatE;
foreach ($my_entrep->result_array() as $key) {

	$ceoE  = $key['ceo'];
	$identrepE  = $key['identrep'];
	$idcatE =$key['idcat'];
	$descriptionE  = $key['description'];
	$nomE  = $key['nom'];
	$idPaysE  = $key['idPays'];
	$typeEntrepE  = $key['typeEntrep'];
	$idpE  = $key['idp'];
	$idvE  = $key['idv'];
	$nombreEmployeE  = $key['nombreEmploye'];
	$sitewebE  = $key['siteweb'];
	$facebookE  = $key['facebook'];
	$twitterE  = $key['twitter'];
	$linkedinE  = $key['linkedin'];
	$logoE  = $key['logo'];

	  $usEntre = $this->db->get_where('profile_entreprise', array(
	    'ceo'  =>  $ceoE
	  ));

	  if ($usEntre->num_rows() > 0 ) {
	    # code...
	    foreach ($usEntre->result_array() as $key3) {
	       $nompaysE    = $key3["nompays"];
	       $nompE       = $key3["nomp"];
	       $nomvE       = $key3["nomv"];
	       $nomcatE 	= $key3["nomcat"];
	    }
	  }
	  else{

	  	 $nompaysE = "";
	     $nompE   = "";
	     $nomvE   = "";
	     $nomcatE = "";
	  }


}








 ?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php include('_meta.php') ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <!-- menu header -->
            <?php include('_menuheader.php') ?>
            <!-- fin menu header -->

            <div class="page-wrap">
                <!-- navigation -->
                <?php include('_navigation.php') ?>
                <!-- fin navigation -->
                <div class="main-content">
                    <div class="container-fluid">
                        <!-- page header -->
                        <?php include('_page_header.php') ?>
                        <!-- fin de la page header -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                   
                                    <div class="card-block">

                                    	<!-- mes scripts commencent -->
                                    	<?php //include('objet_profile.php') ?>

                                      <?php include('my_profile_entrep.php') ?>

                                      



                                    	<!-- fin de mes scripts -->
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
               
               	<!-- my chat -->
               	<?php include('_my_chat.php') ?>
               	<!-- fin mychat -->

                <!-- chat formullaire -->
                <?php include('__app_chat.php') ?>
                <!-- fin chat -->

                <?php include('_footer.php') ?>
                
            </div>
        </div>


        

        <?php include('_app_modal.php') ?>

        <?php include('_script.php') ?>


   

        <script type="text/javascript">
          $(document).ready(function(){

            $(document).on('change', '#user_image', function(event) {
              event.preventDefault();
              /* Act on the event */

                var extension   = $('#user_image').val().split('.').pop().toLowerCase(); 
                if(extension != '' )  
                {  
                      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                      {   

                          event.preventDefault(); 
                           var erreur = "type d'Image invalide";
                           showErrrorMessage(erreur);  
                           $('#user_image').val('');  
                           return false;  
                      }  
                }


            });


            $(document).on('change', '#user_image2', function(event) {
              event.preventDefault();
              /* Act on the event */

              var extension2   = $('#user_image2').val().split('.').pop().toLowerCase();

              if(extension2 != '' )  
              {  
                    if(jQuery.inArray(extension2, ['pdf']) == -1)  
                    {   

                        event.preventDefault(); 
                         var erreur = "Votre cv doit être de l'extension PDF";
                         showErrrorMessage(erreur);  
                         $('#user_image2').val('');  
                         return false;  
                    }  
              }


            });

            

            $(document).on('change', '#id_province', function(){
            
                var country_id = $(this).val();

                if(country_id != '')
                {
                  // alert(country_id);
                   $.ajax({
                      url:"<?php echo base_url(); ?>entreprise/fetch_ville_requete",
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
                   $('#id_province').html('<option value="">Selectionner une province</option>');

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
