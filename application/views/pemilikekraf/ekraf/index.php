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
                                    <option value="<?= $value->nd ?>-<?= $value->nk?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nd ?>-<?= $value->nk ?></option>
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
                    <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-4">
                         <label>Tahun Memulai Usaha</label>
                         <input type="text" name="utahun" id="utahun" class="form-control" placeholder="Masukkan Tahun Usaha" required>

                     </div>
                     <div class="col-4">
                        <label>Ekspor</label>
                        <input type="text" name="uekspor" id="uekspor" class="form-control" placeholder="Masukkan eskpor">
                    </div>
                    <div class="col-4">
                        <label>Omzet</label>
                        <input type="text" name="uomzet" id="uomzet" class="form-control" placeholder="Masukkan omzet" required>

                    </div>
                </div>
                <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-6">
                       <label>Permasalahan</label>
                       <input type="text" name="upermasalahan" id="upermasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                   </div>
                   <div class="col-6">
                     <label>Peluang dan Tantangan</label>
                     <input type="text" name="upeluang" id="upeluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                 </div>
             </div>
             <h3><center>Perijinan Ekraf</center></h3>

             <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
            <div class="form-group row col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <label>Legalitas Usaha</label>
                </div>
                <div class="form-check col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="siup" id="usiup" name="ulegalitas[]">
                      <label class="form-check-label" for="usiup">
                        SIUP
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="tdp" id="utdp" name="ulegalitas[]">
                  <label class="form-check-label" for="utdp">
                    TDP
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="npwp" id="unpwp" name="ulegalitas[]">
              <label class="form-check-label" for="unpwp">
                NPWP
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="bpom" id="ubpom" name="ulegalitas[]">
          <label class="form-check-label" for="ubpom">
            BPOM
        </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="pirt" id="upirt" name="ulegalitas[]">
      <label class="form-check-label" for="upirt">
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
        <select class="form-control" name="upencatatan_keuangan" id="upencatatan_keuangan" required="">
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
        <select class="form-control" name="ulaporan_terpisah" id="ulaporan_terpisah" required="">
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
        <select class="form-control" name="uneraca" id="uneraca" required="">
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
        <select class="form-control" name="ulaba_rugi" id="ulaba_rugi" required="">
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
        <select class="form-control" name="ubuku_kas" id="ubuku_kas" required="">
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
        <select class="form-control" name="ulaporan_keuangan" id="ulaporan_keuangan" required="">
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
        <select class="form-control" name="upameran_kab" id="upameran_kab" required="">
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
        <select class="form-control" name="upameran_prov" id="upameran_prov" required="">
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
        <select class="form-control" name="upameran_nasional" id="upameran_nasional" required="">
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
        <select class="form-control" name="upameran_internasional" id="upameran_internasional" required="">
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
          <input class="form-check-input" type="checkbox" value="Lokal" id="ulokal" name="uwilayah[]">
          <label class="form-check-label" for="ulokal">
            Lokal
        </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Nasional" id="unasional" name="uwilayah[]">
      <label class="form-check-label" for="unasional">
        Nasional
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Ekspor" id="ueksporw" name="uwilayah[]">
  <label class="form-check-label" for="ueksporw">
    Ekspor
