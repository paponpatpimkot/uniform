<?php        
    if(isset($_POST['submit'])){
        if($_POST['size']==""){
            echo "<script>alert('คุณยังไม่ได้ระบุขนาด');</script>";
        }else{            
            update_order("2011",$_POST['size'],1,"","");
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
                        <h4>เลือกขนาดรองเท้าผ้าใบ</h4>                        
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
                                    <th>ความยาว (ซม.)</th>                                    
                                    <th>เลือก</th>
                                </tr>
                                <tr>             
                                    <td>18</td>                       
                                    <td>11.5</td>                                    
                                    <td><input type="radio" name="size" value="31"></td>                        
                                </tr>
                                <tr>           
                                    <td>32</td>                         
                                    <td>19</td>                                    
                                    <td><input type="radio" name="size" value="32"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>33</td>
                                    <td>20</td>
                                    <td><input type="radio" name="size" value="33"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>34</td>
                                    <td>20.5</td>
                                    <td><input type="radio" name="size" value="34"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>35</td>
                                    <td>21.5</td>
                                    <td><input type="radio" name="size" value="35"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>36</td>
                                    <td>22</td>
                                    <td><input type="radio" name="size" value="36"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>37</td>
                                    <td>23</td>
                                    <td><input type="radio" name="size" value="37"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>38</td>
                                    <td>24</td>
                                    <td><input type="radio" name="size" value="38"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>39</td>
                                    <td>24.5</td>
                                    <td><input type="radio" name="size" value="39"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>40</td>
                                    <td>25</td>
                                    <td><input type="radio" name="size" value="40"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>41</td>
                                    <td>26</td>
                                    <td><input type="radio" name="size" value="41"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>42</td>
                                    <td>26.5</td>
                                    <td><input type="radio" name="size" value="42"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>43</td>
                                    <td>27</td>
                                    <td><input type="radio" name="size" value="43"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>44</td>
                                    <td>27.5</td>
                                    <td><input type="radio" name="size" value="44"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>45</td>
                                    <td>28</td>
                                    <td><input type="radio" name="size" value="45"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>46</td>
                                    <td>28.5</td>
                                    <td><input type="radio" name="size" value="46"></td>
                                </tr>
                                <tr>                                                                        
                                    <td>47</td>
                                    <td>30</td>
                                    <td><input type="radio" name="size" value="47"></td>
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