
<form method="POST" action="<?php echo base_url('/administrator/group/insert') ?>">
<label>Nama Kelompok</label><br>
<i><?php echo form_error('name'); ?></i>
<input type="text" name="name" class="form-control" />
<label>Alamat</label><br>
<i><?php echo form_error('adress'); ?></i>
<input type="text" name="address" class="form-control" />
<label>Email</label><br>
<i><?php echo form_error('email'); ?></i>
<input type="text" name="email" class="form-control" />
<br>
<label>Latitude</label><br>
<i><?php echo form_error('latitude'); ?></i>
<input type="text" name="latitude" class="form-control" />
<br>
<label>Longitude</label><br>
<i><?php echo form_error('longitude'); ?></i>
<input type="text" name="longitude" class="form-control" />
<br>
<input type="submit" name="btngroups" class="btn btn-primary" value="Simpan"/>
<input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
</form>
