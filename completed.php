<?php
    session_start();
    $std_id=$_SESSION['std_id'];
    include 'config/connect.php';
    $std_data=mysqli_fetch_array($con->query("select * from student,major where student.major_id=major.major_id and std_id='$std_id'"));
    $myorder=$con->query("select * from product, orders,order_list where product.pro_id=order_list.pro_id and orders.ord_id=order_list.ord_id and std_id='$std_id'");
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
    <section class="content">
        <div class="container mt-5">
            <div class="card text-center">
                <div class="row" style="margin-top:-35px;">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 justify-content-center d-flex">
                        <div class="card-header bg-primary text-white w-100" style="box-shadow:5px 5px 5px #ccc;">
                            <div class="row">                            
                                <div class="col-md-12">
                                    <h5>
                                        รายการเครื่องแบบของ<span class="text-warning">
                                        <?php echo $std_data['prename'].$std_data['name']." ระดับ ".$std_data['level']
                                        ." สาขาวิชา ".$std_data['major_name']?></span>
                                    </h5>
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
                            <a href="logout.php" class="btn btn-primary">ออกจากระบบ</a>
                            
                            <br><br>                                                                         
                            <?php include 'contact.php'; ?>            
                </div>
            </div>
        </div>
    </section>
</body>
</html>