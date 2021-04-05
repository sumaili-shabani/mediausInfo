<script>window.jQuery || document.write('<script src="<?= base_url('js/dev/src/js/vendor/jquery-3.3.1.min.js')?>"><\/script>')</script>
<script src="<?= base_url('js/dev/plugins/popper.js/dist/umd/popper.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/screenfull/dist/screenfull.js')?>"></script>


<script src="<?= base_url('js/dev/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/jvectormap/jquery-jvectormap.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/moment/moment.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/d3/dist/d3.min.js')?>"></script>
<script src="<?= base_url('js/dev/plugins/c3/c3.min.js')?>"></script>
<script src="<?= base_url('js/dev/js/tables.js')?>"></script>
<script src="<?= base_url('js/dev/js/widgets.js')?>"></script>
<script src="<?= base_url('js/dev/js/charts.js')?>"></script>

<script src="<?= base_url('js/dev/plugins/jquery-toast-plugin/dist/jquery.toast.min.js')?>"></script>



<script src="<?= base_url('js/dev/dist/js/theme.js')?>"></script>
<script src="<?= base_url('js/dev/js/alerts.js')?>"></script>

<script src="<?= base_url('js/dev/js/layouts.js')?>"></script>


<!-- auto complete search box -->
<script src="<?= base_url('js/bootstrap3-typeahead.min.js')?>"></script>
<script src="<?= base_url('js/handlebars.js')?>"></script>
<script src="<?= base_url('js/typeahead.bundle.js')?>"></script>
<!-- fin -->


<!-- <script src="<?= base_url('js/dev/js/session-time-out.js')?>"></script> -->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>



<!-- mes script -->
<script type="text/javascript" src="<?php echo(base_url()) ?>js/js/canavas.js"></script>
<script type="text/javascript" src="<?php echo(base_url()) ?>js/js/stripe.js"></script>

<script src="<?php echo(base_url())?>js/assets/js/scripts.js?ver=1.4.0"></script>
<script src="<?= base_url('js/assets/js/apps/messages.js?ver=1.4.0')?>"></script>
<!-- sweetalert -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>
<!-- fin -->
<!-- script calendrier -->
<script src="<?= base_url('js/plugins/bundles/fullcalendarscripts.bundle.js')?>"></script>
<!--/ calender javascripts -->
<!-- fin -->
<script src="<?= base_url('js/plugins/summernote/summernote-bs4.min.js')?>"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote();
  })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        //alert("boom");

        var limit = 4;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit)
        {
          var output = '';
          for(var count=0; count<limit; count++)
          {
            output += '<div class="post_data">';
            output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
            output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
            output += '</div>';
          }
          $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

       setTimeout(function(){
           $('#load_data').append('');
           $('#load_data_message').html("");
        }, 500);



       function load_country_data(page)
         {
          $.ajax({
           url:"<?php echo base_url(); ?>user/pagination_users_on_to/"+page,
           method:"GET",
           dataType:"json",
            beforeSend:function()
            {
              $('.afficher_liste_chat').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
            },
           success:function(data)
           {
            $('.afficher_liste_chat').html(data.country_table);
            $('#pagination_link').html(data.pagination_link);
           }
          });
         }
         
         load_country_data(1);

         $(document).on("click", ".pagination li a", function(event){
          event.preventDefault();
          var page = $(this).data("ci-pagination-page");
          load_country_data(page);
         });


         function load_data(query)
         {
              $.ajax({
               url:"<?php echo base_url(); ?>user/fetch_search_user_follow_pagination",
               method:"POST",
               data:{query:query},
                beforeSend:function()
                {
                  $('.afficher_liste_chat').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
               success:function(data){
                $('.afficher_liste_chat').html(data);
               }
              });
          }

         $(document).on('keyup','.search_text',function(){
            var search = $(this).val();
            if(search != '')
            {
               load_data(search);
               // $('#pagination_link').html('');
            }
            else
            {
               load_country_data(1);
            }
        });

         $(document).on('click', '.voir_chat_message', function(event) {
           event.preventDefault();
           var id_recever = $(this).attr('data-id');
           var id_user = $('.id_user').val();

           /* Act on the event */
           $('.id_recever').val(id_recever);

           $('.messagerie_chat').fadeIn(500);

           show_message_local_chat(id_user, id_recever);

           // alert("id_recever: "+id_recever);

         });

          $(document).on('click', '.close_chat_message', function(event) {
           event.preventDefault();
           /* Act on the event */
           $('.messagerie_chat').fadeOut(1000);
         });

          // envois des messages
          $(document).on('submit', '.my_chat_form', function(event) {
            event.preventDefault();
            /* Act on the event */
            var id_recever = $('.id_recever').val();
            var id_user = $('.id_user').val();
            var message = $('.Message_text').val();
            var url = "<?php echo(base_url()) ?>user/chat_local_view/"+id_user+"/"+id_recever;

            if (message !='') {

              $.ajax({  
                   url:url,  
                   method:'POST',  
                   data:new FormData(this),  
                   contentType:false,  
                   processData:false,  
                   success:function(data)  
                   {  
                        $('.Message_text').val("");
                        $('.user_image').val("");
                        showSuccessMessage(data);
                        show_message_local_chat(id_user, id_recever);
                   }  
              });
            }
            else{

                var erreur = "Veillez compléter le message";
                showErrrorMessage(erreur);
            }

          });


        function show_message_local_chat(id_user, id_recever){

          if (id_user !='' && id_recever !='') {
            var url = "<?php echo(base_url()) ?>user/show_message_local_chat/"+id_user+"/"+id_recever;
                $.ajax({  
                     url:url,  
                     method:'POST',  
                     data:{
                      id_user: id_user,
                      id_recever: id_recever
                     },  
                     contentType:false,  
                     processData:false,
                     beforeSend:function()
                     {
                        $('#uploaded_images').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                     },  
                     success:function(data)  
                     {  
                          $('.afficher_messages_chat').html(data);
                     }  
                });
          }
          else{
            var erreur = "Tous les champs doivent être remplis";
            showErrrorMessage(erreur);
          }

        }

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
  $(document).ready(function() {

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
<!-- fin de mes scripts -->

<script type="text/javascript">
	$(function() {
		// alert("boom!");
	});
</script>

 <script type="text/javascript">
    $(document).ready(function(){

        $(".reponse").hide();
        $(document).on('click', '.affichier', function(event){
          event.preventDefault();
          $(this).parent().next().slideToggle();

        });

    });
  </script>



