
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
                        <h3 class="text-themecolor">Insert Picture UMKM</h3>
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
                                <div class="form-group row col-12 align-items-center">
                                    <div class="col-12 dropzone">
                                            <div class="dz-message">
                                             <h3> Klik atau Drop gambar disini</h3>
                                         </div>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php echo base_url('Umkm/') ?>"><button type="button" id="btn_push" class="btn btn-info">OK</button></a>
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
        <script src="<?php echo base_url() ?>assets/js/dropzone-amd-module.min.js"></script>
                <script src="<?php echo base_url() ?>assets/js/dropzone.min.js"></script>
        <!-- <script src="assets/js/sweetalert2@8.js"></script> -->
        <script type="text/javascript">
            var pathArray = window.location.pathname.split( '/' );
            var segment = pathArray[4];
            
            Dropzone.autoDiscover = false;
        // Dropzone.autoDiscover = false;

        var foto_upload= new Dropzone(".dropzone",{
            url: "<?php echo base_url('Umkm/proses_upload/') ?>"+segment,
            maxFilesize: 2,
            method:"post",
            acceptedFiles:"image/*",
            paramName:"userfile",
            dictInvalidFileType:"Type file ini tidak dizinkan",
            addRemoveLinks:true,
        });
                //Event ketika Memulai mengupload
                foto_upload.on("sending",function(a,b,c){
                    a.token=Math.random();
                    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
                });
                //Event ketika foto dihapus
                foto_upload.on("removedfile",function(a){
                    var token=a.token;
                    $.ajax({
                        type:"post",
                        data:{token:token},
                        url:"<?php echo base_url('Umkm/remove_foto') ?>",
                        cache:false,
                        dataType: 'json',
                        success: function(){
                            console.log("Foto terhapus");
                        },
                        error: function(){
                            console.log("Error");

                        }
                    });
                });
        </script>
    </body>

    </html>