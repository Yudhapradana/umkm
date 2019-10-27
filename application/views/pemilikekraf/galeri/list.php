
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
                    <div class="col-md-12 row">
                        <div class="col-md-6 row">
                            <h3 class="text-themecolor">Galeri Ekraf</h3><h3 class="text-themecolor" id="gekraf"></h3>
                        </div>
                        <div class="col-md-6 pull-right">
                            <a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add</a>
                            
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
                        <table class="table table-bordered table-responsive-lg" id="listgaleri" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="30%">Judul</th>
                                    <th width="20%">Picture</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tblistgaleri">
                                
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
        <form id="formbaru">
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Picture</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Judul</label>
                                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Caption" style="width: 100%" required>
                                            <label>Upload</label>
                                            <input type="file" id="file" name="file" class="form-control" placeholder="Caption" style="width: 100%" required>
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
                            <h4 class="modal-title">Update Picture</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                             <center><img id="foto_update" style="display: none;"></center>
                                            <label>Judul</label>
                                            <input type="text" id="upjudul" name="upjudul" class="form-control" placeholder="Caption" style="width: 100%" required>
                                            <label>Upload</label>
                                            <input type="file" id="file2" name="file2" class="form-control" placeholder="Caption" style="width: 100%">
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <input type="hidden" name="fotolama" id="fotolama" class="form-control">
                                        <input type="hidden" name="id_u" id="id_u" class="form-control">
                                        <!-- inputan button simpan dan Cancel -->
                                        <button type="submit" id="btn_update" class="btn btn-primary ">Update</button>
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
                            <h4 class="modal-title">Delete Galeri</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="juduldel"></font></b> ?</font>
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
        <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url()?>assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url()?>assets/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="<?php echo base_url()?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url()?>assets/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="<?php echo base_url()?>assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/morrisjs/morris.min.js"></script>
        <!-- Chart JS -->
        <!-- <script src="<?php echo base_url()?>assets/js/dashboard1.js"></script> -->
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/sweetalert2@8.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                //panggil get data

                var pathArray = window.location.pathname.split( '/' );
                var segment = pathArray[4];
                // alert(segment);
                // getEkraf();
                // getKab();
                showListGaleri();

                //get data subsektor
                function showListGaleri() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Operator/getListGaleri/'+segment,
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].judul+'</td>'+
                                '<td><img src="<?=base_url()?>./assets/'+data[i].url+'" height="100" width="130"></td>'+ 
                                    
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id+'" data-url="'+data[i].url+'" data-judul="'+data[i].judul+'" data-ekraf="'+data[i].id_ekraf+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'" data-url="'+data[i].url+'" data-judul="'+data[i].judul+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#listgaleri').DataTable().destroy();
                            $('#listgaleri').find('tbody').empty();
                            $('#tblistgaleri').html(html);
                            $('#listgaleri').DataTable({
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

                $('#formbaru').submit(function(e){
                    e.preventDefault();
                    if ($('#file').get(0).files.length != 0) {
                        $.ajax({
                            url  : "<?php echo site_url(); ?>/Operator/newGaleri/"+segment,
                   type:"post", //method Submit
                        data:new FormData(this), //penggunaan FormData
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                        success: function(data){ 
                        // alert(data);
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#Modal_Add').modal('hide'); 
                        $("#listgaleri").DataTable().destroy();
                        $("#listgaleri").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showListGaleri();
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

                $('#listgaleri').on('click','.item_edit',function(){
                //get data for update record UPDATEEEE
                var id = $(this).data('id');
                var judul = $(this).data('judul');
                var url = $(this).data('url');
                // alert(judul);

                document.getElementById("foto_update").height="100";
                document.getElementById("foto_update").width="160";
                document.getElementById("foto_update").src="<?=base_url()?>./assets/"+url;
                document.getElementById("foto_update").style.display="block"; 
                //set iinput
                $('[name="id_u"]').val(id);
                $('[name="upjudul"]').val(judul);
                $('[name="fotolama"]').val(url);

                $('#Modal_Update').modal('show');
            });

            // UPDATEEE record to database
            $('#formupdate').submit(function(e){
                e.preventDefault();
                $.ajax({
                        url:'<?php echo base_url();?>index.php/Operator/updateGaleri', //URL submit
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
                        $('#Modal_Update').modal('hide'); 
                        $("#listgaleri").DataTable().destroy();
                        $("#listgaleri").find('tbody').empty();
                        document.getElementById('formupdate').reset();
                        showListGaleri();
                        }
                });
                return false;
            });
                
            $('#galeri').on('click','.galeri',function(){
            var id            = $(this).data('id');
            var nama            = $(this).data('id');

            var myUrl = "<?php echo site_url(); ?>Ekraf/listGaleri/"+id;
            // alert(myUrl);
            window.location = myUrl;
            
            // $('#Modal_galeri').modal('show');
        });

            $('#listgaleri').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var nama = $(this).data('judul'); 
                    
                // alert(act);
                $('#Modal_Delete').modal('show');
                document.getElementById("juduldel").innerHTML=nama;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Operator/deleteGaleri",
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
                        $("#listgaleri").DataTable().destroy();
                        $("#listgaleri").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showListGaleri();
                    }
                });
                return false;
            });
                    
            });
        </script>
    </body>

    </html>