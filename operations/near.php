<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
         <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
     
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href='blog.css'/>
        <title>jobago</title>
    </head>
        <body style='background-color:'>
    
</body>
</html>
<?php
session_start();
//echo $_SESSION['stat'];
$ar= array('نجار'=>'carpenter','محار'=>'waller','سباك'=>'wr','نقاش'=>'painter','تنظيف منزل'=>'houseworker','خياط'=>'tailor','كهربائي'=>'electrician');
$s_ar= array('carpenter'=>'نجار','waller'=>'محار','wr'=>'سباك','painter'=>'دهان','houseworker'=>'تنظيف منزل','electrician'=>'كهربائي','tailor'=>'خياط');
$get= $_POST['job'];
$j= $ar[$get];
if($get === "ابحث عن عمال بجوارك"){
    header("location: h_page.php?id=&val=");
}
class search{
    public $type;
    
    
    public function col(){
        
        $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
        mysqli_set_charset($conn,"utf8");
            $s_s= "select * from accounts";
            $s_q= mysqli_query($conn,$s_s);
            
        //$s_ar= array('carpenter'=>'نجار','waller'=>'محار','wr'=>'سباك','painter'=>'دهان','houseworker'=>'تنظيف منزل','electrician'=>'كهربائي','tailor'=>'خياط');

        $ty= 0;
        while($s_f= mysqli_fetch_array($s_q)){
            mysqli_set_charset($conn,"utf8");
            $id= $s_f[0];
            $d_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
            $d_s= "select * from emp where id=$id"; 
            $d_q= \mysqli_query($d_conn,$d_s);
            $d_f= mysqli_fetch_array($d_q);
            $s= $_SESSION['stat'];
            //echo "$s_f[10] </br>";
            /* @var $s_r type */
          //  $r= $d_f[2];
            //$s_j= $s_ar[$r];
            if($s_f[8] != True){
                $ph= '';

                       }                   
                       else{
                           $ph=  '<img src="data:image/png;base64 , '. base64_encode($s_f[8]).'" style="height:60px;width:60px;border:3px solid silver;border-radius:40px;margin-left:0px;">';
                
                           
                       }
                       if($s_f[4] === 'male'){
                           $rt= 'ذكر';
                       }
                       else{
                           $rt= 'انثي';
                       }
            if($s_f[10] === $s && $d_f[2] === $this->type ){
                $ty= 1;
                echo " <div class= 'row mb-2' style='margin-left:3px;margin-top:5px;'>
    <div class='col-md-6' '>
      <div   class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
        <div class='col p-4 d-flex flex-column position-static'>
          <a href='w_page.php?id=$s_f[0]&val='><strong class='d-inline-block mb-2 text-primary'>$ph</strong></a>
          <a href='w_page.php?id=$s_f[0]&val='><h3 class='mb-0' style='color:black;' >$s_f[1]</h3></a>
          <div class='mb-1 text-muted'>$rt</div>
          <p class='card-text mb-auto'><div class='e'>$s_f[6]</div></p>
         
        </div>
        <div class='col-auto d-none d-lg-block'>
          </div>
        </div>
      </div>
    </div>";
              
                //echo "<div class='a'><div class='b'>العمر</div></br><a href='w_page.php?id=$s_f[0]&val='><div class='c'>$s_f[1]</div></a></br><div class='d'>$s_f[6]</div></br><div class='e'>$s_f[5]</div></br><div>$ph</div></br><div></div></b ><div class='f'>السكن</div></br></div>";
                
            }
            
                    
        }
        if($ty= 0){
                echo " سيتم توظيف مهنيين متخصصين في المهنة في منقطتك قريبا";
            }
            else{
                echo '';
            }
    }
}
$car = new search();
$car->type = 'carpenter';
//$car->col();

$wr= new search();
$wr->type= 'wr';

$tailor= new search();
$tailor->type= 'tailor';

$waller= new search();
$waller->type= 'waller';

$painter= new search();
$painter->type= 'painter';

$houseworker= new search();
$houseworker->type= 'houseworker';

if($j === 'carpenter'){
    $car->col();
}
elseif($j === 'tailor'){
    $tailor->col();
}
elseif($j === 'painter'){
    $painter->col();
}
elseif($j === 'wr'){
    $wr->col();
}
elseif($j === 'houseworker'){
    $houseworker->col();
}
elseif($j === 'waller'){
    $waller->col();
}
?>
