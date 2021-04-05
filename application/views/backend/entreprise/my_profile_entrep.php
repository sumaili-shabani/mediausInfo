 <div class="row">
    <div class="col-lg-4 col-md-5">
        <?php include('component/menu_entrep.php') ?>
    </div>



    <div class="col-lg-8 col-md-7">
        <div class="card">
            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
               
                <li class="nav-item">
                    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Statut</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Mes offres d'emplois</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Info basiques</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-photo" role="tab" aria-controls="pills-setting" aria-selected="false">Mon Logo</a>
                </li>

                 

                 



            </ul>
            <div class="tab-content" id="pills-tabContent">


                <div class="tab-pane fade" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                    <div class="card-body">

                        <?php include('component/offres_tag.php') ?>

                    </div>
                </div>




                <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                   <?php include('component/entrep_status.php') ?>
                </div>




                 <!-- photo -->
                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                        <?php include('object_basic_entrep.php') ?>
                    </div>
                </div>
                <!-- fin photo -->

                <!-- photo -->
                <div class="tab-pane fade" id="previous-photo" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                        <?php include('objet_basic_logo.php') ?>
                    </div>
                </div>
                <!-- fin photo -->

             






            </div>
        </div>
    </div>
  </div>

