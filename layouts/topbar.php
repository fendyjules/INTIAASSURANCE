<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="bureauadmin.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <p>INTIA assurance</p>
                        </span>
                        <span class="logo-lg">
                        <p>INTIA assurance</p>
                        </span>
                    </a>

                    <a href="bureauadmin.php" class="logo logo-light">
                        <span class="logo-sm">
                        <p>INTIA assurance</p>
                        </span>
                        <span class="logo-lg">
                        <p>INTIA assurance</p>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/user-dummy-img.jpg"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Administrateur</span>                                
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Bienvenue <?php echo $nom_user; ?> <?php echo $prenom_user; ?>!</h6>                        
                        <a class="dropdown-item" href="index.php"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Se déconnecter</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

