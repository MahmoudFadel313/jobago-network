

<!doctype html>

<?php 
ob_start();
session_start();?>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    
    
    
    
    
    
    
    <title>Button</title>
  
  <body style="background-color:black;">
<header  style="background-color: black;">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" style="background-color:black;">
      <a class="navbar-brand" href="#"><img class="img" src="IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png" alt="dsfsf" style="height:32px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="log.php" style="color:red;" >تسجيل دخول <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="register.php" style="color:red;" >اشتراك</a>
        </li>
        <li class="nav-item">
         <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
        </li>
         <li class="nav-item active">
          <a class="nav-link" href="contact.php" style="color:red">اتصل بنا</a>
        </li>
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>


<form class="form-signin" method="post">
  <div class="text-center mb-4">
   <!-- <img class="mb-4" src="images (10).jpeg" alt="khhk" width="72" height="72">-->
    <h1 class="h3 mb-3 font-weight-normal" style="color:red;">انشاء حساب</h1>
    <p >الرجاء الاشتراك للحصول علي الخدمة </p>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" name='name' placeholder="Email address" required autofocus>
    <label for="inputEmail"> اسم الكريم/الكريمة</label>
  </div>
<div class="form-label-group">
    <input type="tel" id="inputEmail" class="form-control" name="text" placeholder="Email address" required autofocus>
    <label for="inputEmail">رقم التليفون</label>
  </div>
  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
    <label for="inputPassword">كلمة السر</label>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">اختر المحافظة</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gover">
      <option>الفيوم</option>
                <option>القاهرة</option>
                <option>الاسكندرية</option>
                <option>الاسماعيلية</option>
                <option>الشرقية</option>
                <option>المنوفية</option>
                <option>الجيزة</option>
                <option>بني سويف</option>
                <option>قنا</option>
                <option>حلوان</option>
                <option>اسيوط</option>
                <option>الاقصر</option>
                <option>اسوان</option>
                <option>الوادي الجديد</option>
                <option>شمال سيناء</option>
                <option>جنوب سيناء</option>
                <option>الغربية</option>
                <option>السويس</option>
                <option>سوهاج</option>
                <option>دمياط</option>
                <option>الدقهلية</option>
                <option>بورسعيد</option>
                <option>البحيرة</option>
                <option>السادس من اكتوبر</option>
                <option>مطروح</option>
                <option>المنيا</option>
                <option>كفر الشيخ</option>
    </select>
  </div>

  <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign" style="color:white;border:2px solid black;background-color:red">تسجيل</button>
  <p>لو لديك حساب بالفعل<a href="log.php"> اضغط هنا</a> </p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020 JOBAGO, INC</p>
</form>
     
      
      
      
      
      
                
                 
    <?php
     
    
    /**$conn= mysqli_connect("localhost","root","1234","joba");
    $s= "select * from accounts where id=281";
    $q= mysqli_query($conn,$s);
    $f= mysqli_fetch_array($q);
    echo '<img src="data:image/png;base64 , '.base64_encode($f[8]).'">';*/
    if(isset($_POST['sign'])){
        
        
    $mail= $_POST['text'];
    $name= $_POST['name'];
    $pass= $_POST['pass'];
    $gover= $_POST['gover'];
    $_SESSION['gover']= $gover;
    echo $gover;
    
    
    $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
    mysqli_set_charset($conn,"utf8");
    
    
    //$s_i= mysqli_insert_id($conn);
    
    $s= "select * from accounts where email='$mail' and pass='$pass'";
    $q= mysqli_query($conn,$s);
    $f= mysqli_fetch_array($q);
    if($mail === '' || $name === '' || $pass === ''){
        header("location: register.php?state=none");
        }
    elseif($f[0]== true){
        header("location: register.php?state=exist");
    }
    elseif($f[0]== false){
        $i= "insert into accounts values('','$name','$mail','$pass','','','','','','$gover','')";
        $q_i= mysqli_query($conn,$i);
       
        
        $_SESSION['id']= mysqli_insert_id($conn);        
        header("location: detect.php");
       
    }
     
    
        
    }             
    if(@$_GET['state']=== 'exist'){
        echo "<div class='rn'>الرجاء تغيير عنوان البريد الالكتروني</div>";
    }
    if(@$_GET['state']=== 'none'){
        echo "<div class='nr'>الرجاء ادخال جميع البيانات</div>";
    }
    
    


?>
       
    
        
        
        <script src="jquery-3.4.1.min.js">
    
</script>
<script src="bootstrap.min.js"></script>
    
    </body>
</html>


