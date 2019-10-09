
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Teknologi Ekraf</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card" style="padding: 10px">
                            <div class="pull-right"><a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add</a></div>
                        <table class="table table-bordered table-responsive-lg" id="teknologi" width="100%">
                            <thead>
                                <tr>
                                    <th width="20%">No</th>
                                    <th width="30%">Nama Ekraf</th>
                                    <th width="30%">Teknologi</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbteknologi">
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer"> © 2019 with love </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <form id="formbaru">
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Teknologi Ekraf</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Nama Ekraf</label>
                                            <input type="text" id="ekraf" name="ekraf" class="form-control" placeholder="Masukkan Ekraf" list="data" required autocomplete="off" />
                                            <datalist id="data">
                                                <?php foreach ($ekraf as $key => $value) : ?>
                                                <option value="<?= $value->ne ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->ne ?></option>
                                            <?php endforeach; ?>
                                            </datalist>
                                            <label>Pilih Teknologi Ecommerce</label>
                                            <select name="iteknologi" id="iteknologi" class="form-control" required="">
                                                <option value="" selected="" hidden="">Pilih Teknologi</option>
                                                <?php foreach ($teknologi as $key): ?>
                                                    <option value="<?php echo $key->id_teknologi ?>"><?php echo $key->nama ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <!-- inputan button simpan dan Cancel -->
                                        <button type="submit" id="btn_push" class="btn btn-primary ">Add</button>
                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="formupdate">
            <div class="modal fade" id="Modal_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Data Teknologi Ekraf</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                           <label>Nama Ekraf</label>
                                            <input type="text" id="uekraf" name="uekraf" class="form-control" placeholder="Masukkan Ekraf" list="data" required autocomplete="off" />
                                            <datalist id="data">
                                                <?php foreach ($ekraf as $key => $value) : ?>
                                                <option value="<?= $value->ne ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->ne ?></option>
                                            <?php endforeach; ?>
                                            </datalist>
                                            <label>Pilih Teknologi Ecommerce</label>
                                            <select name="uteknologi" id="uteknologi" class="form-control" required="">
                                                <option value="" selected="" hidden="">Pilih Teknologi</option>
                                                <?php foreach ($teknologi as $key): ?>
                                                    <option value="<?php echo $key->id_teknologi ?>"><?php echo $key->nama ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <!-- inputan button simpan dan Cancel -->
                                        <input type="text" id="u_id" name="u_id" hidden="">
                                        <button type="submit" id="btn_push" class="btn btn-primary ">Save</button>
                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="formdelete">
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Teknologi Ekraf</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="nama_teknologi_del"></font></b> pada Ekraf <b><font id="nama_ekraf_del"></font></b> ?</font>
                                <input type="hidden" name="id_del" id="id_del" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" id="btn_delete" class="btn btn-danger col-md-3">Hapus</button>    
                                <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal" style="margin-right: 20px">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.min.js"></script>
        <!-- Chart JS -->
        <!-- <script src="<?php echo base_url() ?>assets/js/dashboard1.js"></script> -->
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/sweetalert2@8.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                //panggil get data
                showTeknologi();
                //get data subsektor
                function showTeknologi() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Ekraf/getDataTeknologiEkraf',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                // alert(JSON.stringify(data[i]));
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].ne+'</td>'+
                                '<td>'+data[i].nte+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_ekraf_teknologi+'" data-namae="'+data[i].ne+'" data-namat="'+data[i].id_teknologi+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_ekraf_teknologi+'" data-namae="'+data[i].ne+'" data-namat="'+data[i].nte+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#teknologi').DataTable().destroy();
                            $('#teknologi').find('tbody').empty();
                            $('#tbteknologi').html(html);
                            $('#teknologi').DataTable({
                                destroy         : true,
                                'autoWidth'     : true,
                                'paging'        : true,
                                'lengthChange'  : true,
                                'searching'     : true,
                                'ordering'      : true,
                                'info'          : true
                            });
                        }
                    });
                }
                //input data subsektor
                $('#formbaru').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var ne       = $('#ekraf').val();
                var nte       = $('#iteknologi').val();
                // alert(nte);

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Ekraf/newTeknologiEkraf",
                    dataType : "JSON",
                    data : {
                        nama:ne,
                        id_teknologi:nte,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#Modal_Add').modal('hide'); 
                        $("#teknologi").DataTable().destroy();
                        $("#teknologi").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showTeknologi();
                    }
                });

                return false;
            });

                //update subsektor
                $('#teknologi').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var upid            = $(this).data('id');
                    var upnamae          = $(this).data('namae'); 
                    var upnamat          = $(this).data('namat');

                    // alert(upnama);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(upid);
                    $('[name="uekraf"]').val(upnamae);
                    $('[name="uteknologi"]').val(upnamat);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_namae     = $('#uekraf').val();
                    var up_namat    = $('#uteknologi').val();

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Ekraf/updateEkrafTeknologi",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            nama:up_namae,
                            id_teknologi:up_namat,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#teknologi").DataTable().destroy();
                            $("#teknologi").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showTeknologi();
                        }
                    });
                    return false;
                });

                //delete subsektor
                $('#teknologi').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var namae = $(this).data('namae'); 
                    var namat = $(this).data('namat'); 
                    
                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_ekraf_del").innerHTML=namae;
                document.getElementById("nama_teknologi_del").innerHTML=namat;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Ekraf/deleteEkrafTeknologi",
                    dataType : "JSON",
                    data : {
                        id:id,
                    },
                    success: function(){
                        $('[name="id_del"]').val("");
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menghapus data ',
                            showConfirmButton: true,
                        })
                        $('#Modal_Delete').modal('hide'); 
                        $("#teknologi").DataTable().destroy();
                        $("#teknologi").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showTeknologi();
                    }
                });
                return false;
            });
            });
        </script>
    </body>

    </html>