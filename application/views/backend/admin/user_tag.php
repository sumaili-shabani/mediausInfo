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

                                        <?php include('user_profile_user.php') ?>

                                      



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


        <!-- Modal Setup New Project -->
  <div class="modal fade new-project-modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <p class="modal-title text-center" id="exampleModalLabel">Etes-vous interessés par quoi?</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <div class="modal-body">

                  <div class="form-group">  
                         <form name="add_name" id="add_name">  
                              <div class="table-responsive">  
                                   <table class="table table-striped table-bordered" id="dynamic_field">  
                                        <tr>  
                                             <td><input type="text" name="name[]" placeholder="Entez une compétense" class="form-control name_list typeahead" /></td>  
                                             <td><button type="button" name="add" id="add" class="btn btn-success">Ajouter</button></td>  
                                        </tr>  
                                   </table>  
                                   
                                   <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                          <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
                                        </div>
                                        <div class="col-md-4"></div>
                                        
                                      </div>
                                   </div> 
                              </div>  
                         </form>  
                    </div>  
                    
                    
                </div>
          </div>
      </div>
  </div>
  <!-- feed-post-modal --> 


   <!-- Modal Setup New Project -->
  <div class="modal fade new-project-modal" id="userModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <p class="modal-title text-center" id="exampleModalLabel"></p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <div class="modal-body">

                  <div class="form-group">  
                         <form name="add_name2" id="add_name2">  
                              <div class="table-responsive">  
                                   <table class="table table-striped table-bordered" id="dynamic_field2">  
                                        <tr>  
                                             <td><input type="text" name="name[]" placeholder="Ets-vous intéressés par quoi?" class="form-control name_list typeahead" /></td>  
                                             <td><button type="button" name="add2" id="add2" class="btn btn-success">Ajouter</button></td>  
                                        </tr>  
                                   </table>  
                                   
                                   <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                          <input type="submit" name="submit2" id="submit2" class="btn btn-info" value="Submit" /> 
                                        </div>
                                        <div class="col-md-4"></div>
                                        
                                      </div>
                                   </div> 
                              </div>  
                         </form>  
                    </div>  
                    
                    
                </div>
          </div>
      </div>
  </div>
  <!-- feed-post-modal --> 


   <!-- Modal Setup New Project -->
  <div class="modal fade new-project-modal" id="userModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <p class="modal-title text-center" id="exampleModalLabel">Complètez votre parcours scolaire pour éclairesur bien votre profile candidat</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <div class="modal-body">

                  <div class="form-group">  
                         <form method="POST" action="<?php echo(base_url()) ?>user/education">  
                              <div class="col-md-12">
                                <div class="row">

                                  <div class="col-md-12">
                                      <label class="text-center"><i class="fa fa-university"></i> Nom de l'université</label>
                                  </div>
                                  <div class="form-group col-md-12 jf-inputwithicon">
                            
                            <input type="text" name="nom_univ" id="nom_univ" class="form-control" placeholder="Entez le nom de l'université ou institution supérieur" required="">
                        </div>

                        <div class="col-md-12">
                          <label class="text-center"><i class="fa fa-book"></i> Grade obtenue</label>
                      </div>

                        <div class="form-group col-md-12 jf-inputwithicon">
                            
                            <input type="text" name="gradeobtenu" id="gradeobtenu" class="form-control" placeholder="Quelle crade avez-vous obtenue sur cette université?" required="">
                          
                        </div>
                        <div class="col-md-12">
                          <label class="text-center"><i class="fa fa-map-marker"></i> Localisation</label>
                      </div>
                        <div class="form-group col-md-12 jf-inputwithicon">
                            
                            <input type="text" name="localisation" id="localisation" class="form-control" placeholder="où se situe cette université?" required="">
                          
                        </div>
                       <div class="col-md-12">
                        <label class="text-center"><i class="fa fa-calendar"></i> A quelle année avez-vous obtenu cette grade?</label>
                       </div>
                        <div class="form-group col-md-12 jf-inputwithicon">
                            
                            <input type="date" name="annee_obt" id="annee_obt" class="form-control" placeholder="A quelle année avez-vous obtenu cette grade" required="">
                          
                        </div>
                        <div class="col-md-12">
                          <label class="text-center"><i class="fa fa-book"></i> Entrez une petite description pour cette grade</label>
                      </div>
                        <div class="form-group col-md-12 jf-inputwithicon">
                      
                      <textarea class="form-control" name="description" id="description" placeholder="Entrez une petite description pour cette grade">
                        
                      </textarea>
                    </div>

                    
                                  
                                </div>
                              </div>
                          
                    </div>  
                    
                    
                </div>
                <div class="modal-footer">
                    
                      <input type="hidden" name="idedic" id="idedic" />  
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <input type="submit" name="action" id="action" class="btn btn-round btn-success" value="Add" />  
                          </div>
                          <div class="col-md-4"></div>
                        </div>
                      </div>
                     
                </div>
                </form> 
          </div>
      </div>
  </div>
  <!-- feed-post-modal --> 






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
                      url:"<?php echo base_url(); ?>user/fetch_ville_requete",
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


        <script type="text/javascript">
          $(document).ready(function(){

            


              var i=1;  
                $('#add').click(function(){  
                     i++;  
                     $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Entez une compétense" class="form-control name_list typeahead" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
                });  
                $(document).on('click', '.btn_remove', function(){  
                     var button_id = $(this).attr("id");   
                     $('#row'+button_id+'').remove();  
                });  
                $('#submit').click(function(){            
                     $.ajax({  
                          url:"<?php echo(base_url()) ?>user/add_skill",  
                          method:"POST",  
                          data:$('#add_name').serialize(),  
                          success:function(data)  
                          {  
                               showSuccessMessage(data);  
                               // swal("succès", ''+data, 'success');
                               $('#add_name')[0].reset(); 
                               $('#userModal').modal('hide');
                          }  
                     });  

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


        <script type="text/javascript">
          $(document).ready(function(){

              var i=1;  
                $('#add2').click(function(){  
                     i++;  
                     $('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Etes-vous interessés par quoi?" class="form-control name_list typeahead" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
                });  
                $(document).on('click', '.btn_remove', function(){  
                     var button_id = $(this).attr("id");   
                     $('#row'+button_id+'').remove();  
                });  
                $('#submit2').click(function(event){            
                     $.ajax({  
                          url:"<?php echo(base_url()) ?>user/add_interesse",  
                          method:"POST",  
                          data:$('#add_name2').serialize(),  
                          success:function(data)  
                          {  
                               showSuccessMessage(data);  
                               // swal("succès", ''+data, 'success');
                               $('#add_name2')[0].reset(); 
                               $('#userModal2').modal('hide');
                          }  
                     });  

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
