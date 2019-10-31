           <style type="text/css">
               #chartdiv {
  width: 100%;
  height: 50vh;
}
#chartdiv3 {
  width: 100%;
  height: 50vh;
}
#chartdiv5 {
  width: 100%;
  height: 50vh;
}
           </style>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <link href="<?php echo base_url() ?>assets/user/css/main.css" rel="stylesheet" />
             <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
      <script src="<?php echo base_url() ?>assets/js/amcharts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/serial.js"></script>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper" style="margin-left: 0px">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12">
                        
                        <div class="s003">
                          <form>
                            <!-- <h3 class="text-themecolor">Data Ekraf</h3> -->
                            <div class="inner-form">
                              <div class="input-field first-wrap">
                                <div >
                                  <select data-trigger="" name="lokasi" class="loc" id="loc" style="width: 200px">
                                  </select>
                              </div>
                          </div>
                          <div class="input-field second-wrap">
                            <input id="searchNama" type="text" placeholder="Enter Keywords?" name="searchNama"  autocomplete="off" />
                        </div>
                        <div class="input-field third-wrap">
                            <button class="btn-search" type="button" id="btn-cari">cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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
                <table class="table table-bordered table-responsive-lg nowrap" id="ekraf" width="100%">
                    <thead>
                        <tr>
                            <th >No</th>
                            <th>Nama</th>
                            <th >Alamat</th>
                            <th >Kelurahan</th>
                            <th >Sentra</th>
                            <th >Status</th>
                            <th >Karyawan</th>
                            <th >Upah TK</th>
                            <th >Sumberdana</th>
                            <th >Distribusi</th>
                            <th >Permasalahan</th>
                            <th >Ekspor</th>
                            <th >Peluang & Tantangan</th>
                            <th >Perijinan</th>
                            <th >Merk</th>
                            <th >No Merk</th>
                            <th >Tgl Merk</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbekraf">

                    </tbody>
                </table>
                                <br><br><br>
<div class="row">
                 <div id="chartdiv" class="col-md-6"></div>
                   <div id="chartdiv2" class="col-md-6"></div>
                 </div>
                 <div class="row">
                 <div id="chartdiv3" class="col-md-6"></div>
                   <div id="chartdiv4" class="col-md-6"></div>
                 </div>
                  <div class="row">
                 <div id="chartdiv5" class="col-md-6"></div>
                   <div id="chartdiv6" class="col-md-6"></div>
                 </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<form id="formdetail">
    <div class="modal fade" id="Modal_Detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 70%">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail ekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group row col-12">
                        <div class="col-4">
                            <label class="font-weight-bold">Nama</label>
                            <h5 id="dnama"></h5>
                        </div>
                        <div class="col-8">
                            <label class="font-weight-bold">Alamat</label>
                            <h5 id="dalamat"></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row col-12">
                        <div class="col-4">
                            <label class="font-weight-bold">Sentra</label>
                            <h5 id="dsentra"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Status Pemilik</label>
                            <h5 id="dstatus"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Jumlah Karyawan</label>
                            <h5 id="djk"></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row col-12">

                        <div class="col-4">
                            <label class="font-weight-bold">Upah Karyawan (Rp)</label>
                            <h5 id="dupah"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Sumber Dana</label>
                            <h5 id="dsumberdana"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Distribusi</label>
                            <h5 id="ddistribusi"></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row col-12">
                        <div class="col-4">
                            <label class="font-weight-bold">Tahun Memulai Usaha</label>
                            <h5 id="dtahun"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Ekspor</label>
                            <h5 id="dekspor"></h5>
                        </div>
                        <div class="col-4">
                            <label class="font-weight-bold">Omzet</label>
                            <h5 id="domzet"></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row col-12">
                        <div class="col-6">
                            <label class="font-weight-bold">Permasalahan</label>
                            <h5 id="dpermasalahan"></h5>
                        </div>
                        <div class="col-6">
                            <label class="font-weight-bold">Peluang dan Tantangan</label>
                            <h5 id="dpeluang"></h5>
                        </div>
                    </div>
                    <h3><center>Perijinan Ekraf</center></h3>
                    <div class="form-group row col-12">
                        <div class="col-3">
                            <label class="font-weight-bold">Perijinan</label>
                            <h5 id="dperijinan"></h5>
                        </div>
                        <div class="col-3">
                            <label class="font-weight-bold">Merk</label>
                            <h5 id="dmerk"></h5>
                        </div>
                        <div class="col-3">
                            <label class="font-weight-bold">No Merk</label>
                            <h5 id="dno_merk"></h5>
                        </div>
                        <div class="col-3">
                            <label class="font-weight-bold">Tanggal Merk</label>
                            <h5 id="dtgl"></h5>
                        </div>
                    </div>
                    <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <label>Legalitas Usaha</label>
                        </div>
                        <div class="form-check col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="siup" id="dsiup" name="dlegalitas[]" disabled="">
                              <label class="form-check-label" for="siup">
                                SIUP
                            </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="tdp" id="dtdp" name="dlegalitas[]" disabled="">
                          <label class="form-check-label" for="dtdp">
                            TDP
                        </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="npwp" id="dnpwp" name="dlegalitas[]" disabled="">
                      <label class="form-check-label" for="dnpwp">
                        NPWP
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="bpom" id="dbpom" name="dlegalitas[]" disabled="">
                  <label class="form-check-label" for="dbpom">
                    BPOM
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="pirt" id="dpirt" name="dlegalitas[]" disabled="">
              <label class="form-check-label" for="dpirt">
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
        <h5 id="dpencatatan_keuangan"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki laporan terpisah</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dlaporan_terpisah"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki neraca</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dneraca"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki Laba rugi</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dlaba_rugi"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Belum memiliki Buku kas</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dbuku_kas"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah mengikuti pelatihan laporan keuangan</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dlaporan_keuangan"></h5>
    </div>
