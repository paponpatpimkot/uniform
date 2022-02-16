<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db="uniform";

/*    

    $host="localhost";
    $user="planetco_root";
    $pass="Win34112";
    $db="planetco_uni65";
*/
    $con=mysqli_connect($host,$user,$pass,$db);
    $con->query("SET NAMES UTF8");  
?>