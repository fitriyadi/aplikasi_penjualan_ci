<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Penjualan Tenun di UKM Maju Jaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- DataTables -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/buttons.bootstrap.min.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/responsive.bootstrap.min.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/scroller.bootstrap.min.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/dataTables.colVis.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.css');?>" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/fixedColumns.dataTables.min.css');?>" />

    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css');?>" />
    <!-- Bootstrap core CSS -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
    <!-- MetisMenu CSS -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/metisMenu.min.css');?>" />
    <!-- Icons CSS -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/icons.css');?>" />
    <!-- Custom styles for this template -->
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />

    <script src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script> 

</head>
<body>

    <div id="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="">
                    <a href="#" class="logo">
                    </a>
                </div>
            </div>

            <!-- Top navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <h4 align="center">Sistem Informasi Penjualan </h4>
                        <h4 align="center">Tenun di UKM Maju Jaya</h4>
                        <!-- Mobile menu button -->
                        <div class="pull-left">
                            <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- Page content start -->
        <div class="page-contentbar">
            <!--left navigation start-->
            <aside class="sidebar-navigation">
                <div class="scrollbar-wrapper">
                    <div>
                        <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                            <i class="mdi mdi-close"></i>
                        </button>

                        <!-- User Detail box -->
                        <div class="user-details">
                            <div class="pull-left">
                                <img src="<?php echo base_url('assets/images/users/admin.png')?>" alt="" class="thumb-md img-circle">
                            </div>
                            
                            <!-- Admin -->
                            <?php if($this->session->userdata('role')=='Admin'){ ?>
                            <div class="user-info">
                                <a href="#"><?php echo $this->session->userdata('username'); ?></a>
                                <p class="text-muted m-0">Administrator</p>
                            </div>
                            <?php }  ?>
                            <!-- Admin -->

                            <!-- Pimpinan -->
                            <?php if($this->session->userdata('role')=='Pimpinan'){ ?>
                            <div class="user-info">
                                <a href="#"><?php echo $this->session->userdata('username'); ?></a>
                                <p class="text-muted m-0">Pimpinan</p>
                            </div>
                            <?php }  ?>
                            <!-- Guru -->

                        </div>
                        <!--- End User Detail box -->

                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            <?php echo $_sidebar; ?>
                        </ul>
                    </div>
                </div><!--Scrollbar wrapper-->
            </aside>
            <!--left navigation end-->

            <!-- START PAGE CONTENT -->
            <div id="page-right-content">
                <div class="container">
                    <?php echo $_content;?>
                </div>
                <!-- end container -->

                <div class="footer">
                    <div>
                        <strong>Sistem Informasi Penjualan Tenun di UKM Maju Jaya</strong> - Copyright &copy; 2019
                    </div>
                </div> <!-- end footer -->

            </div>
            <!-- End #page-right-content -->

        </div>
        <!-- end .page-contentbar -->
    </div>
    <!-- End #page-wrapper -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js" type="text/javascript');?>"></script> 

    <!-- Datatable js -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.buttons.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/buttons.bootstrap.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/jszip.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/pdfmake.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/vfs_fonts.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/buttons.html5.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/buttons.print.min.js');?>"></script> 

    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.keyTable.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.responsive.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/responsive.bootstrap.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.scroller.min.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.colVis.js');?>"></script> 
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.fixedColumns.min.js');?>"></script> 

    <!-- init -->
    <script src="<?php echo base_url('assets/pages/jquery.datatables.init.js');?>"></script> 

    <!-- App Js -->
    <script src="<?php echo base_url('assets/js/jquery.app.js');?>"></script> 

</body>
</html>