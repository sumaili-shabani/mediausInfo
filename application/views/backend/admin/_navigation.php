
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
                <div class="nav-lavel">Navigation media</div>
                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>admin/dashbord"><i class="ik ik-bar-chart-2"></i><span>Tableau de bord</span></a>
                </div>
                <!-- <div class="nav-item">
                    <a href="../../navbar.html"><i class="ik ik-menu"></i><span>Applications</span> <span class="badge badge-success">New</span></a>
                </div> -->
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Applications</span> <span class="badge badge-danger">3+</span></a>
                    <div class="submenu-content">
                        <a href="<?php echo(base_url()) ?>admin/offre" class="menu-item">Offres d'emplois</a>
                        <a href="<?php echo(base_url()) ?>admin/publicity_view" class="menu-item">Publicité des entreprises</a>
                        <a href="<?php echo(base_url()) ?>admin/publicity_personnele" class="menu-item">Pub entreprise personnele</a>
                        
                        <div class="submenu-content" style="">
                            
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)" class="menu-item">Opérations média</a>
                                <div class="submenu-content" style="">
                                    
                                    <a href="<?php echo(base_url()) ?>admin/category" class="menu-item">Catégorie information</a>
                                    <a href="<?php echo(base_url()) ?>admin/article" class="menu-item">Information media</a>
                                    <a href="<?php echo(base_url()) ?>admin/video" class="menu-item">Nos videos</a>
                                    <a href="<?php echo(base_url()) ?>admin/publicite" class="menu-item">Publicité</a>


                                </div>
                            </div>
                            
                        </div>

                        <a href="<?php echo(base_url()) ?>admin/padding_article" class="menu-item">Liste des Pub en attente</a>
                        

                       

                        
                    </div>
                </div>

                <div class="nav-item has-sub">
                    <a href="javascript:void(0);"><i class="ik ik-pie-chart"></i><span>Les statistiques</span> </a>
                    <div class="submenu-content">
                        <a href="<?php echo(base_url()) ?>admin/stat_pub" class="menu-item">Stat sur publication</a>
                        <!-- <a href="javascript:void(0);" class="menu-item">Stat sur vues</a> -->
                        <a href="<?php echo(base_url()) ?>admin/stat_users" class="menu-item">Statistique sur utilisateur</a>
                        
                    </div>
                </div>

                <div class="nav-lavel">UI Element Job</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0);"><i class="ik ik-briefcase"></i><span>Mes applications</span> <span class="badge badge-success">job</span></a>
                    <div class="submenu-content">
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Application job</a>
                            <div class="submenu-content" style="">
                                
                                <a href="<?php echo(base_url()) ?>admin/category_entreprise" class="menu-item">Categorie entreprise</a>
                                <a href="<?php echo(base_url()) ?>admin/calification" class="menu-item">Calification</a>
                                <a href="<?php echo(base_url()) ?>admin/competense" class="menu-item">Compétense</a>
                                <a href="<?php echo(base_url()) ?>admin/salaire" class="menu-item">Salaire</a>

                                <a href="<?php echo(base_url()) ?>admin/service" class="menu-item">Services</a>

                                <a href="<?php echo(base_url()) ?>admin/paquet" class="menu-item">Paquet d'adhesion</a>


                            </div>
                        </div>
                        <!-- <a href="javascript:void(0);" class="menu-item">Stat sur vues</a> -->
                        <a href="<?php echo(base_url()) ?>admin/stat_users" class="menu-item">Statistique sur utilisateur</a>
                        <div class="submenu-content" style="">
                            
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)" class="menu-item">Opérations job</a>
                                <div class="submenu-content" style="">
                                    
                                    <a href="<?php echo(base_url()) ?>admin/province" class="menu-item">Provinces</a>
                                    <a href="<?php echo(base_url()) ?>admin/ville" class="menu-item">Villes</a>
                                    <a href="<?php echo(base_url()) ?>admin/pays" class="menu-item">Pays</a>
                                    <a href="<?php echo(base_url()) ?>admin/contrat" class="menu-item">Type de Contrat</a>


                                </div>
                            </div>
                            
                        </div>

                        <div class="submenu-content" style="">
                            
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)" class="menu-item">Paiement des abonnés</a>
                                <div class="submenu-content" style="">
                                    
                                    <a href="<?php echo(base_url()) ?>admin/paiement_pading" class="menu-item">Test en attente de validation</a>

                                    <a href="<?php echo(base_url()) ?>admin/paiement_normale" class="menu-item">Paiement de reabonnement</a>

                                    


                                </div>
                            </div>
                            
                        </div>

                        
                    </div>
                </div>

                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>admin/candidats"><i class="ik ik-users"></i><span>Les candidats</span></a>

                    
                </div>

                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>admin/offres_emplois"><i class="ik ik-clipboard"></i><span>Offres d'emplois</span></a>

                    
                </div>

                <div class="nav-lavel">Paramètrage</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-settings"></i><span>Paramètres</span></a>
                    <div class="submenu-content">
                        <a href="<?php echo(base_url()) ?>admin/role" class="menu-item">Nos Privilège</a>
                        <a href="<?php echo(base_url()) ?>admin/site" class="menu-item">Configuration site</a>
                        <a href="<?php echo(base_url()) ?>admin/contact_info" class="menu-item">Contact information</a>
                        <a href="<?php echo(base_url()) ?>admin/database" class="menu-item">Sauvegarde des données</a>

                        <a href="<?php echo(base_url()) ?>admin/users" class="menu-item">Liste des utilisateur</a>
                        
                         
                    </div>
                </div>


                
               
            </nav>
        </div>
    </div>
</div>