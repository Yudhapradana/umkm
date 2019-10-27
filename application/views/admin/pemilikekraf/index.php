
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
            <h3 class="text-themecolor">Daftar Akun Pemilik Ekraf</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="card" style="padding: 10px">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3 class="text-themecolor">Akun Pemilik Ekraf</h3>
                    <h5>Akun pemilik ekraf yang sudah memiliki ekraf</h5>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-responsive-lg" id="pemilikekraf" width="100%">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="20%">Ekraf</th>
                        <th width="20%">Nama</th>
                        <th width="10%">Username</th>
                        <th width="20%">Email</th>
                        <th width="10%">No Hp</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody id="tbpemilikekraf">

                </tbody>
            </table>
        </div>

        <div class="card" style="padding: 10px">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3 class="text-themecolor">Daftar Tunggu Akun Pemilik Ekraf</h3>
                    <h5>Akun pemilik ekraf yang belum memiliki ekraf</h5>
                </div>
            </div>
            <table class="table table-bordered table-responsive-lg" id="pemilikekraf2" width="100%">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <!-- <th width="20%">Ekraf</th> -->
                        <th width="20%">Nama</th>
                        <th width="20%">Username</th>
                        <th width="20%">Email</th>
                        <th width="20%">No Hp</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
                <tbody id="tbpemilikekraf2">

                </tbody>
            </table>
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
                    <h4 class="modal-title">New Akun Pemilik Ekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">               
                    <div class="container-fluid">   
                        <div class="row">        
                            <!-- form inputan nama kegiatan -->
                            <div class="form-group col-lg-12 row">
                                <div class="col-12">
                                    <label>Pilih Ekraf</label>
                                    <input type="text" id="ekraf" class="form-control" placeholder="Masukkan Ekraf" list="data" required autocomplete="off" />
                                    <datalist id="data">
                                        <?php foreach ($this->db->get('ekraf')->result() as $key => $value) : ?>
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
                    <h4 class="modal-title">Update Akun</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">               
                    <div class="container-fluid">   
                        <div class="row">        
                            <!-- form inputan nama kegiatan -->
                            <div class="form-group col-lg-12 row">
                                <div class="col-12">
                                    <label>Pilih Ekraf</label>
                                    <input type="text" id="ekrafup" name="ekrafup" class="form-control" placeholder="Masukkan Ekraf" list="data" required autocomplete="off" />
                                    <datalist id="data">
                                        <?php foreach ($this->db->get('ekraf')->result() as $key => $value) : ?>
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
<form id="formupdate2">
    <div class="modal fade" id="Modal_Update2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Akun Yang belum memiliki ekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">               
                    <div class="container-fluid">   
                        <div class="row">        
                            <!-- form inputan nama kegiatan -->
                            <div class="form-group col-lg-12 row">
                                <div class="col-12">
                                    <label>Nama</label>
                                    <input type="text" id="namaup2" name="namaup2" class="form-control" placeholder="Masukkan Nama" style="width: 100%" required>
                                </div>
                                <div class="col-12">
                                    <label>Email</label>
                                    <input type="email" id="emailup2" name="emailup2" class="form-control" placeholder="Masukkan Email" style="width: 100%" required>
                                </div>
                                <div class="col-12">
                                    <label>No Hp</label>
                                    <input type="text" id="hpup2" name="hpup2" class="form-control" placeholder="Masukkan No Hp" style="width: 100%" required>
                                </div>
                                <div class="col-12">
                                    <label>Username</label>
                                    <input type="text" id="usernameup2" name="usernameup2" class="form-control" placeholder="Masukkan Username" style="width: 100%" required>
                                </div>
                            </div>
                            <!--  -->
                            <div class="modal-footer">
                                <!-- inputan button simpan dan Cancel -->
                                <input type="text" id="u_id2" name="u_id2" hidden="">
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
                    <h4 class="modal-title">Delete pemilikekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">                          

                    <div class="form-group col-lg-12">
                        <font>Anda ingin menghapus <b><font id="nama_akun_del"></font></b> ?</font>
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
<form id="formdelete2">
    <div class="modal fade" id="Modal_Delete2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">                          

                    <div class="form-group col-lg-12">
                        <font>Anda ingin menghapus <b><font id="nama_akun_del2"></font></b> ?</font>
                        <input type="hidden" name="id_del2" id="id_del2" class="form-control">
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
<form id="formconfirmation">
    <div class="modal fade" id="Modal_Confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Akun Untuk Pemilik Ekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">                          

                    <div class="form-group col-lg-12">
                        <font>Anda ingin mengaktifkan akun <b><font id="nama_akun"></font></b> ?</font>
                        <input type="hidden" name="idakun" id="idakun" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn_confirm" class="btn btn-success">Confirmation</button>    
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
                showPemilikEkraf();
                showPemilikEkraf2();
                //get data pemilikekraf
                function showPemilikEkraf() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/PemilikEkraf/getData',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].ne+'</td>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].no_hp+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_user+'" data-nama="'+data[i].name+'" data-ne="'+data[i].ne+'" data-email="'+data[i].email+'" data-no_hp="'+data[i].no_hp+'" data-username="'+data[i].username+'" data-password="'+data[i].password+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_user+'" data-nama="'+data[i].name+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#pemilikekraf').DataTable().destroy();
                            $('#pemilikekraf').find('tbody').empty();
                            $('#tbpemilikekraf').html(html);
                            $('#pemilikekraf').DataTable({
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

                function showPemilikEkraf2() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/PemilikEkraf/getDataWaiting',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                var cls = " ";
                                var button = " ";
                                var item = " ";
                                if (data[i].role == null) {
                                    cls = "fa-check-square";
                                    button = "success";
                                    item = "confirmation";
                                }else{
                                    item = "hide";
                                }
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].no_hp+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-'+button+' btn-sm '+item+'" data-id="'+data[i].id_user+'" data-nama="'+data[i].nama+'" data-username="'+data[i].username+'" data-email="'+data[i].email+'" data-no_hp="'+data[i].no_hp+'"> <span class="fa '+cls+'"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete2" data-id="'+data[i].id_user+'" data-nama="'+data[i].nama+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#pemilikekraf2').DataTable().destroy();
                            $('#pemilikekraf2').find('tbody').empty();
                            $('#tbpemilikekraf2').html(html);
                            $('#pemilikekraf2').DataTable({
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
                //input data
                $('#formbaru').submit(function(e){
                    e.preventDefault();
                // memasukkan data inputan ke variabel
                var nama       = $('#nama').val();
                var ekraf       = $('#ekraf').val();
                var email      = $('#email').val();
                var hp         = $('#hp').val();
                var username   = $('#username').val();
                var password   = $('#password').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Pemilikekraf/newPemilikEkraf",
                    dataType : "JSON",
                    data : {
                        nama:nama,
                        ekraf:ekraf,
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
                        $("#pemilikekraf").DataTable().destroy();
                        $("#pemilikekraf").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showPemilikEkraf();
                    }
                });

                return false;
            });

                //update pemilikekraf
                $('#pemilikekraf').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var upid            = $(this).data('id');
                    var upnama          = $(this).data('nama'); 
                    var upne          = $(this).data('ne'); 
                    var upemail         = $(this).data('email'); 
                    var upnohp          = $(this).data('no_hp'); 
                    var upusername      = $(this).data('username'); 
                    var uppassword      = $(this).data('password'); 

                    // alert(upusername);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(upid);
                    $('[name="namaup"]').val(upnama);
                    $('[name="ekrafup"]').val(upne);
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
                    var up_ne     = $('#ekrafup').val();
                    var up_email     = $('#emailup').val();
                    var up_hp     = $('#hpup').val();
                    var up_username     = $('#usernameup').val();
                    var up_password     = $('#passwordup').val();

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/PemilikEkraf/updatePemilikEkraf",
                        dataType : "JSON",
                        data : { 
                         id:up_id,
                         nama:up_nama,
                         ekraf:up_ne,
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
                        $("#pemilikekraf").DataTable().destroy();
                        $("#pemilikekraf").find('tbody').empty();
                        document.getElementById('formupdate').reset();
                        showPemilikEkraf();
                    }
                });
                    return false;
                });

                //delete pemilikekraf
                $('#pemilikekraf').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_akun_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Pemilikekraf/deletePemilikEkraf",
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
                        $("#pemilikekraf").DataTable().destroy();
                        $("#pemilikekraf").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showPemilikEkraf();
                    }
                });
                return false;
            });

            $('#pemilikekraf2').on('click','.item_delete2',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(act);
                $('#Modal_Delete2').modal('show');
                document.getElementById("nama_akun_del2").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete2').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Pemilikekraf/deletePemilikEkraf",
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
                        $('#Modal_Delete2').modal('hide'); 
                        $("#pemilikekraf2").DataTable().destroy();
                        $("#pemilikekraf2").find('tbody').empty();
                        document.getElementById('formdelete2').reset();
                        showPemilikEkraf2();
                    }
                });
                return false;
            });

            $('#pemilikekraf2').on('click','.confirmation',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama'); 
                    
                // alert(act);
                $('#Modal_Confirmation').modal('show');
                document.getElementById("nama_akun").innerHTML=nama;
                $('[name="idakun"]').val(id);
            });

            //delete record to database
            $('#formconfirmation').submit(function(e){
                e.preventDefault(); 
                var id = $('#idakun').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Pemilikekraf/confirmation",
                    dataType : "JSON",
                    data : {
                        id:id,
                    },
                    success: function(){
                        $('[name="idakun"]').val("");
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil Konfirmasi akun ',
                            showConfirmButton: true,
                        })
                        $('#Modal_Confirmation').modal('hide'); 
                        $("#pemilikekraf").DataTable().destroy();
                        $("#pemilikekraf").find('tbody').empty();
                        $("#pemilikekraf2").DataTable().destroy();
                        $("#pemilikekraf2").find('tbody').empty();
                        document.getElementById('formconfirmation').reset();
                        showPemilikEkraf();
                        showPemilikEkraf2();
                    }
                });
                return false;
            });


        });
    </script>
</body>

</html>