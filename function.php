<?php    
    function update_order($p,$s,$q,$n1,$n2){                
        include 'config/connect.php';
        $std_id=$std_data['std_id'];
        $date=date("Y-m-d");
        $pro_id=$p;
        $size=$s;
        $qty=$q;
        $note1=$n1;
        $note2=$n2;
        $exits_ord=$con->query("select * from orders where std_id='$std_id'");
        $row_exits_ord=mysqli_num_rows($exits_ord);
        $data_exits_ord=mysqli_fetch_array($exits_ord);        
        if($row_exits_ord==1){
            $ord_id=$data_exits_ord['ord_id'];            
            $exits_ord_list=mysqli_num_rows($con->query("select * from order_list where ord_id='$ord_id' and pro_id='$pro_id'"));
            if($exits_ord_list==1){
                $con->query("update order_list set size='$size',note1='$note1',note2='$note2',qty='$qty' where pro_id='$pro_id'");            
            }else{
                $con->query("insert into order_list values('$ord_id','$pro_id','$size','$qty','$note1','$note2')");                  
            }
        }else{
            $ins=$con->query("insert into orders values('','$std_id','$date')");
            if($ins){
                $ord_id=$con->insert_id;        
                $con->query("insert into order_list values('$ord_id','$pro_id','$size','$qty','$note1','$note2')");                                            
            }
        }        
    }
?>