<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo base_url('/administrator/home') ?>" class="waves-effect"><i class="fa  fa-dashboard fa-fw" aria-hidden="true"></i>Home</a>
                    </li>
                    <?php
                       $logLogin= $this->session->userdata();
                       if ($logLogin['status'] == 'Admin'){
                           ?>
                           <li>
                               <a href="<?php echo base_url('/administrator/user') ?>" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Data Users</a>
                           </li>
                           <li>
                               <a href="<?php echo base_url('/administrator/group') ?>" class="waves-effect"><i class="fa fa-university fa-fw" aria-hidden="true"></i>Kelompok Tani</a>
                           </li>
                           <?php
                       }   
                    ?>
                    <li>
                        <a href="<?php echo base_url('/administrator/farmer') ?>" class="waves-effect"><i class="fa  fa-group fa-fw" aria-hidden="true"></i>Petani</a>
                    </li>
                    <?php
                      if ($logLogin['status'] == 'Admin'){
                    ?> 
                      <li>
                          <a href="<?php echo base_url('/administrator/lahan') ?>" class="waves-effect"><i class="fa fa-tree fa-fw" aria-hidden="true"></i>Lahan Pertanian</a>
                      </li>
                    <?php
                     }
                    ?>
                    <li>
                        <a href="<?php echo base_url('/administrator/profil') ?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profil</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/administrator/profil/manage_password') ?>" class="waves-effect"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i>Manage Password</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/logout') ?>" class="waves-effect"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i>Lagout</a>
                    </li>

                </ul>
               
            </div>
        </div>