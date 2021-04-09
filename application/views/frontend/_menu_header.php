<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                           <?php echo($adresse_info) ?>
                        </span>
                        <img class="m-b-1 m-rl-8" src="<?php echo(base_url()) ?>js/frond/images/icons/xicon-night.png.pagespeed.ic.SWJpF1KGA7.png"
                            alt="IMG">
                       
                    </span>
                    <a href="<?php echo(base_url()) ?>home/about" class="left-topbar-item">
                        Apropos
                    </a>
                    <a href="<?php echo(base_url()) ?>home/contact" class="left-topbar-item">
                        Contact
                    </a>
                    <a href="<?php echo(base_url()) ?>login/register" class="left-topbar-item">
                        S'inscrir
                    </a>
                    <a href="<?php echo(base_url()) ?>login" class="left-topbar-item">
                       Se connecter
                    </a>
                </div>
                <div class="right-topbar">
                   <a target="_blank" href="<?php echo($facebook_info) ?>">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                    <a target="_blank" href="<?php echo($twitter_info) ?>">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <a target="_blank" href="<?php echo($linkedin_info) ?>">
                        <span class="fab fa-linkedin"></span>
                    </a>
                    <a target="_blank" href="javascript:void(0);">
                        <span class="fab fa-vimeo-v"></span>
                    </a>
                    <a target="_blank" href="javascript:void(0);">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="javascript:void(0);">
                   <img src="<?= $icone_info ?>" alt="IMG-LOGO" style="height: 80px;">
                </a>
            </div>
            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            <?php echo($adresse_info) ?>
                        </span>
                        <img class="m-b-1 m-rl-8" src="<?= $icone_info ?>"
                            alt="IMG" style="height: 15px;">
                       
                    </span>
                </li>
                <li class="left-topbar">
                    <a href="<?php echo(base_url()) ?>home/about" class="left-topbar-item">
                        Apropos
                    </a>
                    <a href="<?php echo(base_url()) ?>home/contact" class="left-topbar-item">
                        Contact
                    </a>
                    <a href="<?php echo(base_url()) ?>login/register" class="left-topbar-item">
                        S'inscrir
                    </a>
                    <a href="<?php echo(base_url()) ?>login" class="left-topbar-item">
                       Se connecter
                    </a>
                </li>
                <li class="right-topbar">
                    <a target="_blank" href="<?php echo($facebook_info) ?>">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                    <a target="_blank" href="<?php echo($twitter_info) ?>">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <a target="_blank" href="<?php echo($linkedin_info) ?>">
                        <span class="fab fa-linkedin"></span>
                    </a>
                    <a target="_blank" href="javascript:void(0);">
                        <span class="fab fa-vimeo-v"></span>
                    </a>
                    <a target="_blank" href="javascript:void(0);">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>
            <ul class="main-menu-m">
                <li>
                    <a href="javascript:void(0);">Accueil</a>
                    <ul class="sub-menu-m">
                        <li><a href="<?php echo(base_url()) ?>">Informations</a>
                        </li>
                        <li><a href="<?php echo(base_url()) ?>home/offres_emplois">Offres d'emplois</a>
                        </li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <?php 
                if ($categories->num_rows() <=0) {
                    # code...
                }
                else{
                    foreach ($categories->result_array() as $key) {
                        
                        ?>
                        
                        <li class="mega-menu-item">
                            <a href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>/<?php echo($key['nom']) ?>"> <?php echo($key['nom']) ?> </a>
                           
                        </li>
                        <?php
                    }
                }

                 ?>
                
                <li>
                    <a href="#">Autres</a>
                    <ul class="sub-menu-m">
                        <?php

                            if($this->session->userdata('admin_login'))
                            {   $id_connected_ok = $this->session->userdata('admin_login');
                                $this->db->where('id',$id_connected_ok);
                                $ok_users_ = $this->db->get('users')->result_array();
                                foreach ($ok_users_ as $key) {
                                    # code...
                                    ?>
                                    <li>
                                         <div class="col-md-12 text-center" style="margin-top: 10px;">
                                            <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
                                            <a href="<?php echo(base_url()) ?>admin/profile">
                                            <?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
                                         </div>
                                        
                                    </a></li>
                                    <?php
                                }
                            }

                            if($this->session->userdata('entreprise_login'))
                            {   $id_connected_ok = $this->session->userdata('entreprise_login');
                                $this->db->where('id',$id_connected_ok);
                                $ok_users_ = $this->db->get('users')->result_array();
                                foreach ($ok_users_ as $key) {
                                    # code...
                                    ?>
                                    <li>
                                         <div class="col-md-12 text-center" style="margin-top: 10px;">
                                            <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
                                            <a href="<?php echo(base_url()) ?>entreprise/profile">
                                            <?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
                                         </div>
                                        
                                    </a></li>
                                    <?php
                                }
                            }

                            if($this->session->userdata('id'))
                            {   $id_connected_ok = $this->session->userdata('id');
                                $this->db->where('id',$id_connected_ok);
                                $ok_users_ = $this->db->get('users')->result_array();
                                foreach ($ok_users_ as $key) {
                                    # code...
                                    ?>
                                    <li>
                                         <div class="col-md-12 text-center" style="margin-top: 10px;">
                                            <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
                                            <a href="<?php echo(base_url()) ?>user/profile">
                                            <?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
                                         </div>
                                        
                                    </a></li>
                                    <?php
                                }
                            }

                            if($this->session->userdata('instuctor_login'))
                            {   $id_connected_ok = $this->session->userdata('instuctor_login');
                                $this->db->where('id',$id_connected_ok);
                                $ok_users_ = $this->db->get('users')->result_array();
                                foreach ($ok_users_ as $key) {
                                    # code...
                                    ?>
                                    <li>
                                         <div class="col-md-12 text-center" style="margin-top: 10px;">
                                            <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
                                            <a href="<?php echo(base_url()) ?>journaliste/profile">
                                            <?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
                                         </div>
                                        
                                    </a></li>
                                    <?php
                                }
                            }


                        

                         ?>
                        
                        
                       
                        <li><a href="<?php echo(base_url()) ?>home/about">Apropos</a>
                        </li>
                        <li><a href="<?php echo(base_url()) ?>home/contact">Contact</a>
                        </li>

                        <li><a href="<?php echo(base_url()) ?>home/contrat">Terme et contrat</a>
                        </li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <!-- essaie -->
                <!-- ================================= -->
                <!-- fin -->
                <!-- ======================================= -->

            </ul>
        </div>
        <!--  -->
        <div class="wrap-logo no-banner container">
            <!-- Logo desktop -->


            <div class="logo">
                <a href="<?php echo(base_url()) ?>">
                   <img src="<?= $icone_info ?>" alt="LOGO" style="height: 80px;">
                </a>
            </div>
            <!-- Banner -->
            
        </div>
        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="<?php echo(base_url()) ?>">
                       <img src="<?= $icone_info ?>" alt="LOGO">
                    </a>
                    <ul class="main-menu">
                        <li>
                            <a href="javascript:void(0);">Accueil</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo(base_url()) ?>">Informations</a>
                                </li>
                                <li><a href="<?php echo(base_url()) ?>home/offres_emplois">Offres d'emplois</a>
                                </li>
                               
                            </ul>
                        </li>
                        
                        <?php 
						if ($categories->num_rows() <=0) {
							# code...
						}
						else{
							foreach ($categories->result_array() as $key) {
								
								?>
								
								<li class="mega-menu-item">
		                            <a href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>/<?php echo($key['nom']) ?>"> <?php echo($key['nom']) ?> </a>
		                            <div class="sub-mega-menu">
		                                <div class="nav flex-column nav-pills" role="tablist">
		                                    <a class="nav-link active" data-toggle="pill" href="#enter-1" role="tab">Tous</a>
		                                   
		                                </div>
		                                <div class="tab-content">
		                                    <?php include('component/_descriptionArticle.php') ?>
		                                    
		                                </div>
		                            </div>
		                        </li>
								<?php
							}
						}

						 ?>

                        
                        
                       
                        
                        
                        <li class="main-menu-active">
                            <a href="#">Autres</a>
                            <ul class="sub-menu">
                                

                                <?php 
									if ($categories2->num_rows() <=0) {
										# code...
									}
									else{
										foreach ($categories2->result_array() as $memu_autre) {

											if ($memu_autre['idcat'] ==1 || $memu_autre['idcat'] ==2 || $memu_autre['idcat'] ==3 || $memu_autre['idcat'] ==4 || $memu_autre['idcat'] ==5 || $memu_autre['idcat'] ==6 || $memu_autre['idcat'] ==7) {
												# code...

											}
											else{
												
												?>

												<li>
													<a href="<?php echo(base_url()) ?>home/publication/<?php echo($memu_autre['idcat']) ?>/<?php echo($memu_autre['nom']) ?>">
														<?php echo($memu_autre['nom']) ?>
												     </a>
												</li>
										
												<?php
											}
											
										}
									}

										

								?>

                               <?php

									if($this->session->userdata('admin_login'))
								    {	$id_connected_ok = $this->session->userdata('admin_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>admin/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								    if($this->session->userdata('entreprise_login'))
								    {	$id_connected_ok = $this->session->userdata('entreprise_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>entreprise/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								    if($this->session->userdata('id'))
								    {	$id_connected_ok = $this->session->userdata('id');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>user/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								    if($this->session->userdata('instuctor_login'))
								    {	$id_connected_ok = $this->session->userdata('instuctor_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>journaliste/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }


								

								 ?>
								
                                
                               
                                <li><a href="<?php echo(base_url()) ?>home/about">Apropos</a>
                                </li>
                                <li><a href="<?php echo(base_url()) ?>home/contact">Contact</a>
                                </li>

                                <li><a href="<?php echo(base_url()) ?>home/contrat">Terme et contrat</a>
                                </li>
                               

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- bande de recherche -->
<!-- <div class="container">

    <div class="col-md-12 mb-2" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-12">

               <input type="search" name="recherche" class="form-control" placeholder="recheche une information sur ...." >

            </div>
            
        </div>
    </div>
    
</div> -->
<!-- fin -->