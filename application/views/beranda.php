<!DOCTYPE html>
<html>
  <head>
    <title>Sistem Informasi Pemetaan Petani Tembakau</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script>
        
        var marker;
          function initialize() {
            var infoWindow = new google.maps.InfoWindow;
            var mapOptions = {
              mapTypeId: google.maps.MapTypeId.ROADMAP
            } 
            
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                
            var bounds = new google.maps.LatLngBounds();

            <?php

         if ($list_kelompok){
             foreach ($list_kelompok as $value) {
                 echo  ("addMarker($value->latitude, $value->longitude,
                  `<b>$value->name</b><br>
                  <b>$value->address</b><br>
                  <a href='Kelompok_tani/detail/$value->id'>Lihat Detail</a>`
                );\n");                        
             }
         }else if ($detail_kelompok_tani){
            foreach ($detail_kelompok_tani as $value2) {
                echo  ("addMarker($value2->latitude, $value2->longitude,
                 `<b>$value2->name</b><br>
                 <b>$value2->address</b><br>
                 <a href='Kelompok_tani/detail'>Lihat Detail</a>`
               );\n");                        
            }
         }
            
              ?>
              
            // Proses membuat marker 
            function addMarker(lat, lng, info) {
                var lokasi = new google.maps.LatLng(lat, lng);
                bounds.extend(lokasi);
                var marker = new google.maps.Marker({
                    map: map,
                    position: lokasi
                });       
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
             }
            
            // Menampilkan informasi pada masing-masing marker yang diklik
            function bindInfoWindow(marker, map, infoWindow, html) {
              google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
              });
            }
     
            }
          google.maps.event.addDomListener(window, 'load', initialize);
        
        </script>
        <script type="text/javascript">
        var peta;
        var koorAwal = new google.maps.LatLng(-8.5908183,116.2857368,10);
        function peta_awal1(){
            var settingpeta = {
                zoom: 15,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.ROADMAP 
                };
            peta = new google.maps.Map(document.getElementById("kanvaspeta"),settingpeta);
            google.maps.event.addListener(peta,'click',function(event){
                tandai(event.latLng);
            });
        
        }
        function peta_awal(){
            loadDataLokasiTersimpan();
            var settingpeta = {
                zoom: 10,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.ROADMAP 
                };
            peta = new google.maps.Map(document.getElementById("kanvaspeta"),settingpeta);
            google.maps.event.addListener(peta,'click',function(event){
                tandai(event.latLng);
            });
        
        }
    
        function tandai(lokasi){
            $("#koorX").val(lokasi.lat());
            $("#koorY").val(lokasi.lng());
            tanda = new google.maps.Marker({
                position: lokasi,
                map: peta
            });
        }
    
        $(document).ready(function(){
            $("#simpanpeta").click(function(){
                var koordinat_x = $("#koorX").val();
                var koordinat_y = $("#koorY").val();
                var nama_tempat = $("#namaTempat").val();   
                $.ajax({
                    url: "simpan_lokasi_baru.php",
                    data: "koordinat_x="+koordinat_x+"&koordinat_y="+koordinat_y+"&nama_tempat="+nama_tempat,
                    success: function(msg){
                        $("#namaTempat").val(null);
                    }
                });
            });
        });
    
    
    
        Interval (loadDataLokasiTersimpan, 3000);
    
        function carikordinat(lokasi){
            var settingpeta = {
                zoom: 10,
                center: lokasi,
                mapTypeId: google.maps.MapTypeId.ROADMAP 
                };
            peta = new google.maps.Map(document.getElementById("kanvaspeta"),settingpeta);
            tanda = new google.maps.Marker({
                position: lokasi,
                map: peta
            });
        
        }
    
    
        function gantipeta(){
            loadDataLokasiTersimpan();
            var isi = document.getElementById('cmb').value;
            if(isi=='1')
            {
            var settingpeta = {
                zoom: 10,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.ROADMAP
                };
            }
            else if(isi=='2')
            {
            var settingpeta = {
                zoom: 10,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.TERRAIN 
                };
            }
            else if(isi=='3')
            {
            var settingpeta = {
                zoom: 10,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.SATELLITE  
                };
            }
            else if(isi=='4')
            {
            var settingpeta = {
                zoom: 10,
                center: koorAwal,
                mapTypeId: google.maps.MapTypeId.HYBRID  
                };
            }
        
        }
    
        </script>
    
  </head>
  <body onload="initialize()">
   <div class="container-fluid">
    <div class="row">
       <div class="col-lg-9">
        <form method="POST" action="<?php echo base_url('/search')  ?>" style="margin-top:10px;" class="form-inline">
            <input type="text" class="form-control" placeholder="Cari Kelompok Tani di sini..." style="width:450px;">
            <input type="submit" value="Search" class="btn btn-success">
            
        </form>
       </div>
       <div class="col-lg-3">
        <a  href="<?php echo base_url('/login')  ?>" class="btn btn-success" style="margin-top:10px;float:right;border-radius:0px;margin-right:4px;">Login</a>
        <span></span>
       <a  href="<?php echo base_url('/')  ?>" class="btn btn-success" style="margin-top:10px;float:right;border-radius:0px;margin-right:4px;">Home</a>
       
       </div>
    </div>

    <h3></h3>
        <!--The div element for the map -->
    <?php $this->load->view($content_user)  ?>
       
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaTOY9qlfvNcpGd29My9NuM9Qu8TUKSZQ&callback=initMap">
    </script>
  </body>
</html>