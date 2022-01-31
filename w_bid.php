<?php
$id= $_GET['id'];
$n_id= $_GET['n_id'];
$conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
$u= "update bider set wid=$n_id  where bid=$id";
$q= mysqli_query($conn,$u);
header("location: w_page.php?id=&val=log");
?>