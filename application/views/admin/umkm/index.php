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
                        <h3 class="text-themecolor">Data UMKM</h3>
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
                                        <th width="30%">Alamat</th>
                                        <th width="15%">Teknologi</th>
                                        <th width="20%">Action</th>
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
                <div class="modal-dialog" role="document" style="max-width: 70%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Data Umkm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row col-12">
                                <div class="col-6">
                                    <label>Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="col-6">
                                    <label>Subsektor</label>
                                    <select class="form-control" name="subsektor" id="subsektor" required>
                                        <option class="form-control" value="" selected="" hidden="" disabled="">Pilih Subsektor</option>
                                        <?php foreach ($subsektor as $key) { ?>
                                            <option value="<?php echo $key->id_subsektor ?>"><?php echo $key->nama_subsektor ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label>Provinsi</label>
                                    <select class="form-control slct_provinsi" name="slct_provinsi" id="slct_provinsi" onchange="change_second2($(this).val(),this)" required>
                                        <option disabled selected hidden value="">Pilih Provinsi</option>
                                        <?php foreach ($provinsi as $key) { ?>
                                            <option value="<?php  echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
                                        <?php }  ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label>Kota/Kabupaten</label>
                                    <select class="form-control slct_kota" name="kota" id="slct_kota" required>
                                        <option disabled selected hidden class="nomor-not" value="">Pilih Kota/Kabupaten</option>
                                        <?php foreach ($kota as $key) { ?>
                                            <option value="<?php echo $key->id_kota ?>" class="nomor-nor-<?php echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
                                        <?php }  ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label>Kecamatan</label>
                                    <input type="text" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label>Status Pemilik</label>
                                    <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan status" required>
                                </div>
                                <div class="col-4">
                                    <label>Upah Karyawan (Rp)</label>
                                    <input type="text" name="upah" id="upah" class="form-control" placeholder="Masukkan upah" required>
                                </div>
                                <div class="col-4">
                                    <label>Sumber Dana</label>
                                    <select class="form-control" name="sumberdana" id="sumberdana" required>
                                        <option class="form-control" selected="" hidden="" disabled="" value="">Pilih Sumberdana</option>
                                        <?php foreach ($sumberdana as $key) { ?>
                                            <option value="<?php echo $key->id_sumberdana ?>"><?php echo $key->nama_sumberdana ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label>Teknologi</label>
                                    <input type="text" name="teknologi" id="teknologi" class="form-control" placeholder="Masukkan teknologi" required>
                                </div>
                                <div class="col-4">
                                    <label>Distribusi</label>
                                    <input type="text" name="distribusi" id="distribusi" class="form-control" placeholder="Masukkan distribusi" required>
                                </div>
                                <div class="col-4">
                                    <label>Ekspor</label>
                                    <input type="text" name="ekspor" id="ekspor" class="form-control" placeholder="Masukkan eskpor" required>
                                </div>
                            </div>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label>Permasalahan</label>
                                    <input type="text" name="permasalahan" id="permasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                                </div>
                                <div class="col-4">
                                    <label>Peluang dan Tantangan</label>
                                    <input type="text" name="peluang" id="peluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                                </div>
                                <div class="col-4">
                                    <label>Kelembagaan</label>
                                    <input type="text" name="kelembagaan" id="kelembagaan" class="form-control" placeholder="Masukkan kelembagaan" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- inputan button simpan dan Cancel -->
                            <input type="text" id="id" name="id" hidden="">
                            <input type="hidden" name="fotolama" id="fotolama" class="form-control">
                            <button type="submit" id="btn_push" class="btn btn-primary ">Save</button>
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="formdetail">
            <div class="modal fade" id="Modal_Detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document" style="max-width: 70%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Umkm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label class="font-weight-bold">Nama</label>
                                    <h5 id="dnama"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Subsektor</label>
                                    <h5 id="dsubsektor"></h5>
                                </div>
                                <div class="col-4">
                                    <img id="dfoto_update" style="display: none;">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row col-12">
                                <div class="col-12">
                                    <label class="font-weight-bold">Alamat</label>
                                    <h5 id="dalamat"></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label class="font-weight-bold">Status Pemilik</label>
                                    <h5 id="dstatus"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Upah Karyawan (Rp)</label>
                                    <h5 id="dupah"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Sumber Dana</label>
                                    <h5 id="dsumberdana"></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label class="font-weight-bold">Teknologi</label>
                                    <h5 id="dteknologi"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Distribusi</label>
                                    <h5 id="ddistribusi"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Ekspor</label>
                                    <h5 id="dekspor"></h5>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row col-12">
                                <div class="col-4">
                                    <label class="font-weight-bold">Permasalahan</label>
                                    <h5 id="dpermasalahan"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Peluang dan Tantangan</label>
                                    <h5 id="dpeluang"></h5>
                                </div>
                                <div class="col-4">
                                    <label class="font-weight-bold">Kelembagaan</label>
                                    <h5 id="dkelembagaan"></h5>
                                </div>
                            </div>
                                <!-- <div class="form-group row col-12 align-items-center">
                                    <div class="col-4">
                                            <label>Upload Foto Produk</label>
                                            <h5 id="dpermasalahan"></h5>
                                    </div>
                                </div> -->
                            </div>
                            <div class="modal-footer">

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
                                <h4 class="modal-title">Delete Data Umkm</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group col-lg-12">
                                    <font>Anda ingin menghapus <b><font id="nama_umkm_del"></font></b> ?</font>
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
                <script src="<?php echo base_url() ?>assets/js/dropzone-amd-module.min.js"></script>
                <script src="<?php echo base_url() ?>assets/js/dropzone.min.js"></script>

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
                                // alert(data[i].pro);
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].nama_umkm+'</td>'+
                                '<td>'+data[i].nama_subsektor+'</td>'+
                                '<td>'+data[i].alamat+' ,'+data[i].kecamatan+' ,'+data[i].kot+' ,'+data[i].pro+'</td>'+
                                '<td>'+data[i].teknologi+'</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'" data-subsektor="'+data[i].nama_subsektor+'" data-status="'+data[i].status_pemilik+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nama_sumberdana+'" data-teknologi="'+data[i].teknologi+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-kelembagaan="'+data[i].kelembagaan+'" data-alamat="'+data[i].alamat+'" data-provinsi="'+data[i].pro+'" data-kota="'+data[i].kot+'" data-kecamatan="'+data[i].kecamatan+'" data-gambar="'+data[i].gambar+'"> <span class="fa fa-info-circle"></span> </a>'+
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'" data-subsektor="'+data[i].id_subsektor+'" data-status="'+data[i].status_pemilik+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].id_sumberdana+'" data-teknologi="'+data[i].teknologi+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-kelembagaan="'+data[i].kelembagaan+'" data-alamat="'+data[i].alamat+'" data-provinsi="'+data[i].provinsi+'" data-kota="'+data[i].id_kota+'" data-kecamatan="'+data[i].kecamatan+'" data-gambar="'+data[i].gambar+'"> <span class="fa fa-edit"></span> </a>'+

                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm galeri" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'"> <span class="fa fa-picture-o"></span> </a>'+
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
                $('#umkm').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                    var id            = $(this).data('id');
                    var nama          = $(this).data('nama');
                    var subsektor          = $(this).data('subsektor');
                    var status          = $(this).data('status');
                    var upah          = $(this).data('upah');
                    var sumberdana          = $(this).data('sumberdana');
                    var teknologi          = $(this).data('teknologi');
                    var distribusi          = $(this).data('distribusi');
                    var permasalahan          = $(this).data('permasalahan');
                    var ekspor          = $(this).data('ekspor');
                    var peluang          = $(this).data('peluang');
                    var kelembagaan          = $(this).data('kelembagaan');
                    var provinsi          = $(this).data('provinsi');
                    var kota          = $(this).data('kota');
                    var kecamatan          = $(this).data('kecamatan');
                    var alamat          = $(this).data('alamat');
                    var gambar          = $(this).data('gambar');
                    // alert(provinsi);

                    document.getElementById("foto_update").height="200";
                    document.getElementById("foto_update").width="260";
                    document.getElementById("foto_update").src="<?=base_url()?>./assets/"+gambar;
                    document.getElementById("foto_update").style.display="block";

                    
                    // memasukkan data ke form updatean
                    $('[name="id"]').val(id);
                    $('[name="nama"]').val(nama);
                    $('[name="subsektor"]').val(subsektor);
                    $('[name="status"]').val(status);
                    $('[name="upah"]').val(upah);
                    $('[name="sumberdana"]').val(sumberdana);
                    $('[name="teknologi"]').val(teknologi);
                    $('[name="distribusi"]').val(distribusi);
                    $('[name="permasalahan"]').val(permasalahan);
                    $('[name="ekspor"]').val(ekspor);
                    $('[name="peluang"]').val(peluang);
                    $('[name="kelembagaan"]').val(kelembagaan);
                    $('[name="slct_provinsi"]').val(provinsi);
                    $('[name="kota"]').val(kota);
                    $('[name="kecamatan"]').val(kecamatan);
                    $('[name="alamat"]').val(alamat);
                    $('[name="fotolama"]').val(gambar);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                $('#formupdate').submit(function(e){
                            e.preventDefault();
                    $.ajax({
                        url:'<?php echo base_url();?>index.php/Umkm/updateUmkm', //URL submit
                        type:"post", //method Submit
                        data:new FormData(this), //penggunaan FormData
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){ 
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide');
                            $("#umkm").DataTable().destroy();
                            $("#umkm").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showUmkm();         
                        }
                    });
                    return false;
                });


                //delete sumberdana
                $('#umkm').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama');

                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_umkm_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault();
                var id = $('#id_del').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Umkm/deleteUmkm",
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
                        $("#umkm").DataTable().destroy();
                        $("#umkm").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showUmkm();
                    }
                });
                return false;
            });

            $('#umkm').on('click','.item_detail',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                    var id            = $(this).data('id');
                    var nama          = $(this).data('nama');
                    var subsektor     = $(this).data('subsektor');
                    var status        = $(this).data('status');
                    var upah          = $(this).data('upah');
                    var sumberdana    = $(this).data('sumberdana');
                    var teknologi     = $(this).data('teknologi');
                    var distribusi    = $(this).data('distribusi');
                    var permasalahan  = $(this).data('permasalahan');
                    var ekspor        = $(this).data('ekspor');
                    var peluang       = $(this).data('peluang');
                    var kelembagaan   = $(this).data('kelembagaan');
                    var provinsi      = $(this).data('provinsi');
                    var kota          = $(this).data('kota');
                    var kecamatan     = $(this).data('kecamatan');
                    var alamat        = $(this).data('alamat');
                    var gambar          = $(this).data('gambar');

                    document.getElementById("dfoto_update").height="100";
                    document.getElementById("dfoto_update").width="160";
                    document.getElementById("dfoto_update").src="<?=base_url()?>./assets/"+gambar;
                    document.getElementById("dfoto_update").style.display="block";

                    
                    // memasukkan data ke form updatean
                    document.getElementById("dnama").innerHTML= nama;
                    document.getElementById("dsubsektor").innerHTML= subsektor;
                    document.getElementById("dstatus").innerHTML= status;
                    document.getElementById("dupah").innerHTML= 'Rp. '+upah;
                    document.getElementById("dsumberdana").innerHTML= sumberdana;
                    document.getElementById("dteknologi").innerHTML= teknologi;
                    document.getElementById("ddistribusi").innerHTML= distribusi;
                    document.getElementById("dpermasalahan").innerHTML= permasalahan;
                    document.getElementById("dekspor").innerHTML= ekspor;
                    document.getElementById("dpeluang").innerHTML= peluang;
                    document.getElementById("dkelembagaan").innerHTML= kelembagaan;
                    // document.getElementById("dkelembagaan").innerHTML= kelembagaan;
                    document.getElementById("dalamat").innerHTML= alamat+', '+kecamatan+', '+kota+', '+provinsi;

                    
                    // alert(upnama);
                    $('#Modal_Detail').modal('show');
                });


            $.ajax({
                url: "<?php echo site_url(); ?>/FormUmkm/select_provinsi",
                success : function(data){
                    $('#formupdate').find('#slct_provinsi').html(data);
                }
            });
            $.ajax({
                url: "<?php echo site_url(); ?>/FormUmkm/select_kota",
                success : function(data){
                    $('#formupdate').find('#slct_kota').html(data);
                }
            });
        });

            function change_second2(value,target) {
                let id_provinsi = value;
                // alert(id_provinsi);
                $(target).parents('.row').find('.slct_kota').find('option').not('.nomor-not').hide();
                $(target).parents('.row').find('.slct_kota').val('0');
                $(target).parents('.row').find('.slct_kota').find('.nomor-nor-'+id_provinsi).show();
            }

            var rupiah = document.getElementById('upah');
            rupiah.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split           = number_string.split(','),
                sisa            = split[0].length % 3,
                rupiah          = split[0].substr(0, sisa),
                ribuan          = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        $('#umkm').on('click','.galeri',function(){
            var id            = $(this).data('id');

            $('[name="idg"]').val(id);
            var myUrl = "<?php echo site_url(); ?>Umkm/formGaleri/"+id;
            // alert(myUrl);
            window.location = myUrl;
            
            // $('#Modal_galeri').modal('show');
        });

        // var idg = 
        // alert(idg);
        
            </script>
        </body>

        </html>