 <div class="row">
    <div class="col-lg-4 col-md-5">
        <?php include('component/menu_entrep.php') ?>
    </div>



    <div class="col-lg-8 col-md-7">
        <div class="card">
            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
               
              
                 <li class="nav-item">
                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Mes offres d'emplois</a>
                </li>
               
                 

            </ul>
            <div class="tab-content" id="pills-tabContent">


                <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                    <div class="card-body">

                        <?php include('component/offres_tag.php') ?>

                    </div>
                </div>




            </div>
        </div>
    </div>
  </div>

