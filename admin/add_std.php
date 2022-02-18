<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $tel=$_POST['tel'];
        $position=$_POST['position'];
        //เช็คค่าซ้ำก่อนเพิ่มข้อมูล        
        $old_data=mysqli_fetch_array($con->query("SELECT * FROM user"));
        if($old_data['email']=$email){
            echo "<script>alert('Email นี้ลงทะเบียนไปแล้ว!')</script>";            
        }else{
            $sql="INSERT INTO user VALUES('','$email','$password','$name','$tel','$position')";
            $result=$con->query($sql);
            if(!$result){
                echo "<script>
                        alert('บันทึกข้อมูลผิด');                        
                      </scrip>";
            }else{
                echo "<script>window.location.href='index.php?page=user'</script>";
            }
        }
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
<!-- Content Header (Page header) -->

<!-- Main content -->
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
                            <form role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>email</label>
                                            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>ชื่อ-นามสกุล</label>
                                            <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" placeholder="Enter telephone" name="tel" required>
                                        </div>
                                        <div class="form-group">
                                            <label>ตำแหน่ง</label>
                                            <select class="form-control" name="position">                                                
                                                <option value="admin">admin</option>
                                                <option value="staff" selected>staff</option>                                                
                                            </select>
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