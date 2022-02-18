<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        /*$filename=$_FILES['csv_file']['name'];
        $tmp_name=$_FILES['csv_file']['tmp_name'];*/
        move_uploaded_file($_FILES["csv_file"]["tmp_name"],$_FILES["csv_file"]["name"]);
        $csv=fopen($_FILES["csv_file"]["name"], "r");
        while(($row=fgetcsv($csv, 1000, ",")) !== FALSE){            
            $user_id=$row[0];
            $email=$row[1];
            $password=$row[2];
            $name=$row[3];
            $tel=$row[4];
            $position=$row[5];
            $sql=$con->query("INSERT INTO user VALUES('$user_id','$email','$password','$name','$tel',$position')");                        
        }
        fclose($csv);
        
        //echo "<script>window.location.href='index.php?page=user'</script>";
    }
?>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<section class="content" style="margin-top:30px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <i class="nav-icon fas fa-address-card"></i> เพิ่มข้อมูลผู้ใช้</h3>                    
                </div>
                <br>
                <div class="card-body p-1 mb-3">
                    <div class="row">
                        <div class="col-md-1"></div>                        
                        <div class="col-md-10">
                            <form role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">                                                                                
                                        <div class="custom-file">
                                            <label for="">upload ไฟล์ CVS</label><label style="color: red;">*</label>
                                            <input type="file" class="form-control" name="csv_file" id="mc_img" onchange="readURL(this);">                                            
                                        </div>                                        
                                    </div>                                    
                                </div>                                                                                                                                                              
                                <!-- <div class="col-sm-6">
                                    <div class="custom-file">

                                        <label for="">รูปภาพ</label><label style="color: red;">*</label>

                                        <input type="file" class="form-control" name="mc_img" id="mc_img" onchange="readURL(this);" /><br>
                                        <img id="blah" src="#" alt="your image" width="50%" />
                                    </div>
                                </div> -->                                
                                <input type="submit" class="btn btn-success form-control" name="submit" value="บันทึกข้อมูล">
                            </form>
                        </div><!-- /md-10-->
                        <div class="col-md-1"></div>                        
                    </div><!-- /.row ใน card-body -->

                </div><!-- /.card-body -->

            </div><!-- /.card -->
        </div><!-- /.col -->
    </div> <!-- /.row -->
</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
    $(function() {
        $(".datatable").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,        
        });
    });
</script>

</body>

</html>
<!-- http://fordev22.com/ -->