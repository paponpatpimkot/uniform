<?php
$major_id=$_GET['major_id'];
include '../config/connect.php';
$sql = "SELECT * FROM student where major_id='$major_id' and student.status='0'";
$result = $con->query($sql);
$major=mysqli_fetch_array($con->query("select * from major where major_id='$major_id'"));
?>
<section class="content-header">
    <div class="container-fluid">
        <h1><i class="nav-icon fas fa-address-card"></i> รายชื่อนักศึกษาที่ยังไม่ได้กรอกข้อมูลหรือยังไม่ได้ยืนยันข้อมูล</h1>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header card-navy card-outline text-center">  
            <h5>สาขาวิชา <?php echo  $major['major_name']." ( ".$major['level'].")"?></h5>                      
        </div>
        <br>
        <div class="card-body p-1">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="info bg-primary">
                                <th tabindex="0" class="text-center" style="width:10%">ลำดับ</th>  
                                <th tabindex="0" class="text-center" style="width:10%">รหัสประจำตัว</th>  
                                <th tabindex="0" class="text-center" style="width:40%">ชื่อ-นามสกุล</th>
                                <th tabindex="0" class="text-center" style="width:40%">สถานะ</th>                                                                                                                                                                                                                                                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                while($row=mysqli_fetch_array($result)){
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i;$i++; ?></td>
                                    <td><?php echo $row['std_id']?></td>
                                    <td><?php echo $row['prename'].$row['name']; ?></td>   
                                    <td>
                                        <?php 
                                            if($row['status']=='0'){
                                                echo "ยังไม่กรอกข้อมูล/ยังไม่ยืนยันข้อมูล";
                                            }elseif($row['status']=='1'){
                                                echo "ยืนยันข้อมูลแล้ว";
                                            }
                                        ?>
                                    </td>                                                                     
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>

    </div>    
</section>