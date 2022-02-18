    <!-- Content Header (Page header) -->
    <?php
      include '../config/connect.php';
      $std=mysqli_fetch_array($con->query("select * from student"));
    ?>
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
                  $apply=mysqli_fetch_array($con->query("select count(std_id) as id from orders"));
                  $completed=mysqli_num_rows($con->query("select * from student where status=1"));
                  $uncomplete=mysqli_num_rows($con->query("select * from student where status=0"));
                ?>
                <h3><?php echo number_format($apply['id'])."/".number_format($completed)."/".number_format($uncomplete);?></h3>

                <p>กรอกข้อมูล/ยืนยัน/ไม่ยืนยัน</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                        
                    //$apply=mysqli_fetch_array($con->query("select form count(std_id) as id from orders"));
                    $row1=mysqli_num_rows($con->query("select * from student where (major_id='20101' || major_id='30101' || major_id='30101-1')&&(status=1)"));
                    $row2=mysqli_num_rows($con->query("select * from student where (major_id='20101' || major_id='30101' || major_id='30101-1')&&(status=0)"));                  
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างยนต์</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20102' || major_id='30102')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20102' || major_id='30102')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างกลโรงงาน</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20103' || major_id='30103')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20103' || major_id='30103')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างเชื่อมโลหะ</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- แถวที่ 2 -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php  
                  $row=mysqli_fetch_array($con->query("select count(std_id) as id from orders"));
                  $std=mysqli_fetch_array($con->query("select count(std_id) as id from student"));
                ?>
                <h3><?php echo number_format($row['id'])."/".number_format($std['id'])?> </h3>

                <p>กรอกข้อมูลแล้ว</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20104' || major_id='30104')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20104' || major_id='30104')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างไฟฟ้ากำลัง</p>
              </div>              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20105' || major_id='30105')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20105' || major_id='30105')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างอิเล็กทรอนิกส์</p>
              </div>  
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20106' || major_id='30106')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20106' || major_id='30106')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างก่อสร้าง</p>
              </div> 
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- แถวที่ 3 -->
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20110' || major_id='30110')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20110' || major_id='30110')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างเขียนแบบเครื่องกล</p>
              </div> 
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20127' || major_id='30127')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20127' || major_id='30127')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างเมคคาทรอนิกส์</p>
              </div>              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20128' || major_id='30128')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20128' || major_id='30128')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างเทคนิคคอมพิวเตอร์</p>
              </div>  
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20901' || major_id='30901')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20901' || major_id='30901')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาเทคโนโลยีสารสนเทศ</p>
              </div> 
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

                <!-- แถวที่ 4 -->
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20201' || major_id='30201')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20201' || major_id='30201')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการบัญชี</p>
              </div> 
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20204')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20204')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาคอมพิวเตอร์ธุรกิจ</p>
              </div>              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20701' || major_id='30701')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20701' || major_id='30701')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการโรงแรม</p>
              </div>  
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='20702' || major_id='30702')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='20702' || major_id='30702')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการท่องเที่ยว</p>
              </div> 
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
        <!-- แถวที่ 5 -->
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30113')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30113')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาเทคนิคพลังงาน</p>
              </div> 
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30118')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30118')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการตรวจสอบโดยไม่ทำลาย</p>
              </div>              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where major_id='30120' && status=1"));
                  $row2=mysqli_num_rows($con->query("select * from student where major_id='30120' && status=0"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาเครื่องมือวัดและควบคุม</p>
              </div>  
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30126')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30126')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาช่างอากาศยาน</p>
              </div> 
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- แถวที่ 6 -->
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30138')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30138')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาระบบขนส่งทางราง</p>
              </div> 
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>              
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30211')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30211')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการจัดการธุรกิจค้าปลีก</p>
              </div>              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where major_id='30214' && status=1"));
                  $row2=mysqli_num_rows($con->query("select * from student where major_id='30214' && status=0"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาการจัดการโลจิสติกส์</p>
              </div>  
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <?php                    
                  $row1=mysqli_num_rows($con->query("select * from student where (major_id='30221')&&(status=1)"));
                  $row2=mysqli_num_rows($con->query("select * from student where (major_id='30221')&&(status=0)"));
                ?>
                <h3><?php echo $row1."/".$row2 ?> </h3>
                <p>แผนกวิชาธุรกิจการบิน</p>
              </div> 
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Main row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->  