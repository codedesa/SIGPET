<?php foreach ($detail_kelompok_tani as $value) ?>
<div class="row">
  <div class="col-lg-4">
      <div class="panel panel-default">
      <div class="panel-heading">Detail Kelompok Tani</div>
      <div class="panel-body">
      <table class="table table-bordered">
            <tr>
              <td width="200">Nama Kelompok Tani</td>
              <td width="2">:</td>
              <td><?php echo $value->name  ?></td>
            </tr>
            <tr>
              <td width="200">Email</td>
              <td width="2">:</td>
              <td><?php echo $value->email  ?></td>
            </tr>
            <tr>
              <td width="200">Adress</td>
              <td width="2">:</td>
              <td><?php echo $value->address  ?></td>
            </tr>
      </table>
      </div>
      <div class="panel-heading" style="border-radius:0px;">Detail Anggota Tani</div>
      <div class="panel-body">
          <table class="table table-bordered">
              <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Alamat</td>
              </tr>
              <?php 
              $no= 1;
              foreach ($list_petani as $value2) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $value2->name  ?></td>
                  <td><?php echo $value2->address  ?></td>
              </tr>
                <?php
              }  ?>
          </table>
      </div>
    </div>
  </div>
  <div class="col-lg-8">

    <div id="map" style="width:auto;height: 800px;"></div>
    <script>
      // Initialize and add the map
      function initMap() {
        var sakra = {lat: <?php echo $value->latitude ?>, lng: <?php echo $value->longitude ?>};
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 18, center: sakra});
        var marker = new google.maps.Marker({position: sakra, map: map});
      }
          </script>
  </div>
</div>