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


<?php

  $today = date('Y-m-d');

  $nombre_jrs;
 
  $debit_event;
  $fin_event;
  $connected = $this->session->userdata('entreprise_login');
  $this->db->where('id', $connected);
  $evenement=$this->db->get('users');
  if ($evenement->num_rows() > 0) {
    foreach ($evenement->result_array() as $row) {
      $fin_event = $row['fin_event'];


      $test = $this->db->query("SELECT DATEDIFF('".$fin_event."', '".$today."') AS jours FROM users WHERE id=".$connected." LIMIT 1 ");
      if ($test->num_rows() > 0) {
        # code...
        foreach ($test->result_array() as $key6) {
          $nombre_jrs = $key6['jours'];

          $bg_class='';
      
          if ($nombre_jrs <= 0) {
            $bg_class="bg-danger";
          }
          elseif ($nombre_jrs >= 1 && $nombre_jrs <=20) {
            $bg_class = "bg-primary";
          }

          elseif ($nombre_jrs >= 21 && $nombre_jrs <=31) {
            $bg_class = "bg-success";
          }
          else{
            $bg_class = "bg-purple";
          }

          // $nombre_jrs = 66;
        }
      }
      else{
        $nombre_jrs = 0;
      }

      
      
      
      $message ="nombre de jours qui reste pour l'expiration 
      de contrat est ".$nombre_jrs." jour(s) prière de payer la cotion afin de béneficier plus sur nos services";

      $debit_event = $row['debit_event'];
      $fin_event = $row['fin_event'];
       $json[] = array(
            'title'     => "Bonjour ".$first_name.' '.$last_name.' '.$message,
            'start'     => $debit_event,
            'end'       => $fin_event,
            'className' => $bg_class,
            'url'       => 'javascript:void(0);'  
        );

    // var_dump($json);

    }
  }
  else{

        $json[] = array(
            'title'      => "nombre de jours qui reste pour l'expiration de contrat",
            'start'      => date('Y-m-d'),
            'end'        => date('Y-m-d'),
            'className'  => 'bg-purple',
            'url'        => 'javascript:void(0);' 
        );





  }


?>

<!DOCTYPE html>
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
                                    	
                                      <?php include('operation.php') ?>

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


            $(document).on('change', '.motif', function(){
            
                var motif = $(this).val();

                if(motif != '')
                {
                  // alert(country_id);
                  if (motif =="m-pesa") {
                    $('.vodacom').show();
                    $('.airtel').hide();
                  }
                  else if (motif =="airtel money") {
                    $('.vodacom').hide();
                    $('.airtel').show();
                  }
                  else{
                    $('.vodacom').show();
                    $('.airtel').hide();
                  }
                }
                else
                {
                   
                   showErrrorMessage("veillez selectionner un module de paiement m-pesa ou airtel-money");

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
