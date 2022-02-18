<?php
    include 'config/connect.php';
    $myorder=$con->query("select * from product,orders,order_list where orders.ord_id=order_list.ord_id and product.pro_id=order_list.pro_id and std_id='$std_id'");
    $num_rows=mysqli_num_rows($myorder);
    if($num_rows==0){?>
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
        <h4>นักศึกษาสาขาวิชาการบัญชี ให้มาวัดตัวตัดชุดสูทในวันอาทิตย์ที่ 27 กุมภาพันธ์ 2565 ตั้งแต่เวลา 08.30-12.00 น. ที่แผนกวิชาการบัญชี</h4>        
    </div>
<?php }if($std_data['major_id']=='30126' || $std_data['major_id']=='30138' || $std_data['major_id']=='20701' || $std_data['major_id']=='20702'
    || $std_data['major_id']=='30701' || $std_data['major_id']=='30702' || $std_data['major_id']=='30221'){ ?>
    <div class="alert alert-info alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Alert!</h5>
        <h5>นักศึกษาสาขาวิชาช่างอากาศยาน สาขาวิชาเทคนิคควบคุมและซ่อมบำรุงระบบขนส่งทางราง สาขาวิชาธุรกิจการบิน สาขาวิชาการโรงแรม 
            และสาขาวิชาการท่องเที่ยว ทั้ง ปวช. ปวส. ให้มาวัดตัวตัดชุดเครื่องแบบเฉพาะของสาขาวิชาในวันอาทิตย์ที่ 6 มีนาคม 2565 
            ตั้งแต่เวลา 08.30-12.00 น. ที่แผนกวิชาการโรงแรม
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
                    <br>
                    <h5 class="text-danger">เลือกขนาดให้ครบทุกรายการตามเมนูด้านซ้าย</h5>
                    <span class="text-primary">ไม่มีค่าใช้จ่ายใด ๆ เพิ่มเติมจากที่ได้ชำระไปแล้วตอนมอบตัว</span>
                        
                    <?php                              
                        $major_id=$std_data['major_id'];
                        if(($major_id=='20101'|| $major_id=='20102' || $major_id=='20103' || $major_id=='20104' || $major_id=='20105' || $major_id=='20110' || $major_id=='20127')
                            && ($std_data['prename']=='นาย') && ($num_rows==7)){
                           include 'update_status.php';
                        }elseif(($major_id=='20101'|| $major_id=='20102' || $major_id=='20103' || $major_id=='20104' || $major_id=='20105' || $major_id=='20110' || $major_id=='20127') 
                            && ($std_data['prename']='นางสาว') && ($num_rows==9)){
                            include 'update_status.php';
                        }elseif(($major_id=='20106' || $major_id=='20128' || $major_id=='20901') && ($std_data['prename']=='นาย')&&($num_rows==6)){
                            include 'update_status.php';
                        }elseif(($major_id=='20106' || $major_id=='20128' || $major_id=='20901') && ($std_data['prename']=='นางสาว')&&($num_rows==8)){
                            include 'update_status.php';
                        }elseif(($major_id=='20201' || $major_id=='20204' || $major_id=='20701' || $major_id=='20702') && ($std_data['prename']=='นาย')&&($num_rows==7)){
                            include 'update_status.php';
                        }elseif(($major_id=='20201' || $major_id=='20204' || $major_id=='20701' || $major_id=='20702') && ($std_data['prename']=='นางสาว')&&($num_rows==7)){
                            include 'update_status.php';                
                        }elseif(($major_id=='30101' || $major_id=='30102' || $major_id=='30104' || $major_id=='30105' || $major_id=='30106' || $major_id=='30110' || $major_id=='30113'
                        || $major_id=='30120' || $major_id=='30127' || $major_id=='30128' || $major_id=='30901' || $major_id=='30214') && ($std_data['prename']=='นาย') && ($num_rows==6)){
                            include 'update_status.php';                
                        }elseif(($major_id=='30101' || $major_id=='30102' || $major_id=='30104' || $major_id=='30105' || $major_id=='30106' || $major_id=='30110' || $major_id=='30113'
                        || $major_id=='30120' || $major_id=='30127' || $major_id=='30128' || $major_id=='30901' || $major_id=='30214') && ($std_data['prename']=='นางสาว')&&($num_rows==6)){
                            include 'update_status.php';
                        }elseif(($major_id=='30101-1' || $major_id=='30103' || $major_id=='30118') && ($std_data['prename']=='นาย')&&($num_rows==7)){
                            include 'update_status.php';
                        }elseif(($major_id=='30101-1' || $major_id=='30103' || $major_id=='30118') && ($std_data['prename']=='นางสาว')&&($num_rows==7)){
                            include 'update_status.php';
                        }elseif(($major_id=='30211') && ($std_data['prename']=='นาย')&&($num_rows==4)){
                            include 'update_status.php';
                        }elseif(($major_id=='30211') && ($std_data['prename']=='นางสาว')&&($num_rows==4)){
                            include 'update_status.php';
                        }elseif(($major_id=='30201' || $major_id=='30701' || $major_id=='30702') && ($std_data['prename']=='นาย')&&($num_rows==4)){
                            include 'update_status.php';
                        }elseif(($major_id=='30201' || $major_id=='30701' || $major_id=='30702') && ($std_data['prename']=='นางสาว')&&($num_rows==4)){
                            include 'update_status.php';
                        }elseif(($major_id=='30138') && ($std_data['prename']=='นาย')&&($num_rows==2)){
                            include 'update_status.php';
                        }elseif(($major_id=='30138') && ($std_data['prename']=='นางสาว') &&($num_rows==2)){
                            include 'update_status.php';
                        }elseif(($major_id=='30126') && ($std_data['prename']=='นาย') &&($num_rows==2)){
                            include 'update_status.php';
                        }elseif(($major_id=='30126') && ($std_data['prename']=='นางสาว') &&($num_rows==2)){
                            include 'update_status.php';
                        }elseif(($major_id=='30221') && ($std_data['prename']=='นาย') &&($num_rows==4)){
                            include 'update_status.php';
                        }elseif(($major_id=='30221') && ($std_data['prename']=='นางสาว') &&($num_rows==4)){
                            include 'update_status.php';
                        }                                                
                    ?>                                                
            </div>
        </div>
    </div>
</section>
<?php } ?>