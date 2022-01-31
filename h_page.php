<!DOCTYPE html>
<?php 
ob_start();
//echo "yarb";
session_start();
$_SESSION['accept']=[];
@$r= $_GET['id'];
@$ce= $c;
?>
 <?php 
        
          
        
        @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
            
        }
        elseif($se != True){
            
            header("location: register.php");
        }
        else{
            
    /* @var $se type */
    /* @var $ce type */
        }
?>
 <?php 
     
     $c= 0;
     
     if($r === ''){
                
         $id= $_SESSION['id'];
     }
     elseif($r != ''){
         $id= $_GET['id'];
     }
     
    
        $conn= \mysqli_connect("localhost","fadel","Up=out1234@#","joba");
          
        mysqli_set_charset($conn,"utf8");
        $s= "select * from accounts where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $_SESSION['stat']= $f[10];
        $count=array();
        $b_count= array();
        
            $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
            $b_s= "select * from bider";
            $b_q= mysqli_query($conn,$b_s);
            
            
            while( $b_f= mysqli_fetch_array($b_q)){
                if($id===$b_f[1] && $b_f[2] === 0 && $b_f[3]!= '')
                {
                   $_SESSION['accept'][count($_SESSION['accept'])]= $b_f[2];
                }       
                    
                
                    
                
                if($id==$b_f[1] && $b_f[2]==0){
                    if($b_f[6]!=0){
                   $count[count($count)]=$b_f[6];
                   $b_count[count($b_count)]= $b_f[0];
                   }
                   if($b_f[7]!=0){
                   $count[count($count)]=$b_f[7];
                   $b_count[count($b_count)]= $b_f[0];
                   }
                   if($b_f[8]!=0){
                    $count[count($count)]=$b_f[8];
                    $b_count[count($b_count)]= $b_f[0];
                   }
                   
                
                    
                }
                else{
                    continue;
                }
            }
            
                    
                 
             
             if(@count($count)!=0){
                 $c += count($count);
                 
                 //echo "<div class='rw' ></div>";
                 global $view;
                 $view= array();
                 for($i=0;$i<count($count);$i++){
                $n_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
                mysqli_set_charset($n_conn,"utf8");                
                $n_id= $count[$i];
                $b_id= $b_count[$i];
                $n_s= "select * from accounts where id=$n_id";
                $n_q= mysqli_query($n_conn,$n_s);
                $n_f= mysqli_fetch_array($n_q);
                if($r === ''){
                    global $view;
                    $view[count($view)]= ['recieve',$n_f[0],$n_f[1],$b_id];
                     //echo "<div class='y' id='y'  ><div ><a class='as' href='w_page.php?id=$n_f[0]&val='> $n_f[1] </a>قام بتقديم طلب خدمة لك باذن الله</div><a class='cl' href='ask.php?id=$id&b_id=$b_id&n_id=$n_id'>قبول؟</a> </div>";               
     }
                
            }
             }
             
         /**** show acceptances ****/
     $nom= array();
     $b_nom= array();
     $s_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
     $s_s= "select * from bider";
     $s_q= mysqli_query($s_conn,$s_s);
     while($s_f= mysqli_fetch_array($s_q)){
         if($s_f[1]===$id && $s_f[2]!=0 && $s_f[11]=== '0'){
             $nom[count($nom)]= $s_f[2];
             $b_nom[count($b_nom)]= $s_f[0];
         }
     }
     
     $c += count($nom);
     if(count($nom) != 0){
         
         
         for($i=0 ; $i< count($nom) ;$i++){
             $r_id= $nom[$i];
             $r_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
             $r_s= "select * from accounts where id=$r_id";
             $r_q= mysqli_query($r_conn,$r_s);
             $r_f= mysqli_fetch_array($r_q);
             if($r === ''){
             $view[count($view)]= ['send',$r_f[0],$r_f[1],''];
                          //echo "<div class='jk' id='kj'><div >تم قبول طلبك من قبل <a class='ji' href='w_page.php?id=$r_f[0]&val=''>$r_f[1]</a></div></div>";

         }
         }
         
     }
     
        
     
     
     ?>

