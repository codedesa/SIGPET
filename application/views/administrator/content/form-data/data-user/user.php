
<div class="table-responsive">
    <a href="<?php echo base_url('/administrator/user/insert.html')  ?>" class="btn btn-default"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Add New User</a>
    <br><br>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Status</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach ($list_data as $dt) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt->username ?></td>
                <td><?php echo $dt->full_name ?></td>
                <td><?php echo $dt->status ?></td>
                <td width="300">
                 
                <a href="<?php echo base_url("/administrator/user/edit/$dt->id") ?>" class="btn btn-warning btn-xs">
                    <i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Edit
                </a>
                <span></span>
                <a href="<?php echo base_url("/administrator/user/delete/$dt->id") ?>" class="btn btn-danger btn-xs">
                    <i class="fa fa-minus-circle fa-fw" aria-hidden="true"></i>Delete
                </a>
                <span></span>
                <a href="<?php echo base_url("/administrator/user/reset_password/$dt->id") ?>" class="btn btn-default btn-xs">
                    <i class="fa fa-minus-circle fa-fw" aria-hidden="true"></i>Reset Password
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>