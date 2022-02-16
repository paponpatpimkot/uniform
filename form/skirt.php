<?php
    if(isset($_POST['submit'])){
        $major_id=$std_data['major_id'];
        $size=$_POST['size'];    
        if($size==""){
            echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
        }else{            
            if($_POST['note1']==""){
                echo "<script>alert('คุณยังไม่ได้ระบุความยาว');</script>";
            }else{
                $note1=$_POST['note1'];                    
                if($_POST['note2']==""){
                    $note2="";
                }else{
                    $note2="สะโพกจริง ".$_POST['note2']."″";    
                }                                                        
                if($major_id=='20701' || $major_id=='20702' || $major_id=='30701' || $major_id=='20204' || $major_id=='30701' || $major_id=='30201'|| $major_id=='20201'){
                    $qty=2;
                    update_order("2004",$_POST['size'],$qty,$note1,$note2);
                    echo "<script>window.location.href='index.php?page=myorder';</script>";
                }else{
                    $qty=1;
                    update_order("2004",$_POST['size'],$qty,$note1,$note2);
                    echo "<script>window.location.href='index.php?page=myorder';</script>";
                }                                                                               
            }
        }
    }   
?>
<section class="content-header">
  <div class="container-fluid"> 
    <!-- <h1><i class="nav-icon fas fa-address-card"></i> จัดการข้อมูลสมาชิก</h1> -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container mt-5">
        <div class="card text-center">
            <div class="row" style="margin-top:-35px;">
                <div class="col-md-1"></div>
                <div class="col-md-10 justify-content-center d-flex">
                    <div class="card-header bg-primary text-white w-100" style="box-shadow:5px 5px 5px #ccc;">
                        <h4>เลือกขนาดกระโปรงนักศึกษา</h4> 
                        <h5 class="text-warning">***ขนาดตามตารางเป็นขนาดของเสื้อผ้า ไม่ใช่สัดส่วนของผู้สวมใส่***</h5>                       
                    </div>
                </div>
                <div class="col-md-1"></div>        
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <table class="table table-striped">
                            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                                <tr>      
                                    <th style="width:20%">ขนาด</th>                              
                                    <th style="width:30%">รอบเอว (นิ้ว)</th>
                                    <th style="width:30%">สะโพก (นิ้ว)</th>                                    
                                    <th style="width:30%">เลือก</th>
                                </tr>
                                <tr>           
                                    <td>SS</td>                         
                                    <td>26</td>
                                    <td>34</td>
                                    <td><input type="radio" name="size" value="SS"></td>                        
                                </tr>
                                <tr>      
                                    <td>S</td>                              
                                    <td>28</td>
                                    <td>36</td>
                                    <td><input type="radio" name="size" value="S"></td>                        
                                </tr>
                                <tr>    
                                    <td>M</td>                                
                                    <td>30</td>
                                    <td>38</td>
                                    <td><input type="radio" name="size" value="M"></td>                        
                                </tr>
                                <tr>      
                                    <td>L</td>                              
                                    <td>32</td>
                                    <td>40</td>
                                    <td><input type="radio" name="size" value="L"></td>                        
                                </tr>
                                <tr>     
                                    <td>XL</td>                               
                                    <td>34</td>
                                    <td>42</td>
                                    <td><input type="radio" name="size" value="XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>2XL</td>
                                    <td>36</td>
                                    <td>44</td>
                                    <td><input type="radio" name="size" value="2XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>3XL</td>
                                    <td>38</td>
                                    <td>46</td>
                                    <td><input type="radio" name="size" value="3XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>4XL</td>
                                    <td>40</td>
                                    <td>48</td>
                                    <td><input type="radio" name="size" value="4XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>5XL</td>
                                    <td>42</td>
                                    <td>50</td>
                                    <td><input type="radio" name="size" value="5XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>6XL</td>
                                    <td>44</td>
                                    <td>58</td>
                                    <td><input type="radio" name="size" value="3XL"></td>                        
                                </tr>                                
                                <tr>                                    
                                    <td colspan="2" align="right">
                                        <label class="col-form-label">ความยาว</label>
                                    </td>
                                    <td colspan="2">
                                        <select name="note1" class="form-control">
                                            <option value="">โปรดระบุ</option>
                                            <option value="ยาว 36″">36 นิ้ว</option>
                                            <option value="ยาว 38″">38 นิ้ว</option>
                                            <option value="ยาว 40″">40 นิ้ว</option>
                                            <option value="ยาว 42″">42 นิ้ว</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    <label class="col-form-label">ถ้าขนาดสะโพกใหญ่กว่าตารางให้ระบุเพิ่มเติม</label>
                                    </td>
                                    <td colspan="2">
                                        <input type="text" name="note2" class="form-control">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <input type="submit" class="btn btn-success w-100" value="บันทึกข้อมูล" name="submit">
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>