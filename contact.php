<div class="text-center">    
    <div class="text-danger">หมายเลขโทรศัพท์สำหรับติดต่อร้าน</div>    
    <div class="container">
        <span class="text-primary">ชุดฝึกงาน</span><i class="fa fa-phone"></i>
        <?php 
        $std_data=mysqli_fetch_array($con->query("select * from student where std_id='$std_id'"));
        if($std_data['major_id']=='20101' || $std_data['major_id']=='20102' || $std_data['major_id']=='20106' || $std_data['major_id']=='30101'
            || $std_data['major_id']=='30101' || $std_data['major_id']=='30101-1' || $std_data['major_id']=='30106'){
            echo "ร้านแสงทวี 087-962-5695";
        }elseif($std_data['major_id']=='20104' || $std_data['major_id']=='20103' || $std_data['major_id']=='20110' || $std_data['major_id']=='20901'
            || $std_data['major_id']=='30110' || $std_data['major_id']=='30126' || $std_data['major_id']=='30138' || $std_data['major_id']=='20201'
            || $std_data['major_id']=='30211'){
            echo "ร้านทีมบูติก 086-376-8125";
        }elseif($std_data['major_id']=='20105' || $std_data['major_id']=='20127' || $std_data['major_id']=='20128' || $std_data['major_id']=='20204'
            || $std_data['major_id']=='20701' || $std_data['major_id']=='20702' || $std_data['major_id']=='30701' || $std_data['major_id']=='30702'
            || $std_data['major_id']=='30113' || $std_data['major_id']=='30118' || $std_data['major_id']=='30214' || $std_data['major_id']=='30221'
            || $std_data['major_id']=='30201'){
            echo "ร้านจรรยา 086-377-5514";
        }elseif($std_data['major_id']=='30105' || $std_data['major_id']=='30102' || $std_data['major_id']=='30120' || $std_data['major_id']=='30127'
            || $std_data['major_id']=='30128' || $std_data['major_id']=='30901' || $std_data['major_id']=='30103'){
            echo "ร้านไทยทรง 081-377-1163";
        }elseif($std_data['major_id']=='30105'){
            echo "ร้านดิออร์ 085-945-0649";
        }
        ?>
        <br>
        <span class="text-primary">ชุดพละ&nbsp;</span>ร้านภารดา การ์เมนท์ <i class="fa fa-phone"></i>085-888-8723
        <br>
        <?php 
          if($std_data['prename']=="นางสาว"){?>
            <span class="text-primary">เสื้อเชิ้ตสีขาวแขนสั้น (หญิง) &nbsp;</span>ร้านแสงทวี <i class="fa fa-phone"></i>087-962-5695
            <br>
            <span class="text-primary">เสื้อเชิ้ตสีขาวแขนยาว (หญิง) &nbsp;</span>ร้านจรรยา <i class="fa fa-phone"></i>086-377-5514
        <?php }elseif($std_data['prename']=="นาย"){?>
            <span class="text-primary">เสื้อเชิ้ตสีขาวแขนสั้น-แขนยาว (ชาย)&nbsp;</span>ร้านดิออร์ <i class="fa fa-phone"></i>085-945-0649            
        <?php 
        }
        ?>
    </div>
</div>