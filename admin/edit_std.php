<?php
    include '../config/connect.php';
    $std_id=$_GET['std_id'];
    $row=mysqli_fetch_array($con->query("SELECT * FROM student s,major m WHERE s.major_id=m.major_id  and std_id='$std_id'"));    
    $ord_list=$con->query("SELECT * FROM product,orders,order_list WHERE product.pro_id=order_list.pro_id and orders.ord_id=order_list.ord_id and orders.std_id='$std_id'");
    if(isset($_POST['edit'])){  
        $name=$_POST['name']      ;
        $eng_name=$_POST['eng_name'];
        $major=$_POST['major'];        
        $status=$_POST['status'];
        $weight=$_POST['weight'];
        $height=$_POST['height'];
        $tels=$_POST['tels'];
        $telp=$_POST['telp'];
        $upd_data=$con->query("UPDATE student SET name='$name',eng_name='$eng_name',weight='$weight',height='$height'
        ,tels='$tels',telp='$telp',status='$status' WHERE std_id='$std_id'");
        if(!$upd_data){
            echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้')</script>";
        }else{
            echo "<script>window.location.href='index.php?page=student'</script>";
        }
    }
?>
<section class="content-header">
    <div class="container-fluid">
        <br>
    </div><!-- /.container-fluid -->
</section>
<section class="content container">
  <div class="card">
    <div class="card-header">
    <h1><i class="nav-icon fas fa-address-card"></i> แก้ไขข้อมูลนักศึกษา</h1>
    </div>    
    <div class="card-body p-1">
      <div class="row">        
          <div class="col-md-1"></div>                              
          <div class="col-md-10 mb-3">  
            <form role="form" action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">                          
                <div class="form-group">
                  <label>ชื่อ-สกุล</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                </div>
                <div class="form-group">
                  <label>ชื่อภาษาอังกฤษ</label>
                  <input type="text" class="form-control" name="eng_name" value="<?php echo $row['eng_name']?>">
                </div>
                <div class="form-group">
                  <label>สาขา</label>
                  <input type="text" class="form-control" name="major" value="<?php echo $row['major_name']?>">
                </div>
                <div class="form-group">
                  <label>น้ำหนัก</label>
                  <input type="text" class="form-control" name="weight" value="<?php echo $row['weight']?>">
                </div> 
                <div class="form-group">
                  <label>ส่วนสูง</label>
                  <input type="text" class="form-control" name="height" value="<?php echo $row['height']?>">
                </div>
                <div class="form-group">
                  <label>เบอร์โทรศัพท์นักเรียน</label>
                  <input type="text" class="form-control" name="tels" value="<?php echo $row['tels']?>">
                </div>
                <div class="form-group">
                  <label>เบอร์โทรศัพท์ผู้ปกครอง</label>
                  <input type="text" class="form-control" name="telp" value="<?php echo $row['telp']?>">
                </div>
                <div class="form-group">
                  <label>สถานะ</label>
                  <select class="form-control" name="status">
                    <option value="<?php echo $row['status']?>">
                      <?php 
                        if($row['status']=="0"){
                          echo "ยังไม่ยืนยันข้อมูล";
                        }elseif($row['status']=="1"){
                          echo "ยืนยันข้อมูลแล้ว";
                        }
                      ?>
                    </option>
                    <option value="0">ยังไม่ยืนยันข้อมูล</option>
                    <option value="1">ยืนยันข้อมูลแล้ว</option>                    
                  </select>
                </div>
                <?php 
                  while($row2=mysqli_fetch_assoc($ord_list)){
                ?>
                <div class="form-group">
                  <label><?php echo $row2['pro_name']?></label>
                  <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">size</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="size" value="<?php echo $row2['size']?>">                                    
                        </div>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">จำนวน</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="qty" value="<?php echo $row2['qty']?>">
                        </div>
                      </div> 
                    </div>
                  </div>                
                </div>
                <?php } ?>                                
                <button type="submit" class="btn btn-success btn-block" name="edit">Edit</button>        
              </div> <!-- md-10-->                            
            </form>            
          <div class="col-md-1"></div>        
      </div><!-- row-->    
    </div>  <!-- card-body-->               
  </div> <!-- card-->                             
</section> 