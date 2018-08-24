<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Kelompok Tani</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach ($list_data as $dt) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt->nama ?></td>
                <td><?php echo $dt->alamat ?></td>
                <td><?php echo $dt->gender ?></td>
                <td><?php echo $dt->namaGroup ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>