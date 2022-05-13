<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    
        <title>jobago</title>  
        
        <link rel="stylesheet" type="text/css" href="detect1.css"/>
    </head>
    <body>
        
        <header >
  <nav   style='color:red;' class="navbar navbar-expand-md navbar-light fixed-top bg-light" >
      <a class="navbar-brand" href="#"><img class="img" src="IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png" alt="dsfsf" style="height:50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="log.php" style="color:red;">تسجيل دخول <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="register.php" style="color:red;">اشتراك</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="contact.php" style="color:red;">اتصل بنا</a>
        </li>
       
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>

        
        
        
        <div class="nr"></div>
        <h2 class='j'>yarb</h2>
        <h1 >jobago</h1>
        
        <div class="rn"></div>
        <p> اختر الصلاحية</p>
        <form method="post" >
            <input class="a" type="submit" value="طلب خدمات" name="hire"/>
        </form>
       
        
                
            
        <form method="post">
            <input class="b" type="submit" value="تقديم خدمات" name="work"/>
        </form>
        
           <script src="jquery-3.4.1.min.js">
    
</script>
<script src="bootstrap.min.js"></script>
    
        
    </body>
    
</html>
<?php
//?id= <?php $id; 
//$id= $_GET['id'];
//لازم هناك اللينك

if(isset($_POST['hire'])){
    header("location: h_door.php?id=");
    
}
if(isset($_POST['work'])){
    header("location: w_door.php?id=");
}
    
?>        

