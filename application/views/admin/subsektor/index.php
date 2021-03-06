
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
                        <h3 class="text-themecolor">Subsektor</h3>
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
                        <table class="table table-bordered table-responsive-lg" id="subsektor" width="100%">
                            <thead>
                                <tr>
                                    <th width="20%">No</th>
                                    <th width="30%">Nama Subsektor</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbsubsektor">
                                
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
                            <h4 class="modal-title">New Subsektor</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Nama Subsektor</label>
                                            <input type="text" id="nama_subsektor" class="form-control" placeholder="Masukkan Subsektor" style="width: 100%" required>
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
                            <h4 class="modal-title">Update Subsektor</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Nama Subsektor</label>
                                            <input type="text" id="upnama_subsektor" name="upnama_subsektor" class="form-control" placeholder="Masukkan Subsektor" style="width: 100%" required>
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
                            <h4 class="modal-title">Delete Subsektor</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="nama_subsektor_del"></font></b> ?</font>
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
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="assets/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="assets/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morrisjs/morris.min.js"></script>
        <!-- Chart JS -->
        <!-- <script src="assets/js/dashboard1.js"></script> -->
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
        <script src="assets/js/sweetalert2@8.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                //panggil get data
                showSubsektor();
                //get data subsektor
                function showSubsektor() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Subsektor/getDataSubsektor',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_subsektor+'" data-nama="'+data[i].nama+'" > <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_subsektor+'" data-nama="'+data[i].nama+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#subsektor').DataTable().destroy();
                            $('#subsektor').find('tbody').empty();
                            $('#tbsubsektor').html(html);
                            $('#subsektor').DataTable({
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
                var nama_subsektor       = $('#nama_subsektor').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Subsektor/newSubsektor",
                    dataType : "JSON",
                    data : {
                        nama_subsektor:nama_subsektor,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#Modal_Add').modal('hide'); 
                        $("#subsektor").DataTable().destroy();
                        $("#subsektor").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        // $('.modal-backdrop').removeClass('modal-backdrop');
                        window.location.reload();  
                        showSubsektor();
                    }
                });

                return false;
            });

                //update subsektor
                $('#subsektor').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var upid            = $(this).data('id');
                    var upnama          = $(this).data('nama'); 

                    // alert(upnama);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(upid);
                    $('[name="upnama_subsektor"]').val(upnama);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_nama     = $('#upnama_subsektor').val();

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Subsektor/updateSubsektor",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            nama_subsektor:up_nama,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#subsektor").DataTable().destroy();
                            $("#subsektor").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showSubsektor();
                        }
                    });
                    return false;
                });

                //delete subsektor
                $('#subsektor').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_subsektor_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Subsektor/deleteSubsektor",
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
                        $("#subsektor").DataTable().destroy();
                        $("#subsektor").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showSubsektor();
                    }
                });
                return false;
            });
            });
        </script>
    </body>

    </html>