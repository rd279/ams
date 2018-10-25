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
                    <div class="row card">
                        <div class="card-header">
                            <h4>SOTK</h4>
                        </div>
                        <div class="card-body">
                            <!-- TABs -->
                            <div class="custom-tab">
                            <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="lvl1-tab" data-toggle="tab" href="#lvl1" role="tab" aria-controls="lvl1" aria-selected="true">Level 1</a>
                                <a class="nav-item nav-link" id="lvl2-tab" data-toggle="tab" href="#lvl2" role="tab" aria-controls="lvl2" aria-selected="false">Level 2</a>
                                <a class="nav-item nav-link" id="lvl3-tab" data-toggle="tab" href="#lvl3" role="tab" aria-controls="lvl3" aria-selected="false">Level 3</a>
                            </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <!-- LEVEL 1 -->
                                <div class="tab-pane fade show active" id="lvl1" role="tabpanel" aria-labelledby="lvl1-tab">
                                    <div class="row pull-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addModal">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                    <br><br>
                                <div class="row">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-borderless table-data3" id="tsotk">
                                         <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nama</th>
                                                <th style="text-align: right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dsotk">
                                             
                                        </tbody>
                                    </table>
                                </div>
                                    </div>



                                </div>
                                <!-- END Level 1 -->
                                <!-- LEVEL 2 -->
                                <div class="tab-pane fade" id="lvl2" role="tabpanel" aria-labelledby="lvl2-tab">
                                <p>Level 2</p>
                                </div>
                                <!-- END Level 2 -->
                                <!-- LEVEL 3 -->
                                <div class="tab-pane fade" id="lvl3" role="tabpanel" aria-labelledby="lvl3-tab">
                                <p>Level 3</p>
                                </div>
                                <!-- END Level 3 -->
                            </div>

                            </div>
                            <!-- END TABs -->
                        </div>
                            

                        </div>

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

    <?php
    $this->load->view('template/js');
    ?>
    

</body>

</html>
<!-- end document-->

<!-- Modal Tambah -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Jabatan / Posisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <small class="form-text text-muted">Level 1</small>
                    <input type="text" id="lvl1-add" name="lvl1-add" placeholder="Jabatan / Posisi" class="form-control" required="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Modal Tambah -->

<!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Jabatan / Posisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <small class="form-text text-muted">Level 1</small>
                    <input type="hidden" id="id-edit" name="id-edit" placeholder="Jabatan / Posisi" class="form-control" required="">
                    <input type="text" id="lvl1-edit" name="lvl1-edit" placeholder="Jabatan / Posisi" class="form-control" required="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="simpan-edit">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Modal Edit -->

<!-- Modal Hapus -->
    <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                    <small class="form-text text-muted">Level 1</small>
                    <input type="hidden" id="id-del" name="id-del" placeholder="Jabatan / Posisi" class="form-control" disabled="">
                    <input type="text" id="lvl1-del" name="lvl1-del" placeholder="Jabatan / Posisi" class="form-control" disabled="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="simpan-hapus">Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- end Modal Hapus -->
<script type="text/javascript">
    $(document).ready(function(){
        view_tabel_sotk();
         
    $('#tsotk').dataTable({});
    
    function view_tabel_sotk(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>sotk/data_sotk',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                    '<td>'+data[i].id+'</td>'+
                    '<td>'+data[i].name+'</td>'+
                    '<td style="text-align:right;">'+
                    '<div class="table-data-feature">'+
                    // '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
                    '<a href="javascript:;" class="item item_edit" data-toggle="tooltip" data-placement="top" title="Edit" data="'+data[i].id+'"><i class="zmdi zmdi-edit"></i></a>'+' '+
                    // '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                    '<a href="javascript:;" class="item item_hapus" data-toggle="tooltip" data-placement="top" title="Delete" data="'+data[i].id+'"><i class="zmdi zmdi-delete"></i></a>'+
                    '</div>'+
                    '</td>'+
                    '</tr>';
                }
                $('#dsotk').html(html);
            }
        });
    }

    //Simpan
    $('#simpan').on('click',function(){
        var name = $('#lvl1-add').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('SOTK/simpan')?>",
            dataType : "JSON",
            data : {name:name},
            success: function(data){
                $('[name="lvl1-add"]').val("");
                $('#addModal').modal('hide');
                view_tabel_sotk();
            }
        });
        return false;
    });

    //Get Update
    $('#dsotk').on('click','.item_edit',function(){
        var id = $(this).attr('data');
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url('SOTK/get')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                $.each(data,function(id, name){
                    $('#editModal').modal('show');
                    $('[name="id-edit"]').val(data.id);
                    $('[name="lvl1-edit"]').val(data.name);
                });
            }
        });
        return false;
    });

    var callback_update = function() {
        var id = $('#id-edit').val();
        var name = $('#lvl1-edit').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('SOTK/update')?>",
            dataType : "JSON",
            data : {id:id, name:name},
            success: function(data){
                $('[id="id-edit"]').val("");
                $('[name="lvl1-edit"]').val("");
                $('#editModal').modal('hide');
                view_tabel_sotk();
            }
        });
        return false;
    };

    $('#simpan-edit').keypress(function() {
        if (event.which == 13) callback_update();
    });

    $('#simpan-edit').click(callback_update);

    //Simpan Update
    // $('#simpan-edit').on('click',function(){
    // var id = $('#id-edit').val();
    // var name = $('#lvl1-edit').val();
    // $.ajax({
    //     type : "POST",
    //     url  : "<?php echo base_url('SOTK/update')?>",
    //     dataType : "JSON",
    //     data : {id:id, name:name},
    //     success: function(data){
    //         $('[id="id-edit"]').val("");
    //         $('[name="lvl1-edit"]').val("");
    //         $('#editModal').modal('hide');
    //         view_tabel_sotk();
    //     }
    // });
    // return false;
    // });

    //Get Hapus
    // $('#dsotk').on('click','.item_hapus',function(){
    //     var id = $(this).attr('data');
    //     $('#delModal').modal('show');
    //     $('[name="lvl1-del"]').val(id);
    // });

    //Get Hapus
    $('#dsotk').on('click','.item_hapus',function(){
        var id = $(this).attr('data');
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url('SOTK/get')?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                $.each(data,function(id, name){
                    $('#delModal').modal('show');
                    $('[name="id-del"]').val(data.id);
                    $('[name="lvl1-del"]').val(data.name);
                });
            }
        });
        return false;
    });

    //Hapus
    $('#simpan-hapus').on('click',function(){
    var id = $('#id-del').val();
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url('SOTK/hapus')?>",
        dataType : "JSON",
        data : {id: id},
        success: function(data){
            $('#delModal').modal('hide');
            view_tabel_sotk();
        }
    });
    return false;
    });


    });

</script>