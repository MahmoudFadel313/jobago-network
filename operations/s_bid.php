<?php
session_start();
if(@$_GET['state']==='none'){
    echo "تم عرض الطلب من قبل";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
         <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
        <title>jobago</title>
        <link rel="stylesheet" type="text/css" href="s_bid.css" />
    </head>
    <body style='background-color:white;'>
      <p class="r">yarb</p>
        <?php

        $id= $_SESSION['id'];
        $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
        mysqli_set_charset($conn,"utf8");
        $s= "select * from accounts where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $address= $f[10];

        $n_s="select * from emp where id=$id";
        $n_q=mysqli_query($conn,$n_s);
        $n_f=mysqli_fetch_array($n_q);
        $service= $n_f[2];
        $l= array();
        for($i=1;$i<=1000;$i++){
            $b_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
            mysqli_set_charset($b_conn,"utf8");
            $b_s= "select * from bider where bid=$i";
            $b_q= mysqli_query($b_conn,$b_s);
            $b_f= mysqli_fetch_array($b_q);
            if($b_f[0]==True){
                if($address==$b_f[4] && $service==$b_f[5] && $b_f[2]==0){
                    $l[count($l)]= 1;
                    $a_s= "select * from accounts where id=$b_f[1]";
                    $a_q= mysqli_query($b_conn,$a_s);
                    $a_f= mysqli_fetch_array($a_q);
                    $m_s= "select * from mess where bid='$b_f[0]' and wid='$id'";
                    $m_q= mysqli_query($b_conn,$m_s);
                    $m_f= mysqli_fetch_array($m_q);
                    $comm3= " <button class='btn btn-primary' style='color:red;border:2px solid red;background-color:white;margin-left:10px;border-radius:25px;' type='button' data-toggle='collapse' data-target='#multiCollapseExample3' aria-expanded='false' aria-controls='multiCollapseExample2'><a href='s_bid2.php?bid=$b_f[0]'>طلب</a></button>";
                    $comm=  "<button class='btn btn-primary' Style=' color:red;border:2px solid red;color:red;background-color:white;height:40px;border-radius:20px;margin-left:20px;' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>الردود</button>";
                    if($m_f[2] == False){
                       
                        $comm2= " <button class='btn btn-primary' style='color:red;border:2px solid red;color:red;background-color:white;height:40px;border-radius:20px;margin-left:20px;' type='button' data-toggle='collapse' data-target='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'><a href='mess.php?bid=$b_f[0]&wid=$id'>اترك رسالة</a></button>";
                     
                        //$comm= "<a class='za' href='mess.php?bid=$b_f[0]&wid=$id'>اترك رسالة</a>";
                        
                    }
                    else{
                        //$comm='';
                        $comm2= '';
                    }
                    if(@$a_f[8]==True){
                             @$ph=  '<img src="data:image/png;base64 , '.base64_encode($a_f[8]).'">';

                       }                   
                       else{
                           $ph= '';
                       }
                   $mm_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
                   $mm_s= "select * from mess";
                   $mm_q= mysqli_query($mm_conn,$mm_s);
                   
                   $ma_ar= array();
                   $us_ar= array();
                   $ph_ar= array();
                   while($mm_f= mysqli_fetch_array($mm_q)){
                       if($mm_f[0] === $b_f[0]){
                           $ma_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
                           $ma_s= "select * from accounts where id=$mm_f[1]";
                           $ma_q= mysqli_query($ma_conn,$ma_s);
                           $ma_f= mysqli_fetch_array($ma_q);
                           
                           if($ma_f[8] === True){
                               $re= '<img src="data:image/png;base64 , '.base64_encode($ma_f[8]).'" style="height:60px;width:60px;border:3px solid silver;border-radius:40px;margin-left:0px;>';
                               $ph_ar[count($ph_ar)]= '<img src="data:image/png;base64 , '.base64_encode($ma_f[8]).'">';
                           } 
                           else{
                               $re= '';
                               $ph_ar[count($ph_ar)]= '';
                           }
                           $ma_ar[count($ma_ar)]= [$mm_f[2],$ma_f[1],$re];
                           $us_ar[count($us_ar)]= $mm_f[1]; 
                           //echo $ma_f[2];
                           
                           
                               
                           
                       }
                       else{
                           $t= '';
                       }
                       
                   }
                   //echo "<div>$ma_ar[0]</div>";
                   //echo "<div>$ma_ar[1]</div>";
                   //echo "<div>$ma_ar[2]</div>";
                  // echo count($ma_ar);
                   if(count($ma_ar) != 0){
                   $fr= "";
                   for($y = 0; $y < count($ma_ar); $y++){
                       $fs= $ma_ar[$y];
                     //  echo $fs[1];
                       $fr= "$fr <div class='row mb-2'>
    <div class='col-md-6' >
      <div   class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
        <div style='padding-top:-80px;' class='col p-4 d-flex flex-column position-static'>
        
          <strong class='d-inline-block mb-2 text-primary'> $fs[2]</strong>
         
          <h9 class='mb-0'> $fs[1]</h9>
          
          <p class='card-text mb-auto' style='font-size:small;'>$fs[0]</p>
          
        </div>
        <div class='col-auto d-none d-lg-block'>
       
        </div>
      </div>
    </div>
    </div>";
                               
                              
                               
                       //echo $fr;
                   }
                   }
                   
                   
                   
                echo " <div class= 'row mb-2' style='margin-left:3px;margin-top:5px;'>
    <div class='col-md-6' '>
      <div   class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
        <div class='col p-4 d-flex flex-column position-static'>
          <a href='h_page.php?id=$a_f[0]&val='><h3 class='mb-0' style='color:black;' >$a_f[1]</h3></a>
         
          <p class='card-text mb-auto'><div class='e'>$b_f[3]</div></p>
         <div>
          <div style='position:relative;left:0px;top:72px;'>$comm</div>
              
             </div>
            <div> <div style='position:relative;left:80px;top:31px;'>$comm2</div></div>
                  <div style='position:relative;left:199px;top:-9px;'>$comm3</div>
        </div>
        
        <div class='col-auto d-none d-lg-block'>
          </div>
        </div>
      </div>
    </div>
        
                
                           " ;
                           
                            
                            
                   
                   
                  // echo $ph_ar[2];
                   // echo "<div class='p' ><a class='n' href='h_page.php?id=$a_f[0]' ><div class='e'>$a_f[1]</div></a> <div class='w'>$b_f[3]</div> <div class='n'>$ph</div>  <div><a class='fd' href='s_bid2.php?bid=$b_f[0]' >طلب</a></div></div><div class='df'>المنشور</div><div>$comm</div></div>.";
                    if(count($ma_ar) != 0){
                         //  $cor= "<div class='ee'>$ph_ar[0]</div><div class='mm'><div>$us_ar[0]</div><div>$ma_ar[0]</div></div>";
                        //   for($m=0;$m<count($ma_ar);$m++){
                               echo "<div>
      <div class='collapse' id='collapseExample' style='>
  <div class='card card-body' style='color:red;'margin-bottom:120px;'>
<div class='collapse' id='collapseExample'>
    <div class='card card-boy'>
    
   $fr
    </div>
    </div>
    </div>
    </div>
    ";
                           //echo  "<div class='hh'>$ph_ar[$m]</div><div class='nn'><div class='pp'>$us_ar[$m]</div><div class='zz'>$ma_ar[$m]</div></div>";
                       }
                    //}
                   // else{
                      //  $cor= '';
                  //  }
                       //echo $cor;
                }
           }
            else
                {
                if(count($l)== 0){
                    echo "<h1>there is no bids near you</h1>";
                }
                break;
            }
        }

        ?>
        <?php
       /* $id= $_SESSION['id'];
        $conn= mysqli_connect("localhost","root","1234","joba");
        mysqli_set_charset($conn,"utf8");
        $s= "select * from accounts where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $address= $f[10];

        $n_s="select * from emp where id=$id";
        $n_q=mysqli_query($conn,$n_s);
        $n_f=mysqli_fetch_array($n_q);
        $service= $n_f[2];
        $l= array();
        for($i=1;$i<=1000000;$i++){
            $b_conn= mysqli_connect("localhost","root","1234","joba");
            mysqli_set_charset($b_conn,"utf8");
            $b_s= "select * from bid where bid=$i";
            $b_q= mysqli_query($b_conn,$b_s);
            $b_f= mysqli_fetch_array($b_q);
            if($b_f[0]==True){
                if($address==$b_f[4] && $service==$b_f[5] && $b_f[2]==0){
                    $l[count($l)]= 1;
                    $a_s= "select * from accounts where id=$b_f[1]";
                    $a_q= mysqli_query($b_conn,$a_s);
                    $a_f= mysqli_fetch_array($a_q);
                    echo "<div class='ss'><div class='p'><p ><a class='qw' href='h_page.php?id=$a_f[0]'>$a_f[1]</a></br>$b_f[3]</br>live in $b_f[4]</br> want a $b_f[5]</br> <a href='s_bid2.php?bid=$b_f[0]'>bid</a></p></div></div>";

                }
            }
            else
                {
                if(count($l)== 0){
                    echo "<h1>there is no bids near you</h1>";
                }
                break;
            }
        }
        */
        //<div class='d'> $a_f[6]</div>
        //<div class='v'> السكن</div>
        ?>
         <script src="jquery-3.4.1.min.js"></script>
             <script src="bootstrap.min.js"></script>
    
    </body>
</html>

