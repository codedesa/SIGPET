
<?php 
foreach ($list as $dt) 
?>
    <form method="POST" action="<?php echo base_url('/administrator/user/edit.html') ?>">
    <input type="hidden" name="id" value="<?php echo $dt->id ?>">
    <label>UserName</label><br>
    <input type="text" name="username" value="<?php echo $dt->username ?>" class="form-control" />
    <label>Nama Lengkap</label><br>
    <input type="text" name="name" value="<?php echo $dt->full_name ?>" class="form-control" />
    <br>
    <input type="submit" name="btn_edit_user" class="btn btn-primary" value="Simpan"/>
    </form>