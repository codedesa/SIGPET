<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-12">
        <form method="POST" action="<?php echo base_url('/administrator/user/insert.html') ?>">
        <label>UserName</label><br>
        <i><?php echo form_error('username'); ?></i>
        <input type="text" name="username" class="form-control" />
        <label>Nama Lengkap</label><br>
        <i><?php echo form_error('name'); ?></i>
        <input type="text" name="name" class="form-control" />
        <label>Password</label><br>
        <i><?php echo form_error('password'); ?></i>
        <input type="password" name="password" class="form-control" />
        <br>
        <input type="submit" name="btnusers" class="btn btn-primary" value="Simpan"/>
        <input type="reset" name="btnreset" class="btn btn-danger" value="Batal"/>
        </form>
    </div>
    <div class="col-lg-1"></div>
</div>