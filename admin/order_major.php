<?php
  include '../config/connect.php';
  $sql="select * from student,orders where         
        student.ord_id=orders.ord_id
        and std_id=''";
  $r=$con->query($sql);
  $row=mysqli_fetch_array($r);
?>
<section class="content-header">
    <div class="container-fluid">
        <form action="">
            <label for="">เลือกสาขาวิชา</label>
            <select name="" id="">
              <option value=""></option>
            </select>
        </form>
    </div><!-- /.container-fluid -->
</section>
<section class="content container">
  <div class="card">
    <div class="card-header">
    <h1><i class="nav-icon fas fa-address-card"></i>ข้อมูลรายการสั่งชุดเครื่องแบบของสาขาวิชา</h1>
    </div>    
    <div class="card-body p-1">
      <div class="row">        
          <div class="col-md-1"></div>                              
          <div class="col-md-10 mb-3">
              <?php echo $row['name'];?>
          </div>              
          <div class="col-md-1"></div>        
      </div><!-- row-->    
    </div>  <!-- card-body-->               
  </div> <!-- card-->                             
</section> 