<?php 
foreach ($list as $dt) 
?>
    <form method="POST" action="<?php echo base_url('/administrator/group/edit') ?>">
    <label>Nama Kelompok</label><br>
    <i><?php echo form_error('name'); ?></i>
    <input type="hidden" name="id" value="<?php echo $dt->id ?>">
    <input type="text" name="name" value="<?php echo $dt->name  ?>" class="form-control" />
    <label>Alamat</label><br>
    <i><?php echo form_error('address'); ?></i>
    <input type="text" name="address"  value="<?php echo $dt->address  ?>" class="form-control" />
    <label>Email</label><br>
    <i><?php echo form_error('email'); ?></i>
    <input type="text" name="email"  value="<?php echo $dt->email  ?>" class="form-control" />
    <br>
    <label>Latitude</label><br>
    <i><?php echo form_error('latitude'); ?></i>
    <input type="text" name="latitude"  value="<?php echo $dt->latitude  ?>" class="form-control" />
    <br>
    <label>Longitude</label><br>
    <i><?php echo form_error('longitude'); ?></i>
    <input type="text" name="longitude"  value="<?php echo $dt->longitude  ?>" class="form-control" />
    <br>
    <input type="submit" name="btn_edit_group" class="btn btn-primary" value="Simpan"/>
    <input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
    </form>
