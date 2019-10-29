 
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
                             <div class="pull-right">
                             <a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Import" style="margin: 5px; padding: 5px"><span class="fa "></span>Import</a>
                        </div>
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
                            <h4 class="modal-title">Update Data ekraf</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row col-12">
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
                            <div class="form-group row col-12">
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
                            <div class="form-group row col-12">
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

<form id="formdelete">
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Data ekraf</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group col-lg-12">
                        <font>Anda ingin menghapus <b><font id="nama_ekraf_del"></font></b> ?</font>
                        <input type="hidden" name="id_del" id="id_del" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" id="id" name="id" hidden="">
                    <button type="submit" id="btn_delete" class="btn btn-danger col-md-3">Hapus</button>
                    <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal" style="margin-right: 20px">Batal</button>
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
<<<<<<< HEAD
    </form>
<form id="formimportAct" enctype="multipart/form-data">
    <div class="modal fade" id="Modal_Import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Import Activity From Excel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                </div>
                <div class="modal-body">               
                    <div class="container-fluid">   
                        <div class="row">        
                            <!-- form inputan nama kegiatan -->
                            <div class="form-group col-lg-12 row">
                                <div class="col-12">
                                    <label>Upload File</label>
                                    <input type="file" name="fileku" id="fileku" class="form-control dropify" data-height="100" required>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="modal-footer">
                            <!-- inputan button simpan dan Cancel -->
                            <a href="<?php echo base_url().'index.php/Dc_controller/downloadformat' ?>" title="Download Format" class="btn btn-success float-left"><span class="fa fa-download"></span> Format</a>
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                            <button type="submit" id="btn_push" class="btn btn-primary bd-toogle-animated-progress">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
=======
    </div>
    <div class="modal-footer">

    </div>
</div>
</div>
</div>
</form>

>>>>>>> 9b456ef2eed36e3dec8231afba60d2e2d3841415

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
    <script src="<?php echo base_url() ?>assets/js/dropify.js"></script>
<script src="<?php echo base_url() ?>assets/js/dropify.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
                $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih File',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error',
            }
        });

                //panggil get data
                showekraf();
                //get data sumberdana
                function showekraf() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>Ekraf/getData',
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
                                '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-sentra="'+data[i].id_sentra+'" data-status="'+data[i].id_status_pemilik+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].id_sumber_dana+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'" data-tahun="'+data[i].tahun+'" data-omzet="'+data[i].omzet+'" data-pencatatan_keuangan="'+data[i].pencatatan_keuangan+'" data-laporan_terpisah="'+data[i].laporan_terpisah+'" data-neraca="'+data[i].neraca+'" data-laba_rugi="'+data[i].laba_rugi+'" data-buku_kas="'+data[i].buku_kas+'" data-laporan_keuangan="'+data[i].laporan_keuangan+'" data-pameran_kab="'+data[i].pameran_kab+'" data-pameran_prov="'+data[i].pameran_prov+'" data-pameran_nasional="'+data[i].pameran_nasional+'" data-pameran_internasional="'+data[i].pameran_internasional+'" data-wilayah_pemasaran="'+data[i].wilayah_pemasaran+'" data-legalitas_usaha="'+data[i].legalitas_usaha+'"> <span class="fa fa-edit"></span> </a>'+

                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_ekraf+'" data-nama="'+data[i].ne+'"> <span class="fa fa-trash"></span> </a>'+
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


                //update sumberdana
                $('#ekraf').on('click','.item_edit',function(){
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
                    var wilayah_pemasaran2 = wilayah_pemasaran.split(";");
                    // alert(pameran_internasional);
                    var legalitas_usaha          = $(this).data('legalitas_usaha');
                    var legalitas_usaha2 = legalitas_usaha.split(";");
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
                    $('[name="tahun"]').val(tahun);
                    $('[name="omzet"]').val(omzet);
                    $('[name="pencatatan_keuangan"]').val(pencatatan_keuangan);
                    $('[name="laporan_terpisah"]').val(laporan_terpisah);
                    $('[name="neraca"]').val(neraca);
                    $('[name="laba_rugi"]').val(laba_rugi);
                    $('[name="buku_kas"]').val(buku_kas);
                    $('[name="laporan_keuangan"]').val(laporan_keuangan);
                    $('[name="pameran_kab"]').val(pameran_kab);
                    $('[name="pameran_prov"]').val(pameran_prov);
                    $('[name="pameran_nasional"]').val(pameran_nasional);
                    $('[name="pameran_internasional"]').val(pameran_internasional);
                    
                    // for (var i = wilayah_pemasaran2.length - 1; i >= 0; i--) {
                    //     if (wilayah_pemasaran2[i] == $('[name="wilayah[i]"]').val(wilayah_pemasaran2[i])) {
                    //         $('[name="wilayah[i]"]').attr('checked',true);
                    //     }
                    // }

                    $('[name="wilayah[]"]').val(wilayah_pemasaran2);
                    $('[name="legalitas[]"]').val(legalitas_usaha2);

                    
                    $('#Modal_Update').modal('show');
                });

                $('#formupdate').submit(function(e){
                            e.preventDefault();
                    $.ajax({
                        url:'<?php echo base_url();?>index.php/Ekraf/updateEkraf', //URL submit
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
                            $("#ekraf").DataTable().destroy();
                            $("#ekraf").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showekraf();         
                        }
                    });
                    return false;
                });


                //delete sumberdana
                $('#ekraf').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('nama');

                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("nama_ekraf_del").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault();
                var id = $('#id_del').val();

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Ekraf/deleteEkraf",
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
                        $("#ekraf").DataTable().destroy();
                        $("#ekraf").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showekraf();
                    }
                });
                return false;
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

        $('#ekraf').on('click','.galeri',function(){
            var id            = $(this).data('id');

            $('[name="idg"]').val(id);
            var myUrl = "<?php echo site_url(); ?>Ekraf/formGaleri/"+id;
            // alert(myUrl);
            window.location = myUrl;
            
            // $('#Modal_galeri').modal('show');
        });

        // var idg = 
        // alert(idg);

        
    </script>
</body>

</html>