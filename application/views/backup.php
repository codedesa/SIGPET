<!doctype html>
<html lang="en">
	<head>
        <title>Sistem Informasi Pemetaan Petani Tembakau Desa Sakra Selatan</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Main CSS --> 
        <link rel="stylesheet" href="<?php echo base_url('asset/component/css/style.css')  ?>">
        <link href="<?php echo base_url('asset/bootstrap/dist/css/bootstrap.min.css');  ?>" rel="stylesheet">
    </head>
    <body>
    <header class="header-image">
            <!-- Main navigation -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">

                    <!-- Company name shown on mobile -->
                    <a class="navbar-brand" href="#">GISPET</a>

                    <!-- Mobile menu toggle -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Main navigation items -->
                    <div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav mr-auto justify-content-end">
                            <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url('/beranda.html')  ?>"> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/list_kelompok.html') ?>">Kelompok Tani</a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/list_petani.html')  ?>">Petani</a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/list_produl') ?>">Produk Unggulan</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('/login') ?>">Login</a>
                            </li>
                        </ul>

                    </div>



                </div>
            </nav>



            <!-- Jumbtron / Slider -->
            <div class="jumbotron-wrap jumbotron-wrap-image mb-0">
                <div class="container">
                    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="jumbotron">
                                    <h1 class="text-center">Sistem Informasi Pemetaan Petani Tembakau </h1>
                                    <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <p class="lead text-center">
                                        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                                        <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                                    </p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="jumbotron">
                                    <h1 class="text-center">Cras sit amet nibh libero, in gravida nulla</h1>
                                    <p class="lead text-center">Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <p class="lead text-center">
                                        <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                                        <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        
        </header>
        
        <!-- Main content area -->
        <?php $this->load->view($content_user) ?>

        <!-- Footer -->
        <footer class="footer">
          
            <div class="footer-bottom">
                    <p class="text-center">Free Bootstrap Template by <a href="https://zypopwebtemplates.com/">ZyPop</a>.</p>
                    <p class="text-center"><a href="#">Back to top</a></p>
            </div>
            
        </footer>

        <script src="<?php echo  base_url('asset/plugins/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('asset/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>