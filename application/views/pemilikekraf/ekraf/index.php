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
                        <h3 class="text-themecolor">Data Ekraf</h3>
                        
                    </div>
                    <div class="col-md-7 pull-right">
                        <?php $session=$this->session->userdata('logged_in'); if ($session['id_ekraf'] == null) { ?>
                            <a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add">
                                <span class="fa fa-plus"></span> Add</a>
                            <?php }else{ ?>
                                <a href="javascript:void(0);" class="btn btn-warning float-right" onclick="showUpdate()">
                                    <span class="fa fa-edit"></span> Update</a>
                                <?php } ?>

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
                             <?php $session=$this->session->userdata('logged_in'); if ($session['id_ekraf'] == null) { ?>
                                <div class="card" style="padding: 10px">
                                    <div class="modal-body">
                                        <h1><center>Tidak Ada Data Ekraf</center></h1>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="card" style="padding: 10px">
                                    <div class="modal-body">
                                        <h3><center>Data Ekraf</center></h3>
                                        <div class="form-group row col-12">
                                            <div class="col-4">
                                                <b><label>Nama</label></b><br>
                                                <font id="nama"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Desa/Kelurahan</label></b><br>
                                                <font id="desa"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Alamat</label></b><br>
                                                <font id="alamat"></font>
                                            </div>

                                        </div>
                                        <div class="form-group row col-12">
                                            <div class="col-4"> 
                                                <b><label>Sentra</label></b><br>
                                                <font id="sentra"></font>
                                            </div>
                                            <div class="col-4"> 
                                                <b><label>Status Pemilik</label></b><br>
                                                <font id="status"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Jumlah Karyawan</label></b><br>
                                                <font id="jk"></font>
                                            </div>
                                        </div>
                                        <div class="form-group row col-12">
                                            <div class="col-4">
                                                <b><label>Upah Karyawan (Rp)</label></b><br>
                                                Rp. <font id="upah"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Sumber Dana</label></b><br>
                                                <font id="sumberdana"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Distribusi</label></b><br>
                                                <font id="distribusi"></font>
                                            </div>
                                        </div>
                                        <div class="form-group row col-12">
                                            <div class="col-4">
                                                <b><label>Permasalahan</label></b><br>
                                                <font id="permasalahan"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Ekspor</label></b><br>
                                                <font id="ekspor"></font>
                                            </div>
                                            <div class="col-4">
                                                <b><label>Peluang dan Tantangan</label></b><br>
                                                <font id="peluang"></font>
                                            </div>
                                        </div>
                                        <h3><center>Perijinan Ekraf</center></h3>

                                        <div class="form-group row col-12">
                                            <div class="col-3">
                                                <b><label>Perijinan</label></b><br>
                                                <font id="perijinan"></font>
                                            </div>
                                            <div class="col-3">
                                                <b><label>Merk</label></b><br>
                                                <font id="merk"></font>
                                            </div>
                                            <div class="col-3">
                                                <b><label>No Merk</label></b><br>
                                                <font id="no_merk"></font>
                                            </div>
                                            <div class="col-3">
                                                <b><label>Tanggal Merk</label></b><br>
                                                <font id="tgl_merk"></font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
            <form id="forminput">
                <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 70%">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Ekraf</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Nama</label>
                                        <input type="text" name="inama" id="inama" class="form-control" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Pilih Desa/Kelurahan</label>
                                        <input type="text" id="idesa" name="idesa" class="form-control" placeholder="Masukkan Desa/kelurahan" list="data" required autocomplete="off" />
                                        <datalist id="data">
                                            <?php foreach ($desa as $key => $value) : ?>
                                                <option value="<?= $value->nd ?>-<?= $value->nk?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nd ?>-<?= $value->nk ?></option>
                                            <?php endforeach; ?>
                                        </datalist>
                                    </div>
                                    <div class="col-4">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="ialamat" id="ialamat" placeholder="Masukkan alamat" required></textarea>
                                    </div>

                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4"> 
                                        <label>Pilih Sentra</label>
                                        <select name="isentra" id="isentra" class="form-control" required="">
                                            <option value="" selected="" hidden="">Pilih Sentra</option>
                                            <?php foreach ($sentra as $key): ?>
                                                <option value="<?php echo $key->id_sentra ?>"><?php echo $key->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-4"> 
                                        <label>Pilih Status</label>
                                        <select name="istatus" id="istatus" class="form-control" required="">
                                            <option value="" selected="" hidden="">Pilih Status</option>
                                            <?php foreach ($status as $key): ?>
                                                <option value="<?php echo $key->id_status_pemilik ?>"><?php echo $key->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Jumlah Karyawan</label>
                                        <input type="text" name="ijk" id="ijk" class="form-control" placeholder="Masukkan Jumlah" required>
                                    </div>
                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Upah Karyawan (Rp)</label>
                                        <input type="text" name="iupah" id="iupah" class="form-control" placeholder="Masukkan upah" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Sumber Dana</label>
                                        <select class="form-control" name="isumberdana" id="isumberdana" required>
                                            <option class="form-control" selected="" hidden="" disabled="" value="">Pilih Sumberdana</option>
                                            <?php foreach ($sumberdana as $key) { ?>
                                                <option value="<?php echo $key->id_sumber_dana ?>"><?php echo $key->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Distribusi</label>
                                        <input type="text" name="idistribusi" id="idistribusi" class="form-control" placeholder="Masukkan distribusi" required>
                                    </div>
                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Permasalahan</label>
                                        <input type="text" name="ipermasalahan" id="ipermasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Ekspor</label>
                                        <input type="text" name="iekspor" id="iekspor" class="form-control" placeholder="Masukkan eskpor" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Peluang dan Tantangan</label>
                                        <input type="text" name="ipeluang" id="ipeluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                                    </div>
                                </div>
                                <h3><center>Perijinan Ekraf</center></h3>

                                <div class="form-group row col-12">
                                    <div class="col-3">
                                        <label>Perijinan</label>
                                        <input type="text" name="iperijinan" id="iperijinan" class="form-control" placeholder="Masukkan perijinan" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Merk</label>
                                        <input type="text" name="imerk" id="imerk" class="form-control" placeholder="Masukkan Merk" required>
                                    </div>
                                    <div class="col-3">
                                        <label>No Merk</label>
                                        <input type="text" name="ino_merk" id="ino_merk" class="form-control" placeholder="Masukkan Nomor" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Tanggal Merk</label>
                                        <input type="date" name="itgl" id="itgl" class="form-control" placeholder="Masukkan Tanggal " required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btn_push" class="btn btn-primary ">Add</button>
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form id="formupdate">
                <div class="modal fade" id="Modal_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 70%">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Data ekraf</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Nama</label>
                                        <input type="text" name="unama" id="unama" class="form-control" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Pilih Desa/Kelurahan</label>
                                        <input type="text" id="udesa" name="udesa" class="form-control" placeholder="Masukkan Desa/kelurahan" list="data" required autocomplete="off" />
                                        <datalist id="data">
                                            <?php foreach ($desa as $key => $value) : ?>
                                                <option value="<?= $value->nd ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nd ?>-<?= $value->nk ?></option>
                                            <?php endforeach; ?>
                                        </datalist>
                                    </div>
                                    <div class="col-4">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="ualamat" id="ualamat" placeholder="Masukkan alamat" required></textarea>
                                    </div>

                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4"> 
                                        <label>Pilih Sentra</label>
                                        <select name="usentra" id="usentra" class="form-control" required="">
                                            <option value="" selected="" hidden="">Pilih Sentra</option>
                                            <?php foreach ($sentra as $key): ?>
                                                <option value="<?php echo $key->id_sentra ?>"><?php echo $key->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-4"> 
                                        <label>Pilih Status</label>
                                        <select name="ustatus" id="ustatus" class="form-control" required="">
                                            <option value="" selected="" hidden="">Pilih Status</option>
                                            <?php foreach ($status as $key): ?>
                                                <option value="<?php echo $key->id_status_pemilik ?>"><?php echo $key->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Jumlah Karyawan</label>
                                        <input type="text" name="ujk" id="ujk" class="form-control" placeholder="Masukkan Jumlah" required>
                                    </div>
                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Upah Karyawan (Rp)</label>
                                        <input type="text" name="uupah" id="uupah" class="form-control" placeholder="Masukkan upah" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Sumber Dana</label>
                                        <select class="form-control" name="usumberdana" id="usumberdana" required>
                                            <option class="form-control" selected="" hidden="" disabled="" value="">Pilih Sumberdana</option>
                                            <?php foreach ($sumberdana as $key) { ?>
                                                <option value="<?php echo $key->id_sumber_dana ?>"><?php echo $key->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Distribusi</label>
                                        <input type="text" name="udistribusi" id="udistribusi" class="form-control" placeholder="Masukkan distribusi" required>
                                    </div>
                                </div>
                                <div class="form-group row col-12">
                                    <div class="col-4">
                                        <label>Permasalahan</label>
                                        <input type="text" name="upermasalahan" id="upermasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Ekspor</label>
                                        <input type="text" name="uekspor" id="uekspor" class="form-control" placeholder="Masukkan eskpor" required>
                                    </div>
                                    <div class="col-4">
                                        <label>Peluang dan Tantangan</label>
                                        <input type="text" name="upeluang" id="upeluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                                    </div>
                                </div>
                                <h3><center>Perijinan Ekraf</center></h3>

                                <div class="form-group row col-12">
                                    <div class="col-3">
                                        <label>Perijinan</label>
                                        <input type="text" name="uperijinan" id="uperijinan" class="form-control" placeholder="Masukkan perijinan" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Merk</label>
                                        <input type="text" name="umerk" id="umerk" class="form-control" placeholder="Masukkan Merk" required>
                                    </div>
                                    <div class="col-3">
                                        <label>No Merk</label>
                                        <input type="text" name="uno_merk" id="uno_merk" class="form-control" placeholder="Masukkan Nomor" required>
                                    </div>
                                    <div class="col-3">
                                        <label>Tanggal Merk</label>
                                        <input type="date" name="utgl" id="utgl" class="form-control" placeholder="Masukkan Tanggal " required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- inputan button simpan dan Cancel -->
                                <input type="text" id="uid" name="uid" hidden="">
                                <!-- <input type="hidden" name="fotolama" id="fotolama" class="form-control"> -->
                                <button type="submit" id="btn_push" class="btn btn-primary ">Save</button>
                                <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
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
                // getKab();
                // alert(getKab());
                showekraf();
                //get data sumberdana
                function showekraf() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>PemilikEkraf/getDataEkraf',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            // alert(data)
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                var id            = data[i].id_ekraf;
                                var nama          = data[i].ne;
                                var desa          = data[i].nd;
                                var alamat          = data[i].alamat;
                                var sentra          = data[i].ns;
                                var status          = data[i].nt;
                                var jk              = data[i].jumlah_karyawan;
                                var upah          = data[i].upah_tenaga_kerja;
                                var sumberdana          = data[i].nu;
                                var distribusi          = data[i].distribusi;
                                var permasalahan          = data[i].permasalahan;
                                var ekspor          = data[i].ekspor;
                                var peluang          = data[i].peluang_tantangan;
                                var perijinan          = data[i].perijinan;
                                var no_merk          = data[i].no_merk;
                                var merk          = data[i].merk;
                                var tgl_merk          = data[i].tgl_merk;
                                var kecamatan          = data[i].kec;
                                var kota          = data[i].kota;
                                var provinsi          = data[i].provinsi;

                                document.getElementById("nama").innerHTML= nama;
                                document.getElementById("desa").innerHTML= desa;
                                document.getElementById("alamat").innerHTML= alamat+', Kec. '+kecamatan+', '+kota+', '+provinsi;
                                document.getElementById("sentra").innerHTML= sentra;
                                document.getElementById("status").innerHTML= status;
                                document.getElementById("jk").innerHTML= jk;
                                document.getElementById("upah").innerHTML= upah;
                                document.getElementById("sumberdana").innerHTML= sumberdana;
                                document.getElementById("distribusi").innerHTML= distribusi;
                                document.getElementById("permasalahan").innerHTML= permasalahan;
                                document.getElementById("ekspor").innerHTML= ekspor;
                                document.getElementById("peluang").innerHTML= peluang;
                                document.getElementById("perijinan").innerHTML= perijinan;
                                document.getElementById("no_merk").innerHTML= no_merk;
                                document.getElementById("merk").innerHTML= merk;
                                document.getElementById("tgl_merk").innerHTML= tgl_merk;
                            }
                        }
                    });
                }

                $('#forminput').submit(function(e){
                    e.preventDefault();
                    // if ($('#nama_umkm').get(0).files.length != 0) {
                        $.ajax({
                        url:'<?php echo base_url();?>index.php/PemilikEkraf/newEkraf', //URL submit
                        type:"post", //method Submit
                        data:new FormData(this), //penggunaan FormData
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){ 
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil menambahkan data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Add').modal('hide');
                            document.getElementById('forminput').reset();
                            window.location.reload();  
                        }
                        
                    });
                        return false;
            });


                //update sumberdana
                $('#ekraf').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                    var id            = $(this).data('id');
                    var ne          = $(this).data('nama_ekraf');
                    var alamat          = $(this).data('alamat');
                    var nd          = $(this).data('nama_desa');
                    var ns          = $(this).data('sentra');
                    var nt          = $(this).data('status');
                    var jk          = $(this).data('jk');
                    var upah          = $(this).data('upah');
                    var nu          = $(this).data('sumberdana');
                    var distribusi          = $(this).data('distribusi');
                    var permasalahan    = $(this).data('permasalahan');
                    var ekspor          = $(this).data('ekspor');
                    var peluang          = $(this).data('peluang');
                    var perijinan          = $(this).data('perijinan');
                    var merk          = $(this).data('merk');
                    var no_merk          = $(this).data('no_merk');
                    var tgl_merk          = $(this).data('tgl');

                    // memasukkan data ke form updatean
                    $('[name="id"]').val(id);
                    $('[name="nama"]').val(ne);
                    $('[name="alamat"]').val(alamat);
                    $('[name="desa"]').val(nd);
                    $('[name="sentra"]').val(ns);
                    $('[name="status"]').val(nt);
                    $('[name="jk"]').val(jk);
                    $('[name="upah"]').val(upah);
                    $('[name="sumberdana"]').val(nu);
                    $('[name="distribusi"]').val(distribusi);
                    $('[name="permasalahan"]').val(permasalahan);
                    $('[name="ekspor"]').val(ekspor);
                    $('[name="peluang"]').val(peluang);
                    $('[name="perijinan"]').val(perijinan);
                    $('[name="merk"]').val(merk);
                    $('[name="no_merk"]').val(no_merk);
                    $('[name="tgl"]').val(tgl_merk);

                    // alert(nd);
                    $('#Modal_Update').modal('show');
                });

                $('#formupdate').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url:'<?php echo base_url();?>index.php/PemilikEkraf/updateEkraf', //URL submit
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
                            document.getElementById('formupdate').reset();
                            showekraf();         
                        }
                    });
                    return false;
                });

                


                $('#ekraf').on('click','.item_detail',function(){
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



            });


            var rupiah = document.getElementById('iupah');
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

        // function getKab() {
        //     $.ajax({
        //         url : "<?php echo site_url('Operator/getKab') ?>",
        //         success : function(data){
        //             // alert(data);
        //             $('#kab').html(data);
        //         }
        //     })
        // }

        // var idg = 
        // alert(idg);

        function showUpdate() {
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url()?>PemilikEkraf/getDataEkraf',
                async : false,
                dataType : 'json',
                success : function(data){
                            // alert(data)
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                var id            = data[i].id_ekraf;
                                var nama          = data[i].ne;
                                var desa          = data[i].nd;
                                var alamat          = data[i].alamat;
                                var sentra          = data[i].ns;
                                var status          = data[i].nt;
                                var jk              = data[i].jumlah_karyawan;
                                var upah          = data[i].upah_tenaga_kerja;
                                var sumberdana          = data[i].nu;
                                var distribusi          = data[i].distribusi;
                                var permasalahan          = data[i].permasalahan;
                                var ekspor          = data[i].ekspor;
                                var peluang          = data[i].peluang_tantangan;
                                var perijinan          = data[i].perijinan;
                                var no_merk          = data[i].no_merk;
                                var merk          = data[i].merk;
                                var tgl_merk          = data[i].tgl_merk;
                                var kecamatan          = data[i].kec;
                                var kota          = data[i].kota;
                                var provinsi          = data[i].provinsi;
                                var id_sentra          = data[i].id_sentra;
                                var id_status_pemilik          = data[i].id_status_pemilik;
                                var id_sumber_dana          = data[i].id_sumber_dana;


                                $('[name="uid"]').val(id);
                                $('[name="unama"]').val(nama);
                                $('[name="udesa"]').val(desa);
                                $('[name="ualamat"]').val(alamat);
                                $('[name="usentra"]').val(id_sentra);
                                $('[name="ustatus"]').val(id_status_pemilik);
                                $('[name="ujk"]').val(jk);
                                $('[name="uupah"]').val(upah);
                                $('[name="usumberdana"]').val(id_sumber_dana);
                                $('[name="udistribusi"]').val(distribusi);
                                $('[name="upermasalahan"]').val(permasalahan);
                                $('[name="uekspor"]').val(ekspor);
                                $('[name="upeluang"]').val(peluang);
                                $('[name="uperijinan"]').val(perijinan);
                                $('[name="uno_merk"]').val(no_merk);
                                $('[name="umerk"]').val(merk);
                                $('[name="utgl"]').val(tgl_merk);
                                $('#Modal_Update').modal('show');

                            }
                        }
                    });
        } 
    </script>
</body>

</html>