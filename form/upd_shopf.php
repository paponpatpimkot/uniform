<?php
    if($_POST['size']==""){
        echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
    }else{  
        include 'config/connect.php';          
        $note1=$_POST['not1'];        
        //update_order("2002",$_POST['size'],2,$note1,"");                   
        $std_id=$std_data['std_id'];
        $date=date("Y-m-d");
        $pro_id="2002";
        $size=$_POST['size'];
        $qty=$_POST['qty'];
        $note1=$_POST['note1'];
        $note2=$_POST['note2'];
        $exits_ord=$con->query("select * from orders where std_id='$std_id'");
        $row_exits_ord=mysqli_num_rows($exits_ord);
        $data_exits_ord=mysqli_fetch_array($exits_ord);        
        if($row_exits_ord==1){
            $ord_id=$data_exits_ord['ord_id'];
            $exits_ord_list=mysqli_num_rows($con->query("select * from order_list where ord_id='$ord_id' and pro_id='$pro_id'"));
            if($exits_ord_list==1){
                $con->query("update order_list set size='$size',note1='$note1',note2='$note2',qty='$qty' where ord_id='$ord_id' and pro_id='$pro_id'");            
            }else{
                $con->query("insert into order_list values('$ord_id','$pro_id','$size','$qty','$note1','$note2' where std_id='$std_id')");                  
            }
        }else{
            $ins=$con->query("insert into orders values('','$std_id','$date')");
            if($ins){                
                //$ord_id=$con->insert_id;          
                $ord_id=mysqli_fetch_array($con->query("select ord_id as id from orders where orders.std_id='$std_id'"));
                $id=$ord_id['id'];
                $con->query("insert into order_list values('$id','$pro_id','$size','$qty','$note1','$note2')");                                            
            }
        }        
    }






        echo "<script>window.location.href='index.php?page=myorder'</script>";
    

?>