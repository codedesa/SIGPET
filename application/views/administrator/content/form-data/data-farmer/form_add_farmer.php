
<form method="POST" action="<?php echo base_url('/administrator/farmer/insert') ?>">
<label>Nama</label><br>
<i><?php echo form_error('name'); ?></i>
<input type="text"  name="name" class="form-control" />
<label>Alamat</label><br>
<i><?php echo form_error('address'); ?></i>
<input type="text" name="address" class="form-control" />
<label>Tempat Lahir</label><br>
<i><?php echo form_error('place_of_birth'); ?></i>
<input type="text" name="place_of_birth" class="form-control" />
<label>Tanggal Lahir</label><br>
<i><?php echo form_error('date_of_birth'); ?></i>
<input type="text" name="date_of_birth" class="form-control" />
<label>Gender</label><br>
<i><?php echo form_error('gender'); ?></i>
<select name="gender" class="form-control">
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
</select>
<br>
<label>status</label><br>
<i><?php echo form_error('status'); ?></i>
<input type="text" name="status" class="form-control" />

<label>Pilih Kelompok Tani</label><br>
<i><?php echo form_error('group_id'); ?></i>
<select name="group_id" class="form-control">
<option>-Pilih-</option>
<?php 
    foreach ($list_data as $val) {
        ?>
        <option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
        <?php
    }
?>
</select>
<br>
<label>Status Kelompok Tani</label><br>
<i><?php echo form_error('status_group'); ?></i>
<input type="text" name="status_group" class="form-control" />
<br>
<input type="submit" name="btnFarmer" class="btn btn-primary" value="Simpan"/>
<input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
</form>
