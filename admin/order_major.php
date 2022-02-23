<?php
    include '../config/connect.php';
    $sql = "SELECT * FROM student,major where student.major_id=major.major_id";
    $result = $con->query($sql);
    if(isset($_POST['submit'])){
        $search = $_POST['search_major'];

    //$result_search = $con->query("SELECT * FROM major WHERE major_id = '$search'");
    /*$result = $con->query("SELECT * FROM student WHERE major_id ='$search' AND status = 1 AND prename = 'นาย'");
    $row_result = mysqli_fetch_array($result);
    $s1 = $row_result['std_id'];
    /*$results = $con->query("SELECT * FROM order_list WHERE ord_id = '$s1' AND pro_id = '2001' ");
    $resultss = $con->query("SELECT * FROM order_list WHERE pro_id = '2003' AND ord_id = '$s1' ");
    $count = mysqli_num_rows($result);*/
   $sql="SELECT * FROM student, major, order_list, orders WHERE major.major_id = student.major_id AND  orders.std_id = student.std_id  AND orders.ord_id = order_list.ord_id AND student.major_id = '$search' AND student.prename = 'นาย'";
      $result = $con->query($sql);
      //echo $sql."<br>";
	 $sql1 = "SELECT * FROM student, major, orders, order_list, product WHERE major.major_id = student.major_id AND  orders.std_id = student.std_id AND orders.ord_id = order_list.ord_id AND order_list.pro_id = product.pro_id AND student.major_id = '$search' AND student.prename = 'นาย' GROUP BY student.std_id";
      $num = $con->query($sql1);
	  //echo $sql1;
      //echo $_POST['search_major'];
      $num_rows = mysqli_num_rows($num);
	  //echo $result;
	  //echo $num_rows;
    //$result = $con->query("SELECT student.major_id, major.major_name FROM student, major WHERE student.major_id = major.major_id ");
    //$result = $con->query("SELECT * FROM student WHERE major = '$search'");
    //echo $num_rows;
    //echo $result;
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
            </div>
        </div>
        <br>
        <div class="card-body p-1">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">                  
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
                          while($row = mysqli_fetch_array($num)){
                          $count = $con->query("SELECT * FROM order_list WHERE ord_id = '".$row['std_id']."'");                          
                        ?>
                    <tbody>
                    <tr>
                      <td>
                        <?php echo $i;$i++ ?>
                      </td>
                      <td>
                        <?php echo  $row['prename']." ".$row['name'] ?>
                      </td>
                      <td><?php echo $row['eng_name']?></td>
                      <td><?php echo $row['weight']?></td>
                      <td><?php echo $row['height']?></td>
                      <td><?php echo $row['tels']?></td>
                      <td><?php echo $row['telp']?></td>                                                                
                      <?php while($row2 = mysqli_fetch_array($count)){?>
                      <td><?php echo $row2['size']." ".$row2['note1']." ".$row2['note2'];?></td>
                      <?php
                        }
                      }
                      ?>
                    </tr>
                     
                  </tbody>
                  </table>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>

    </div>    
</section>