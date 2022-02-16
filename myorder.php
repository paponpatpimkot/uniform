<?php
    include 'config/connect.php';
    $myorder=$con->query("select * from product,orders,order_list where orders.ord_id=order_list.ord_id and product.pro_id=order_list.pro_id and std_id='$std_id'");
    $row=mysqli_num_rows($myorder);
    if($row==0){?>
        <div class="alert alert-info alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Alert!</h5>
            <h4>คุณยังไม่ได้เลือกรายการ</h4>        
        </div>
    <?php
    }else{
?>
<?php 
    if($std_data['major_id']=='20201' || $std_data['major_id']=='30201'){
?>
    <div class="alert alert-info alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Alert!</h5>
        <h4>นักศึกษาสาขาวิชาการบัญชี ให้มาวัดตัวตัดชุดสูทในวันอาทิตย์ที่ 27 กุมภาพันธ์ 2565 ตั้งแต่เวลา 08.30-12.00 น. ที่โดมเอนกประสงค์</h4>        
    </div>
<?php }if($std_data['major_id']=='30126' || $std_data['major_id']=='30138' || $std_data['major_id']=='20701' || $std_data['major_id']=='20702'
    || $std_data['major_id']=='30701' || $std_data['major_id']=='30702' || $std_data['major_id']=='30221'){ ?>
    <div class="alert alert-info alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Alert!</h5>
        <h5>นักศึกษาสาขาวิชาช่างอากาศยาน สาขาวิชาเทคนิคควบคุมและซ่อมบำรุงระบบขนส่งทางราง สาขาวิชาธุรกิจการบิน สาขาวิชาการโรงแรม 
            และสาขาวิชาการท่องเที่ยว ทั้ง ปวช. ปวส. ให้มาวัดตัวตัดชุดเครื่องแบบเฉพาะของสาขาวิชาในวันอาทิตย์ที่ 6 มีนาคม 2565 
            ตั้งแต่เวลา 08.30-12.00 น. ที่โดมเอนกประสงค์
        </h5>        
    </div>
    <?php } ?>
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
<?php } ?>