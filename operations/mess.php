<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
         <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
     
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <title>jobago</title>
        
    </head>
    <body>
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">الرسالة</label>
                <textarea style="width:400px;" name="mess" class="form-control" id='exampleFormControlTextarea1' rows='3' placeholder="الرسالة......."></textarea>
            </div>
            
            <input type="submit" name="sub" style="position:absolute;left:150px;border:2px solid red;border-radius:20px;background-color:white;color:red;" value="ارسال">
        </form>
        <?php
        @$bid= $_GET['bid'];
        @$wid= $_GET['wid'];
        //echo $bid,$hid;
        $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
        $s= "select * from accounts where id='$wid'";
        $q= mysqli_query($conn,$s);
        $f=mysqli_fetch_array($q);
       // echo $f[1];
        
        if(isset($_POST['sub']) && $_POST['mess'] != ''){
             $mess= $_POST['mess'];
            header("location: mess2.php?bid=$bid&wid=$wid&mess=$mess");
            //@$bid= $_GET['bid'];
        //@$hid= $_GET['hid'];
          //  $m_conn= mysqli_connect("localhost","root","1234","joba");
           
            //$i= "insert into mess values('$bid','$wid','$mess')";
            //$i_q= mysqli_query($m_conn,$i);
        }

        ?>
         <script src="jquery-3.4.1.min.js"></script>
             <script src="bootstrap.min.js"></script>
    
    </body>
</html>


