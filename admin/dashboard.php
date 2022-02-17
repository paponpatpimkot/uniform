    <!-- Content Header (Page header) -->
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
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  include '../config/connect.php';
                  $completed=mysqli_num_rows($con->query("select * from student where status=1"));
                  $uncomplete=mysqli_num_rows($con->query("select * from student"));
                ?>
                <h3><?php echo number_format($completed)."/".number_format($uncomplete);?></h3>

                <p>ยืนยันข้อมูลแล้ว/ยังไม่ยืนยันข้อมูล</p>
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
            <div class="small-box bg-success">
              <div class="inner">
                <?php  
                  $shopm=mysqli_num_rows($con->query("select * from order_list where pro_id='2001'"));
                ?>
                <h3><?php echo number_format($shopm)?> </h3>

                <p>เสื้อฝึกงาน (ชาย)</p>
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
                  $trouser=mysqli_num_rows($con->query("select * from order_list where pro_id='2003'"));
                ?>
                <h3><?php echo number_format($trouser)?> </h3>

                <p>กางเกงฝึกงาน</p>
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
                  $trouser=mysqli_num_rows($con->query("select * from order_list where pro_id='2005'"));
                ?>
                <h3><?php echo number_format($trouser)?> </h3>

                <p>เสื้อเชิ้ตแขนสั้น (ชาย)</p>
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
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php  
                  $shopf=mysqli_num_rows($con->query("select * from order_list where pro_id='2007'"));
                ?>
                <h3><?php echo number_format($shopf)?> </h3>

                <p>เสื้อเชิ้ตแขนสั้น (หญิง)</p>
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
            <div class="small-box bg-success">
              <div class="inner">
                <?php  
                  $shopf=mysqli_num_rows($con->query("select * from order_list where pro_id='2002'"));
                ?>
                <h3><?php echo number_format($shopf)?> </h3>

                <p>เสื้อฝึกงาน (หญิง)</p>
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
                  $shopf=mysqli_num_rows($con->query("select * from order_list where pro_id='2004'"));
                ?>
                <h3><?php echo number_format($shopf)?> </h3>

                <p>กระโปรง</p>
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
                  $trouser=mysqli_num_rows($con->query("select * from order_list where pro_id='2006'"));
                ?>
                <h3><?php echo number_format($trouser)?> </h3>

                <p>เสื้อเชิ้ตแขนยาว (ชาย)</p>
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