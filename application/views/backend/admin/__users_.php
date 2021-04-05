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

		<div class="col-md-12 ">
			<div class="row ">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                <div class="mailbox-read-message card">

	                	<div class="col-md-12 card-body">
					        <div class="row">
					           <div class="col-md-12">
					           	<!-- <a href="" class="btn btn-dim btn-sm btn-outline-secondary pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
					           	&nbsp;&nbsp;&nbsp;&nbsp; -->
					             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
					           </div>
					         </div>
					    </div>

	                	<div class="col-md-12 table-responsive resultat_ok dataTables_wrapper dt-bootstrap4 no-footer" id="DataTables_Table_1_wrapper">
	                		<!-- datatable-init nk-tb-list nk-tb-ulist dataTable no-footer -->

	                      <table  class="table-white  table dataTable no-footer dtr-inline collapsed" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">  
	                       <thead>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="15%">Téléphone</th>
	                                 <th width="10%">Idcole</th>
	                                 <th width="5%">Editer</th> 
	                                 <th width="5%">Supprimer</th> 
	                            </tr>  
	                       </thead>
	                       <tbody>
	                       <!-- 	<?php
		                       	foreach ($users->result_array() as $key) {
		                       		?>
		                       		<tr>
			                       		<td>
			                       			<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35">
			                       		</td>
			                       		<td><?php echo(substr($key['first_name'], 0,20)) ?>...</td>
			                       		<td><?php echo(substr($key['last_name'], 0,20)) ?>...</td>
			                       		<td><?php echo(substr($key['sexe'], 0,10)) ?></td>
			                       		<td><?php echo(substr($key['email'], 0,10)) ?>...</td>
			                       		<td><?php echo(substr($key['telephone'], 0,10)) ?>...</td>
			                       		<td><?php echo(substr($key['id'].'_/'.$key['image'], 0,10)) ?>...</td>
			                       		
			                       		<td>
			                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-warning btn-sm update">
			                       				<i class="fa fa-edit"></i>
			                       			</a>
			                       		</td>
			                       		<td>
			                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-danger btn-sm update">
			                       				<i class="fa fa-trash"></i>
			                       			</a>
			                       		</td>

		                       		</tr>

		                       		<?php
		                       	}

	                       	?> -->
	                       </tbody>
	                       <tfoot>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="15%">Téléphone</th>
	                                 <th width="10%">Idcole</th>
	                                 <th width="5%">Editer</th> 
	                                 <th width="5%">Supprimer</th> 
	                            </tr>  
	                       </tfoot>   
	                     </table>
	                		
	                	</div>
	                  
	                </div>
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>
