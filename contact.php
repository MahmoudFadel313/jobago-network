<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
         <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
     
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
        <title>jobago</title>
    </head>
    <body>
        
        
        <form class="form-signin" method="post">
  <div class="text-center mb-4">
   <!-- <img class="mb-4" src="images (10).jpeg" alt="khhk" width="72" height="72">-->
    <h1 class="h3 mb-3 font-weight-normal" style="color:red;">اترك رسالة</h1>
    <p >نحن دائما نحب التواصل معك  </p>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" name='mail' placeholder="Email address" required autofocus>
    <label for="inputEmail"> البريد الالكتروني</label>
  </div>
<div class="form-label-group">
    <input type="tel" id="inputEmail" class="form-control" name="nom" placeholder="Email address" required autofocus>
    <label for="inputEmail">رقم التليفون</label>
  </div>
  <div class="form-label-group">
     <div class="form-group">
                <label for="exampleFormControlTextarea1">الرسالة</label>
                <textarea stle="width:400px;" name="mess" class="form-control" id='exampleFormControlTextarea1' rows='3' placeholder="الرسالة......."></textarea>
            </div>
  </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign" style="color:white;border:2px solid black;background-color:red">تسجيل</button>

        </form>
        <?php 
        if(isset($_POST['sign'])){
            $mail= $_POST['mail'];
            $nom= $_POST['nom'];
            $mess= $_POST['mess'];        
        
        $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
        $i= "insert into cont values('$mail','$nom','$mess')";
        $q= mysqli_query($conn,$i);
        }
        ?>
        
       <!-- <script src="jquery-3.4.1.min.js"></script>
             <script src="bootstrap.min.js"></script>-->
    
    </body>
</html>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

