<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Administrator</title>
    <link href="<?php echo base_url('asset/bootstrap/dist/css/bootstrap.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css')  ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/colors/default.css') ?>" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
       <?php require_once('navbar/navbar.php')  ?>
       <?php require_once('sidebar/sidebar.php')  ?>
       <div id="page-wrapper">
           <?php require_once('pageContent/pageContent.php')  ?>
           <?php require_once('footer/footer.php') ?>
        </div>
    </div>

    <script src="<?php echo  base_url('asset/plugins/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.slimscroll.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/waves.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/custom.min.js') ?>"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
