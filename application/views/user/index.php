            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
          <link href="<?php echo base_url() ?>assets/user/css/main.css" rel="stylesheet" />
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper" style="margin-left: 0px">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Data Ekraf</h3>
                    </div>
                </div>
                <div class="s003">
      <form>
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
                                                <option value="<?= $value->nd ?>" data-json='<?php echo json_encode($value) ?>'><?= $value->nd ?>-<?= $value->nk ?></option>
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
                                <div class="form-group row col-12">
                                        <div class="col-4">
                                            <label>Permasalahan</label>
                                            <input type="text" name="permasalahan" id="permasalahan" class="form-control" placeholder="Masukkan permasalahan" required>
                                        </div>
                                        <div class="col-4">
                                            <label>Ekspor</label>
                                            <input type="text" name="ekspor" id="ekspor" class="form-control" placeholder="Masukkan eskpor" required>
                                        </div>
                                        <div class="col-4">
                                            <label>Peluang dan Tantangan</label>
                                            <input type="text" name="peluang" id="peluang" class="form-control" placeholder="Masukkan peluang/tantangan" required>
                                        </div>
                                </div>
                                    <h3><center>Perijinan Ekraf</center></h3>

                                <div class="form-group row col-12">
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
                                // '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-sentra="'+data[i].ns+'" data-status="'+data[i].nt+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nu+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'"> <span class="fa fa-info-circle"></span> </a>'+
                                // '     '+
                               
                            
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_ekraf+'" data-nama="'+data[i].ne+'"> <span class="fa fa-info"></span> </a>'+
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
                                // '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-sentra="'+data[i].ns+'" data-status="'+data[i].nt+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nu+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'"> <span class="fa fa-info-circle"></span> </a>'+
                                // '     '+
                                
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_ekraf+'" data-nama="'+data[i].ne+'"> <span class="fa fa-info"></span> </a>'+
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
                                // '<a href="javascript:void(0);" class="btn btn-primary btn-sm item_detail" data-id="'+data[i].id_ekraf+'" data-nama_ekraf="'+data[i].ne+'" data-alamat="'+data[i].alamat+'" data-nama_desa="'+data[i].nd+'" data-sentra="'+data[i].ns+'" data-status="'+data[i].nt+'" data-jk="'+data[i].jumlah_karyawan+'" data-upah="'+data[i].upah_tenaga_kerja+'" data-sumberdana="'+data[i].nu+'" data-distribusi="'+data[i].distribusi+'" data-permasalahan="'+data[i].permasalahan+'" data-ekspor="'+data[i].ekspor+'" data-peluang="'+data[i].peluang_tantangan+'" data-perijinan="'+data[i].perijinan+'" data-merk="'+data[i].merk+'" data-no_merk="'+data[i].no_merk+'" data-tgl="'+data[i].tgl_merk+'"> <span class="fa fa-info-circle"></span> </a>'+
                                // '     '+
                               
                            
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_ekraf+'" data-nama="'+data[i].ne+'"> <span class="fa fa-info"></span> </a>'+
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