<?php
session_start();
$wid= $_SESSION['id'];
$bid= $_GET['bid'];
$conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
mysqli_set_charset($conn,"utf8");
$s= "select * from bider where bid=$bid";
$s_q= mysqli_query($conn,$s);
$f_q= mysqli_fetch_array($s_q);
$obid1= $f_q[6];
$obid2= $f_q[7];
$obid3= $f_q[8];
if($obid1!= $wid && $obid2!= $wid && $obid3!= $wid){
    if($obid1==0){
        $u= "update bider set obid1='$wid' where bid=$bid";
        $q= mysqli_query($conn,$u);
    }
    elseif($obid2==0){
        $u= "update bider set obid2='$wid' where bid=$bid";
        $q= mysqli_query($conn,$u);
    }
    elseif($obid3==0){
        $u= "update bider set obid3='$wid' where bid=$bid";
        $q= mysqli_query($conn,$u);
    }
    
}
else
{
    header("location: s_bid?state=none");
}
        


if(@$q==True){
    header("location: s_bid.php");
}
?>
