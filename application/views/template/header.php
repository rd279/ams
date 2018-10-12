 <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                               
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu pull-right">
                                        <!-- <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div> -->
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username']; ?>
                                            </a>
                                            <br> as : <b><?php echo $_SESSION['activestat']; ?></b>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['username']; ?></a>
                                                    </h5>
                                                    as : <b><?php echo $_SESSION['activestat']; ?></b>
                                                    <div class="rs-select2--dark rs-select2--sm">
                                                        <select class="js-select2 btn-block" id="aswho">
                                                        <?php if ($_SESSION['admin'] == 1){ ?>
                                                            <option value="admin" <?php if($_SESSION['activestat'] == 'admin') echo 'selected';?> >Admin</option>
                                                        <?php } if ($_SESSION['auditor'] == 1){ ?>
                                                            <option value="auditor" <?php if($_SESSION['activestat'] == 'auditor') echo 'selected';?> >Auditor</option>
                                                        <?php } if ($_SESSION['auditee'] == 1){ ?>
                                                            <option value="auditee" <?php if($_SESSION['activestat'] == 'auditee') echo 'selected';?> >Auditee</option>
                                                        <?php } ?>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                </div>
                                            </div> -->
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP -->

<script>
    $("select").change(function(){ 
    var sel = document.getElementById("aswho").value;
    $.ajax({
        type:"POST",
        url: 'aswho',
        data: "value="+ sel,
        dataType: 'text',
        async: false,
        cache: false,
        success: function ( result ) {
            window.location.reload();
        }
    });
    });
</script>