<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
        <title>jobago</title>
        <link rel='stylesheet' type='text/css' href='h_page4.css'/>
       
    </head>
    <body >
    <?php 
    @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
           // $c= False;
        }
        elseif($se != True){
            //$c= False;
            header("location: register.php");
        }
        else{
    echo "
      
<header  style='background-color: black;'>
  <nav class='navbar navbar-expand-md navbar-light fixed-top bg-light' style='background-color:white;'>
      <a class='navbar-brand' href='#'><img class='img' src='IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png' alt='dsfsf' style='height:35px;'></a>
      
    
      
      <!--notifications-->
   <button class='btn btn-primary' Style='border:2px solid red;color:red;background-color:white;height:40px;border-radius:20px;margin-left:20px;' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
 <p> $c </p>
   </button>
        
      
      <!--end--->
      
      
      
    
      
    
      
      <!--search-->
      
       <button class='btn btn-primary' style='color:red;border:2px solid red;background-color:white;margin-left:10px;' type='button' data-toggle='collapse' data-target='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'>الخدمات</button>
      
      <!--end-->
      
      
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
     
        
      <!--read noti-->
      ";}
      ?>
        <?php 
         @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
            //$c= False;
        }
        elseif($se != True){
           // $c= False;
            header("location: register.php");
        }
        else{
        echo "
      <div>
      <div class='collapse' id='collapseExample'>
  <div class='card card-body' style='color:red;'>
  ";}
  ?>
  <?php 
               @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
            //$c= False;
        }
        elseif($se != True){
           // $c= False;
            header("location: register.php");
        }
        else{
              
            if(!empty($view)){
            
            $l= count($view);
            for($d= 0; $d< $l; $d++){
                $lo = $view[$d];
                if($lo[0]=== 'recieve'){
                  echo   "<div class='collapse' id='collapseExample'><div class='card card-boy'><div  ><div ><a href='w_page.php?id=$lo[1]&val='> $lo[2] </a>قام بتقديم طلب خدمة لك باذن الله</div><a  href='ask.php?id=$id&b_id=$lo[3]&n_id=$lo[1]'>قبول؟</a> </div></div>";
                }
                elseif($lo[0]=== 'send'){
                     echo   "<div class='collapse' id='collapseExample'><div class='card card-boy'><div ><div >تم قبول طلبك من قبل <a  href='w_page.php?id=$lo[1]&val=''>$lo[2]</a></div></div></div></div>";
                }
            }
            }
        }
  echo '</div>';
 echo '</div>';
      echo '</div>';
      
     echo ' <!--end-->';
     ?>
      <?php 
         @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
           // $c= False;
        }
        elseif($se != True){
           // $c= False;
            header("location: register.php");
        }
        else{
            echo "
      <!--read search-->
      <div class='row'>
      <div class='col' style='width:315px;left:19px;'>
    <div class='collapse multi-collaps' id='multiCollapseExample2' >
      <div class='card card-body'>

          
          <form  action='near.php' method='post'>
            <select name='job' class='rt' style='width:250px;height:40px;position:absolute;left:-5px;top:0px;'>
                <option>
                    ابحث عن عمال بجوارك
                </option>
                <option>
                    تنظيف منزل
                </option>
                <option>
                    نجار
                </option>
                <option>
                    سباك 
                </option>
                <option>
                    نقاش
                </option>
                <option>
                    محار
                </option>
                <option>
                    كهربائي
                </option>
                <option>
                    خياط
                </option>
            </select>
              <button type='submit' name='sub1' style='height:40px;position:absolute;top:0px;border:none;width:40px;left:245px;'><div class='col-4 d-flex justify-content-end align-items-center'>
        <a class='text-muted' href='#' aria-label='Search' style='position:absolute;left:-15px;'>
          <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='mx-3' role='img' viewBox='0 0 24 24' focusable='false'><title>Search</title><circle cx='10.5' cy='10.5' r='7.5'/><path d='M21 21l-5.2-5.2'/></svg>
        </a></div></button>
        </form>
          
          

      </div>
    </div>
  </div>
      </div>
      <!--end-->
      
      
      
      
    <div class='collapse navbar-collapse' id='navbarCollapse'>
      <ul class='navbar-nav mr-auto'>
        <li class='nav-item active'>
          <a class='nav-link' href='index.php' style='color:red;padding-left:20px;'>الصفحة الرئيسية <span class='sr-only'>(current)</span></a>
        </li>
       <li class='nav-item active'>
          <a class='nav-link' href='contact.php' style='color:red;padding-left:23px;'>اتصل بنا <span class='sr-only'>(current)</span></a>
        </li>
       <a class='btn btn-primary'  style='color:red;border:2px solid red;background-color:white;' data-toggle='collapse' href='#multiCollapseExample1' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'>عرض طلب علي المهنيين</a>
            
            
            
            
            <!--service-->
            
              <div class='row'>
      <div class='col' >
    <div class='collapse multi-collapse' id='multiCollapseExample1' >
      <div class='card card-body' style='height:270px;'>
    
        ";}
        ?>
    <?php 
      
       @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
            //$c= False;
        }
        elseif($se != True){
           // $c= False;
            header("location: register.php");
        }
        else{
    echo ' <form action="bid.php" method="get">
            <div > <textarea class="ef" style="width:200px;" type="text" name="bid" placeholder= "...... اكتب اللي انت عايزه من المهني" required="gdfdfg"/></textarea></div>
            <div class="ca">اختر الموعد</div>
            <div > <input class="ba" type="time" name="time" required="gdfdfg"> </div>
            <div class="fg"> نوع الوقت </div>
                        <select class="dc" name="type" required="gdfdfg">
                            <option>صباحا</option>
                            <option>مساءا</option>
                </select></div>
            <div></div>
            <div class="gh"> اختر نوع الخدمة </div>
             <select name="service" class="lk" required="gdfdfg" style="position:absolute;top:205px;left:24px;border:2px solid silver;">
             <option>نجارة</option>
             <option>سباكة</option>
             <option>نقاشة</option>
             <option>محارة</option>
             <option>تنظيف منزل</option>
             <option>خياط</option>
             <option>كهربائي</option>
         </select>     
            <div ><input class="bc" type="submit" value="تسجيل" style="position:absolute;left:130px;top:206px;border:2px solid red;background-color:white;color:red;width:100px;" /></div>
        </form>';}
    
    
    ?>




      </div>
    </div>
  </div>
              </div>
      <!--end-->
           
            
        </li>
        
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>
        
           
        
       <!--  <form  action='near.php' method='post'>
            <select name='job' class='rt'>
                <option>
                    ابحث عن عمال بجوارك
                </option>
                <option>
                    تنظيف منزل
                </option>
                <option>
                    نجار
                </option>
                <option>
                    سباك 
                </option>
                <option>
                    نقاش
                </option>
                <option>
                    محار
                </option>
                <option>
                    كهربائي
                </option>
                <option>
                    خياط
                </option>
            </select>
            <input type='submit' name='sub1' value='بحث' class='tr'>
        </form>
    -->
</div>
        <script>
        
        </script>
        
       
        
        
        <div class="wf" id="wf" >yarb </div>
        
       
       
       
        <?php 
        
            
        /*$c=0 ;
        @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
            echo " ";
            $c= False;
        }
        elseif($se != True){
            $c= False;
            header("location: register.php");
        }
        else{
            
    /* @var $se type */
    /* @var $ce type */
   /* echo '      
       
                <div class="e" id="eo"></div>
                <form method="get" action="h_search.php">       
        <div > <input class="ab" type="text" name="val" placeholder= " شوف انت عايز مين؟ "></div>              
        <div ><input class="cd" type="submit" name="kind" value="بحث"> </input></div>   
    </form>
        <form action="bid.php" method="get">
            <div > <textarea class="ef" type="text" name="bid" placeholder= "...... اكتب اللي انت عايزه من العامل"/></textarea></div>
            <div class="ca">اختر الموعد</div>
            <div > <input class="ba" type="time" name="time"</div>
            <div class="fg"> نوع الوقت </div>
                        <select class="dc" name="type">
                            <option>صباحا</option>
                            <option>مساءا</option>
                </select></div>
            <div></div>
            <div class="gh"> اختر نوع الخدمة </div>
             <select name="service" class="lk">
             <option>نجارة</option>
             <option>سباكة</option>
             <option>نقاشة</option>
             <option>محارة</option>
             <option>تنظيف منزل</option>
             <option>خياط</option>
             <option>كهربائي</option>
         </select>     
            <div ><input class="bc" type="submit" value="تسجيل"/></div>
        </form>
        ;
        }
       if(isset($_POST['sub1']) && $_POST['sel'] != "ابحث عن عمال بجوارك"){
            
                $ro= $_POST['sel'];
                header("location: index.php");
                
            }
            
        
        
    
          ?>
     <?php 
     
     /*
     
     if($r === ''){
                
         $id= $_SESSION['id'];
     }
     elseif($r != ''){
         $id= $_GET['id'];
     }
     
    
        $conn= \mysqli_connect("localhost","root","1234","joba");
          
        mysqli_set_charset($conn,"utf8");
        $s= "select * from accounts where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $_SESSION['stat']= $f[10];
        $count=array();
        $b_count= array();
        
            $conn= mysqli_connect("localhost","root","1234","joba");
            $b_s= "select * from bider";
            $b_q= mysqli_query($conn,$b_s);
            
            
            while( $b_f= mysqli_fetch_array($b_q)){
                if($id===$b_f[1] && $b_f[2] === 0 && $b_f[3]!== '')
                {
                   $_SESSION['accept'][count($_SESSION['accept'])]= $b_f[2];
                }       
                    
                
                    
                
                if($id==$b_f[1] && $b_f[2]==0){
                    if($b_f[6]!=0){
                   $count[count($count)]=$b_f[6];
                   $b_count[count($b_count)]= $b_f[0];
                   }
                   if($b_f[7]!=0){
                   $count[count($count)]=$b_f[7];
                   $b_count[count($b_count)]= $b_f[0];
                   }
                   if($b_f[8]!=0){
                    $count[count($count)]=$b_f[8];
                    $b_count[count($b_count)]= $b_f[0];
                   }
                   
                
                    
                }
                else{
                    continue;
                }
            }
            
                    
                 
             
             if(@count($count)!=0){
                 $c += count($count);
                 
                 //echo "<div class='rw' ></div>";
                 
                 for($i=0;$i<count($count);$i++){
                $n_conn= mysqli_connect("localhost","root","1234","joba");
                mysqli_set_charset($n_conn,"utf8");                
                $n_id= $count[$i];
                $b_id= $b_count[$i];
                $n_s= "select * from accounts where id=$n_id";
                $n_q= mysqli_query($n_conn,$n_s);
                $n_f= mysqli_fetch_array($n_q);
                if($r === ''){
                
                     echo "<div class='y' id='y'  ><div ><a class='as' href='w_page.php?id=$n_f[0]&val='> $n_f[1] </a>قام بتقديم طلب خدمة لك باذن الله</div><a class='cl' href='ask.php?id=$id&b_id=$b_id&n_id=$n_id'>قبول؟</a> </div>";               
     }
                
            }
             }
             
         /**** show acceptances ****/
   /*  $nom= array();
     $b_nom= array();
     $s_conn= mysqli_connect("localhost","root","1234","joba");
     $s_s= "select * from bider";
     $s_q= mysqli_query($s_conn,$s_s);
     while($s_f= mysqli_fetch_array($s_q)){
         if($s_f[1]===$id && $s_f[2]!=0 && $s_f[11]=0){
             $nom[count($nom)]= $s_f[2];
             $b_nom[count($b_nom)]= $s_f[0];
         }
     }
     
     $c += count($nom);
     if(count($nom) != 0){
         //echo "<div class='kj'></div>";
         echo '<script></script>';
         for($i=0 ; $i< count($nom) ;$i++){
             $r_id= $nom[$i];
             $r_conn= mysqli_connect("localhost","root","1234","joba");
             $r_s= "select * from accounts where id=$r_id";
             $r_q= mysqli_query($r_conn,$r_s);
             $r_f= mysqli_fetch_array($r_q);
         }
         if($r === ''){
                          echo "<div class='jk' id='kj'><div >تم قبول طلبك من قبل <a class='ji' href='w_page.php?id=$r_f[0]&val='>$r_f[1]</a></div></div>";

         }
     }
     
         //echo "<div id='c' class='fw'>  $c </div>";
     
     
     
     /**** end ****/
              
             
                                                                          
           // <a class="nm" href="w_page.php">Page</a>
        //<a class='bn' href=s_bid.php> Home</a>   
         //Warning: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\joba\h_page.php:157) in C:\xampp\htdocs\joba\h_page.php on line 166
       ?>
<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row" >
      <div class="col-lg-4" >
        
        <h2 style='color:red;'><?php echo $f[1];?></h2>
       <!-- <h4>رامي للاعمال الكهربية فيلات وشقق ومحلات</h4>-->
        <h6 style='color:white;'>________</h6>
        
        
        <h5><?php if($f[4]=='male'){
             echo "ذكر";
         }
         else{
             echo "انثي";
         }         ?></h5>
        <h5><?php echo $f[5] ;?></h5>
        <h5><?php echo $f[9]?></h5>
        <h5><?php echo $f[10]?></h5>
        <h5><?php echo $f[6]; ?> </h5>
        <p style='color:white;'>_______________________________ </p>
        <p><a class="btn btn-secondary" href="s_bid.php" role="button">رجوع &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
                
        
      <?php 
      
      ?>
       
        <!-- <h1><?php //echo count($count) ?></h1>
         <h1 class='a'>  <?php// echo $f[1];?> </h1></br>
         <h2 class='b'> <?php //echo $f[6]; ?> </h2></br>
         <h2 class='c'>  <?php if($f[4]=='male'){
             echo "ذكر";
         }
         else{
             echo "انثي";
         }         ?></h2></br>

         <h2 class='d'>  <?php //echo $f[5] ;?> </h2></br>
         <div class="cr">العمر</div>
         <div class="rc">السكن</div>
         <div class="rl">المحافظة</div>
         <div class="rb">المركز</div>
         <div class="rm">الجنس</div>
         <div class="rp"><?php //echo $f[9]?></div>
         <div class="rv"><?php //echo $f[10]?></div>
         <div class="ja">انشاء طلب</div>
         -->
        
         
         
         
             <script src="jquery-3.4.1.min.js"></script>
             <script src="bootstrap.min.js"></script>
    
            <?php
                    //echo  @$se= $_SESSION['id'];
        if($r != '' && $r!= $se){
           // echo " ";
            
        }
        elseif($se != True){
            
            header("location: register.php");
        }
        else{
            
    /* @var $se type */
    /* @var $ce type */
    //echo '      
       
        }
         ?>
        
     
        


</body>
