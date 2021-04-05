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
                                    	<?php include('__dashbord.php') ?>
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
        
        
    </body>
</html>
