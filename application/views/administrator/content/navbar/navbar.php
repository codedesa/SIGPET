<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part" style="padding-bottom:3px;border-bottom:20px;">
    
                    <b><h2 style="color:green;font-family:arial;text-align:center;font-weight:bold;">Administrator</h2></b>
            
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="<?php echo base_url('/administrator/profil')  ?>"> <img src="<?php echo base_url('asset/plugins/images/users/varun.jpg') ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata['full_name']  ?></b></a>
                    </li>
                </ul>
            </div>
        </nav>