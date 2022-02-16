<?php
include '../config/connect.php';
$sql = "SELECT * FROM major";
$result = $con->query($sql);
if(isset($_POST['add_mstd'])){        
    move_uploaded_file($_FILES["csv_file"]["tmp_name"],$_FILES["csv_file"]["name"]);
    $csv=fopen($_FILES["csv_file"]["name"], "r");
    while(($row=fgetcsv($csv,1000,",")) !== FALSE){            
        $major_id=$row[0];
        $major_name=$row[1];    
        $level=$row[2];    
        $sql=$con->query("INSERT INTO major VALUES('$major_id','$major_name','$level')");  
        echo "<script>window.location.href='index.php?page=major'</script>";
    }
    fclose($csv);        
}
?>
<script>
    function readURL(input){
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<section class="content-header">
    <div class="container-fluid">
        <h1><i class="nav-icon fas fa-address-card"></i> จัดการข้อมูลนักศึกษา</h1>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header card-navy card-outline">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <form class="row" role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                        <div class="col-auto">
                            <div class="custom-file">
                                <label>upload ไฟล์ CVS</label><label style="color:red;">*</label>
                                <input type="file" class="form-control" name="csv_file" onchange="readURL(this)">                                                                            
                            </div>                   
                        </div>                                                                                                                                                                                                                 
                        <div class="col-auto">                            
                            <br>
                            <input type="submit" class="btn btn-success mt-2" name="add_mstd" value="Upload">                                
                        </div>
                    </form>                    
                </div>
                <div class="col-md-2">
                    <br>
                    <a class="btn btn-success text-white mt-2" data-toggle="modal" data-target="#exampleModal">                    
                        <i class="fa fa-user-plus"></i>เพิ่มข้อมูลทีละรายการ
                    </a>                
                </div>
            </div>
        </div>
        <br>
        <div class="card-body p-1">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row" class="info bg-primary">
                                <th tabindex="0" class="text-center">รหัสสาขาวิชา</th>                                
                                <th tabindex="0" class="text-center">ชื่อสาขาวิชา</th>                                
                                <th tabindex="0" class="text-center">ระดับชั้น</th>                                
                                <th tabindex="0" class="text-center">-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                                
                                while($row=mysqli_fetch_array($result)){
                            ?>
                                <tr>                                    
                                    <td><?php echo $row['major_id']; ?></td>
                                    <td><?php echo $row['major_name']; ?></td> 
                                    <td><?php echo $row['level']; ?></td>                                   
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="index.php?page=edit_major&major_id=<?php echo $row['major_id'] ?>">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" onclick="retrun confirm('ยืนยันการลบ?')" href="index.php?page=edit_major&major_id=<?php echo $row['major_id'] ?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
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