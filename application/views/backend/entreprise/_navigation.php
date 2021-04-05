
<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="javascript:void(0);">
            <div class="logo-img">
               <img src="<?= $icone_info ?>" class="header-brand-img" alt="lavalite" style="width: 70px; height: 40px;"> 
            </div>
            <span class="text" style="padding-left: 5px;">
                <?= substr($nom_site_info, 0,10) ?>
                   
            </span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>entreprise/dashbord"><i class="ik ik-bar-chart-2"></i><span>Tableau de bord</span></a>


                </div>

                
                <!-- <div class="nav-item">
                    <a href="../../navbar.html"><i class="ik ik-menu"></i><span>Applications</span> <span class="badge badge-success">New</span></a>
                </div> -->
                <div class="nav-item has-sub">
                    <a href="javascript:void(0);"><i class="ik ik-briefcase"></i><span>Mes applications</span> <span class="badge badge-success">job</span></a>
                    <div class="submenu-content">
                        <!-- <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Entreprise</a>
                            <div class="submenu-content" style="">
                                
                                <a href="<?php echo(base_url()) ?>entreprise/profile_entrep" class="menu-item">Profile entreprise</a>
                                <a href="<?php echo(base_url()) ?>entreprise/basic_entrep" class="menu-item">Paramètrage de l'entreprise</a>
                                

                            </div>
                        </div> -->
                        <!-- <a href="javascript:void(0);" class="menu-item">Stat sur vues</a> -->
                        <a href="<?php echo(base_url()) ?>entreprise/profile_entrep" class="menu-item">Profile entreprise</a>

                        <a href="<?php echo(base_url()) ?>entreprise/new_job" class="menu-item">Publier une offre d'emplois</a>
                        <div class="submenu-content" style="">
                            
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)" class="menu-item">Planifier l'inerview</a>
                                <div class="submenu-content" style="">
                                    
                                   
                                    <a href="<?php echo(base_url()) ?>entreprise/interview" class="menu-item">Selection inerview</a>
                                   

                                </div>
                            </div>
                            
                        </div>

                        
                    </div>
                </div>

                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>entreprise/mes_job_publier"><i class="ik ik-archive"></i><span>Gérer mes offres</span></a>

                    
                </div>

                 <div class="nav-lavel">Candidats et offres d'emplois</div>
                 <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>entreprise/candidats"><i class="ik ik-users"></i><span>Les candidats</span></a>

                    
                </div>

                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>entreprise/offres_emplois"><i class="ik ik-clipboard"></i><span>Offres d'emplois</span></a>

                    
                </div>
                
               

                
                <div class="nav-lavel">Mon compte ceo</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-settings"></i><span>Mon compte</span></a>
                    <div class="submenu-content">
                       
                        <a href="<?php echo(base_url()) ?>entreprise/basic" class="menu-item">Informations basiques ceo</a>
                        <a href="<?php echo(base_url()) ?>entreprise/basic_image" class="menu-item">Mon avatar ceo</a>
                        <a href="<?php echo(base_url()) ?>entreprise/basic_secure" class="menu-item">Sécurité de mom compte ceo</a>
                         <a href="<?php echo(base_url()) ?>entreprise/notification" class="menu-item">Notification</a>
                    </div>
                </div>
                
               
            </nav>
        </div>
    </div>
</div>