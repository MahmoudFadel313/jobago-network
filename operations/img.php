<?php
session_start();
$id = $_SESSION['id'];
            $img= addslashes(file_get_contents($_FILES['img']['tmp_name']));
            $i_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
            $i_s= "update accounts set image='$img' where id=$id";
            $i_q= mysqli_query($i_conn,$i_s);
        header("location: w_page.php?id=&val=")
?>

