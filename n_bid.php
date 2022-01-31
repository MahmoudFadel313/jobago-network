<?php
session_start();
$n_id= $_GET['id'];
$id= $_SESSION['id'];
$conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
mysqli_set_charset($conn,"utf8");
$s= "select * from accounts where id=$id";
$q_s= mysqli_query($conn,$s);
$f= mysqli_fetch_array($q_s);
$n_s= "select * from emp where id=$n_id";
$n_q= mysqli_query($conn,$n_s);
$n_f= mysqli_fetch_array($n_q);
$i= "insert into bider values('','$id','','','$f[10]','$n_f[2]','$n_id','','','','','0')";
$q_i= mysqli_query($conn,$i);
header("location: h_page.php?id=$id&val=");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>jobago</title>
    </head>
</html>