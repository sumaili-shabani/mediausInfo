 <div class="row">
    <div class="col-lg-4 col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="text-center"> 
                    <img src="<?= base_url()?>upload/photo/<?php echo($image) ?>" class="rounded-circle" width="150" />
                    <h4 class="card-title mt-10"><?php echo($first_name) ?></h4>
                    <p class="card-subtitle"><?php echo($biographie) ?></p>
                    <div class="row text-center justify-content-md-center">
                        <?php 
                        if ($cv !='') {
                            ?>
                             <div class="col-8">
                                <a href="<?= base_url()?>upload/cv/<?php echo($cv) ?>" target="_blank" class="btn btn-success"><i class="ik ik-user"></i> <font class="font-medium">Parcourir son cv</font></a>
                            </div>
                            <?php
                        }

                         ?>
                       
                       
                    </div>
                </div>
            </div>
            <hr class="mb-0"> 
            <div class="card-body">

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                             <small class="text-muted d-block">Adresse mail </small>
                            <h6><?php echo($email) ?></h6> 
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted d-block pt-10">Téléphone</small>
                            <h6><a href="tel:<?php echo($telephone) ?>" class="link"><?php echo($telephone) ?></a></h6> 
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted d-block pt-10">Date de naissance</small>
                             <h6><?php echo($date_nais) ?></h6>
                        </div>

                        <div class="col-md-6">
                             <small class="text-muted d-block pt-10">Pays</small>
                             <h6><?php echo($nompays) ?></h6>
                        </div>

                        <div class="col-md-6">
                              <small class="text-muted d-block pt-10">Province</small>
                                <h6><?php echo($nomp) ?></h6>
                        </div>

                        <div class="col-md-6">
                             <small class="text-muted d-block pt-10">Ville</small>
                             <h6><?php echo($nomv) ?></h6>
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted d-block pt-30">Réseaux sociaux</small>
                            <br/>
                            <a href="<?php echo($facebook) ?>" target="_blank" class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo($twitter) ?>" target="_blank" class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo($linkedin) ?>" target="_blank" class="btn btn-icon btn-instagram"><i class="fab fa-linkedin"></i></a>
                        </div>


                    </div>
                </div> 
               
                 
                

               

                

               


                <div class="map-box">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                </div> 
               
            </div>
        </div>
    </div>



    <div class="col-lg-8 col-md-7">
        <div class="card">
            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
               
                <li class="nav-item">
                    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>

                
            </ul>
            <div class="tab-content" id="pills-tabContent">


                

                <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-6"> <strong>Nom complet</strong>
                                <br>
                                <p class="text-muted"><?php echo($first_name) ?> <?php echo($last_name) ?></p>
                            </div>
                            <div class="col-md-3 col-6"> <strong>Téléphone</strong>
                                <br>
                                <p class="text-muted"><a href="tel:<?php echo($telephone) ?>" class="link"><?php echo($telephone) ?></a></p>
                            </div>
                            <div class="col-md-3 col-6"> <strong>Adresse mail</strong>
                                <br>
                                <p class="text-muted"><a href="mailto:<?php echo($email) ?>" class="link"><?php echo($email) ?></a></p>
                            </div>
                            <div class="col-md-3 col-6"> <strong>Adresse domicile</strong>
                                <br>
                                <p class="text-muted"><?php echo($nomp) ?> <?php echo($nomv) ?></p>
                            </div>
                        </div>
                        <hr>


                       <!-- competences -->
                        <h4 class="mt-30">Education</h4>
                        <hr>
                       <?php 
                        if ($educations->num_rows() > 0) {
                            foreach ($educations->result_array() as $education) {
                                ?>
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="<?php echo(base_url()) ?>upload/tbl_info/logo.png" alt="user" class="rounded-circle" /> <time datetime="2019-04-14 20:00" class="jf-time"><?php echo(substr($education['annee_obt'], 0,30)) ?></time> </div>
                                    <div class="sl-right">
                                        <div> 
                                            <div class="mt-20 row">
                                                <div class="col-md-3 col-xs-12"><img src="<?php echo(base_url()) ?>upload/tbl_info/1187448218.jpg" alt="user" class="img-fluid rounded" /></div>
                                                <div class="col-md-9 col-xs-12">
                                                    <b>
                                                        <?php echo(substr($education['nom_univ'], 0,400)) ?>
                                                    </b>
                                                    <p> 
                                                        <a href="javascript:void(0);"><?php echo(substr($education['gradeobtenu'], 0,400)) ?></a>
                                                        <span><?php echo(substr($education['localisation'], 0,100)) ?></span>
                                                        
                                                        <?php echo(substr($education['description'], 0,300)) ?>...
                                                </p> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        }
                         ?>
                        


                        

                        <!-- competences -->
                        <h4 class="mt-30">Compétenses en:</h4>
                        <hr>

                        <?php 
                        if ($user_skills->num_rows() > 0) {
                            foreach ($user_skills->result_array() as $skills) {
                                ?>

                                <h6 class="mt-30"><?php echo(substr($skills['nomskills'], 0,300)) ?> <span class="pull-right"></span></h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only"></span> </div>
                                </div>
                                

                                <?php
                            }
                        }
                         ?>
                         <!-- fin competense -->

                         <!-- interesse -->
                        <h4 class="mt-30">Candidat Et Interessé Par:</h4>
                        <hr>
                         <?php 
                        if ($user_interese->num_rows() > 0) {
                            foreach ($user_interese->result_array() as $interesse_plus) {
                                ?>
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">
                                    <?php echo(substr($interesse_plus['nom'], 0,300)) ?>
                                </a>&nbsp;&nbsp;
                                <?php
                            }
                        }
                         ?>
                         <!-- fin -->

                        
                        
                    </div>
                </div>









            </div>
        </div>
    </div>
  </div>

