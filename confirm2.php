<?php
    include 'config/connect.php';
    session_start();
    $std_id=$_POST['std_id'];   
    $std_data=mysqli_fetch_array($con->query("select * from student where std_id='$std_id'"));    
    $_SESSION['std_id']=$std_data['std_id'];
    $_SESSION['major_id']=$std_data['major_id'];
    header('location:myprofile.php');
?>