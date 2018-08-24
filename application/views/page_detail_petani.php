<?php foreach ($list_petani as $value)  ?>
<div class="card-container">
            <div class="container">
   
            <h4 class="panel panel-body" >Detail Petani </h4>
            <div class="panel panel-body">
            <div class="row">
                    <div class="col-lg-6">
                        <h4>Petani</h4>
                    <table style="border:none;" class="table table-bordered">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo $value->name  ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $value->address  ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>:</td>
                                <td><?php echo $value->place_of_birth  ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td><?php echo $value->date_of_birth  ?></td>
                            </tr>
                            <tr>
                                <td>Nama Kelompok</td>
                                <td>:</td>
                                <td><?php echo $value->group_name  ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?php echo $value->status_group  ?></td>
                            </tr>
                    </table>
                    </div>

                    <div class="col-lg-6">
                    <table style="border:none;" class="table table-bordered">
                        <h4>Detail Lahan</h4>
                           <thead>
                           <tr>
                                <td>Type Lahan</td>
                                <td>Alamat</td>
                                <td>Detail</td>
                            </tr>
                           </thead>
                        <?php foreach ($list_sawah as $key) {
                          ?>
                          <tr>
                                <td><?php echo $key->land_type  ?></td>
                                <td><?php echo $key->large  ?></td>
                                <td><button class="btn btn-primary btn-xs">detail</button></td>
                            </tr>
                          <?php
                        }  ?>
                            
                    </table>
                    </div>

                </div>
            </div>
            </div>
        </div>