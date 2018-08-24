<div class="table-responsive">
    <a href="<?php echo base_url('/administrator/lahan/insert.html')  ?>" class="btn btn-success"><i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Add New Record</a>
    <br><br>
    <table class="table"  id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Type Lahan</th>
                <th>Location</th>
                <th>Pemilik</th>
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
                <td><?php echo $dt->land_type ?></td>
                <td><?php echo $dt->address ?></td>
                <td><?php echo $dt->name ?></td>
                <td width="300">
                 
                <a href="<?php echo base_url("/administrator/lahan/edit/$dt->id") ?>" class="waves-effect">
                    <i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Edit
                </a>
                <span></span>
                <a href="<?php echo base_url("/administrator/lahan/delete/$dt->id") ?>" class="waves-effect">
                    <i class="fa fa-minus-circle fa-fw" aria-hidden="true"></i>Delete
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>