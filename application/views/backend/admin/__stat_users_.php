<div class="col-md12">
	<div class="row">

		

		<div class="col-md-12">
			<div class="row">
				<!-- bloc 1 -->
				<div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Nombre Total des utilisateurs actifs sur la plateforme</h6>
                                    <h2><?php echo($nombre_users); ?></h2>

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

			    <!-- fin bloc 1 -->

			    <!-- bloc 2 -->

			    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Nombre D'utilisateurs homes actifs <br><br></h6>
                                    <h2><?php echo($nombre_users_m); ?></h2>

                                </div>
                                <div class="icon">
                                    <i class="fa fa-male"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">MembreS Actifs au système</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>

			    <!-- fin bloc 2 -->
			    <!-- bloc 3 -->

			    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Nombre D'utilisateurs femmes  <br><br></h6>
                                    <h2><?php echo($nombre_users_f); ?></h2>

                                </div>
                                <div class="icon">
                                    <i class="fa fa-female"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">MembreS Actifs au système</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                        </div>
                    </div>
                </div>

			    <!-- fin bloc 3 -->
			    <!-- bloc 3 -->

			    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Nombre D'utilisateurs inconus  <br><br></h6>
                                    <h2><?php echo($nombre_users_a); ?></h2>

                                </div>
                                <div class="icon">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">MembreS Actifs au système</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                        </div>
                    </div>
                </div>

				
			    <!-- fin bloc 3 -->

				
			</div>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mb-2">
					<div class="card">
						<div class="card-header bg-secondary text-center">
							Statistiques des utilisateurs par rapport à leurs sexe
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header bg-secondary text-center">
							Statistiques des utilisateurs par rapport à leurs sexe
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
