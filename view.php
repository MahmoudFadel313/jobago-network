<?php
$conn= mysqli_connect('localhost','fadel','Up=out1234@#','joba');
$s= 'select * from bider';
$q= mysqli_query($conn,$s);
while($f = mysqli_fetch_array($q)){
    if($f[6] === '44'){
        echo "yarb";
    }
}


