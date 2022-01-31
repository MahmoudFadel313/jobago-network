<?php
$b_id= $_GET['b_id'];
$n_id= $_GET['n_id'];
$id= $_GET['id'];
echo "$id,$b_id,$n_id";
//$_SESSION['accept'][count($_SESSION['accept'])]=$n_id;
$conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
mysqli_set_charset($conn,"utf8");
$u= "update bider set wid='$n_id', comp='1' where bid='$b_id' ";
$q= mysqli_query($conn,$u);
if($q== True){
    echo 'ok';
}
else{
    echo 'not';
}
header("location: h_page.php?id=&val=");
