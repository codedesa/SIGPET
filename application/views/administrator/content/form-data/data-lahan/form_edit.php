<?php  foreach ($list as $val) ?>

<form method="POST" action="<?php echo base_url('/administrator/lahan/edit') ?>">
<label>Type Lahan</label><br>
<i><?php echo form_error('land_type'); ?></i>
<input type="hidden" name="id" value="<?php echo $val->id ?>" class="form-control" />
<input type="text" name="land_type" value="<?php echo $val->land_type ?>" class="form-control" />
<label>Location / Address</label><br>
<i><?php echo form_error('address'); ?></i>
<input type="text" name="address" value="<?php echo $val->address ?>" class="form-control" />
<label>Luas Lahan</label><br>
<i><?php echo form_error('large'); ?></i>
<input type="text" name="large" value="<?php echo $val->large ?>" class="form-control" />
<label>Batas Barat</label><br>
<i><?php echo form_error('border_barat'); ?></i>
<input type="text" name="border_barat" value="<?php echo $val->border_barat ?>" class="form-control" />
<br>
<label>Batas Timur</label><br>
<i><?php echo form_error('border_timur'); ?></i>
<input type="text" name="border_timur" value="<?php echo $val->border_timur ?>" class="form-control" />
<br>
<label>Batas Utara</label><br>
<i><?php echo form_error('border_utara'); ?></i>
<input type="text" name="border_utara" value="<?php echo $val->border_utara ?>" class="form-control" />
<br>
<label>Batas Selatan</label><br>
<i><?php echo form_error('border_selatan'); ?></i>
<input type="text" name="border_selatan" value="<?php echo $val->border_selatan ?>" class="form-control" />
<br>
<label>Pendapatan Pertahun</label><br>
<i><?php echo form_error('amount_year'); ?></i>
<input type="text" name="amount_year" value="<?php echo $val->amount_year ?>" class="form-control" />
<br>
<label>Latitude</label><br>
<i><?php echo form_error('latitude'); ?></i>
<input type="text" name="latitude" value="<?php echo $val->latitude ?>" class="form-control" />
<br>
<label>Longitude</label><br>
<i><?php echo form_error('longitude'); ?></i>
<input type="text" name="longitude" value="<?php echo $val->longitude ?>" class="form-control" />
<br>
<br>
<label>Pemilik</label><br>
<i><?php echo form_error('farmer_id'); ?></i>
<select class="form-control" name="farmer_id">
	<?php foreach ($list_data as $dt) {
		if ($val->farmer_id == $dt->farmer_id)
	?>

	<option value="<?php echo $dt->id ?>"><?php echo $dt->name  ?></option>
	<?php
	} ?>
</select>
<br>

<input type="submit" name="btneditlahan" class="btn btn-primary" value="Simpan"/>
<input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
</form>
