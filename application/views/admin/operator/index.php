
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
                        <h3 class="text-themecolor">List Akun Operator</h3>
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
                        <table class="table table-bordered table-responsive-lg" id="operator" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="20%">Kota/Kabupaten</th>
                                    <th width="20%">Nama</th>
                                    <th width="10%">Username</th>
                                    <th width="20%">Email</th>
                                    <th width="10%">No Hp</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tboperator">
                                
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
                            <h4 class="modal-title">New Akun Operator</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Pilih Kota/Kabupaten</label>
                                            <input type="text" id="kota" class="form-control" placeholder="Masukkan Kota" list="data" required autocomplete="off" />
                                            <datalist id="data">
                                                <?php foreach ($this->db->get('kab_kota')->result() as $key => $value) : ?>
                                                <option value="<?= $value->nama ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nama ?></option>
                                            <?php endforeach; ?>
                                            </datalist> 
                                        </div>
                                        <div class="col-12">
                                            <label>Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>No Hp</label>
                                            <input type="text" id="hp" class="form-control" placeholder="Masukkan No Hp" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Username</label>
                                            <input type="text" id="username" class="form-control" placeholder="Masukkan Username" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Password</label>
                                            <input type="password" id="password" class="form-control" placeholder="Masukkan Password" style="width: 100%" required>
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
                            <h4 class="modal-title">Update Akun Operator</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Pilih Kota/Kabupaten</label>
                                            <input type="text" id="kotaup" name="kotaup" class="form-control" placeholder="Masukkan Kota" list="data" required autocomplete="off" />
                                            <datalist id="data">
                                                <?php foreach ($this->db->get('kab_kota')->result() as $key => $value) : ?>
                                                <option value="<?= $value->nama ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nama ?></option>
                                            <?php endforeach; ?>
                                            </datalist> 
                                        </div>
                                        <div class="col-12">
                                            <label>Nama</label>
                                            <input type="text" id="namaup" name="namaup" class="form-control" placeholder="Masukkan Nama" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Email</label>
                                            <input type="email" id="emailup" name="emailup" class="form-control" placeholder="Masukkan Email" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>No Hp</label>
                                            <input type="text" id="hpup" name="hpup" class="form-control" placeholder="Masukkan No Hp" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Username</label>
                                            <input type="text" id="usernameup" name="usernameup" class="form-control" placeholder="Masukkan Username" style="width: 100%" required>
                                        </div>
                                        <div class="col-12">
                                            <label>Password</label>
                                            <input type="password" id="passwordup" name="passwordup" class="form-control" placeholder="Masukkan Password" style="width: 100%" required>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <!-- inputan button simpan dan Cancel -->
                                        <input type="text" id="u_id" name="u_id" hidden="">
                                        <button type="submit" id="btn_push2" class="btn btn-primary ">Save</button>
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
                            <h4 class="modal-title">Delete Operator</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="nama_operator_del"></font></b> ?</font>
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
                showOperator();
                //get data subsektor
                function showOperator() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Operator/getData',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].kota+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].no_hp+'</td>'+
                                '<td>'+ 
                                
                                '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_user+'" data-nama="'+data[i].name+'" data-kota="'+data[i].kota+'" data-email="'+data[i].email+'" data-no_hp="'+data[i].no_hp+'" data-username="'+data[i].username+'" data-password="'+data[i].password+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_user+'" data-nama="'+data[i].name+'"> <span class="fa fa-trash"></span> </a>'+

                                '</td>'+
                                '</tr>';
                            }
                            $('#operator').DataTable().destroy();
                            $('#operator').find('tbody').empty();
                            $('#tboperator').html(html);
                            $('#operator').DataTable({
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
                var nama       = $('#nama').val();
                var kota       = $('#kota').val();
                var email      = $('#email').val();
                var hp         = $('#hp').val();
                var username   = $('#username').val();
                var password   = $('#password').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Operator/newOperator",
                    dataType : "JSON",
                    data : {
                        nama:nama,
                        kota:kota,
                        email:email,
                        hp:hp,
                        username:username,
                        password:password,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#Modal_Add').modal('hide'); 
                        $("#operator").DataTable().destroy();
                        $("#operator").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showOperator();
                    }
                });

                return false;
            });

                //update subsektor
                $('#operator').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var upid            = $(this).data('id');
                    var upnama          = $(this).data('nama'); 
                    var upkota          = $(this).data('kota'); 
                    var upemail         = $(this).data('email'); 
                    var upnohp          = $(this).data('no_hp'); 
                    var upusername      = $(this).data('username'); 
                    var uppassword      = $(this).data('password'); 

                    // alert(upusername);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(upid);
                    $('[name="namaup"]').val(upnama);
                    $('[name="kotaup"]').val(upkota);
                    $('[name="emailup"]').val(upemail);
                    $('[name="hpup"]').val(upnohp);
                    $('[name="usernameup"]').val(upusername);
                    $('[name="passwordup"]').val(uppassword);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_nama     = $('#namaup').val();
                    var up_kota     = $('#kotaup').val();
                    var up_email     = $('#emailup').val();
                    var up_hp     = $('#hpup').val();
                    var up_username     = $('#usernameup').val();
                    var up_password     = $('#passwordup').val();
                    // alert(up_nama);
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Operator/updateOperator",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            nama:up_nama,
                            kota:up_kota,
                            email:up_email,
                            hp:up_hp,
                            username:up_username,
                            password:up_password,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#operator").DataTable().destroy();
                            $("#operator").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showOperator();
                        }
                    });
                    return false;
                });

                //delete subsektor
                $('#operator').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(nama);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_operator_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Operator/deleteOperator",
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
                        $("#operator").DataTable().destroy();
                        $("#operator").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showOperator();
                    }
                });
                return false;
            });
            });
        </script>
    </body>

    </html>