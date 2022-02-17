<?php
    $shop_m=$_SESSION['pro_id']['shopm'];
    $shop_f=$_SESSION['pro_id']['shopf'];
    

?>
<section class="content-header">
  <div class="container-fluid"></div>
</section>
<section class="content">
    <div class="container mt-5">
        <div class="card text-center">
            <div class="row" style="margin-top:-35px;">
                <div class="col-md-1"></div>
                <div class="col-md-10 justify-content-center d-flex">
                    <div class="card-header bg-primary text-white w-100" style="box-shadow:5px 5px 5px #ccc;">
                        <div class="row">                            
                            <div class="col-md-12">
                                <h4>รายการเครื่องแบบของฉัน</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>        
            </div>
            <div class="card-body">
                
                    
                    <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>รายการ</th>
                                <th>Size</th>
                                <th>จำนวน</th>
                                <th>-</th>
                            </tr>
                            <?php
                                $i=1;
                                while($row=mysqli_fetch_array($myorder)){                                    
                            ?>
                            <tr>
                                <td><?php echo $i;$i++;?></td>
                                <td><?php echo $row['pro_name']?></td>
                                <td><?php echo $row['size']?></td>
                                <td><?php echo $row['qty']?></td>
                                <td align="left"><?php echo $row['note1']." ".$row['note2']?></td>
                            </tr>                            
                            <?php } ?>                               
                        </table>  
                        <br><br> 
                        <span class="text-danger">**กรุณาตรวจสอบข้อมูลให้แน่ใจว่าได้เลือกขนาดครบทุกรายการแล้วจึงกดปุ่มยืนยัน เพราะถ้ากดปุ่มยืนยันแล้วจะไม่สามารถแก้ไขเพิ่มเติมข้อมูลได้อีก**</span>
                        <br><br>
                        <?php  
                            if(isset($_POST['cf'])){
                                $status=$con->query("update student set status=1 where std_id='$std_id'");
                                if($status){                                    
                                    echo "<script>window.location.href='completed.php'</script>";
                                }
                            }
                        ?>
                        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                            <input type="submit" class="btn btn-success w-100" value="ยืนยันข้อมูล" name="cf" 
                            onclick="confirm('เมื่อยืนยันข้อมูลแล้วจะไม่สามารถแก้ไขข้อมูลได้อีก คุณแน่ใจหรือไม่?')">
                        </form>
                        
                        <br><br>                                                                         
                        <?php include 'contact.php'; ?>            
            </div>
        </div>
    </div>
</section>