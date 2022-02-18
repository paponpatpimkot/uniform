<?php
  include '../config/connect.php';    
  if(isset($_POST['submit'])){
    $search = $_POST['search_major'];    
    $sql="SELECT * FROM student, major, order_list, orders WHERE major.major_id = student.major_id AND  orders.std_id = student.std_id  AND orders.ord_id = order_list.ord_id AND student.major_id = '$search' AND student.prename = 'นาย'";
    $result = $con->query($sql);      
	  $sql1 = "SELECT * FROM student, major, orders, order_list, product WHERE major.major_id = student.major_id AND  orders.std_id = student.std_id AND orders.ord_id = order_list.ord_id AND order_list.pro_id = product.pro_id AND student.major_id = '$search' AND student.prename = 'นาย' GROUP BY student.std_id";
    $num = $con->query($sql1);
	  $num_rows = mysqli_num_rows($num);	  
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
<!-- Content Header (Page header) -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">          
            <h1 class="m-0"> <i class="nav-icon fas fa-list"></i> Order แยกตามสาขาวิชา</h1>
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

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <form role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                    <?php $mq=$con->query("SELECT * FROM major"); ?>
                    <div class="form-group row">
                      <div class="col-auto">
                        <select name="search_major" class="form-control">
                          <option value="">กรุณาเลือกแผนก</option>
                          <?php while($major=mysqli_fetch_array($mq)){ ?>
                          <option value="<?php echo $major['major_id']?>"><?php echo $major['major_name']." (".$major['level'].")"?></option>   
                          <?php } ?>                 
                        </select>                  
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-outline-primary" name="submit" type="submit">ค้นหา</button>
                      </div>
                    </div>
                </form>
              </div>
              <div class="card-body">              
                  <?php
                    /*if(@$search == '20101'){
                      echo "<h3>ช่างยนต์</h3>";
                    }elseif(@$search == '20102'){
                      echo "<h3>ช่างกลโรงงาน</h3>";
                    }elseif(@$search == '20103'){
                      echo "<h3>ช่างเชื่อมโลหะ</h3>";
                    }elseif(@$search == '20104'){
                      echo "<h3>ช่างไฟฟ้ากำลัง</h3>";
                    }elseif(@$search == '20105'){
                      echo "<h3>ช่างอิเล็กทรอนิกส์</h3>";
                    }elseif(@$search == '20106'){
                      echo "<h3>ช่างก่อสร้าง</h3>";
                    }elseif(@$search == '20110'){
                      echo "<h3>ช่างเขียนแบบเครื่องกล</h3>";
                    }elseif(@$search == '20127'){
                      echo "<h3>เมคคาทรอนิกส์</h3>";
                    }elseif(@$search == '20128'){
                      echo "<h3>ช่างเทคนิคคอมพิวเตอร์</h3>";
                    }elseif(@$search == '20201'){
                      echo "<h3>การบัญชี</h3>";
                    }elseif(@$search == '20204'){
                      echo "<h3>คอมพิวเตอร์ธุรกิจ</h3>";
                    }elseif(@$search == '20701'){
                      echo "<h3>การโรงแรม</h3>";
                    }elseif(@$search == '20702'){
                      echo "<h3>การท่องเที่ยว</h3>";
                    }elseif(@$search == '20901'){
                      echo "<h3>เทคโนโลยีสาสนเทศ</h3>";
                    }elseif(@$search == '30101'){
                      echo "<h3>เทคนิคเครื่องกล</h3>";
                    }elseif(@$search == '30101-1'){
                      echo "<h3>เทคนิคเครื่องกล</h3>";
                    }elseif(@$search == '30102'){
                      echo "<h3>เทคนิคการผลิต</h3>";
                    }elseif(@$search == '30103'){
                      echo "<h3>เทคนิคโลหะ</h3>";
                    }elseif(@$search == '30104'){
                      echo "<h3>ไฟฟ้า</h3>";
                    }elseif(@$search == '30105'){
                      echo "<h3>อิเล็กทรอนิกส์</h3>";
                    }elseif(@$search == '30106'){
                      echo "<h3>ช่างก่อสร้าง</h3>";
                    }elseif(@$search == '30110'){
                      echo "<h3>เขียนแบบเครื่องกล</h3>";
                    }elseif(@$search == '30113'){
                      echo "<h3>เทคนิคพลังงาน</h3>";
                    }elseif(@$search == '30118'){
                      echo "<h3>การตรวจสอบโดยไม่ทำลาย</h3>";
                    }elseif(@$search == '30120'){
                      echo "<h3>เครื่องมือวัดและควบคุม</h3>";
                    }elseif(@$search == '30126'){
                      echo "<h3>ช่างอาศยาน</h3>";
                    }elseif(@$search == '30127'){
                      echo "<h3>เมคคาทรอนิกส์และหุ่นยนต์</h3>";
                    }elseif(@$search == '30128'){
                      echo "<h3>เทคโนโลยีคอมพิวเตอร์</h3>";
                    }elseif(@$search == '30138'){
                      echo "<h3>เทคนิคควบคุมและซ่อมบำรุงระบบขนส่งทางราง</h3>";
                    }elseif(@$search == '30201'){
                      echo "<h3>การบัญชี</h3>";
                    }elseif(@$search == '30211'){
                      echo "<h3>การจัดการธุรกิจค้าปลีก</h3>";
                    }elseif(@$search == '30214'){
                      echo "<h3>การจัดการโลจิสติกส์และซัพพลายเชน</h3>";
                    }elseif(@$search == '30221'){
                      echo "<h3>ธุรกิจการบิน</h3>";
                    }elseif(@$search == '30701'){
                      echo "<h3>การโรงแรม</h3>";
                    }elseif(@$search == '30702'){
                      echo "<h3>การท่องเที่ยว</h3>";
                    }elseif(@$search == '30901'){
                      echo "<h3>เทคโนโลยีสารสนเทศ</h3>";
                    }*/
                  ?>
                
                   <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <?php
                       if(@$search=='20101'|| @$search=='20102' || @$search=='20103' || @$search=='20104' || @$search=='20105' || @$search=='20110' || @$search=='20127'){
                        include 'thead/c1.php';
                    }elseif(@$search=='20106' || @$search=='20128' || @$search=='20901'){
                        include 'thead/it.php';
                    }elseif(@$search=='20201' || @$search=='20204' || @$search=='20701' || @$search=='20702'){
                        include 'thead/c5.php';      
                    }elseif(@$search=='30101' || @$search=='30102' || @$search=='30104' || @$search=='30105' || @$search=='30106' || @$search=='30110' || @$search=='30113'
                    || @$search=='thead/30120' || @$search=='30127' || @$search=='30128' || @$search=='30901' || @$search=='30214'){
                        include 'thead/s1.php';                
                    }elseif(@$search=='30101-1' || @$search=='30103' || @$search=='30118'){
                        include 'thead/s3.php';
                    }elseif(@$search=='30201' || @$search=='30701' || @$search=='30702'){
                        include 'thead/s7.php';
                    }elseif(@$search=='30138'){
                        include 'thead/s9.php';
                    }elseif(@$search=='30126'){
                        include 'thead/s11.php';
                    }elseif(@$search=='30221'){
                        include 'thead/s13.php';
                    }
                      ?>
                    </thead>
                    <?php
                      $i = 1;
                      while(@$row = mysqli_fetch_array($num)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo  $row['prename']." ".$row['name'] ?></td>
                        <?php 
                            $id = $row['std_id'];                        
                            $count = $con->query("SELECT * FROM order_list WHERE ord_id = '$id'");
                            while($row2 = mysqli_fetch_array($count)){
                        ?>                        
                        <td><?php	echo $row2['size']." ".$row2['note1']." ".$row2['note2']." "; ?></td>
                        <?php  
                            } 
                          }
                        ?>
                      </tr>                     
                    </tbody>
                  </table>                
              </div>
            </div>
          </div>
        </div>
      </div>
</section>