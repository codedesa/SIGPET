<?php foreach ($list_data as $key) ?>
<table class="table">
		  <tbody>
		    <tr>
		      <th scope="row">Jenis Lahan Pertanian</th>
		      <td>:</td>
		      <td><?php echo $key->land_type ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Luas Lahan</th>
		      <td>:</td>
		      <td><?php echo $key->large ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Alamat</th>
		      <td>:</td>
		      <td><?php echo $key->address ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Batas Sebelah Barat</th>
		      <td>:</td>
		      <td><?php echo $key->border_barat ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Batas Sebelah Timur</th>
		      <td>:</td>
		      <td><?php echo $key->border_timur ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Batas Sebelah Utara</th>
		      <td>:</td>
		      <td><?php echo $key->border_utara ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Batas Sebelah Selatan</th>
		      <td>:</td>
		      <td><?php echo $key->border_selatan ?></td>
		    </tr>
		    <tr>
		      <th scope="row">Pendapatan Rata-Rata Pertahun</th>
		      <td>:</td>
		      <td><?php echo "Rp.". $key->amount_year ?></td>
		    </tr>
		 </tbody>
	</table>