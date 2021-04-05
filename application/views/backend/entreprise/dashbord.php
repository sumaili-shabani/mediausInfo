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

<?php

  $today = date('Y-m-d');
 
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
                                    	<div class="col-md-12">
                  											<div class="row">
                  												

                  												<div class="col-md-12" style="margin-top: 10px;">
                  													<div class="card">
                  														<div class="card-header text-center">
                  															Programme et statistique du jour
                  														</div>
                  														<div class="card-body">

                  															<div id="calendar"></div>
                  														</div>
                  													</div>
                  													 
                  												</div>
                  											</div>
                  										</div>
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
	 	var chart = new CanvasJS.Chart("chartContainer", {
	        theme: "theme2",
	        animationEnabled: true,
	        title: {
	            text: ""
	        },
	        data: [
	        {
	            type: "pie",                
	            dataPoints: [<?php echo $chart_data; ?>]
	        }
	        ]
	    });
	    chart.render();

	    var chart = new CanvasJS.Chart("chartContainer2", {
	        theme: "theme2",
	        animationEnabled: true,
	        title: {
	            text: ""
	        },
	        data: [
	        {
	            type: "line",                
	            dataPoints: [<?php echo $chart_data; ?>]
	        }
	        ]
	    });
	    chart.render();
	 </script>

    

     <script type="text/javascript">
       $(document).ready(function(t, e, i) {
        
       
        $("#calendar").fullCalendar({
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            buttonText: {
                today: "today",
                month: "month",
                week: "week",
                day: "day"
            },
            events: <?= json_encode($json); ?>,
            editable: 0,
            selectable: 0,
            droppable: 0,
            
            

            
        });
        
        
        

    })
     </script>
        
        
    </body>
</html>
