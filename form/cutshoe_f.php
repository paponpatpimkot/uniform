<?php
if(isset($_POST['submit'])){
    if($_POST['size']==""){
        echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
    }else{
        update_order("2013",$_POST['size'],1,"","");
        echo "<script>window.location.href='index.php?page=myorder'</script>";
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
                        <div class="row">                            
                            <div class="col-md-10 text-left">
                                <h4>เลือกขนาดรองเท้าคัทชู (หญิง)</h4>
                            </div>
                        </div>
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
                                    <th>size</th>
                                    <th>กว้าง (มม.)</th>
                                    <th>เลือก</th>
                                </tr>                                
                                <tr>                                                                        
                                    <td>3</td>
                                    <td>229</td>
                                    <td><input type="radio" name="size" value="3"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>3.5</td>
                                    <td>232</td>
                                    <td><input type="radio" name="size" value="3.5"></td>
                                </tr>
                                <tr>                                                                                                            
                                    <td>4</td>
                                    <td>235</td>
                                    <td><input type="radio" name="size" value="4"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>4.5</td>
                                    <td>238</td>
                                    <td><input type="radio" name="size" value="4.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>5</td>
                                    <td>241</td>
                                    <td><input type="radio" name="size" value="5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>5.5</td>
                                    <td>244</td>
                                    <td><input type="radio" name="size" value="5.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>6</td>
                                    <td>247</td>
                                    <td><input type="radio" name="size" value="6"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>6.5</td>
                                    <td>250</td>
                                    <td><input type="radio" name="size" value="6.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>7</td>
                                    <td>253</td>
                                    <td><input type="radio" name="size" value="7"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>7.5</td>
                                    <td>256</td>
                                    <td><input type="radio" name="size" value="7.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>8</td>
                                    <td>259</td>
                                    <td><input type="radio" name="size" value="8"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>8.5</td>
                                    <td>262</td>
                                    <td><input type="radio" name="size" value="8.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>9</td>
                                    <td>265</td>
                                    <td><input type="radio" name="size" value="9"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>9.5</td>
                                    <td>268</td>
                                    <td><input type="radio" name="size" value="9.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>10</td>
                                    <td>271</td>
                                    <td><input type="radio" name="size" value="10"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>10.5</td>
                                    <td>274</td>
                                    <td><input type="radio" name="size" value="10.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>11</td>
                                    <td>277</td>
                                    <td><input type="radio" name="size" value="11"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>11.5</td>
                                    <td>280</td>
                                    <td><input type="radio" name="size" value="11.5"></td>
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