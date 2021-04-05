<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="quick-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="input-wrap">
                                <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                <i class="ik ik-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="container">
                    <div class="apps-wrap">
                        <div class="app-item">
                            <a href="<?= base_url() ?>user/dashbord"><i class="ik ik-bar-chart-2"></i><span>Tableau de bord</span></a>
                        </div>
                        
                       
                        <div class="app-item">
                            <a href="<?= base_url() ?>user/notification"><i class="ik ik-bell"></i><span>Notifications</span></a>
                        </div>

                        <div class="app-item">
                            <a href="<?= base_url() ?>user/offres_emplois"><i class="ik ik-clipboard"></i><span>Les Offres d'emplois</span></a>
                        </div>
                       
                        
                        <div class="app-item">
                            <a href="<?= base_url() ?>user/basic"><i class="ik ik-settings"></i><span>Paramètre</span></a>
                        </div>
                        <div class="app-item">
                            <a href="#"><i class="ik ik-more-horizontal"></i><span>Plus</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>