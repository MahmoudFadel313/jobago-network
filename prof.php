<head>
    <meta charset="utf-8"/>
    <title>joba</title>
    <link rel="stylesheet" type="text/css" href="prof.css"/>
</head>
<html> 
<body>
   
        
  
     <?php 
         session_start();
      
        
        $id= $_GET['id'];
        $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
        $s= "select * from accounts where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        
       ?>  
      
       
       
         <h1>  <?php echo $f[1];?> </h1></br>
         <h2 class="t"> address: <?php echo $f[6];?> </h2></br>
         <h2 class="m"> gender: <?php echo $f[4];?> </h2></br>
         <h2 class="n"> age: <?php echo $f[5];?> </h2></br>
    </body>
</html>
    

