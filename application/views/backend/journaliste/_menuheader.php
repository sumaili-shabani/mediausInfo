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
 $nom_connected;

 $id_user;
 $connected = $this->session->userdata('instuctor_login');
 $email_ok;

 $user = $this->db->get_where("users", array('id' => $connected))->result_array();


 foreach ($user as $row) {
  $photo              = $row["image"];
  $nom_connected      = $row["first_name"];
  $email_ok = $row["email"];
  
 }


  $nombre_de_notification;
  $message;
  $url_notification;
  $created_at_notification;
  $this->db->where('id_user', $connected);
  $this->db->order_by('created_at', 'desc');
  $Notifications= $this->db->get("notification");
  if ($Notifications->num_rows() > 0) {
      $nombre_de_notification = $Notifications->num_rows();

      foreach ($Notifications->result_array() as $not) {
        $message  = $not['message'];
        $url_notification   =   $not['url'];
        $created_at_notification = $not['created_at'];
        
      }

  }
  else{
  $nombre_de_notification=0;
  }

  $nombre_de_message;
  $messagerie = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT  20");
  if ($messagerie->num_rows() > 0) {
    $nombre_de_message= $messagerie->num_rows();
  }
  else{
    $nombre_de_message= 0;
  }

  

 ?>






<header class="header-top" header-theme="light">
  <div class="container-fluid">
      <div class="d-flex justify-content-between">
          <div class="top-menu d-flex align-items-center">
              <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
              <div class="header-search">
                  <div class="input-group">
                      <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                      <input type="text" class="form-control">
                      <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                  </div>
              </div>
              <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
          </div>
          <div class="top-menu d-flex align-items-center">
              <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger"><?php echo($nombre_de_notification) ?></span></a>
                  <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                      <h4 class="header">Notifications</h4>
                      <div class="notifications-wrap">

                            <?php

                             $this->db->where('id_user', $connected);
                             $this->db->order_by('created_at', 'desc');
                             $this->db->limit(5);
                             $Notifications= $this->db->get("notification");
                             if ($Notifications->num_rows() > 0) {
                              

                              foreach ($Notifications->result_array() as $not) {
                               
                                ?>

                                <a href="<?php echo(base_url()) ?><?php echo($not['url']) ?>" class="media">
                                    <span class="d-flex">
                                        <i class="<?php echo($not["icone"]) ?>"></i> 
                                    </span>
                                    <span class="media-body">
                                        <span class="heading-font-family media-heading"><?php echo($not["titre"]) ?></span> <br>
                                        <span class="media-content"><?php echo(substr($not["message"], 0,40)) ?>...</span>
                                        <p>
                                          <?php echo(substr(date(DATE_RFC822, strtotime($not['created_at'])), 0, 23)); ?>
                                        </p>
                                    </span>
                                </a>  

                                <?php
                              }

                             }
                             else{
                              $nombre_de_notification=0;
                             } 

                           ?>

                          
                         
                      </div>
                      <div class="footer"><a href="<?php echo(base_url()) ?>journaliste/notification">Voir toutes les notifications</a></div>
                  </div>
              </div>


              <!-- message  -->
              <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-message-circle"></i><span class="badge bg-secondary"><?php echo($nombre_de_message) ?></span></a>
                  <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                      <h4 class="header">Boîte de reception</h4>
                      <div class="notifications-wrap">


                        <?php
                         $nombre_de_message;
                         $message_description;
                         $created_at_message;
                         $idcours_favory;

                         $message = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT 6 ");

                         if ($message->num_rows() > 0) {
                          $nombre_de_favory = $message->num_rows();

                          foreach ($message->result_array() as $not5) {
                            
                            ?>

                            <a href="javascript:void(0);" class="media" data-id="<?php echo($not5['id_user']) ?>">
                                <span class="d-flex">
                                    <img alt="avatar" class="img img-cirle" src="<?php echo(base_url()) ?>upload/photo/<?php echo($not5['image']) ?>" style="width: 40px; height: 40px; border-radius: 60%;">
                                </span>
                                <span class="media-body">
                                    <span class="heading-font-family media-heading"><?php echo($not5['first_name']); ?> <?php echo($not5['last_name']); ?></span> <br>
                                    <span class="media-content"><?php echo(substr($not5["message"], 0,40)) ?>...</span>
                                    <p>
                                      <?php echo(substr(date(DATE_RFC822, strtotime($not5['created_at'])), 0, 23)); ?>
                                    </p>
                                </span>
                            </a> 

                            

                            <?php
                          }

                          

                         }
                         else{
                          $nombre_de_message=0;
                         } 


                       ?>

                           
                         
                      </div>
                      <div class="footer"><a href="javascript:void(0);">Voir tous les messages</a></div>
                  </div>
              </div>
              <!-- fin messages -->




              <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
              
              <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
              <div class="dropdown">
                  <a class="dropdown-toggle" href="javascript:void(0);" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="avatar" src="<?php echo(base_url()) ?>upload/photo/<?php echo($photo) ?>" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="<?php echo(base_url()) ?>journaliste/profile"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                      <a class="dropdown-item" href="<?php echo(base_url()) ?>journaliste/basic"><i class="ik ik-settings dropdown-icon"></i> Mon compte</a>
                      
                      <a class="dropdown-item" href="<?php echo(base_url()) ?>"><i class="ik ik-globe dropdown-icon"></i> Visiter le site</a>
                      <a class="dropdown-item" href="<?php echo(base_url()) ?>login/logout" onclick="return confirm('Etes-vous sûre de vouloir se déconnecter?')"><i class="ik ik-power dropdown-icon"></i> Se deconnecter</a>
                  </div>
              </div>

          </div>
      </div>
  </div>
</header>