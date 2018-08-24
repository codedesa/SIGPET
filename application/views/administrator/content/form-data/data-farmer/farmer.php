<div class="table-responsive">
    <a href="<?php echo base_url('/administrator/farmer/insert.html')  ?>" class="btn btn-default"><i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Tambah Data</a>
    <br><br>
    <table class="table table-hover"  id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Address</th>
                <th>Jenis Kelamin</th>
                <th>Kelompok Tani</th>
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
                <td><?php echo $dt->gender ?></td>
                <td><?php echo $dt->group_name ?></td>

                <td >
                <a href="<?php echo base_url("/administrator/farmer/edit/$dt->id") ?>" class="btn btn-default">
                    <i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Edit
                </a>
                 <?php
                if ($this->session->userdata('status') == "Admin"){
                ?>
                    <span></span>
                    <a href="<?php echo base_url("/administrator/farmer/delete/$dt->id") ?>" class="btn btn-danger">
                        <i class="fa fa-minus-circle fa-fw" aria-hidden="true"></i>Delete
                    </a>
                <?php
                }
                ?>
                <a href="<?php echo base_url("/administrator/farmer/detail/$dt->id") ?>" class="btn btn-success">
                    <i class="fa fa-pencil-square fa-fw" aria-hidden="true"></i>Lihat Detail
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>