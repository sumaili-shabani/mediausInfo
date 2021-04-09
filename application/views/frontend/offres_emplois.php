<?php ?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from preview.colorlib.com/theme/magnews2/blog-list-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 20:02:03 GMT -->

<head>
    <?php include('_meta2.php') ?>
</head>

<body class="animsition">
    <!-- Header -->
   <?php include('_menu_header.php') ?>
    <!-- Breadcrumb -->
    
    
    <section class="bg0 p-b-55">
        <div class="container">
            <div class="row justify-content-center">

            	<!-- section on -->
                <div class="col-md-10 col-lg-3" style="margin-top: 10px;">
                    <?php include('component/menu_filtre_offre.php') ?>
                </div>
                <!-- fin section -->
                
                <!-- section on -->
                <div class="col-md-10 col-lg-6" style="margin-top: 10px;">
                   
                    <div class="col-md-12">
      					<div class="row afficher_liste">
                		   <!-- blog -->
  						    
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
                <!-- fin section -->


                <div class="col-md-10 col-lg-3 p-b-80" style="margin-top: 10px;">
                    <?php include('component/_pubEmplois.php') ?>
                </div>
                

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('_footer.php') ?>
    <!-- fin footer -->

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>
    <!--===============================================================================================-->
    <?php include('_script2.php') ?>


     <script type="text/javascript">
        $(document).ready(function() {
             function load_country_data2(page)
             {
              $.ajax({
               url:"<?php echo base_url(); ?>home/pagination_offresEmploi_liste/"+page,
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
                   url:"<?php echo base_url(); ?>home/fetch_search_offresEmploi_pagination",
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
                url:"<?php echo base_url(); ?>home/show_offres_by_categorie",
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
                url:"<?php echo base_url(); ?>home/show_offres_by_contrat",
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
                url:"<?php echo base_url(); ?>home/show_offres_by_salaire",
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
                url:"<?php echo base_url(); ?>home/show_offres_by_qualification",
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


    <script type="text/javascript">
      $(document).ready(function(){
        var sample_data = new Bloodhound({
         datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
         queryTokenizer: Bloodhound.tokenizers.whitespace,
         prefetch:'<?php echo base_url(); ?>home/fetch_auto_offres',
         remote:{
          url:'<?php echo base_url(); ?>home/fetch_auto_offres/%QUERY',
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

<!-- Mirrored from preview.colorlib.com/theme/magnews2/blog-list-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 20:02:10 GMT -->

</html>