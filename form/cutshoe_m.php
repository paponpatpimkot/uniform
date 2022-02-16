<?php
    if(isset($_POST['submit'])){
        if($_POST['size']==""){
            echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
        }else{              
            update_order("2012",$_POST['size'],1,"","");        
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
                        <h4>เลือกขนาดรองเท้าคัทชู (ชาย)</h4>                        
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
                                    <td>0.5</td>
                                    <td>175</td>
                                    <td><input type="radio" name="size" value="0.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>1</td>
                                    <td>180</td>
                                    <td><input type="radio" name="size" value="1"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>1.5</td>
                                    <td>185</td>
                                    <td><input type="radio" name="size" value="1.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>2</td>
                                    <td>190</td>
                                    <td><input type="radio" name="size" value="2"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>2.5</td>
                                    <td>195</td>
                                    <td><input type="radio" name="size" value="2.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>3</td>
                                    <td>200</td>
                                    <td><input type="radio" name="size" value="3"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>3.5</td>
                                    <td>205</td>
                                    <td><input type="radio" name="size" value="3.5"></td>
                                </tr>
                                <tr>                                                                                                            
                                    <td>4</td>
                                    <td>210</td>
                                    <td><input type="radio" name="size" value="4"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>4.5</td>
                                    <td>215</td>
                                    <td><input type="radio" name="size" value="4.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>5</td>
                                    <td>220</td>
                                    <td><input type="radio" name="size" value="5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>5.5</td>
                                    <td>225</td>
                                    <td><input type="radio" name="size" value="5.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>6</td>
                                    <td>230</td>
                                    <td><input type="radio" name="size" value="6"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>6.5</td>
                                    <td>235</td>
                                    <td><input type="radio" name="size" value="6.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>7</td>
                                    <td>240</td>
                                    <td><input type="radio" name="size" value="7"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>7.5</td>
                                    <td>245</td>
                                    <td><input type="radio" name="size" value="7.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>8</td>
                                    <td>250</td>
                                    <td><input type="radio" name="size" value="8"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>8.5</td>
                                    <td>255</td>
                                    <td><input type="radio" name="size" value="8.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>9</td>
                                    <td>260</td>
                                    <td><input type="radio" name="size" value="9"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>9.5</td>
                                    <td>265</td>
                                    <td><input type="radio" name="size" value="9.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>10</td>
                                    <td>270</td>
                                    <td><input type="radio" name="size" value="10"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>10.5</td>
                                    <td>275</td>
                                    <td><input type="radio" name="size" value="10.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>11</td>
                                    <td>280</td>
                                    <td><input type="radio" name="size" value="11"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>11.5</td>
                                    <td>285</td>
                                    <td><input type="radio" name="size" value="11.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>12</td>
                                    <td>290</td>
                                    <td><input type="radio" name="size" value="12"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>12.5</td>
                                    <td>295</td>
                                    <td><input type="radio" name="size" value="12.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>13</td>
                                    <td>300</td>
                                    <td><input type="radio" name="size" value="13"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>13.5</td>
                                    <td>305</td>
                                    <td><input type="radio" name="size" value="13.5"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>14</td>
                                    <td>310</td>
                                    <td><input type="radio" name="size" value="14"></td>
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