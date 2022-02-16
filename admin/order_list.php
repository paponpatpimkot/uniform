<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Order แยกตามรายการ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ออเดอร์แยกตามรายการ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>รายการ</th>
                    <th>SS</th>
                    <th>S</th>
                    <th>M</th>
                    <th>L</th>
                    <th>XL</th>
                    <th>2XL</th>
                    <th>3XL</th>
                    <th>4XL</th>
                    <th>5XL</th>
                    <th>6XL</th>
                    <th>7XL</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
                        include '../config/connect.php';
                        /*$s1="select SUM(qty) as s111 from orders o,order_list ol,student s,major m where s.major_id=m.major_id 
                        and o.std_id=s.std_id and o.ord_id=ol.ord_id and product='กระโปรง' and size='5XL' and level='ปวช.'";*/
                        $s1=mysqli_fetch_assoc($con->query("select SUM(qty) as s111 from orders,order_list,student,major where major.major_id=student.major_id
                        and orders.std_id=student.std_id and orders.ord_id=order_list.ord_id and product='กระโปรง' and size='5XL' and level='ปวช.'"));                        
                        $s11=$s1['s111'];
                        //เสื้อฝึกงานชาย
                        $sqty=mysqli_fetch_assoc($con->query("select SUM(qty) as s from order_list where product='เสื้อฝึกงาน (ชาย)' and size='S'"));                        
                        $s=$sqty['s'];                        
                        $mqty=mysqli_fetch_assoc($con->query("select SUM(qty) as m from order_list where product='เสื้อฝึกงาน (ชาย)' and size='M'"));                        
                        $m=$mqty['m'];                        
                        $lqty=mysqli_fetch_assoc($con->query("select SUM(qty) as l from order_list where product='เสื้อฝึกงาน (ชาย)' and size='L'"));                        
                        $l=$lqty['l']; 
                        $xlqty=mysqli_fetch_assoc($con->query("select SUM(qty) as xl from order_list where product='เสื้อฝึกงาน (ชาย)' and size='XL'"));                        
                        $xl=$xlqty['xl'];                        
                        $xl2qty=mysqli_fetch_assoc($con->query("select SUM(qty) as xl2 from order_list where product='เสื้อฝึกงาน (ชาย)' and size='2XL'"));                        
                        $xl2=$xl2qty['xl2'];                        
                        $xl3qty=mysqli_fetch_assoc($con->query("select SUM(qty) as xl3 from order_list where product='เสื้อฝึกงาน (ชาย)' and size='3XL'"));                        
                        $xl3=$xl3qty['xl3'];                        
                        $xl4qty=mysqli_fetch_assoc($con->query("select SUM(qty) as xl4 from order_list where product='เสื้อฝึกงาน (ชาย)' and size='4XL'"));                        
                        $xl4=$xl4qty['xl4'];                        
                        $xl5qty=mysqli_fetch_assoc($con->query("select SUM(qty) as xl5 from order_list where product='เสื้อฝึกงาน (ชาย)' and size='5XL'"));                        
                        $xl5=$xl5qty['xl5'];                                              
                        //เสื้อฝึกงานหญิง
                        $shopf_s=mysqli_fetch_assoc($con->query("select SUM(qty) as s from order_list where product='เสื้อฝึกงาน (หญิง)' and size='S'"));                        
                        $shopf_s_qty=$shopf_s['s'];                        
                        $shopf_m=mysqli_fetch_assoc($con->query("select SUM(qty) as m from order_list where product='เสื้อฝึกงาน (หญิง)' and size='M'"));                        
                        $shopf_m_qty=$shopf_m['m'];                        
                        $shopf_l=mysqli_fetch_assoc($con->query("select SUM(qty) as l from order_list where product='เสื้อฝึกงาน (หญิง)' and size='L'"));                        
                        $shopf_l_qty=$shopf_l['l']; 
                        $shopf_xl=mysqli_fetch_assoc($con->query("select SUM(qty) as xl from order_list where product='เสื้อฝึกงาน (หญิง)' and size='XL'"));                        
                        $shopf_xl_qty=$shopf_xl['xl'];                        
                        $shopf_2xl=mysqli_fetch_assoc($con->query("select SUM(qty) as xl2 from order_list where product='เสื้อฝึกงาน (หญิง)' and size='2XL'"));                        
                        $shopf_2xl_qty=$shopf_2xl['xl2'];                        
                        $shopf_3xl=mysqli_fetch_assoc($con->query("select SUM(qty) as xl3 from order_list where product='เสื้อฝึกงาน (หญิง)' and size='3XL'"));                        
                        $shopf_3xl_qty=$shopf_3xl['xl3'];                        
                        $shopf_4xl=mysqli_fetch_assoc($con->query("select SUM(qty) as xl4 from order_list where product='เสื้อฝึกงาน (หญิง)' and size='4XL'"));                        
                        $shopf_4xl_qty=$shopf_4xl['xl4'];                        
                        $shopf_5xl=mysqli_fetch_assoc($con->query("select SUM(qty) as xl5 from order_list where product='เสื้อฝึกงาน (หญิง)' and size='5XL'"));                        
                        $shopf_5xl_qty=$shopf_5xl['xl5'];                                              
                    ?>
                  <tr>
                    <td>เสื้อฝึกงาน ปวช. (ชาย)</td>
                    <td></td>
                    <td><?php echo $s ?></td>
                    <td><?php echo $m ?></td>
                    <td><?php echo $l ?></td>
                    <td><?php echo $xl ?></td>
                    <td><?php echo $xl2 ?></td>
                    <td><?php echo $xl3 ?></td>
                    <td><?php echo $xl4 ?></td>
                    <td><?php echo $xl5 ?></td>
                    <td></td>
                    <td></td>
                  </tr>                                      

                  <tr>
                    <td>เสื้อฝึกงานหญิง (ปวช.)</td>
                    <td></td>
                    <td><?php echo $shopf_s_qty ?></td>
                    <td><?php echo $shopf_m_qty ?></td>
                    <td><?php echo $shopf_l_qty ?></td>
                    <td><?php echo $shopf_xl_qty ?></td>
                    <td><?php echo $shopf_2xl_qty ?></td>
                    <td><?php echo $shopf_3xl_qty ?></td>
                    <td><?php echo $shopf_4xl_qty ?></td>
                    <td><?php echo $shopf_5xl_qty ?></td>
                    <td></td>
                    <td></td>
                  </tr>      

                  <tr>
                    <td>กระโปรง</td>
                    <td></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php echo $s11 ?></td>
                    <td></td>
                    <td></td>
                  </tr>    
                              
                  </tbody>                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>