</label>
</div>
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
                                var tahun = data[i].tahun;
                                // var tahun = data[i].tahun;
                                var omzet = data[i].omzet;
                                var pencatatan_keuangan = data[i].pencatatan_keuangan;
                                var laporan_terpisah = data[i].laporan_terpisah;
                                var neraca = data[i].neraca;
                                var laba_rugi = data[i].laba_rugi;
                                var buku_kas = data[i].buku_kas;
                                var laporan_keuangan = data[i].laporan_keuangan;
                                var pameran_kab = data[i].pameran_kab;
                                var pameran_prov = data[i].pameran_prov;
                                var pameran_nasional = data[i].pameran_nasional;
                                var pameran_internasional = data[i].pameran_internasional;
                                var wilayah_pemasaran = data[i].wilayah_pemasaran;
                                var wilayah_pemasaran2 = wilayah_pemasaran.split(";");
                                var legalitas_usaha = data[i].legalitas_usaha;
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

                                document.getElementById("dnama").innerHTML= nama;
                                document.getElementById("dalamat").innerHTML= alamat+', '+desa+', '+kecamatan+', '+kota+', '+provinsi;
                                // document.getElementById("ddesa").innerHTML= nd;
                                document.getElementById("dsentra").innerHTML= sentra;
                                document.getElementById("dstatus").innerHTML= status;
                                document.getElementById("djk").innerHTML= jk;
                                document.getElementById("dupah").innerHTML= 'Rp. '+upah;
                                document.getElementById("dsumberdana").innerHTML= sumberdana;
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
                // $('#ekraf').on('click','.item_edit',function(){
                //     // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                //     var id            = $(this).data('id');
                //     var ne          = $(this).data('nama_ekraf');
                //     var alamat          = $(this).data('alamat');
                //     var nd          = $(this).data('nama_desa');
                //     var ns          = $(this).data('sentra');
                //     var nt          = $(this).data('status');
                //     var jk          = $(this).data('jk');
                //     var upah          = $(this).data('upah');
                //     var nu          = $(this).data('sumberdana');
                //     var distribusi          = $(this).data('distribusi');
                //     var permasalahan    = $(this).data('permasalahan');
                //     var ekspor          = $(this).data('ekspor');
                //     var peluang          = $(this).data('peluang');
                //     var perijinan          = $(this).data('perijinan');
                //     var merk          = $(this).data('merk');
                //     var no_merk          = $(this).data('no_merk');
                //     var tgl_merk          = $(this).data('tgl');

                //     // memasukkan data ke form updatean
                //     $('[name="id"]').val(id);
                //     $('[name="nama"]').val(ne);
                //     $('[name="alamat"]').val(alamat);
                //     $('[name="desa"]').val(nd);
                //     $('[name="sentra"]').val(ns);
                //     $('[name="status"]').val(nt);
                //     $('[name="jk"]').val(jk);
                //     $('[name="upah"]').val(upah);
                //     $('[name="sumberdana"]').val(nu);
                //     $('[name="distribusi"]').val(distribusi);
                //     $('[name="permasalahan"]').val(permasalahan);
                //     $('[name="ekspor"]').val(ekspor);
                //     $('[name="peluang"]').val(peluang);
                //     $('[name="perijinan"]').val(perijinan);
                //     $('[name="merk"]').val(merk);
                //     $('[name="no_merk"]').val(no_merk);
                //     $('[name="tgl"]').val(tgl_merk);

                //     // alert(nd);
                //     $('#Modal_Update').modal('show');
                // });

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

                


                // $('#ekraf').on('click','.item_detail',function(){
                //     // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel
                //     var id            = $(this).data('id');
                //     var nama          = $(this).data('nama');
                //     var subsektor     = $(this).data('subsektor');
                //     var status        = $(this).data('status');
                //     var upah          = $(this).data('upah');
                //     var sumberdana    = $(this).data('sumberdana');
                //     var teknologi     = $(this).data('teknologi');
                //     var distribusi    = $(this).data('distribusi');
                //     var permasalahan  = $(this).data('permasalahan');
                //     var ekspor        = $(this).data('ekspor');
                //     var peluang       = $(this).data('peluang');
                //     var kelembagaan   = $(this).data('kelembagaan');
                //     var provinsi      = $(this).data('provinsi');
                //     var kota          = $(this).data('kota');
                //     var kecamatan     = $(this).data('kecamatan');
                //     var alamat        = $(this).data('alamat');
                //     var gambar          = $(this).data('gambar');

                //     document.getElementById("dfoto_update").height="100";
                //     document.getElementById("dfoto_update").width="160";
                //     document.getElementById("dfoto_update").src="<?=base_url()?>./assets/"+gambar;
                //     document.getElementById("dfoto_update").style.display="block";


                //     // memasukkan data ke form updatean
                //     document.getElementById("dnama").innerHTML= nama;
                //     document.getElementById("dsubsektor").innerHTML= subsektor;
                //     document.getElementById("dstatus").innerHTML= status;
                //     document.getElementById("dupah").innerHTML= 'Rp. '+upah;
                //     document.getElementById("dsumberdana").innerHTML= sumberdana;
                //     document.getElementById("dteknologi").innerHTML= teknologi;
                //     document.getElementById("ddistribusi").innerHTML= distribusi;
                //     document.getElementById("dpermasalahan").innerHTML= permasalahan;
                //     document.getElementById("dekspor").innerHTML= ekspor;
                //     document.getElementById("dpeluang").innerHTML= peluang;
                //     document.getElementById("dkelembagaan").innerHTML= kelembagaan;
                //     // document.getElementById("dkelembagaan").innerHTML= kelembagaan;
                //     document.getElementById("dalamat").innerHTML= alamat+', '+kecamatan+', '+kota+', '+provinsi;


                //     // alert(upnama);
                //     $('#Modal_Detail').modal('show');
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
                                // var sentra          = data[i].ns;
                                // var status          = data[i].nt;
                                var jk              = data[i].jumlah_karyawan;
                                var upah          = data[i].upah_tenaga_kerja;
                                // var sumberdana          = data[i].nu;
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
                                var tahun = data[i].tahun;
                                // var tahun = data[i].tahun;
                                var omzet = data[i].omzet;
                                var pencatatan_keuangan = data[i].pencatatan_keuangan;
                                var laporan_terpisah = data[i].laporan_terpisah;
                                var neraca = data[i].neraca;
                                var laba_rugi = data[i].laba_rugi;
                                var buku_kas = data[i].buku_kas;
                                var laporan_keuangan = data[i].laporan_keuangan;
                                var pameran_kab = data[i].pameran_kab;
                                var pameran_prov = data[i].pameran_prov;
                                var pameran_nasional = data[i].pameran_nasional;
                                var pameran_internasional = data[i].pameran_internasional;
                                var wilayah_pemasaran = data[i].wilayah_pemasaran;
                                var wilayah_pemasaran2 = wilayah_pemasaran.split(";");
                                var legalitas_usaha = data[i].legalitas_usaha;
                                var legalitas_usaha2 = legalitas_usaha.split(";");
                                

                                $('[name="uid"]').val(id);
                                $('[name="unama"]').val(nama);
                                $('[name="ualamat"]').val(alamat);
                                $('[name="udesa"]').val(desa+'-'+kecamatan);
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
                                $('[name="umerk"]').val(merk);
                                $('[name="uno_merk"]').val(no_merk);
                                $('[name="utgl"]').val(tgl_merk);
                                $('[name="utahun"]').val(tahun);
                                $('[name="uomzet"]').val(omzet);
                                $('[name="upencatatan_keuangan"]').val(pencatatan_keuangan);
                                $('[name="ulaporan_terpisah"]').val(laporan_terpisah);
                                $('[name="uneraca"]').val(neraca);
                                $('[name="ulaba_rugi"]').val(laba_rugi);
                                $('[name="ubuku_kas"]').val(buku_kas);
                                $('[name="ulaporan_keuangan"]').val(laporan_keuangan);
                                $('[name="upameran_kab"]').val(pameran_kab);
                                $('[name="upameran_prov"]').val(pameran_prov);
                                $('[name="upameran_nasional"]').val(pameran_nasional);
                                $('[name="upameran_internasional"]').val(pameran_internasional);
                                $('[name="uwilayah[]"]').val(wilayah_pemasaran2);
                                $('[name="ulegalitas[]"]').val(legalitas_usaha2);

                                
                                $('#Modal_Update').modal('show');

                            }
                        }
                    });
        } 
    </script>
</body>

</html>