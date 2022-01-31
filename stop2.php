<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" type="text/css" href="stop2.css"/>
        <title>jobago</title>
    </head>
    <body>
        <div class='s'></div>
        <a class='n'>كيف تتواصل معنا؟</a>
        <a class='m'>هدفنا</a>
        <a class='o'>من نحن</a>
        <form method="post">
            <input class='r' type="text" name="cid" placeholder=' كود العامل' required='nn'/>
            <input class='p' type="submit" name="sub" value='ادخل'/>
        </form>
        <?php
        session_start();
        if(@$_GET['state']==='no'){
            echo "<div class='a'>ان كنت تريد العمل معنا الرجاء التواصل علي الرقم</div>";
            echo "<div class='b'>01029429144</div>";
        }
        $id= $_SESSION['id'];
        if(isset($_POST['sub'])){
            $c_id= $_POST['cid'];
            if($id=== (int)$c_id){
                
                $conn =mysqli_connect("localhost","root","1234","joba");
                $u= "update emp set state=1 where id=$id";
                $q= mysqli_query($conn,$u);
                header("location: w_page.php?id=&val=");
            }
            else{
                header("location: stop.php?state=no");
            }
        }
        
        ?>
    </body>
</html>

