<?php
    if ($alert){ 
        ?>
        <div class="alert alert-<?php echo $alert ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> <?php echo $message   ?>
        </div>
    <?php 
}
?>
<form method="POST" action="<?php  echo base_url('/administrator/profil/verification') ?>">
    <label>Password anda</label>
    <input type="password" placeholder="password Anda" name="p1" class="form-control">
    <label>Password Baru</label>
    <input type="password" placeholder="password Baru Anda" name="p2" class="form-control">
    <label>Ulangi Password Baru</label>
    <input type="password" placeholder="Ulangi password Baru Anda" name="p3" class="form-control">
    <br>
    <br><br>
    <input type="submit" class="btn btn-primary" value="Ganti Password">
</form>