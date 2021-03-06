<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->


    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />

    <link rel="icon" href="<?php echo public_url(); ?>/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo public_url(); ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo public_url(); ?>/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo public_url(); ?>/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="<?php echo public_url(); ?>/plugins/morrisjs/morris.css" rel="stylesheet" />

    <link href="<?php echo public_url(); ?>/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="<?php echo public_url(); ?>/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo public_url(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo public_url(); ?>/css/myStyle.css" rel="stylesheet">
    <link href="<?php echo public_url(); ?>/plugins/dropzone/dropzone.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo public_url(); ?>/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?php echo public_url(); ?>/icon/css/font-awesome.min.css" rel="stylesheet" />
    <!--<link href="<?php /*echo public_url(); */?>/jqueryui/jquery-ui.css" rel="stylesheet" />
    <script src="<?php /*echo public_url(); */?>/jqueryui/jquery-3.2.1.min.js"></script>
    <script src="<?php /*echo public_url(); */?>/jqueryui/jquery-ui.js"></script>-->


    <!--    <link rel="shortcut icon" href="../favicon.ico">-->





</head>

<body class="theme-red">
<!-- <div class="loading"><img src="<?php echo public_url(); ?>/images/Eclipse.gif" alt=""></div> -->
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">ADMINBSB - MATERIAL DESIGN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <!-- #END# Tasks -->
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('user_login')->fullname; ?></div>
                <div class="email"><?php echo $this->session->userdata('user_login')->email; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?php echo url_admin('login/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?php echo url_admin('home') ?>">
                        <i class="material-icons">home</i>
                        <span>Thống kê x</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url_admin('users') ?>">
                        <i class="material-icons">people</i>
                        <span>Quản lý tài khoản</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url_admin('producer') ?>">
                        <i class="material-icons">store</i>
                        <span>Quản lý nhà sản xuất</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo url_admin('contacts') ?>">
                        <i class="material-icons">contacts</i>
                        <span>Quản lý liên hệ</span>
                    </a>
                 </li>
                <li>
                    <a href="<?php echo url_admin('slide') ?>">
                        <i class="material-icons">android</i>
                        <span>Quản lý Silde</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url_admin('Technews') ?>">
                        <i class="material-icons">fiber_new</i>
                        <span>Quản lý tin tức</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url_admin('products') ?>">
                        <i class="material-icons">assignment</i>
                        <span>Quản lý sản phẩm</span>
                    </a>
                </li>
                <li>

                    <a href="<?php echo url_admin('Bill') ?>">
                        <i class="material-icons">assignment</i>
                        <span>Quản lý đơn hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <!-- #END# Right Sidebar -->
     
</section>

<section class="content">
    <?php $this->load->view($content) ?>
</section>

<!-- Jquery Core Js -->
<!-- Jquery Core Js -->
<script src="<?php echo public_url(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="<?php echo public_url(); ?>/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo public_url(); ?>./plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/node-waves/waves.js"></script>
<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?php echo public_url(); ?>/plugins/chartjs/Chart.bundle.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo public_url(); ?>/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Flot Charts Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/flot-charts/jquery.flot.js"></script>
<script src="<?php echo public_url(); ?>/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?php echo public_url(); ?>/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?php echo public_url(); ?>/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?php echo public_url(); ?>/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?php echo public_url(); ?>/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?php echo public_url(); ?>/js/admin.js"></script>
<script src="<?php echo public_url(); ?>/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo public_url(); ?>/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="<?php  echo public_url(); ?>/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<script src="<?php  echo public_url(); ?>/js/demo.js"></script>
<script src="<?php  echo public_url();?>/js/pages/forms/basic-form-elements.js"></script>
<script src="<?php  echo public_url();?>/js/pages/jquery.validate.min.js"></script>
<script src="<?php  echo public_url();?>/js/pages/common.js"></script>
<script src="<?php  echo public_url();?>/js/pages/validate_producer.js"></script>
<script src="<?php  echo public_url();?>/js/pages/validate_edit_producer.js"></script>
<script src="//cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
<script src="<?php  echo public_url();?>/plugins/dropzone/dropzone.js"></script>

<script type="text/javascript">
        var url=window.location.href;
        $('.menu ul li').each(function () {
            if(url.indexOf($(this).find('a').attr('href'))!=-1)
            {
                $(this).addClass('active');
            }
        })
        CKEDITOR.replace( 'content' );
       
</script>
<?php if($this->session->flashdata('flash_message')) { ?>
<script type="text/javascript">
   $.notify({
    message: '<?php echo $this->session->flashdata('flash_message') ?>',
},
{
    newest_on_top: true,
    timer: 1000,
    placement: {
        from: 'bottom',
        align: 'left'
    },
    animate: {
        enter: 'animated fadeInDown',
        exit: 'animated fadeOutUp'
    },
});
</script>   
<?php } ?>
</body>

</html>