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
                        <h3 class="text-themecolor">Sumberdana</h3>
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
                            <!-- <div class="pull-right"><a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add</a></div> -->
                        <table class="table table-bordered table-responsive-lg" id="umkm" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="20%">Nama</th>
                                    <th width="10%">Subsektor</th>
                                    <th width="40%">Alamat</th>
                                    <th width="15%">Teknologi</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbumkm">
                                
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
        <form id="formupdate">
            <div class="modal fade" id="Modal_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update sumberdana</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Nama sumberdana</label>
                                            <input type="text" id="upnama_sumberdana" name="upnama_sumberdana" class="form-control" placeholder="Masukkan sumberdana" style="width: 100%" required>
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
                            <h4 class="modal-title">Delete sumberdana</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="nama_sumberdana_del"></font></b> ?</font>
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
                showUmkm();
                //get data sumberdana
                function showUmkm() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>Umkm/getData',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;

                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].nama_umkm+'</td>'+
                                '<td>'+data[i].nama_subsektor+'</td>'+
                                '<td>'+data[i].alamat+' ,'+data[i].kecamatan+' ,'+data[i].kota+' ,'+data[i].provinsi+'</td>'+
                                '<td>'+data[i].teknologi+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'" data-subsektor="'+data[i].nama_subsektor+'" data-status="'+data[i].status_pemilik+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nama_sumberdana+'" data-teknologi="'+data[i].teknologi+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].nama_ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-kelembagaan="'+data[i].kelembagaan+'" data-alamat="'+data[i].alamat+'" data-provinsi="'+data[i].provinsi+'" data-kota="'+data[i].kota+'" data-kecamatan="'+data[i].kecamatan+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#umkm').DataTable().destroy();
                            $('#umkm').find('tbody').empty();
                            $('#tbumkm').html(html);
                            $('#umkm').DataTable({
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
                

                //update sumberdana
                $('#sumberdana').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var upid            = $(this).data('id');
                    var upnama          = $(this).data('nama'); 

                    // alert(upnama);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(upid);
                    $('[name="upnama_sumberdana"]').val(upnama);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_nama     = $('#upnama_sumberdana').val();

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Sumberdana/updateSumberdana",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            nama_sumberdana:up_nama,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#sumberdana").DataTable().destroy();
                            $("#sumberdana").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showSumberdana();
                        }
                    });
                    return false;
                });

                //delete sumberdana
                $('#sumberdana').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_sumberdana_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Sumberdana/deleteSumberdana",
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
                        $("#sumberdana").DataTable().destroy();
                        $("#sumberdana").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showsumberdana();
                    }
                });
                return false;
            });
            });
        </script>
    </body>

    </html>