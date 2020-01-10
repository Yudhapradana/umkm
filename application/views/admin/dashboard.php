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
          <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
          <!-- <script>
            function initialize() {
              var propertiPeta = {
                center:new google.maps.LatLng(-8.5830695,116.3202515),
                zoom:9,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              };

              var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

              // membuat Marker
              var marker=new google.maps.Marker({
                position: new google.maps.LatLng(-8.5830695,116.3202515),
                map: peta
              });

            }

            // event jendela di-load  
            google.maps.event.addDomListener(window, 'load', initialize);
          </script> -->


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
                    <h3 class="text-themecolor">Dashboard</h3>
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
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-inverse card-info">
                                    <div class="box bg-info text-center">
                                        <h1 class="font-light text-white" id="cekraf"></h1>
                                        <h6 class="text-white">Ekonomi Kreatif</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-success card-inverse">
                                    <div class="box text-center">
                                        <h1 class="font-light text-white" id="csubsektor"></h1>
                                        <h6 class="text-white">Subsektor</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-inverse card-danger">
                                    <div class="box text-center">
                                        <h1 class="font-light text-white" id="cteknologi"></h1>
                                        <h6 class="text-white">Teknologi E-commerce</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-6 col-lg-3 col-xlg-3">
                                <div class="card card-inverse card-dark">
                                    <div class="box text-center">
                                        <h1 class="font-light text-white" id="csentra"></h1>
                                        <h6 class="text-white">Sentra</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <br><br><br>
                        <div style="height: 600px; margin-bottom: -50px" id="map"></div>
                        <br><br><br>
                        <!-- <div id="googleMap" style="width:100%;height:380px;"></div> -->
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
     <script src="<?php echo base_url()?>assets/js/core.js"></script>
     <script src="<?php echo base_url()?>assets/js/charts.js"></script>
     <script src="<?php echo base_url()?>assets/js/animated.js"></script>
      <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmYW_hhOFPSEfXE8-mLmYx0B61xF0IqGw&callback=initMap">
    </script>
     <script>
            
            // // alert(locations);
            // function initMap() {
            //   $.ajax({
            //             type  : 'POST',
            //             url   : '<?php echo base_url()?>Ekraf/getlocation',
            //             async : false,
            //             dataType : 'json',
            //             success : function(data){
            //                 var map = new google.maps.Map(document.getElementById('map'), {
            //                   zoom: 12,
            //                   center: {lat: -7.2754438, lng: 112.6426429}
            //                 });

            //                 var markers = locations.map(function(location, i) {
            //                   return new google.maps.Marker({
            //                     position: location,
            //                     animation: google.maps.Animation.BOUNCE
            //                   });
            //                 });

            //                 var markerCluster = new MarkerClusterer(map, markers,
            //     {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
                            
            //                 var i;
                            
            //                 for(i=0; i<data.length; i++){
            //                     locations[i] = {lat: Number(data[i].latitude), lng: Number(data[i].longitude)};
            //                 }
            //                     // alert(JSON.stringify(locations));
            //             }
            //         });
              
            //   // Add a marker clusterer to manage the markers.
              
            // }

            
            var locations = [];
            // var locations = [
            // {lat: -7.5541059, lng: 112.236084},
            // {lat: -7.5553326, lng: 112.2351302},
            // {lat: -7.4530991, lng: 112.2267684},
            // {lat: -7.5703732, lng: 112.3510408}
            // ]
          </script>

   

     <script type="text/javascript">
        $(document).ready(function(){
            var locations = [];
            countEkraf();
            countSubsektor();
            countTeknologi();
            countSentra();
        });

        function countEkraf() {
            $.ajax({
                url : "<?php echo site_url('Ekraf/countEkraf') ?>",
                success : function(data){
                    $('#cekraf').html(data);
                }
            })
        }
        function countSubsektor() {
            $.ajax({
                url : "<?php echo site_url('Subsektor/countSubsektor') ?>",
                success : function(data){
                    $('#csubsektor').html(data);
                }
            })
        }
        function countTeknologi() {
            $.ajax({
                url : "<?php echo site_url('TeknologiEcommerce/countTeknologi') ?>",
                success : function(data){
                    $('#cteknologi').html(data);
                }
            })
        }
        function countSentra() {
            $.ajax({
                url : "<?php echo site_url('Sentra/countSentra') ?>",
                success : function(data){
                    $('#csentra').html(data);
                }
            })
        }

        // alert(locations);
            function initMap() {
              $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>Ekraf/getlocation',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                          var i;
                            
                            for(i=0; i<data.length; i++){
                                locations[i] = {lat: Number(data[i].latitude), lng: Number(data[i].longitude)};
                            }

                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 12,
                              center: {lat: -7.1560458, lng: 111.8785383}
                            });

                            var markers = locations.map(function(location, i) {
                              return new google.maps.Marker({
                                position: location,
                                animation: google.maps.Animation.BOUNCE
                              });
                            });

                            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
                            
                            
                                // alert(JSON.stringify(locations));
                        }
                    });
              
              // Add a marker clusterer to manage the markers.
              
            }

            
            
            // var locations = [
            // {lat: -7.5541059, lng: 112.236084},
            // {lat: -7.5553326, lng: 112.2351302},
            // {lat: -7.4530991, lng: 112.2267684},
            // {lat: -7.5703732, lng: 112.3510408}
            // ]

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