</div>
<h3><center>Pameran Dalam dan Luar Negeri</center></h3>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level kabupaten</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
     <h5 id="dpameran_kab"></h5>
 </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level provinsi</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dpameran_prov"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level nasional</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dpameran_nasional"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Pernah difasilitasi pemerintah mengikuti pameran dalam negeri level internasional</label>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <h5 id="dpameran_internasional"></h5>
    </div>
</div>
<div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <label>Wilayah Pemasaran</label>
    </div>
    <div class="form-check col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Lokal" id="dlokal" name="dwilayah[]" disabled="">
          <label class="form-check-label" for="dlokal">
            Lokal
        </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Nasional" id="dnasional" name="dwilayah[]" disabled="">
      <label class="form-check-label" for="dnasional">
        Nasional
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Ekspor" id="deksporw" name="dwilayah[]" disabled="">
  <label class="form-check-label" for="deksporw">
    Ekspor
</label>
</div>
</div>

</div>
</div>
<div class="modal-footer">

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

    <link href="<?php echo base_url()?>assets/user/css/select2.min.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/user/js/select2.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/core.js"></script>
    <script src="<?php echo base_url()?>assets/js/charts.js"></script>
    <script src="<?php echo base_url()?>assets/js/animated.js"></script>
   
    <script type="text/javascript">
        $(document).ready(function(){
                //panggil get data
                showekraf();
                $('.loc').select2({
                    placeholder: '--- Lokasi ---',
                    ajax: {
                      url: '<?php echo base_url()?>/User/getKota',
                      dataType: 'json',
                      delay: 250,
                      processResults: function (data) {
                        return {
                          results: data
                      };
                  },
                  cache: true
              }
          });

                $(".loc").change(function () {
                    var val = $(this).val();  
                    $.ajax({
                      type : "POST",
                      url: '<?php echo site_url('User/getDataByLoc')?>',
                      data : {id_kab_kota: val},
                      dataType: 'json',  
                  }).done(function(data){
                      var html = '';
                      var i;
                      for(i=0; i<data.length; i++){
                        var ii = i+1;
                                // alert(data[i].pro);
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td style="position: sticky;left:0px;background-color:white;">'+data[i].ne+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].nd+'</td>'+
                                '<td>'+data[i].ns+'</td>'+
                                '<td>'+data[i].nt+'</td>'+
                                '<td>'+data[i].jumlah_karyawan+'</td>'+
                                '<td>'+data[i].upah_tenaga_kerja+'</td>'+
                                '<td>'+data[i].nu+'</td>'+
                                '<td>'+data[i].distribusi+'</td>'+
                                '<td>'+data[i].permasalahan+'</td>'+
                                '<td>'+data[i].ekspor+'</td>'+
                                '<td>'+data[i].peluang_tantangan+'</td>'+
                                '<td>'+data[i].perijinan+'</td>'+
                                '<td>'+data[i].merk+'</td>'+
                                '<td>'+data[i].no_merk+'</td>'+
                                '<td>'+data[i].tgl_merk+'</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-kecamatan="'+data[i].kec+'" data-kota="'+data[i].kota+'" data-provinsi="'+data[i].pro+'" data-sentra="'+data[i].id_sentra+'" data-status="'+data[i].id_status_pemilik+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].id_sumber_dana+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'" data-tahun="'+data[i].tahun+'" data-omzet="'+data[i].omzet+'" data-pencatatan_keuangan="'+data[i].pencatatan_keuangan+'" data-laporan_terpisah="'+data[i].laporan_terpisah+'" data-neraca="'+data[i].neraca+'" data-laba_rugi="'+data[i].laba_rugi+'" data-buku_kas="'+data[i].buku_kas+'" data-laporan_keuangan="'+data[i].laporan_keuangan+'" data-pameran_kab="'+data[i].pameran_kab+'" data-pameran_prov="'+data[i].pameran_prov+'" data-pameran_nasional="'+data[i].pameran_nasional+'" data-pameran_internasional="'+data[i].pameran_internasional+'" data-wilayah_pemasaran="'+data[i].wilayah_pemasaran+'" data-legalitas_usaha="'+data[i].legalitas_usaha+'"> <span class="fa fa-info-circle"></span> </a>'+
                                '     '+
                                '</td>'+
                                '</tr>';
                            }
                            $('#ekraf').DataTable().destroy();
                            $('#ekraf').find('tbody').empty();
                            $('#tbekraf').html(html);
                            $('#ekraf').DataTable({
                                destroy         : true,
                                'autoWidth'     : true,
                                'paging'        : true,
                                'lengthChange'  : true,
                                'searching'     : true,
                                'ordering'      : true,
                                'info'          : true,
                                'scrollX'       : true,
                            }); 
                        })
              });

                function showekraf() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>User/getDataEkraf',
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
                                '<td style="position: sticky;left:0px;background-color:white;">'+data[i].ne+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].nd+'</td>'+
                                '<td>'+data[i].ns+'</td>'+
                                '<td>'+data[i].nt+'</td>'+
                                '<td>'+data[i].jumlah_karyawan+'</td>'+
                                '<td>'+data[i].upah_tenaga_kerja+'</td>'+
                                '<td>'+data[i].nu+'</td>'+
                                '<td>'+data[i].distribusi+'</td>'+
                                '<td>'+data[i].permasalahan+'</td>'+
                                '<td>'+data[i].ekspor+'</td>'+
                                '<td>'+data[i].peluang_tantangan+'</td>'+
                                '<td>'+data[i].perijinan+'</td>'+
                                '<td>'+data[i].merk+'</td>'+
                                '<td>'+data[i].no_merk+'</td>'+
                                '<td>'+data[i].tgl_merk+'</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-kecamatan="'+data[i].kec+'" data-kota="'+data[i].kota+'" data-provinsi="'+data[i].pro+'" data-sentra="'+data[i].id_sentra+'" data-status="'+data[i].id_status_pemilik+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].id_sumber_dana+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'" data-tahun="'+data[i].tahun+'" data-omzet="'+data[i].omzet+'" data-pencatatan_keuangan="'+data[i].pencatatan_keuangan+'" data-laporan_terpisah="'+data[i].laporan_terpisah+'" data-neraca="'+data[i].neraca+'" data-laba_rugi="'+data[i].laba_rugi+'" data-buku_kas="'+data[i].buku_kas+'" data-laporan_keuangan="'+data[i].laporan_keuangan+'" data-pameran_kab="'+data[i].pameran_kab+'" data-pameran_prov="'+data[i].pameran_prov+'" data-pameran_nasional="'+data[i].pameran_nasional+'" data-pameran_internasional="'+data[i].pameran_internasional+'" data-wilayah_pemasaran="'+data[i].wilayah_pemasaran+'" data-legalitas_usaha="'+data[i].legalitas_usaha+'"> <span class="fa fa-info-circle"></span> </a>'+
                                '     '+
                                '</td>'+
                                '</tr>';
                            }
                            $('#ekraf').DataTable().destroy();
                            $('#ekraf').find('tbody').empty();
                            $('#tbekraf').html(html);
                            $('#ekraf').DataTable({
                                destroy         : true,
                                'autoWidth'     : true,
                                'paging'        : true,
                                'lengthChange'  : true,
                                'searching'     : true,
                                'ordering'      : true,
                                'info'          : true,
                                'scrollX'       : true,
                            });
                        }
                    });
                }
                $('#btn-cari').on('click',function(){
                    var kota = $('#loc').val(); 
                    var val = $('#searchNama').val();
                    console.log(val);
                    $.ajax({
                      type : "POST",
                      url: '<?php echo base_url();?>User/getDataSearch',
                      data : {id_kab_kota: kota, nama: val},
                      dataType: 'json',  

                  }).done(function(data){
                      var html = '';
                      var i;
                      for(i=0; i<data.length; i++){
                        var ii = i+1;
                                // alert(data[i].pro);
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td style="position: sticky;left:0px;background-color:white;">'+data[i].ne+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].nd+'</td>'+
                                '<td>'+data[i].ns+'</td>'+
                                '<td>'+data[i].nt+'</td>'+
                                '<td>'+data[i].jumlah_karyawan+'</td>'+
                                '<td>'+data[i].upah_tenaga_kerja+'</td>'+
                                '<td>'+data[i].nu+'</td>'+
                                '<td>'+data[i].distribusi+'</td>'+
                                '<td>'+data[i].permasalahan+'</td>'+
                                '<td>'+data[i].ekspor+'</td>'+
                                '<td>'+data[i].peluang_tantangan+'</td>'+
                                '<td>'+data[i].perijinan+'</td>'+
                                '<td>'+data[i].merk+'</td>'+
                                '<td>'+data[i].no_merk+'</td>'+
                                '<td>'+data[i].tgl_merk+'</td>'+
                                '<td>'+
                                '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-kecamatan="'+data[i].kec+'" data-kota="'+data[i].kota+'" data-provinsi="'+data[i].pro+'" data-sentra="'+data[i].id_sentra+'" data-status="'+data[i].id_status_pemilik+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].id_sumber_dana+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'" data-tahun="'+data[i].tahun+'" data-omzet="'+data[i].omzet+'" data-pencatatan_keuangan="'+data[i].pencatatan_keuangan+'" data-laporan_terpisah="'+data[i].laporan_terpisah+'" data-neraca="'+data[i].neraca+'" data-laba_rugi="'+data[i].laba_rugi+'" data-buku_kas="'+data[i].buku_kas+'" data-laporan_keuangan="'+data[i].laporan_keuangan+'" data-pameran_kab="'+data[i].pameran_kab+'" data-pameran_prov="'+data[i].pameran_prov+'" data-pameran_nasional="'+data[i].pameran_nasional+'" data-pameran_internasional="'+data[i].pameran_internasional+'" data-wilayah_pemasaran="'+data[i].wilayah_pemasaran+'" data-legalitas_usaha="'+data[i].legalitas_usaha+'"> <span class="fa fa-info-circle"></span> </a>'+
                                '     '+
                                '</td>'+
                                '</tr>';
                            }
                            $('#ekraf').DataTable().destroy();
                            $('#ekraf').find('tbody').empty();
                            $('#tbekraf').html(html);
                            $('#ekraf').DataTable({
                                destroy         : true,
                                'autoWidth'     : true,
                                'paging'        : true,
                                'lengthChange'  : true,
                                'searching'     : true,
                                'ordering'      : true,
                                'info'          : true,
                                'scrollX'       : true,
                            }); 
                        });


              });


                $('#ekraf').on('click','.item_detail',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                    var id            = $(this).data('id');
                    var ne          = $(this).data('nama_ekraf');
                    var alamat          = $(this).data('alamat');
                    // alert(nd);
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
                    var tahun          = $(this).data('tahun');
                    var omzet          = $(this).data('omzet');
                    var pencatatan_keuangan          = $(this).data('pencatatan_keuangan');
                    var laporan_terpisah          = $(this).data('laporan_terpisah');
                    var neraca          = $(this).data('neraca');
                    var laba_rugi          = $(this).data('laba_rugi');
                    var buku_kas          = $(this).data('buku_kas');
                    var laporan_keuangan          = $(this).data('laporan_keuangan');
                    var pameran_kab          = $(this).data('pameran_kab');
                    var pameran_prov          = $(this).data('pameran_prov');
                    var pameran_nasional          = $(this).data('pameran_nasional');
                    var pameran_internasional          = $(this).data('pameran_internasional');
                    var wilayah_pemasaran          = $(this).data('wilayah_pemasaran');
                    var kecamatan          = $(this).data('kecamatan');
                    var kota          = $(this).data('kota');
                    var provinsi          = $(this).data('provinsi');
                    var wilayah_pemasaran2 = wilayah_pemasaran.split(";");
                    // alert(pameran_internasional);
                    var legalitas_usaha          = $(this).data('legalitas_usaha');
                    var legalitas_usaha2 = legalitas_usaha.split(";");

                    if (pencatatan_keuangan == 1) {
                        pencatatan_keuangan = "Ya";
                    }else{
                        pencatatan_keuangan = "Tidak";
                    }
                    if (laporan_terpisah == 1) {
                        laporan_terpisah = "Ya";
                    }else{
                        laporan_terpisah = "Tidak";
                    }
                    if (neraca == 1) {
                        neraca = "Ya";
                    }else{
                        neraca = "Tidak";
                    }
                    if (laba_rugi == 1) {
                        laba_rugi = "Ya";
                    }else{
                        laba_rugi = "Tidak";
                    }
                    if (buku_kas == 1) {
                        buku_kas = "Ya";
                    }else{
                        buku_kas = "Tidak";
                    }
                    if (laporan_keuangan == 1) {
                        laporan_keuangan = "Ya";
                    }else{
                        laporan_keuangan = "Tidak";
                    }
                    if (pameran_kab == 1) {
                        pameran_kab = "Ya";
                    }else{
                        pameran_kab = "Tidak";
                    }
                    if (pameran_prov == 1) {
                        pameran_prov = "Ya";
                    }else{
                        pameran_prov = "Tidak";
                    }
                    if (pameran_nasional == 1) {
                        pameran_nasional = "Ya";
                    }else{
                        pameran_nasional = "Tidak";
                    }
                    if (pameran_internasional == 1) {
                        pameran_internasional = "Ya";
                    }else{
                        pameran_internasional = "Tidak";
                    }                    

                    // memasukkan data ke form updatean
                    document.getElementById("dnama").innerHTML= ne;
                    document.getElementById("dalamat").innerHTML= alamat+', '+nd+', '+kecamatan+', '+kota+', '+provinsi;
                    // document.getElementById("ddesa").innerHTML= nd;
                    document.getElementById("dsentra").innerHTML= ns;
                    document.getElementById("dstatus").innerHTML= nt;
                    document.getElementById("djk").innerHTML= jk;
                    document.getElementById("dupah").innerHTML= 'Rp. '+upah;
                    document.getElementById("dsumberdana").innerHTML= nu;
                    document.getElementById("ddistribusi").innerHTML= distribusi;
                    document.getElementById("dpermasalahan").innerHTML= permasalahan;
                    document.getElementById("dekspor").innerHTML= ekspor;
                    document.getElementById("dpeluang").innerHTML= peluang;
                    document.getElementById("dperijinan").innerHTML= perijinan;
                    document.getElementById("dmerk").innerHTML= merk;
                    document.getElementById("dno_merk").innerHTML= no_merk;
                    document.getElementById("dtgl").innerHTML= tgl_merk;
                    document.getElementById("dtahun").innerHTML= tahun;
                    document.getElementById("domzet").innerHTML= 'Rp. '+omzet;
                    document.getElementById("dpencatatan_keuangan").innerHTML= pencatatan_keuangan;
                    document.getElementById("dlaporan_terpisah").innerHTML= laporan_terpisah;
                    document.getElementById("dneraca").innerHTML= neraca;
                    document.getElementById("dlaba_rugi").innerHTML= laba_rugi;
                    document.getElementById("dbuku_kas").innerHTML= buku_kas;
                    document.getElementById("dlaporan_keuangan").innerHTML= laporan_keuangan;
                    document.getElementById("dpameran_kab").innerHTML= pameran_kab;
                    document.getElementById("dpameran_prov").innerHTML= pameran_prov;
                    document.getElementById("dpameran_nasional").innerHTML= pameran_nasional;
                    document.getElementById("dpameran_internasional").innerHTML= pameran_internasional;
                    $('[name="dwilayah[]"]').val(wilayah_pemasaran2);
                    $('[name="dlegalitas[]"]').val(legalitas_usaha2);

                    // document.getElementById("dalamat").innerHTML= alamat+', '+kecamatan+', '+kota+', '+provinsi;

                    
                    // alert(upnama);
                    $('#Modal_Detail').modal('show');
                });

            });


        </script>
        <script type="text/javascript">
           var datax = [];
            var datasubsektor = <?php echo json_encode($subsektor_grafik);?>;
            for(  i = 0; i < datasubsektor.length; i++){
                datax.push({ "country": datasubsektor[i].nama,"visits": datasubsektor[i].jumlah,"color": "#FF6600"});
            }
             var data2 = [];
            var datasentra = <?php echo json_encode($sentra_grafik);?>;
            for(  i = 0; i < datasentra.length; i++){
                data2.push({ "country": datasentra[i].nama,"visits": datasentra[i].jumlah,"color": "#2A0CD0"});
            }
             var data3 = [];
            var datakab = <?php echo json_encode($kab_grafik);?>;
            for(  i = 0; i < datakab.length; i++){
                data3.push({ "country": datakab[i].nama,"visits": datakab[i].jumlah,"color": "#CD0D74"});
            }
              var data4 = [];
            var datatekno = <?php echo json_encode($tekno_grafik);?>;
            for(  i = 0; i < datatekno.length; i++){
                data4.push({ "country": datatekno[i].nama,"visits": datatekno[i].jumlah,"color": "#0D8ECF"});
            }
             var lokal = <?php echo json_encode($wilayah['Lokal']);?>;
              var nasional = <?php echo json_encode($wilayah['Nasional']);?>;
               var inter = <?php echo json_encode($wilayah['Internasional']);?>;
                   var satu = <?php echo json_encode($omzet['satu']);?>;
              var dua = <?php echo json_encode($omzet['dua']);?>;
               var tiga = <?php echo json_encode($omzet['tiga']);?>;



            var chart1 = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": datax,
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Subsektor"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});
             var chart2 = AmCharts.makeChart("chartdiv2", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": data2,
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Sentra"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});
             var chart3 = AmCharts.makeChart("chartdiv3", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": data3,
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Kabupaten Kota"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});
                    var chart4 = AmCharts.makeChart("chartdiv4", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": data4,
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Teknologi"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});

                  var chart5 = AmCharts.makeChart("chartdiv5", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": [{
    "country": "Lokal",
    "visits": lokal,
    "color": "#FF9E01"
  }, {
    "country": "Nasional",
    "visits": nasional,
    "color": "#FF9E01"
  }, {
    "country": "Internasional",
    "visits": inter,
    "color": "#FF9E01"
  }],
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Wilayah"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});

              var chart5 = AmCharts.makeChart("chartdiv6", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": [{
    "country": "< 10jt",
    "visits": satu,
    "color": "#B0DE09"
  }, {
    "country": "< 50jt",
    "visits": dua,
    "color": "#B0DE09"
  }, {
    "country": "> 50jt",
    "visits": tiga,
    "color": "#B0DE09"
  }],
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ekraf By Omzet"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});


        </script>
    </body>

    </html>