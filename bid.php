<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>joba</title>
    </head>
    <body>
       <?php 
       session_start();
       $arr= array('نجارة'=>'carpenter','محارة'=>'waller','سباكة'=>'wr','نقاشة'=>'painter','تنظيف منزل'=>'houseworker','خياط'=>'tailor','كهربائي'=>'electrician');
       $e= $_GET['service'];
       echo $e;
       $service= $arr[$e];
       
       echo $service;
       $bid= $_GET['bid'];
       $time= $_GET['time'];
       $type= $_GET['type'];               
       $h_id= $_SESSION['id'];
       $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
       mysqli_set_charset($conn,"utf8");
       $s= "select * from accounts where id=$h_id";
       $q= mysqli_query($conn,$s);
       $f= mysqli_fetch_array($q);
       $i= "insert into bider values('','$h_id','','$bid','$f[10]','$service','','','','$time','$type','1')";
       $r= mysqli_query($conn,$i);
       if($r==True){
           header("location: h_page.php?id=");
       }        
       ?> 
    </body>
    
    
</html>

