<div class="col-md12">
	<div class="row">

		

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
						<div class="card-header text-center bg-secondary">
							Statistiques des publication d'articles par rapport à leurs catégories
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6" style="margin-top: 10px;">
					<div class="card">
						<div class="card-header text-center bg-secondary">
							Statistiques des publication d'articles par rapport à leurs catégories
						</div>
						<div class="card-body">
							<div id="chartContainer2" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>
