<?php 
session_start();
ob_start();

    

?>
<!DOCTYPE html>
<html>
    <haed>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    
        <title>jobago</title>
        <link rel="stylesheet" type="text/css" href="lo.css"/>
    </haed>
    <body style='background-color:black;'> 
        
        <!--nav-->
        <header  style="background-color: black;">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" style="background-color:black;">
      <a class="navbar-brand" href="#"><img class="img" src="IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png" alt="dsfsf" style="height:32px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="log.php" style='color:red;'>تسجيل دخول <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="register.php" style='color:red;'>اشتراك</a>
        </li>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="contact.php" style='color:red;' >اتصل بنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>
        <!--end-->
        
        
        
        <form class="form-signin" method="post">
  <div class="text-center mb-4">
   <!-- <img class="mb-4" src="images (10).jpeg" alt="khhk" width="72" height="72">-->
    <h1 class="h3 mb-3 font-weight-normal" style="color:red;">تسجيل الدخول</h1>
    <p>الرجاء تسجيل الدخول لمتابعة حسابك</p>
  </div>

 
<div class="form-label-group">
    <input type="tel" id="inputEmail" class="form-control" name="mail" placeholder="Email address" required autofocus>
    <label for="inputEmail">رقم التليفون / البريد الالكتروني</label>
  </div>
  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
    <label for="inputPassword">كلمة السر</label>
  </div>
            <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="log" style="color:white;border:2px solid black;background-color:red">تسجيل</button>
  <p>لو لديك حساب بالفعل<a href="register.php"> اضغط هنا</a> </p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020 JOBAGO, INC</p>
        </form>
        
        
        
        
        
       <!-- <div class="r">yarb</div>
        <h1 class="joba">jobago</h1>
        <p class="ac">تسجيل الدخول</p>
        <div class="ab"></div>
        <div class="cd"></div>
    <form method='post'>
        <div> <input class="a" type="text" name="mail" placeholder=" البريد الالكتروني / رقم التليفون"/></div>
        
        <div> <input class="b" type='password' name='pass' placeholder=" كلمة السر"/></div>
        <div><input class="c" type='submit' name='log' value='تسجيل'/></div>-->
    <?php
    if(@$_GET['state']==='log'){
        echo "<div class='ds' style=''> الرجاء ادخال بيانات صحيحة</div>";
    }

if(isset($_POST['log'])){
    $mail= $_POST['mail'];
    //@$def= $_POST['def'];
    $pass= $_POST['pass'];
    $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
    mysqli_set_charset($conn,"utf8");
    
    //$s_i= mysqli_insert_id($conn);
    
    $s= "select * from accounts where email='$mail' and pass='$pass'";
    $q= mysqli_query($conn,$s);
    $f= mysqli_fetch_array($q);
    $def= $f[7];
    //echo $f[0];
    if($f[0]== false){
        header("location: log.php?state=log");
        
    }
    elseif($f[0]== true){
        session_start();
        $_SESSION['id']= $f[0];
        $id= $_SESSION['id'];
        if($def=="work"){
            $id=  $_SESSION['id'];
            header("location: w_page.php?id=&val=log");
        }
        elseif($def=="hire"){
            header("location: h_page.php?id=&val=log");
        }
        
    }
    
        
    }                                      
    
    


?>
    
    </form>
    
    
    
    
    
    <style>
        .ds{
        position:absolute;
        left:550px;
        top:470px;
        color:red;}
        @media only screen and (min-width:100px) and (max-width: 800px){
            .ds{
                left:100px;
            }
        
        
        
        }
        
    </style>
    
    
    
    
     <script src="jquery-3.4.1.min.js">
    
</script>
<script src="bootstrap.min.js"></script>
    
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//<div class="ar"> <input  type="radio" name="def" value="work"/>تقديم خدمات</div>

  //      <div class="ra"><input  type="radio" name="def" value="hire"/>طلب خدمات</div>