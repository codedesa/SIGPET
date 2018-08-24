
<?php 
foreach ($list as $value) 
?>
    <form method="POST" action="<?php echo base_url('/administrator/user/reset_password') ?>">
    <input type="hidden" value="<?php echo $value->id; ?>" name="id">
    <label>Password</label><br>
    <input type="password" name="password" class="form-control" />
    <br>
    <input type="submit" name="btn_reset_password" class="btn btn-success" value="Save Password"/>
    </form>
    
