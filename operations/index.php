<!doctype html>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
    <link type="text/css" rel="stylesheet" href="index.css">
    
    
    
    
    
    
    
    <title>Button</title>
  
  <body>
   

<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" style="background-color: black;">
      <a class="navbar-brand" href="#"><img class="img" src="IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png" alt="dsfsf"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="log.php" style="color:red">تسجيل دخول <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="register.php" style="color:red">اشتراك</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php" style="color:red">اتصل بنا</a>
        </li>
        <li class="nav-item">
         <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
        </li>
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img" src="images (45).jpeg" alt="dsfsf">
        <div class="container">
          <div class="carousel-caption text-left">
              <h1 class="ff">ليه تشتغل مع جوباجو ؟</h1>
            <p>شغل اضافي ليك زود بيه دخلك</p>
            <p><a id="btn1" class="btn btn-lg btn-primary" href="register.php" role="button">اشترك الأن</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          
        <img class="img" src="images (11).jpeg" alt="dsfsf">
        <div class="container">
          <div class="carousel-caption">
              
              
            <h1> ليه تختار جوباجو ؟</h1>
            <p>بنساعدك توصل لافضل المهنيين في منتقطقتك باسهل طريقة</p>
            
            <p><a class="btn btn-lg btn-primary" href="register.php" role="button">اشترك الأن</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          <img class="img" src="images (17).jpeg" alt="dsfsf">
        {% include icons/placeholder.svg width="100%" height="100%" background="#777" color="#777" text=" " title=" " %}
        <div class="container">
          <div class="carousel-caption text-right">
            <h1 style="color:red;">تعرف علي اخر الاخبار والعروض</h1>
            <p>تفاعل معنا علي مواقع التواصل الاجتماعي</p>
            <p><a class="btn btn-lg btn-primary" href="https://facebook.com/jobago-103571751302692/" role="button">صفحتنا علي الفيسبوك</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<?php 
$conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
$s1= "select * from accounts where id= 581";
$q1= mysqli_query($conn,$s1);
$f1= mysqli_fetch_array($q1);//saina
$ph1= '<img src="data:image/png;base64 , '.base64_encode($f1[8]).'" alt="hkjhjkhk" class="ig">';




$s2= "select * from accounts where id= 457";
$q2= mysqli_query($conn,$s2);
$f2= mysqli_fetch_array($q2);//rami
$ph2= '<img src="data:image/png;base64 , '.base64_encode($f2[8]).'" alt="hkjhjkhk" class="ig">';


$s3= "select * from accounts where id= 561";
$q3= mysqli_query($conn,$s3);
$f3= mysqli_fetch_array($q3);//magdi
$ph3= '<img src="data:image/png;base64 , '.base64_encode($f3[8]).'" alt="hkjhjkhk" class="ig">';

?>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
          <?php echo $ph1; ?>
          <!--<img  class="ig" src="file:///C:/xampp/htdocs/n_joba/accounts-image%20(26).bin" alt="dgdfgdd"/>-->
        
        <h2>رامي غلاب</h2>
        <p>رامي للاعمال الكهربية فيلات وشقق ومحلات</p>
        <h6>الهرم</h6>
        <p><a class="btn btn-secondary" href="w_page.php?id=457" role="button">تفاصيل &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
          <?php echo $ph2; ?>
        <!--<img class="ig" src="accounts-image (31).bin" alt="hjhjh">-->
        <h2>الوكيل للصيانة</h2>
        
        <p>متخصصون في صيانة الاجهزة المنزلية صيانة اجهزتك الكهربية عندنا</p>
        <h6>الهرم</h6>
        <p><a class="btn btn-secondary" href="w_page.php?id=581" role="button">تفاصيل &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
          <?php echo $ph3; ?>
          <!--<img src="data:image/png;base64 , '.base64_encode($f3[8]).'">-->
        <!--<img class="ig" src="accounts-image (40).bin" alt="hjhjh">-->
        <h2>احمد مجدي</h2>
        <p>فني الوميتال مطابخ وابواب وتندا</p>
        <h6>المطرية</h6>
        <p><a class="btn btn-secondary" href="w_page.php?id=561" role="button">تفاصيل &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <!--<div class="clearfix">
      <div class="spinner-border float-right" role="status">
          <span class="sr-only">loading...</span>
      </div>-->
  </div>

  <!-- FOOTER    <link type="text/css" rel="stylesheet" href="file:///C:/Users/new-tech/Desktop/site/HTML5Application/public_html/carousel.css">
    
    <script type="text/javascript" src="file:///C:/Users/new-tech/Desktop/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="file:///C:/Users/new-tech/Desktop/bootstrap-4.4.1/bootstrap-4.4.1/js/tests/unit/alert.js"></script>
     -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2019-2020 jobago, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="jquery-3.4.1.min.js">
    
</script>
<script src="bootstrap.min.js"></script>
  </body>
