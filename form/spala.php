<?php
    if(isset($_POST['submit'])){
        if($_POST['size']==""){
            echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
        }else{            
            update_order("2009",$_POST['size'],1,"","");
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
                        <h4>เลือกขนาดเสื้อพละ</h4>  
                        <h5 class="text-warning">***ขนาดตามตารางเป็นขนาดของเสื้อผ้า ไม่ใช่สัดส่วนของผู้สวมใส่***</h5>                      
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
                                    <th>Size</th>
                                    <th>รอบอก (นิ้ว)</th>
                                    <th>ความยาว (นิ้ว)</th>                                    
                                    <th>เลือก</th>
                                </tr>
                                <tr>
                                    <td>SS</td>
                                    <td>34</td>
                                    <td>23</td>                                    
                                    <td><input type="radio" name="size" value="SS"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>S</td>
                                    <td>36</td>
                                    <td>24</td>
                                    <td><input type="radio" name="size" value="S"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>M</td>
                                    <td>38</td>
                                    <td>25</td>
                                    <td><input type="radio" name="size" value="M"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>L</td>
                                    <td>40</td>
                                    <td>26</td>
                                    <td><input type="radio" name="size" value="L"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>XL</td>
                                    <td>42</td>
                                    <td>27</td>
                                    <td><input type="radio" name="size" value="XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>2XL</td>
                                    <td>44</td>
                                    <td>28</td>
                                    <td><input type="radio" name="size" value="2XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>3XL</td>
                                    <td>46</td>
                                    <td>29</td>
                                    <td><input type="radio" name="size" value="3XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>4XL</td>
                                    <td>48-50</td>
                                    <td>30</td>
                                    <td><input type="radio" name="size" value="4XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>5XL</td>
                                    <td>52-56</td>
                                    <td>31</td>
                                    <td><input type="radio" name="size" value="5XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>6XL</td>
                                    <td>58-62</td>
                                    <td>32</td>
                                    <td><input type="radio" name="size" value="6XL"></td>                        
                                </tr>
                                <tr>                                    
                                    <td>7XL</td>
                                    <td>64-66</td>
                                    <td>33</td>
                                    <td><input type="radio" name="size" value="7XL"></td>                        
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