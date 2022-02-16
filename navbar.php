<?php
  include 'config/connect.php';
  $std_data=mysqli_fetch_array($con->query("select * from student where std_id='$std_id'"));
?>
  <nav class="main-header  navbar navbar-expand navbar-navy navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            วิธีการวัดขนาดรองเท้า
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?page=wat_canvas">วิธีการวัดขนาดรองเท้าผ้าใบ</a></li>
            <li><a class="dropdown-item" href="index.php?page=wat_cutshoe_m">วิธีการวัดขนาดรองเท้าคัทชู (ชาย)</a></li>
            <li><a class="dropdown-item" href="index.php?page=wat_cutshoe_f">วิธีการวัดขนาดรองเท้าคัทชู (หญิง)</a></li>
            <li><a class="dropdown-item" href="index.php?page=wat_cutshoe_f">วิธีการวัดขนาดรองเท้าเซฟตี้</a></li>
          </ul>        
      </li>       -->
    </ul>

    <!-- Right navbar links -->    
    <ul class="navbar-nav ml-auto">
    <!-- <li class="nav-item ">
        <a href="index.php" class="nav-link ">          
          ตรวจสอบรายการของฉัน
      </a>        
      </li>             -->
      <li class="nav-item ">
        <a href="index.php" class="nav-link ">
          <i class="fa fa-user mx-2"></i>
          <?php echo $std_data['prename'].$std_data['name']?>          
      </a>        
      </li> 
      <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <i class="fas fa-power-off"></i>              
            </a>
      </li>             
    </ul>
  </nav>
 <!--  http://fordev22.com/ -->
  <!-- /.navbar -->