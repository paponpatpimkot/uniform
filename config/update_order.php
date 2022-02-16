<?php
    include 'connect.php';
    if(isset($_POST['submit'])){        
        $std_id="65301";
        $date=date("Y-m-d");
        $exits_ord=$con->query("select * from orders where std_id='$std_id'");
        $row_exits_ord=mysqli_num_rows($exits_ord);
        $data_exits_ord=mysqli_fetch_array($exits_ord);        
        if($row_exits_ord==1){
            $ord_id=$data_exits_ord['ord_id'];
            $product="เสื้อนักศึกษา";
            $size=$_POST['size'];
            $qty=2;
            $exits_ord_list=mysqli_num_rows($con->query("select * from order_list where ord_id='$ord_id' and product='$product'"));
            if($exits_ord_list==1){
                $upd=$con->query("update order_list set size='$size' where product='$product'");
                if($upd){
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ');window.location.href='index.php?page=trousers'</script>";
                }
            }else{
                $ins_list=$con->query("insert into order_list values('$ord_id','$product','$size','$qty')");
                if($ins_list){
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ');window.location.href='index.php?page=trousers'</script>";
                }
            }
        }else{
            $ins=$con->query("insert into orders values('','$std_id','$date')");
            if($ins){
                $ord_id=$con->insert_id;
                $product="เสื้อฝึกงาน";
                $size=$_POST['size'];
                $qty=2;
                $ins_list=$con->query("insert into order_list values('$ord_id','$product','$size','$qty')");
                if($ins_list){
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ');window.location.href='index.php?page=shirt'</script>";
                }
            }
        }
    }
?>