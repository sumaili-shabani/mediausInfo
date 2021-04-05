<?php 
                  
    $chart_data = '';
    $chart_data2 = '';

    $detail3 = $this->db->query("SELECT COUNT(nom_cat) AS nombre, nom_cat FROM profile_article GROUP BY nom_cat");
    
    if ($detail3->num_rows() > 0) {
            foreach ($detail3->result_array() as $key) {
            	$label = $key["nombre"]." publication(s) de la catégorie ".$key["nom_cat"];
               $chart_data .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";
            }
            $chart_data = substr($chart_data, 0, -2);

            // echo($chart_data);
    }
    else{

    }

    $detail4 = $this->db->query("SELECT COUNT(type) AS nombre, type FROM profile_article GROUP BY type");
    if ($detail4->num_rows() > 0) {
            foreach ($detail4->result_array() as $key) {
            	$label2 = $key["nombre"]." publication(s) de type ".$key["type"];
               $chart_data2 .= "{ indexLabel:'".$label2."', y:".$key["nombre"]."}, ";
            }
            $chart_data2 = substr($chart_data2, 0, -2);

            // echo($chart_data);
    }
    else{

    }


?>

<?php

  $message;
  $debit_event;
  $fin_event;
  $evenement=$this->db->get('evenement');
  if ($evenement->num_rows() > 0) {
    foreach ($evenement->result_array() as $row) {
      $message = $row['message'];
      $debit_event = $row['debit_event'];
      $fin_event = $row['fin_event'];
       $json[] = array(
            'title' => $message,
            'start' => $debit_event,
            'end' => $fin_event,
            'className' => 'bg-info' 
        );

    // var_dump($json);

    }
  }
  else{

        $json[] = array(
            'title'      => '',
            'start'      => '',
            'end'        => '',
            'className'  => 'bg-info' 
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
												<!-- bloc 1 -->

												<!-- debut formulaire -->

								                <div class="col-lg-4 col-md-6 col-sm-12">
								                    <div class="widget">
								                        <div class="widget-body">
								                            <div class="d-flex justify-content-between align-items-center">
								                                <div class="state">
								                                    <h6>Nombre Total des utilisateurs actifs sur la plateforme</h6>
								                                    <h2><?php echo($nombre_users); ?></h2>

								                                    <div class="overlay">
								                                        <i class="ik ik-users loading"></i>
								                                    </div>
								                                </div>
								                                <div class="icon">
								                                    <i class="ik ik-users"></i>
								                                </div>
								                            </div>
								                            <small class="text-small mt-10 d-block">MembreS Actifs au système</small>
								                        </div>
								                        <div class="progress progress-sm">
								                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
								                        </div>
								                    </div>
								                </div>

								                <!-- fin du formulaire -->

								                <!-- debut formulaire -->

								                <div class="col-lg-4 col-md-6 col-sm-12">
								                    <div class="widget">
								                        <div class="widget-body">

								                            <div class="d-flex justify-content-between align-items-center">
								                                <div class="state">
								                                    <h6>Nombre Total des articles actifs sur la plateforme</h6>
								                                    <h2><?php echo($nombre_article); ?></h2>
								                                    <div class="overlay">
								                                        <i class="ik ik-refresh-ccw loading"></i>
								                                    </div>
								                                </div>
								                                <div class="icon">
								                                    <i class="ik ik-award"></i>
								                                </div>
								                            </div>
								                            <small class="text-small mt-10 d-block">Actifs au système</small>
								                        </div>
								                        <div class="progress progress-sm">
								                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
								                        </div>
								                    </div>
								                </div>
								                <!-- fin du formulaire -->

								                <!-- debut formulaire -->
								                <div class="col-lg-4 col-md-6 col-sm-12">
								                    <div class="widget">
								                        <div class="widget-body">
								                            <div class="d-flex justify-content-between align-items-center">
								                                <div class="state">
								                                    <h6>Nombre Total des articles  en attente d'activation</h6>
								                                    <h2><?php echo($nombre_padding_article); ?></h2>
								                                    <div class="overlay">
								                                        <i class="ik ik-box loading"></i>
								                                    </div>
								                                </div>
								                                <div class="icon">
								                                    <i class="ik ik-box"></i>
								                                </div>
								                            </div>
								                            <small class="text-small mt-10 d-block">Actifs au système</small>
								                        </div>
								                        <div class="progress progress-sm">
								                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
								                        </div>
								                    </div>
								                </div>

								                <!-- fin du formulaire -->

												
											</div>
										</div>

										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6 mb-2" style="margin-top: 10px;">
													<div class="card">
														<div class="card-header text-center">
															Statistiques des publication d'articles par rapport à leurs catégories
														</div>
														<div class="card-body">
															<div id="chartContainer" style="height: 200px; width: 100%;"></div>
														</div>
													</div>
												</div>

												<div class="col-md-6" style="margin-top: 10px;">
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
         $(document).ready(function(){
              "use strict";
              $('#calendar').fullCalendar({
                  defaultView: 'month',

                  header: {
                      left: 'title', // you can add today btn
                      center: '',
                      right: 'month, agendaWeek, listWeek, prev, next', // you can add agendaDay btn
                  },
                  contentHeight: 'auto',
                  defaultDate: '<?= date('Y-m-d'); ?>',
                  editable: true,
                  droppable: false, // this allows things to be dropped onto the calendar
                  eventLimit: false, // allow "more" link when too many events
                      
                  events: <?= json_encode($json); ?>
              });
            });
     </script>
        
        
    </body>
</html>
