<?php
   foreach ($list_data as $key)
?>
<div class="row">
	<div class="col-lg-5">
		<table class="table">
		  <tbody>
		    <tr>
		      <th scope="row">Nama Lengkap</th>
		      <td>:</td>
		      <td><?php echo $key->name ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Alamat Lengkap</th>
		      <td>:</td>
		      <td><?php echo $key->address ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Tempat Lahir</th>
		      <td>:</td>
		      <td><?php echo $key->place_of_birth ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Tanggal Lahir</th>
		      <td>:</td>
		      <td><?php echo $key->date_of_birth ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Jenis Kelamin</th>
		      <td>:</td>
		      <td><?php echo $key->gender ?></td>
		    </tr>
		     <tr>
		      <th scope="row">Nama Kelompok Tani</th>
		      <td>:</td>
		      <td><?php echo $key->group_name ?></td>
		    </tr>
		    <tr>
		      <th scope="row">Status Kelompok Tani</th>
		      <td>:</td>
		      <td><?php echo $key->status_group ?></td>
		    </tr>
		 </tbody>
	</table>
	</div>
	<div class="col-lg-7">
		<table class="table">
			<h2>Detail Lahan Pertanian</h2>
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Jenis Lahan</th>
		      <th scope="col">Luas</th>
		      <th scope="col">Detail</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  	foreach ($list_land as $land) {
		  		?>
		  		 <tr>
				      <th scope="row"></th>
				      <td><?php echo $land->land_type  ?></td>
				      <td><?php echo $land->large ?></td>
				      <td>
				      	  <a href="<?php echo base_url("/administrator/farmer/detail_land/$land->id") ?>" class="btn btn-success">
                    		<i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Lihat Detail
               			  </a>
				      </td>

		   		 </tr>
		  		<?php
		  	}
		  	?>
		  </tbody>
		</table>
	</div>
	
</div>