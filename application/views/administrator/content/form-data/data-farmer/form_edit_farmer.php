
<?php foreach ($list as $dt) ?>
<form method="POST" action="<?php echo base_url('/administrator/farmer/edit') ?>">
<label>Nama</label><br>
<i><?php echo form_error('name'); ?></i>
<input type="hidden" value="<?php echo $dt->id ?>" name="id" class="form-control" />
<input type="text" value="<?php echo $dt->name ?>" name="name" class="form-control" />
<label>Alamat</label><br>
<i><?php echo form_error('address'); ?></i>
<input type="text" value="<?php echo $dt->address ?>" name="address" class="form-control" />

<label>Tempat Lahir</label><br>
<i><?php echo form_error('place_of_birth'); ?></i>
<input type="text" value="<?php echo $dt->place_of_birth ?>" name="place_of_birth" class="form-control" />
<label>Tanggal Lahir</label><br>
<i><?php echo form_error('date_of_birth'); ?></i>
<input type="text" value="<?php echo $dt->date_of_birth ?>" name="date_of_birth" class="form-control" />
<label>status</label><br>
<i><?php echo form_error('status'); ?></i>
<input type="text" value="<?php echo $dt->status ?>" name="status" class="form-control" />

<label>Gender</label><br>
<i><?php echo form_error('gender'); ?></i>
<select name="gender" class="form-control">
    <?php  
    if ($dt->gender == 'L'){
        ?>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
        <?php
    }else{
        ?>
        <option value="P">Perempuan</option>
        <option value="L">Laki-Laki</option>
        <?php
    }
    ?>
</select>
<br>
<label>Pilih Kelompok Tani</label><br>
<i><?php echo form_error('group_id'); ?></i>
<select name="group_id" class="form-control">
<?php 
    foreach ($list_data as $val) {
        if ($val->id == $dt->group_id){
            ?>
            <option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
            <?php
        }
    }
?>
</select>
<br>
<label>status</label><br>
<i><?php echo form_error('status_group'); ?></i>
<input type="text" value="<?php echo $dt->status_group ?>" name="status_group" class="form-control" />
<br>

<input type="submit" name="btn_edit_farmer" class="btn btn-primary" value="Simpan"/>
<input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
</form>
