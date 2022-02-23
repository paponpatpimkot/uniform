<!-- Content Header (Page header) -->
    <?php
      include '../config/connect.php';
      $std=mysqli_fetch_array($con->query("select * from student"));
      $sql = "SELECT * FROM major";
      $result = $con->query($sql);
      if(isset($_POST['add_mstd'])){        
          move_uploaded_file($_FILES["csv_file"]["tmp_name"],$_FILES["csv_file"]["name"]);
          $csv=fopen($_FILES["csv_file"]["name"], "r");
          while(($row=fgetcsv($csv,1000,",")) !== FALSE){            
              $std_id=$row[0];   
              $prename=$row[1];
              $name=$row[2];
              $major_id=$row[3];   

              $sql=$con->query("INSERT INTO student(std_id,prename,name,major_id) VALUES('$std_id','$prename','$name','$major_id')");                        
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php   
                  $std_total=mysqli_num_rows($con->query("select * from student"));                                                                      
                ?>
                <h3><?php echo number_format($std_total)?></h3>

                <p>จำนวนนักศึกษาทั้งหมด</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <span class="small-box-footer">
                อัพเดทล่าสุด
                <i class="fas fa-arrow-circle-right"></i>
                <?php echo date('d/m/Y H:i:s')?>
              </span>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                        
                    $apply=mysqli_fetch_array($con->query("select count(std_id) as id from orders"));
                ?>
                <h3><?php echo $apply['id'] ?> </h3>
                <p>กรอกข้อมูลแล้ว</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <span class="small-box-footer">
                อัพเดทล่าสุด
                <i class="fas fa-arrow-circle-right"></i>
                <?php echo date('d/m/Y H:i:s')?>
              </span>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <?php                    
                  $completed=mysqli_num_rows($con->query("select * from student where status=1"));
                ?>
                <h3><?php echo number_format($completed) ?> </h3>
                <p>ยืนยันข้อมูลแล้ว</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <span class="small-box-footer">
                อัพเดทล่าสุด
                <i class="fas fa-arrow-circle-right"></i>
                <?php echo date('d/m/Y H:i:s')?>
              </span>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $uncomplete=mysqli_num_rows($con->query("select * from student where status=0"));                  
                ?>
                <h3><?php echo number_format($uncomplete) ?> </h3>
                <p>ยังไม่ยืนยันข้อมูล</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <span class="small-box-footer">
                อัพเดทล่าสุด
                <i class="fas fa-arrow-circle-right"></i>
                <?php echo date('d/m/Y H:i:s')?>
              </span>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <br>
        <div class="card" style="border:none;";>
          <div class="card-header card-navy card-outline text-center bg-success">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-9">
                      <h5>จำนวนนักศึกษาแยกตามสาขาวิชา</h5>
                  </div>
                  
              </div>
          </div>
        <br>
        <div class="card-body p-1">
            <div class="row">                
                <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">                      
                        <thead>
                            <tr role="row" class="info bg-secondary">
                                <th tabindex="0" class="text-center">ลำดับ</th>  
                                <th tabindex="0" class="text-center">สาขาวิชา</th>                               
                                <th tabindex="0" class="text-center">จำนวนนักศึกษาทั้งหมด</th>
                                <th tabindex="0" class="text-center">ยืนยันข้อมูลแล้ว</th>
                                <th tabindex="0" class="text-center">ยังไม่ยืนยันข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                while($row=mysqli_fetch_array($result)){
                                  $name = $row['major_id'];
                                  $total1 =  mysqli_num_rows($con->query("select * from student where (major_id='$name')"));
                                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='$name')&&(status=1)"));
                                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='$name')&&(status=0)"));
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $i;$i++; ?></td>
                                    <td class=""><?php echo $row['major_name']." (".$row['level'].")"; ?></td>  
                                    <td class="text-center"><?php echo $total1 ?></td>
                                    <td class="text-center"><?php echo $row1 ?></td>                                    
                                    <td class="text-center"><a href="index.php?page=noconfirm&major_id=<?php echo $name ?>"><?php echo $row2 ?></a></td>    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>                
                </div>                
            </div>            
        </div>
        <!-- Main row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->  