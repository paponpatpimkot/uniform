<?php
error_reporting(0);
session_start();
$std_id=$_SESSION['std_id'];
if($std_id==""){
    echo "<script>window.location.href='login.php'</script>";
}else{
    include 'config/connect.php';    
    $std_data=mysqli_fetch_array($con->query("select * from student where std_id='$std_id'"));
    function update_order($p,$s,$q,$n1,$n2){
        include 'config/connect.php';    
        $std_id=$_SESSION['std_id'];
        $date=date("Y-m-d");
        $pro_id=$p;
        $size=$s;
        $qty=$q;
        $note1=$n1;
        $note2=$n2;        
        $exits_ord=$con->query("select * from orders where std_id='$std_id'");
        $row_exits_ord=mysqli_num_rows($exits_ord);
        $data_exits_ord=mysqli_fetch_array($exits_ord);        
        if($row_exits_ord==1){
            $ord_id=$data_exits_ord['ord_id'];
            $exits_ord_list=mysqli_num_rows($con->query("select * from order_list where ord_id='$ord_id' and pro_id='$pro_id'"));
            if($exits_ord_list==1){
                $con->query("update order_list set size='$size',note1='$note1',note2='$note2',qty='$qty' where pro_id='$pro_id'");            
            }else{
                $con->query("insert into order_list values('$ord_id','$pro_id','$size','$qty','$note1','$note2')");                  
            }
        }else{
            $ins=$con->query("insert into orders values('','$std_id','$date')");
            if($ins){
                //$ord_id=$con->insert_id;          
                $ord_id=mysqli_fetch_array($con->query("select * from orders where orders.std_id='$std_id'"));
                $id=$ord_id['ord_id'];
                $con->query("insert into order_list values('$id','$pro_id','$size','$qty','$note1','$note2')");                                            
            }
        } 
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ระบบสั่งชุดเครื่องแบบนักศึกษาและอุปกรณ์การเรียน</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Awesome -->
    <!--  http://fordev22.com/ -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <!-- http://fordev22.com/ -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->

    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">

    <link href="assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="tatclogo.png" type="image/x-icon">

    <!-- ckeditor -->
    <script src="assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>

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
                $major_id=$std_data['major_id'];
                if(($major_id=='20101'|| $major_id=='20102' || $major_id=='20103' || $major_id=='20104' || $major_id=='20105' || $major_id=='20110' || $major_id=='20127') && ($std_data['prename']=='นาย')){
                    include 'menu_c1.php';
                }elseif(($major_id=='20101'|| $major_id=='20102' || $major_id=='20103' || $major_id=='20104' || $major_id=='20105' || $major_id=='20110' || $major_id=='20127') && ($std_data['prename']='นางสาว')){
                    include 'menu_c2.php';
                }elseif(($major_id=='20106' || $major_id=='20128' || $major_id=='20901') && ($std_data['prename']=='นาย')){
                    include 'menu_c3.php';
                }elseif(($major_id=='20106' || $major_id=='20128' || $major_id=='20901') && ($std_data['prename']=='นางสาว')){
                    include 'menu_c4.php';
                }elseif(($major_id=='20201' || $major_id=='20204' || $major_id=='20701' || $major_id=='20702') && ($std_data['prename']=='นาย')){
                    include 'menu_c5.php';
                }elseif(($major_id=='20201' || $major_id=='20204' || $major_id=='20701' || $major_id=='20702') && ($std_data['prename']=='นางสาว')){
                    include 'menu_c6.php';                
                }elseif(($major_id=='30101' || $major_id=='30102' || $major_id=='30104' || $major_id=='30105' || $major_id=='30106' || $major_id=='30110' || $major_id=='30113'
                || $major_id=='30120' || $major_id=='30127' || $major_id=='30128' || $major_id=='30901' || $major_id=='30214') && ($std_data['prename']=='นาย')){
                    include 'menu_s1.php';                
                }elseif(($major_id=='30101' || $major_id=='30102' || $major_id=='30104' || $major_id=='30105' || $major_id=='30106' || $major_id=='30110' || $major_id=='30113'
                || $major_id=='30120' || $major_id=='30127' || $major_id=='30128' || $major_id=='30901' || $major_id=='30214') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s2.php';
                }elseif(($major_id=='30101-1' || $major_id=='30103' || $major_id=='30118') && ($std_data['prename']=='นาย')){
                    include 'menu_s3.php';
                }elseif(($major_id=='30101-1' || $major_id=='30103' || $major_id=='30118') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s4.php';
                }elseif(($major_id=='30211') && ($std_data['prename']=='นาย')){
                    include 'menu_s5.php';
                }elseif(($major_id=='30211') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s6.php';
                }elseif(($major_id=='30201' || $major_id=='30701' || $major_id=='30702') && ($std_data['prename']=='นาย')){
                    include 'menu_s7.php';
                }elseif(($major_id=='30201' || $major_id=='30701' || $major_id=='30702') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s8.php';
                }elseif(($major_id=='30138') && ($std_data['prename']=='นาย')){
                    include 'menu_s9.php';
                }elseif(($major_id=='30138') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s10.php';
                }elseif(($major_id=='30126') && ($std_data['prename']=='นาย')){
                    include 'menu_s11.php';
                }elseif(($major_id=='30126') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s12.php';
                }elseif(($major_id=='30221') && ($std_data['prename']=='นาย')){
                    include 'menu_s13.php';
                }elseif(($major_id=='30221') && ($std_data['prename']=='นางสาว')){
                    include 'menu_s14.php';
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

        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables -->
        <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
        <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/tagsinput.js?v=1"></script>
        <!-- Select2 -->        
        <script src="assets/plugins/select2/js/select2.full.min.js"></script>

        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
        

        <script>
        $(document).ready(function () {            
            $('.select2').select2({
            theme: 'bootstrap4'
            })
        })
        </script>
        <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
            })
        })
        </script>
    </body>
</html>
<?php } ?>
