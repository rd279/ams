<html lang="en">
<style>
#example1 {

background: linear-gradient(0deg, #ffffff, #ececec);
background-size: 400% 400%;

-webkit-animation: gradientAni 15s ease infinite;
-moz-animation: gradientAni 15s ease infinite;
-o-animation: gradientAni 15s ease infinite;
animation: gradientAni 15s ease infinite;
}

@-webkit-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@-moz-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@-o-keyframes gradientAni {
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
@keyframes gradientAni { 
    0%{background-position:50% 0%}
    50%{background-position:51% 100%}
    100%{background-position:50% 0%}
}
</style>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Audit Management System">
    <meta name="author" content="Raafi'ud Darajaat">
    <meta name="keywords" content="Audit Management System">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/template/css/font-face.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all" />
    
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/template/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all" />

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/template/vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/wow/animate.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/slick/slick.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url('assets/template/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/template/css/theme.css') ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/template/js/toastr/toastr.min.css') ?>"/>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/template/vendor/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/js/toastr/toastr.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/js/toastr/toastr.init.js') ?>" type="text/javascript"></script>

</head>
<body class="animsition">
    <div class="page-wrapper">
        <?php
        $log_stat = $this->session->flashdata('login');
        if($this->session->userdata('login') == "gagal"){
        ?>
        <script type="text/javascript">
            // $(document).ready( function() { alert('Login Gagal'); } );
            $(document).ready( login_gagal() );
        </script>
        <?php
            } else if ($this->session->userdata('login') == "kosong") {
        ?>
        <script type="text/javascript">
            // $(document).ready( function() { alert('Login Gagal'); } );
            $(document).ready( login_kosong() );
        </script>
        <?php
            }
        ?>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h2>Audit Management System</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo site_url('login/aksi_login') ?>" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox pull-right">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Contact SAI (Satuan Audit Internal)</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/template/vendor/bootstrap-4.1/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/bootstrap-4.1/bootstrap.min.js') ?>" type="text/javascript"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/template/vendor/slick/slick.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/wow/wow.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/animsition/animsition.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/counter-up/jquery.waypoints.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/counter-up/jquery.counterup.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/circle-progress/circle-progress.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/chartjs/Chart.bundle.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/template/vendor/select2/select2.min.js') ?>" type="text/javascript"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/template/js/main.js') ?>" type="text/javascript"></script>

</body>

</html>
<!-- end document-->