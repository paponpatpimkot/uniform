<?php
    if(isset($_POST['cf'])){
        $status=$con->query("update student set status=1 where std_id='$std_id'");
        if($status){                                    
            echo "<script>window.location.href='completed.php'</script>";
        }
    }
?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="submit" class="btn btn-success w-100" value="ยืนยันข้อมูล" name="cf" 
        onclick="confirm('เมื่อยืนยันข้อมูลแล้วจะไม่สามารถแก้ไขข้อมูลได้อีก คุณแน่ใจหรือไม่?')">
</form>
<?php include 'contact.php'; ?>            