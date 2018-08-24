<div class="table-responsive">
    <a href="<?php echo base_url('/administrator/group/insert')  ?>" class="btn btn-default"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Tambah Data</a>
    <br><br>
    <table class="table table-hover"  id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat </th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach ($list_data as $dt) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt->name ?></td>
                <td><?php echo $dt->address ?></td>
                <td><?php echo $dt->email ?></td>
                <td >
                <a href="<?php echo base_url("/administrator/group/edit/$dt->id") ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Edit
                </a>
                <span></span>
                <a href="<?php echo base_url("/administrator/group/delete/$dt->id") ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Hapus</a>
                <a href="<?php echo base_url("/administrator/group/detail/$dt->id") ?>" class="btn btn-success btn-xs">
                <i class="fa fa-search fa-fw" aria-hidden="true"></i>Detail
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>