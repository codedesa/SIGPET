<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h3 class="page-title"><?php echo $judul; ?></h3> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('/administrator/') ?><?php echo $bagian ?>"><?php echo $bagian; ?></a></li>
                            <li class="active"><?php  echo $sub_bagian  ?></li>
                        </ol>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php $this->load->view($content_administrator) ?>
                        </div>
                    </div>
                </div>
            </div>