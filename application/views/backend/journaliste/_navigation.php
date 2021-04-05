
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
                    <a href="<?php echo(base_url()) ?>journaliste/dashbord"><i class="ik ik-bar-chart-2"></i><span>Tableau de bord</span></a>
                </div>
                <!-- <div class="nav-item">
                    <a href="../../navbar.html"><i class="ik ik-menu"></i><span>Applications</span> <span class="badge badge-success">New</span></a>
                </div> -->
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Transactions</span> <span class="badge badge-danger">2+</span></a>
                    <div class="submenu-content">
                        <a href="<?php echo(base_url()) ?>journaliste/article" class="menu-item">Ajouter un article</a>
                        <a href="<?php echo(base_url()) ?>journaliste/padding_article" class="menu-item">Publication en attente</a>
                        
                    </div>
                </div>

                <div class="nav-lavel">les offres d'emplois</div>
                <div class="nav-item">
                    <a href="<?php echo(base_url()) ?>journaliste/offres_emplois"><i class="ik ik-clipboard"></i><span>Offres d'emplois</span></a>

                    
                </div>
                
               

                
                <div class="nav-lavel">Mon compte</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-user"></i><span>Paramètres</span></a>
                    <div class="submenu-content">
                        <a href="<?php echo(base_url()) ?>journaliste/profile" class="menu-item">Mon Profile</a>
                        <a href="<?php echo(base_url()) ?>journaliste/basic" class="menu-item">Informations basiques</a>
                        <a href="<?php echo(base_url()) ?>journaliste/basic_image" class="menu-item">Mon avatar</a>
                        <a href="<?php echo(base_url()) ?>journaliste/basic_secure" class="menu-item">Sécurité de mom compte</a>
                         <a href="<?php echo(base_url()) ?>journaliste/notification" class="menu-item">Notification</a>
                    </div>
                </div>
                
               
            </nav>
        </div>
    </div>
</div>