<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>jobago</title>   
        <link rel='stylesheet' type="text/css" href='h_search2.css'/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0" />
        <script src="jquery-3.4.1.min.js"></script>
    </head>
    <body>
        
        <script>
            $(document).ready(function(){
                
            });
        
        </script>
        <div class="r"></div>
        <h1 class='joba'>jobago</h1>
        
        <?php 
        $val= $_GET['val'];
         echo "<a class='n' href='h_search.php?val=$val&kind=address' >العنوان</a></br>";
         echo "<a class='m' href='h_search.php?val=$val&kind=name' >الاسم</a></br>";
         
         
       class search{
           public $c_id;
           public $in;
           public function col(){
               $arr_id= array();               
                   $conn =mysqli_connect("localhost","fadel","Up=out1234@#","joba");
                   mysqli_set_charset($conn,"utf8");
                   $s= "select * from accounts ";
                   $q= mysqli_query($conn,$s);
                   while($f= mysqli_fetch_array($q)){
                   if($f[0]==True){
                       $v= $this->in;
                       if($f[$this->c_id]===$v && $f[7]==='work'){
                           $s_emp= "select * from emp where id=$f[0] ";
                           $q_emp= \mysqli_query($conn,$s_emp);
                           $f_emp= mysqli_fetch_array($q_emp);
                           $j= array('carpenter'=>'نجار','tailor'=>'خياط','electrician'=>'كهربائي'); 
                            $r= $f_emp[2];
                           @$n= $j[$r];
                           if(@$f[8]==True){
                             @$ph=  '<img src="data:image/png;base64 , '.base64_encode($f[8]).'">';

                       }                   
                       else{
                           $ph= '';
                       }
                           
                           
                          
                           if($f_emp[3]=== '1'){
                               $u= $f[$this->c_id];
                           $arr_id[count($arr_id)]= $f[0];
                           
                           echo "<div class='a'><div>$ph</div><span ><a class='b' href='w_page.php?id=$f[0]&val='>$u</a></br></span><div class='c'> السكن</div><spam class='d'>    العمر</br></spam><div class='v'> المهنة   </br></div><div class='w'>$f[6]</div><div class='g'>$n</div><div class='s'>$f[5]</div></div>" ; 
                           }
                           
                           //echo "$f[6],'</br>'";
                          // echo " $f[5] years old </br>";
                        //Notice: Undefined index: in C:\xampp\htdocs\joba\h_search.php on line 47
                       //Notice: Undefined variable: ph in C:\xampp\htdocs\joba\h_search.php on line 59
//Notice: Undefined variable: ph in C:\xampp\htdocs\joba\h_search.php on line 59

                       }
                   }
                   elseif($f[0]==False){
                       if(count($arr_id)==0){
                           echo "<div class='l'>there is no result.</div>";
                       }                       
                       break;                       
               }             
           }                    
       }
    }
       //search by name.
       $name= new search();
       $name->c_id = 1;
       $name->in= $_GET['val'];
       //$name->col();
       
                     
       //search by address.
       $address= new search();
       $address->c_id= 6;                      
       $address->in= $_GET['val'];
       //$address->col();
       
       
       
       $kind= $_GET['kind'];
       if($kind==='name' || $kind==='بحث'){
           
           $name->col();
       }
       elseif($kind=='address'){
           $address->col();
       }
       
     
       
       
       
        
        ?>
        
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

