<html lang="en">

<?php
$this->load->view('template/head');
?>

<body class="animsition">
    <div class="page-wrapper">
        
        <?php
        $this->load->view('template/sidebar');
        ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php
            $this->load->view('template/header');
            ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                    <!-- <?php print_r($_SESSION); ?> -->
                    </div>
                </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    
    <!-- modal small -->
    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
            <button>Admin</button>
            <button>Audity</button>
            <button>Auditee</button>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
            </div>
        </div>
    </div>
    <!-- end modal small -->

    <?php
    $this->load->view('template/js');
    ?>
    

</body>

</html>
<!-- end document-->
