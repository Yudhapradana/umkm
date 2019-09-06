
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
                        <h3 class="text-themecolor">Form Input Data UMKM</h3>
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
                            <form id="forminput">
                                <div class="modal-body">
                                <div class="form-group row col-12">
                                        <div class="col-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                                        </div>
                                        <div class="col-6">
                                            <label>Subsektor</label>
                                            <select class="form-control" name="subsektor" id="subsektor" required>
                                                <option class="form-control" selected="" value="" hidden="" disabled="">Pilih Subsektor</option>
                                                <?php foreach ($subsektor as $key) { ?>
                                                    <option value="<?php echo $key->nama_subsektor ?>"><?php echo $key->nama_subsektor ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Provinsi</label>
                                            <select class="form-control slct_provinsi" name="provinsi" id="slct_provinsi" onchange="change_second2($(this).val(),this)" required>
                                                <option disabled selected hidden value="">Pilih Provinsi</option>

                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>Kota/Kabupaten</label>
                                            <select class="form-control slct_kota" name="kota" id="slct_kota" required>
                                                <option disabled selected hidden class="nomor-not" value="">Pilih Kota/Kabupaten</option>
                                                <?php foreach ($kota as $key) { ?>
                                            <option value="<?php echo $key->nama ?>" class="nomor-nor-<?php echo $key->id_provinsi ?>"> <?php  echo $key->nama ?> </option>
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
                                            <input type="number" name="upah" id="upah" class="form-control" placeholder="Masukkan upah" required>
                                        </div>
                                        <div class="col-4">
                                            <label>Sumber Dana</label>
                                            <select class="form-control" name="sumberdana" id="sumberdana" required>
                                                <option class="form-control" selected="" hidden="" disabled="" value="">Pilih Sumberdana</option>
                                                <?php foreach ($sumberdana as $key) { ?>
                                                    <option value="<?php echo $key->nama_sumberdana ?>"><?php echo $key->nama_sumberdana ?></option>
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
                                <div class="form-group row col-12 align-items-center">
                                    <div class="col-4">
                                            <label>Upload Foto Produk</label>
                                            <input type="file" name="file" id="file" required>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btn_push" class="btn btn-primary ">Add</button>
                                    <button type="reset" class="btn btn-secondary " data-dismiss="modal">Clear</button>
                                </div>
                            </form>
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

                //Save new Foto
                $('#forminput').submit(function(e){
                    e.preventDefault();
                    if ($('#file').get(0).files.length != 0) {
                        $.ajax({
                        url:'<?php echo base_url();?>index.php/FormUmkm/newUmkm', //URL submit
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
                            document.getElementById('forminput').reset();    
                        }
                    });
                    }else{
                        Swal.fire({
                                type: 'error',
                                title: 'Gagal menambahkan data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                    }

                    return false;
                });
                //input data sumberdana
            //     $('#forminput').submit(function(e){
            //     e.preventDefault();
            //     // memasukkan data inputan ke variabel
            //     var nama            = $('#nama').val();
            //     var nama_subsektor  = $('#subsektor').val();
            //     var provinsi        = $('#slct_provinsi').val();
            //     var kota            = $('#slct_kota').val();
            //     var kecamatan       = $('#kecamatan').val();
            //     var alamat          = $('#alamat').val();
            //     var status          = $('#status').val();
            //     var upah            = $('#upah').val();
            //     var nama_sumberdana = $('#sumberdana').val();
            //     var teknologi       = $('#teknologi').val();
            //     var distribusi      = $('#distribusi').val();
            //     var ekspor          = $('#ekspor').val();
            //     var permasalahan    = $('#permasalahan').val();
            //     var peluang         = $('#peluang').val();
            //     var kelembagaan     = $('#kelembagaan').val();
            //     // alert(provinsi);
            //     // exit();

            //     $.ajax({
            //         type : "POST",
            //         url  : "<?php echo site_url(); ?>/FormUmkm/newUmkm",
            //         dataType : "JSON",
            //         data : {
            //             nama_umkm:nama,
            //             nama_subsektor:nama_subsektor,
            //             provinsi:provinsi,
            //             kota:kota,
            //             kecamatan:kecamatan,
            //             alamat:alamat,
            //             status_pemilik:status,
            //             upah_tenaga_kerja:upah,
            //             nama_sumberdana:nama_sumberdana,
            //             teknologi:teknologi,
            //             distribusi:distribusi,
            //             ekspor:ekspor,
            //             permasalahan:permasalahan,
            //             peluang_tantangan:peluang,
            //             kelembagaan:kelembagaan,
            //         },

            //         success: function(){
            //             Swal.fire({
            //                 type: 'success',
            //                 title: 'Berhasil menambahkan data ',
            //                 showConfirmButton: false,
            //                 timer: 1500
            //             })
            //             document.getElementById('forminput').reset();
            //         }
            //     });

            //     return false;
            // });

                $.ajax({
                    url: "<?php echo site_url(); ?>/FormUmkm/select_provinsi",
                    success : function(data){
                        $('#forminput').find('#slct_provinsi').html(data);
                    }
                });
                $.ajax({
                    url: "<?php echo site_url(); ?>/FormUmkm/select_kota",
                    success : function(data){
                        $('#forminput').find('#slct_kota').html(data);
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