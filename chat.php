<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>jobago</title>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
    </head>
    <body>
        <?php 
        $list= $_SESSION['accept'];
        $count= count($list);
        echo $list[0];
        for($i= 0; $i<$count;$i++){
            echo $list[$i];
            $conn= mysqli_connect("localhost","root","1234","joba");
            $s= "select * from accounts where id=$list[$i]";
            $q= mysqli_query($conn,$s);
            $f= mysqli_fetch_array($q);
            if($f===True){
                echo "ok";
            }
            else{
                echo "sorry";
            }
            echo $f[1];
            
        }
        ?>
    </body>
</html>

