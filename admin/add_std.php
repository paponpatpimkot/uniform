<?php
    include '../config/connect.php';
    if(isset($_POST['submit'])){        
        $std_id=$_POST['std_id'];
        $prename=$_POST['prename'];
        $name=$_POST['name'];
        $major_id=$_POST['major_id'];                        
        $sql="INSERT INTO student VALUES('$std_id','$prename','$name','','','','','','$major_id','')";
        $result=$con->query($sql);
        if(!$result){
            echo "<script>alert('Error: ไม่สามารถเพิ่มข้อมูลได้')</script>";
        }else{
            echo "<script>window.location.href='index.php?page=student'</script>";
        }        
    }
?>
<section class="content" style="margin-top:30px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <i class="nav-icon fas fa-address-card"></i> เพิ่มข้อมูลนักศึกษา</h3>
                </div>
                <br>
                <div class="card-body p-1 mb-3">
                    <div class="row">
                        <div class="col-md-1"></div>                        
                        <div class="col-md-10">
                            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>รหัสประจำตัว</label>
                                            <input type="text" class="form-control" name="std_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>คำนำหน้า</label>
                                            <select name="prename" class="form-control">
                                                <option value="นาย">นาย</option>
                                                <option value="นางสาว">นางสาว</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ชื่อ-สกุล</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>รหัสสาขาวิชา</label>
                                            <input type="text" class="form-control" name="major_id" required>
                                        </div>                                                                                                                                              
                                    </div>                                    
                                </div>                                                                                                                                                                                                             
                                <button type="submit" class="btn btn-success form-control" name="submit">บันทึกข้อมูล</button>
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
        // $('#example2').DataTable({
        //   "paging": true,
        //   "lengthChange": false,
        //   "searching": false,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": false,
        // http://fordev22.com/
        // });
    });
</script>

</body>

</html>
<!-- http://fordev22.com/ -->