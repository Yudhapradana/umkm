
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
            <h3 class="text-themecolor">Form Input Data Ekraf</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card" style="padding: 10px">
                <form id="forminput">
                    <div class="modal-body">
                        <h3><center>Data Ekraf</center></h3>
                        <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-4">
                                <label>Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="col-4">
                                <label>Pilih Desa/Kelurahan</label>
                                <input type="text" id="desa" name="desa" class="form-control" placeholder="Masukkan Desa/kelurahan" list="data" required autocomplete="off" />
                                <datalist id="data">
                                    <?php foreach ($desa as $key => $value) : ?>
                                        <option value="<?= $value->nd ?>-<?= $value->nk?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nd ?>-<?= $value->nk ?></option>
                                    <?php endforeach; ?>
                                </datalist>
                            </div>
                            <div class="col-4">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" required></textarea>
                            </div>

                        </div>
                        <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <label>Latitude</label>
                                   <input type="text" step="0.01" name="latitude" id="latitude" class="form-control" placeholder="0.1xxxxx" required>
                               </div>
                               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                 <label>Longitude</label>
                                 <input type="text" step="0.01" name="longitude" id="longitude" class="form-control" placeholder="0.1xxxxx" required>
                                </div>
                            </div>
                        <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-4"> 
                                <label>Pilih Sentra</label>
                                <select name="sentra" id="sentra" class="form-control" required="">
                                    <option value="" selected="" hidden="">Pilih Sentra</option>
                                    <?php foreach ($sentra as $key): ?>
                                        <option value="<?php echo $key->id_sentra ?>"><?php echo $key->nama ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-4"> 
                                <label>Pilih Status</label>
                                <select name="status" id="status" class="form-control" required="">
                                    <option value="" selected="" hidden="">Pilih Status</option>
                                    <?php foreach ($status as $key): ?>
                                        <option value="<?php echo $key->id_status_pemilik ?>"><?php echo $key->nama ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <label>Jumlah Karyawan</label>
                                <input type="text" name="jk" id="jk" class="form-control" placeholder="Masukkan Jumlah" required>
                            </div>
                        </div>
                        <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-4">
                                <label>Upah Karyawan (Rp)</label>
                                <input type="text" name="upah" id="upah" class="form-control" placeholder="Masukkan upah" required>
                            </div>
                            <div class="col-4">
                                <label>Sumber Dana</label>
                                <select class="form-control" name="sumberdana" id="sumberdana" required>
                                    <option class="form-control" selected="" hidden="" disabled="" value="">Pilih Sumberdana</option>
                                    <?php foreach ($sumberdana as $key) { ?>
                                        <option value="<?php echo $key->id_sumber_dana ?>"><?php echo $key->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <label>Distribusi</label>
                                <input type="text" name="distribusi" id="distribusi" class="form-control" placeholder="Masukkan distribusi" required>
                            </div>
                        </div>
                        <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-4">
                             <label>Tahun Memulai Usaha</label>
                             <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Masukkan Tahun Usaha" required>

                         </div>
                         <div class="col-4">
                            <label>Ekspor</label>
                            <input type="text" name="ekspor" id="ekspor" class="form-control" placeholder="Masukkan eskpor">
                        </div>
                        <div class="col-4">
                            <label>Omzet</label>
                            <input type="text" name="omzet" id="omzet" class="form-control" placeholder="Masukkan omzet" required>

                        </div>
                    </div>
                    <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-6">
                           <label>Permasalahan</label>
                           <input type="text" name="permasalahan" id="permasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                       </div>
                       <div class="col-6">
                         <label>Peluang dan Tantangan</label>
                         <input type="text" name="peluang" id="peluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                     </div>
                 </div>
                 <h3><center>Perijinan Ekraf</center></h3>

                 <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-3">
                        <label>Perijinan</label>
                        <input type="text" name="perijinan" id="perijinan" class="form-control" placeholder="Masukkan perijinan" required>
                    </div>
                    <div class="col-3">
                        <label>Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control" placeholder="Masukkan Merk" required>
                    </div>
                    <div class="col-3">
                        <label>No Merk</label>
                        <input type="text" name="no_merk" id="no_merk" class="form-control" placeholder="Masukkan Nomor" required>
                    </div>
                    <div class="col-3">
                        <label>Tanggal Merk</label>
                        <input type="date" name="tgl" id="tgl" class="form-control" placeholder="Masukkan Tanggal " required>
                    </div>
                </div>
                <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <label>Legalitas Usaha</label>
                    </div>
                    <div class="form-check col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="siup" id="siup" name="legalitas[]">
                          <label class="form-check-label" for="siup">
                            SIUP
                        </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="tdp" id="tdp" name="legalitas[]">
                      <label class="form-check-label" for="tdp">
                        TDP
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="npwp" id="npwp" name="legalitas[]">
                  <label class="form-check-label" for="npwp">
                    NPWP
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="bpom" id="bpom" name="legalitas[]">
              <label class="form-check-label" for="bpom">
                BPOM
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="pirt" id="pirt" name="legalitas[]">
          <label class="form-check-label" for="pirt">
            PIRT
        </label>
    </div>
</div>
</div>
<h3><center>Pelatihan Laporan Keuangan Ekraf</center></h3>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki pencatatan keuangan</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="pencatatan_keuangan" id="pencatatan_keuangan" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki laporan terpisah</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="laporan_terpisah" id="laporan_terpisah" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki neraca</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="neraca" id="neraca" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki Laba rugi</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="laba_rugi" id="laba_rugi" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki Buku kas</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="buku_kas" id="buku_kas" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah mengikuti pelatihan laporan keuangan</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="laporan_keuangan" id="laporan_keuangan" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<h3><center>Pameran Dalam dan Luar Negeri</center></h3>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level kabupaten</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="pameran_kab" id="pameran_kab" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level provinsi</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="pameran_prov" id="pameran_prov" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level nasional</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="pameran_nasional" id="pameran_nasional" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level internasional</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <select class="form-control" name="pameran_internasional" id="pameran_internasional" required="">
            <option value="" selected="" hidden="">Pilih Jawaban</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Wilayah Pemasaran</label>
    </div>
    <div class="form-check col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Lokal" id="lokal" name="wilayah[]">
          <label class="form-check-label" for="lokal">
            Lokal
        </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Nasional" id="nasional" name="wilayah[]">
      <label class="form-check-label" for="nasional">
        Nasional
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Ekspor" id="eksporw" name="wilayah[]">
  <label class="form-check-label" for="eksporw">
    Ekspor
</label>
</div>
</div>

</div>


</div>
<div class="modal-footer">
    <input type="text" id="lat" name="lat" hidden="">
    <input type="text" id="lng" name="lng" hidden="">
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
<!-- <script src="http://maps.google.com/maps/api/js"></script> -->
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyBa2TS6o-LT8OJZhR4tAXAQKX4zWL0nNcU"
  type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function(){

                //Save new Foto
                $('#forminput').submit(function(e){
                    e.preventDefault();
                  //   var geocoder= new google.maps.Geocoder();
                  //   var address = document.getElementById('alamat').value;
                  //   geocoder.geocode( { 'address': address}, function(results, status) {
                  //       if (status == google.maps.GeocoderStatus.OK) {
                  //         map.setCenter(results[0].geometry.location);
                  //         var marker = new google.maps.Marker({
                  //             map: map,
                  //             position: results[0].geometry.location          
                  //         });
                  //         var lat = results[0].geometry.location.lat();
                  //         var lng = results[0].geometry.location.lng();
                  //     } else {
                  //         alert('Geocode was not successful for the following reason: ' + status);
                  //     }
                  //     alert(lat);
                  //     document.getElementById("lat").value = lat;      
                  //     document.getElementById('lng').value= lng;    
                  // });
                    // if ($('#nama_umkm').get(0).files.length != 0) {
                        $.ajax({
                        url:'<?php echo base_url();?>index.php/Ekraf/newEkraf', //URL submit
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
                    // }else{
                        // Swal.fire({
                        //         type: 'error',
                        //         title: 'Gagal menambahkan data ',
                        //         showConfirmButton: false,
                        //         timer: 1500
                        //     })
                    // }

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


        });


var rupiah = document.getElementById('upah');
rupiah.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
var rupiah2 = document.getElementById('omzet');
rupiah2.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah2.value = formatRupiah(this.value, 'Rp. ');
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

        
    </script>
</body>

</html>