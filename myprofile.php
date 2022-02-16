<?php
    session_start();
    include 'config/connect.php';    
    $std_id=$_GET['std_id'];        
    $sql="SELECT * FROM student,major WHERE student.major_id=major.major_id AND std_id='$std_id'";
    $std_data=mysqli_fetch_array($con->query($sql));    
    $_SESSION['std_id']=$std_data['std_id'];
    $_SESSION['major_id']=$std_data['major_id'];
    if($std_data['status']==1){
        echo "<script>alert('คุณกรอกข้อมูลการวัดตัวและทำการยืนยันข้อมูลไปแล้ว ไม่สามารถกรอกข้อมูลได้อีก');
        window.location.href='completed.php';</script>";
    }else{
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $eng_name=$_POST['eng_name'];
            $weight=$_POST['weight'];
            $height=$_POST['height'];
            $tels=$_POST['tels'];
            $telp=$_POST['telp'];
            if($weight=="" || $height=="" || $tels=="" || $telp==""){
                echo "<script>alert('คุณยังไม่ได้กรอกข้อมูลเพิ่มเติมหรือยังกรอกข้อมูลไม่ครบ');window.history.back();</script>";
            }else{
                $con->query("update student set name='$name',eng_name='$eng_name', weight='$weight', height='$height', tels='$tels', telp='$telp' where std_id='$std_id'");        
                header('location:index.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400&family=M+PLUS+2:wght@100&family=Prompt&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body style="background:#dfecf5">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">ข้อมูลส่วนตัว (กรุณากรอกข้อมูลเพิ่มเติม)</h3>
            </div>                        
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">ชื่อ-สกุล (ภาษาไทย)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $std_data['name']?>" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">สาขาวิชา</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $std_data['major_name']?>" readonly>
                        </div>
                    </div>                
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">ระดับชั้น</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $std_data['level']?>" readonly>
                        </div>
                    </div>                
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">ชื่อ-นามสกุล (ภาษาอังกฤษ)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ-สกุลเป็นภาษาอังกฤษ" name="eng_name"
                            value="<?php echo $std_data['eng_name']?>">
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">น้ำหนัก</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="กรุณากรอกน้ำหนักเป็นกิโลกรัม" name="weight"
                            value="<?php echo $std_data['weight']?>">
                        </div>
                    </div>    
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">ส่วนสูง</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="กรุณากรอกส่วนสูงเป็นเซ็นติเมตร" name="height"
                            value="<?php echo $std_data['height']?>">
                        </div>
                    </div>               
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">เบอร์โทรศัพท์นักเรียน</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์ของนักเรียน" name="tels" value="<?php echo $std_data['tels']?>">
                        </div>
                    </div>  
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">เบอร์โทรศัพท์ผู้ปกครอง</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทรศัพท์ของผู้ปกครอง" name="telp" value="<?php echo $std_data['telp']?>">
                        </div>
                    </div>                                 
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">ยืนยันข้อมูล</button>
                        </div>
                    </div>                                                            
                </form>
            </div>            
        </div>
    </div>
</body>
</html>