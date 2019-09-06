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
                                    <th width="35%">Alamat</th>
                                    <th width="15%">Teknologi</th>
                                    <th width="15%">Action</th>
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
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                        <div class="col-6">
                                            <label>Subsektor</label>
                                            <select class="form-control" name="subsektor" id="subsektor">
                                                <option class="form-control" value="" selected="" hidden="" disabled="">Pilih Subsektor</option>
                                                <?php foreach ($subsektor as $key) { ?>
                                                    <option value="<?php echo $key->nama_subsektor ?>"><?php echo $key->nama_subsektor ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Provinsi</label>
                                            <select class="form-control slct_provinsi" name="slct_provinsi" id="slct_provinsi" onchange="change_second2($(this).val(),this)">
                                                <option disabled selected hidden>Pilih Provinsi</option>
                                                <?php foreach ($provinsi as $key) { ?>
                                                        <option value="<?php  echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>Kota/Kabupaten</label>
                                            <select class="form-control slct_kota" name="kota" id="slct_kota">
                                                <option disabled selected hidden class="nomor-not">Pilih Kota/Kabupaten</option>
                                                <?php foreach ($kota as $key) { ?>
                                                    <option value="<?php echo $key->nama ?>" class="nomor-nor-<?php echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
                                        <?php }  ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" id="kecamatan" placeholder="Masukkan Kecamatan" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat"></textarea>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Status Pemilik</label>
                                            <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan status">
                                        </div>
                                        <div class="col-4">
                                            <label>Upah Karyawan (Rp)</label>
                                            <input type="number" name="upah" id="upah" class="form-control" placeholder="Masukkan upah">
                                        </div>
                                        <div class="col-4">
                                            <label>Sumber Dana</label>
                                            <select class="form-control" name="sumberdana" id="sumberdana">
                                                <option class="form-control" selected="" hidden="" disabled="">Pilih Sumberdana</option>
                                                <?php foreach ($sumberdana as $key) { ?>
                                                    <option value="<?php echo $key->nama_sumberdana ?>"><?php echo $key->nama_sumberdana ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Teknologi</label>
                                            <input type="text" name="teknologi" id="teknologi" class="form-control" placeholder="Masukkan teknologi">
                                        </div>
                                        <div class="col-4">
                                            <label>Distribusi</label>
                                            <input type="text" name="distribusi" id="distribusi" class="form-control" placeholder="Masukkan distribusi">
                                        </div>
                                        <div class="col-4">
                                            <label>Ekspor</label>
                                            <input type="text" name="ekspor" id="ekspor" class="form-control" placeholder="Masukkan eskpor">
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Permasalahan</label>
                                            <input type="text" name="permasalahan" id="permasalahan" class="form-control" placeholder="Masukkan permasalahan">
                                        </div>
                                        <div class="col-4">
                                            <label>Peluang dan Tantangan</label>
                                            <input type="text" name="peluang" id="peluang" class="form-control" placeholder="Masukkan peluang/tantangan">
                                        </div>
                                        <div class="col-4">
                                            <label>Kelembagaan</label>
                                            <input type="text" name="kelembagaan" id="kelembagaan" class="form-control" placeholder="Masukkan kelembagaan">
                                        </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                                <!-- inputan button simpan dan Cancel -->
                                <input type="text" id="u_id" name="u_id" hidden="">
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
                                        <div class="col-6">
                                            <label class="font-weight-bold">Nama</label>
                                            <h5 id="dnama"></h5>
                                        </div>
                                        <div class="col-6">
                                            <label class="font-weight-bold">Subsektor</label>
                                            <h5 id="dsubsektor"></h5>
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
                                '<td>'+data[i].alamat+' ,'+data[i].kecamatan+' ,'+data[i].kota+' ,'+data[i].nama+'</td>'+
                                '<td>'+data[i].teknologi+'</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_detail" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'" data-subsektor="'+data[i].nama_subsektor+'" data-status="'+data[i].status_pemilik+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nama_sumberdana+'" data-teknologi="'+data[i].teknologi+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-kelembagaan="'+data[i].kelembagaan+'" data-alamat="'+data[i].alamat+'" data-provinsi="'+data[i].provinsi+'" data-kota="'+data[i].kota+'" data-kecamatan="'+data[i].kecamatan+'"> <span class="fa fa-info-circle"></span> </a>'+
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_umkm+'" data-nama="'+data[i].nama_umkm+'" data-subsektor="'+data[i].nama_subsektor+'" data-status="'+data[i].status_pemilik+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nama_sumberdana+'" data-teknologi="'+data[i].teknologi+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-kelembagaan="'+data[i].kelembagaan+'" data-alamat="'+data[i].alamat+'" data-provinsi="'+data[i].provinsi+'" data-kota="'+data[i].kota+'" data-kecamatan="'+data[i].kecamatan+'"> <span class="fa fa-edit"></span> </a>'+

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

                    
                    // memasukkan data ke form updatean
                    $('[name="du_id"]').val(id);
                    $('[name="dnama"]').val(nama);
                    $('[name="dsubsektor"]').val(subsektor);
                    $('[name="dstatus"]').val(status);
                    $('[name="dupah"]').val(upah);
                    $('[name="dsumberdana"]').val(sumberdana);
                    $('[name="dteknologi"]').val(teknologi);
                    $('[name="ddistribusi"]').val(distribusi);
                    $('[name="dpermasalahan"]').val(permasalahan);
                    $('[name="dekspor"]').val(ekspor);
                    $('[name="dpeluang"]').val(peluang);
                    $('[name="delembagaan"]').val(kelembagaan);
                    $('[name="dslct_provinsi"]').val(provinsi);
                    $('[name="dkota"]').val(kota);
                    $('[name="dkecamatan"]').val(kecamatan);
                    $('[name="dalamat"]').val(alamat);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault();
                    // memasukkan data dari form update ke variabel untuk update db
                    var id              = $('#u_id').val();
                    var nama            = $('#nama').val();
                    var subsektor       = $('#subsektor').val();
                    var status          = $('#status').val();
                    var upah            = $('#upah').val();
                    var sumberdana      = $('#sumberdana').val();
                    var teknologi       = $('#teknologi').val();
                    var distribusi      = $('#distribusi').val();
                    var permasalahan    = $('#permasalahan').val();
                    var ekspor          = $('#ekspor').val();
                    var peluang         = $('#peluang').val();
                    var kelembagaan     = $('#kelembagaan').val();
                    var slct_provinsi   = $('#slct_provinsi').val();
                    var kota            = $('#slct_kota').val();
                    var kecamatan       = $('#kecamatan').val();
                    var alamat          = $('#alamat').val();
                    // alert(kota);
                    // exit();

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>Umkm/updateUmkm",
                        dataType : "JSON",
                        data : {
                            id:id,
                            nama_umkm:nama,
                            nama_subsektor:subsektor,
                            provinsi:slct_provinsi,
                            kota:kota,
                            kecamatan:kecamatan,
                            alamat:alamat,
                            status_pemilik:status,
                            upah_tenaga_kerja:upah,
                            nama_sumberdana:sumberdana,
                            teknologi:teknologi,
                            distribusi:distribusi,
                            ekspor:ekspor,
                            permasalahan:permasalahan,
                            peluang_tantangan:peluang,
                            kelembagaan:kelembagaan,
                        },

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
        </script>
    </body>

    </html>