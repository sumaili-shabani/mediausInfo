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
                                    			<div class="col-md-4">
                                    				<?php include('component/menu_filtre_offre.php') ?>
                                    				
                                    			</div>

                                    			<div class="col-md-8">
                                                    
                                    				<div class="col-md-12">
                                    					<div class="row afficher_liste">
                                                            <!-- blog -->
                                    						<!-- <div class="col-xs-6 col-lg-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-header col-md-12">
                                                                        <img class="card-img-top" src="<?php echo($icone_info) ?>" alt="Card image cap">

                                                                    </div>
                                                                    <div class="card-body">
                                                                         <div class="col-md-12 text-uppercase">
                                                                            <a href="" class="text-primary">patrona shabani sumaili</a>
                                                                            &nbsp;<a href="tel:" class="text-primary"><i class="fa fa-phone"></i></a>
                                                                        </div>
                                                                        <div class="col-md-12 list-item-heading mb-4">
                                                                            <a href="mailto:" class="text-primary"><i class="fa fa-google"></i> sumailiroger681@gmail.com</a>
                                                                            Biographie
                                                                            <p>
                                                                                <b>Sexe: </b> M
                                                                                <b>Pays: </b> RDCongo <br>
                                                                                <b>Adresse domicile:</b>
                                                                                Goma quartier mabanga sud
                                                                            </p>
                                                                        </div>
                                                                        <footer>
                                                                            <p class="text-muted text-small mb-0 font-weight-light text-center"><i class="fa fa-clock-o"></i> 09.04.2018</p>
                                                                        </footer>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- fin -->


                                    					</div>
                                    				</div>
                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-8">
                                                                <nav aria-label="Page navigation example" id="pagination_link2">
                                                              
                                                                </nav>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            
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
            $(document).ready(function() {
                 function load_country_data2(page)
                 {
                  $.ajax({
                   url:"<?php echo base_url(); ?>entreprise/pagination_offresEmploi_liste/"+page,
                   method:"GET",
                   dataType:"json",

                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                   success:function(data)
                   {
                    $('.afficher_liste').html(data.country_table);
                    $('#pagination_link2').html(data.pagination_link);
                   }
                  });
                 }
                 
                 load_country_data2(1);

                 $(document).on("click", ".pagination li a", function(event){
                  event.preventDefault();
                  var page = $(this).data("ci-pagination-page");
                  load_country_data2(page);
                 });


                 function load_data(query)
                 {
                      $.ajax({
                       url:"<?php echo base_url(); ?>entreprise/fetch_search_offresEmploi_pagination",
                       method:"POST",
                       data:{query:query},
                        beforeSend:function()
                        {
                          $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                        },
                        success:function(data){
                          $('.afficher_liste').html(data);
                        }

                      });
                  }

                 $(document).on('keyup','.search_text',function(event){
                    if (event.which == 13) {
                        var search = $(this).val();
                        if(search != '')
                        {
                           load_data(search);
                           $('#pagination_link2').html('');
                        }
                        else
                        {
                           load_country_data2(1);
                        }
                    }
                    
                });

                // categorie d'emplois
                $(document).on('click','.idcat', function(){
  
                  var idcat= $(this).attr('idcat');
                  // alert("band "+idcat);

                  $.ajax({
                    url:"<?php echo base_url(); ?>entreprise/show_offres_by_categorie",
                    method: "POST",
                    data:{
                      idcat: idcat
                    },

                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                    success: function(data){
                      $('.afficher_liste').html(data);
                    }
                  });
                  
                });

                // CONTRQT d'emplois

                $(document).on('click','.idcontrat', function(){
  
                  var idcontrat= $(this).attr('idcontrat');
                  // alert("band "+idcontrat);

                  $.ajax({
                    url:"<?php echo base_url(); ?>entreprise/show_offres_by_contrat",
                    method: "POST",
                    data:{
                      idcontrat: idcontrat
                    },

                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                    success: function(data){
                      $('.afficher_liste').html(data);
                    }
                  });
                  
                });

                // SALAIRE d'emplois

                 $(document).on('click','.idsalaire', function(){
  
                  var idsalaire= $(this).attr('idsalaire');
                  // alert("band "+idv);

                  $.ajax({
                    url:"<?php echo base_url(); ?>entreprise/show_offres_by_salaire",
                    method: "POST",
                    data:{
                      idsalaire: idsalaire
                    },

                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                    success: function(data){
                      $('.afficher_liste').html(data);
                    }
                  });
                  
                });

                 // qualification d'emplois

                 $(document).on('click','.qualification', function(){
  
                  var qualification= $(this).attr('qualification');
                  // alert("band "+idv);

                  $.ajax({
                    url:"<?php echo base_url(); ?>entreprise/show_offres_by_qualification",
                    method: "POST",
                    data:{
                      qualification: qualification
                    },

                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                    success: function(data){
                      $('.afficher_liste').html(data);
                    }
                  });
                  
                });

            });
        </script>


        <script>
        $(document).ready(function(){
          var sample_data = new Bloodhound({
           datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
           queryTokenizer: Bloodhound.tokenizers.whitespace,
           prefetch:'<?php echo base_url(); ?>entreprise/fetch_auto_offres',
           remote:{
            url:'<?php echo base_url(); ?>entreprise/fetch_auto_offres/%QUERY',
            wildcard:'%QUERY'
           }
          });
          

          $('#prefetch .typeahead').typeahead(null, {
           name: 'sample_data',
           display: 'name',
           source:sample_data,
           limit:10,
           templates:{
            suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/photo/{{image}}" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
           }
          });
        });
        </script>
        
        
    </body>
</html>
