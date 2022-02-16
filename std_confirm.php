<?php
    include 'config/connect.php';    
    $name=$_POST['name'];        
    $sql="SELECT * FROM student WHERE name like '%$name%' || major_id='$name' || std_id='$name'";
    $result=$con->query($sql);    
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
        <div class="card bg-white">
            <div class="card-header bg-primary text-white text-center">
                <h4>คลิก "ตกลง" ที่ชื่อของตัวเองเพื่อยืนยันข้อมูล</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">                    
                    <?php
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['prename'].$row['name']?></td>
                        
                        <td>                            
                            <a class="btn btn-outline-success" href="myprofile.php?std_id=<?php echo $row['std_id']?>">
                                ตกลง
                            </a>
                        </td>
                    </tr>
                    <?php } ?>                    
                </table>
                <br>
                <div class="text-left">                    
                    <a href="login.php" class="btn btn-outline-primary">กลับไปหน้าแรก</a><br><br>
                    <span style="font-style:italic">หรือหากไม่มีชื่อติดต่องานทะเบียน 061-726-9598</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>