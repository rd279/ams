<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard">
                            <img src="<?php echo base_url('assets/template/images/icon/logo.png') ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-sitemap"></i>SOTK</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-ol"></i>Standar ISO
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Checklist</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-indent"></i>Audit</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Auditor</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-edit"></i>Risk Register</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-download"></i>Download</a>
                        </li>                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url('assets/template/images/icon/logo.png') ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <?php if ($_SESSION['activestat'] == 'admin'){ ?>
                        <li>
                            <a href="SOTK">
                                <i class="fas fa-sitemap"></i>SOTK</a>
                        </li>
                        <?php } ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-ol"></i>Standar ISO
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Checklist</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-indent"></i>Audit</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file-text"></i>Pelaporan
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#">Rekapitulasi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Auditor</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-edit"></i>Risk Register</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-download"></i>Download</a>
                        </li>
                        <?php if ($_SESSION['activestat'] == 'admin'){ ?>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Menu 1</a>
                        </li>
                        <?php } if ($_SESSION['activestat'] == 'admin' || $_SESSION['activestat'] == 'auditor'){ ?>
                        <li>
                            <a href="#">
                                <i class="far fa-edit"></i>Menu 2</a>
                        </li>
                        <?php } if ($_SESSION['activestat'] == 'admin' || $_SESSION['activestat'] == 'auditee' || $_SESSION['activestat'] == 'auditor'){ ?>
                        <li>
                            <a href="#">
                                <i class="fas fa-download"></i>Menu 3</a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->