<?php  
    error_reporting(0);
    session_start();
    $username=$_SESSION['username'];    
?>
<!DOCTYPE html>
<html>
    <head>
    <META HTTP-EQUIV="Refresh" CONTENT="180;URL=index.php">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin TATC-SHOP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Awesome -->
    <!--  http://fordev22.com/ -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <!-- http://fordev22.com/ -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->

    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">

    <link href="../assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/tatclogo.png" type="image/x-icon">

    <!-- ckeditor -->
    <script src="../assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>

    <style>
        body {
        font-family: 'Kanit', sans-serif;
        
        /*font-size: 14px;*/
        }
    </style>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <!-- Site wrapper -->
        <div class="wrapper">
            <?php 
                include 'navbar.php'; 
                if($username=="admin"){
                    include 'menu_l.php'; 
                }elseif($username==""){
                    include 'menu.php';
                }else{
                    echo "<script>window.location.href=login.php</script>";
                }
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background:#dfecf5">
                <?php
                    include 'switchpage.php';                
                ?>            
            </div><!-- /.content-wrapper -->            
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2021 Thai-Austrian technical college</strong> All rights
                reserved.
            </footer>
        </div><!-- ./wrapper -->

        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../assets/plugins/jszip/jszip.min.js"></script>
        <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../assets/dist/js/demo.js"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
        </script>
    </body>
</html>   