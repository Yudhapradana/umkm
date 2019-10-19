
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
                    <!-- <div class="col-md-12 row">
                        <div class="col-md-6">
                            <h3 class="text-themecolor">Galeri Ekraf</h3>
                        </div>
                        <div class="col-md-6 pull-right">
                            <a href="javascript:void(0);" class="btn btn-success float-right" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add</a>
                        </div>
                    </div> -->
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
                        <table class="table table-bordered table-responsive-lg" id="galeri" width="100%">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="40%">Ekraf</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbgaleri">
                                
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
                <div class="modal-dialog" role="document" style="max-width: 60%;overflow-y: initial !important">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Picture</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body" id="mdl_bdy" style="max-height: calc(100vh - 200px);overflow-y: auto;">               
                            <div class="container-fluid scroll">   
                                <div class="row input-header" id="row1">        
                                    <!-- form inputan nama kegiatan -->
                                    <!-- <div class="form-group col-lg-12 row"> -->
                                        <div class="col-md-6">
                                            <label>Judul</label>
                                            <input type="text" id="judul" name="judul[]" class="form-control" placeholder="Caption" style="width: 100%" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Upload </label>
                                            <input type="file" id="gambar" name="gambar[]" class="form-control" style="width: 100%" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label> </label>
                                            <button type="button" class="btn btn-outline-secondary"  name="add" id="add" style="margin-top: 34px">+</button>
                                        </div>
                                        <div class="input-field container">
                            
                                        </div>
                                    <!-- </div> -->
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
        <div id="formbaru-2" style="display: none;">
            <div class="row input-header" id="rows" style="margin-top: 1rem">
                <div class="col-md-6">
                    <label>Judul</label>
                    <input type="text" id="judul" name="judul[]" class="form-control" placeholder="Caption" style="width: 100%" required>
                </div>
                <div class="col-md-4">
                    <label>Upload </label>
                    <input type="file" id="gambar" name="gambar[]" class="form-control" style="width: 100%" required>
                </div>
                <div class="col-md-2">
                    <label> </label>
                    <button type="button" class="btn btn-outline-secondary btn_remove"  name="remove" id="remove" style="margin-top: 34px">-</button>
                </div>
                
            </div>
        </div>
        
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
                var i=1;  
                $('#add').click(function(){  
                    i++;  
                    $('#formbaru-2').find('.input-header').attr('id','row'+i);
                    $('#formbaru-2').find('button[name="remove"]').attr('id',i);
                    var html = String($('#formbaru-2').html()); 
                    $('.input-field').append(html);  
                });

                $(document).on('click', '.btn_remove', function(){  
                    var button_id = $(this).attr("id");   
                    $('#row'+button_id+'').remove();  
                });

                getKab();
                showGaleri();

                //get data subsektor
                function showGaleri() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Operator/getDataEkraf',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;


                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+ii+'</td>'+
                                '<td>'+data[i].ne+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm galeri" data-id="'+data[i].id_ekraf+'" data-nama="'+data[i].ne+'" > <span class="fa fa-picture-o"></span> </a>'+ 
                                '     '+
                                '</td>'+
                                '</tr>';
                            }
                            $('#galeri').DataTable().destroy();
                            $('#galeri').find('tbody').empty();
                            $('#tbgaleri').html(html);
                            $('#galeri').DataTable({
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
                
            $('#galeri').on('click','.galeri',function(){
            var id            = $(this).data('id');
            var nama            = $(this).data('id');

            var myUrl = "<?php echo site_url(); ?>Operator/listGaleri/"+id;
            // alert(myUrl);
            window.location = myUrl;
            
            // $('#Modal_galeri').modal('show');
        });
                    
            });
            function getKab() {
                $.ajax({
                url : "<?php echo site_url('Operator/getKab') ?>",
                success : function(data){
                    // alert(data);
                    $('#kab').html(data);
                }
            })
    }
        </script>
    </body>

    </html>