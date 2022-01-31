/<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>jobago</title>
        <link rel='stylesheet' type="text/css" href='w_search.css'/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
    </head>
    <body>
        
    </body>
</html>
<?php

$val= $_GET['val'];
  echo "<a class='f' href='w_search.php?val=$val&kind=address' >العنوان</a></br>";
  echo "<a class='d' href='w_search.php?val=$val&kind=name' >الاسم</a></br>";
session_start();
$w_id= $_SESSION['id'];
class search{
    public $c_id;
    public $in;
    public function find(){
        $arr_id=[];
        for($i=1; $i<=1000; $i++){
            $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
            mysqli_set_charset($conn,"utf8");
            $s= "select * from accounts where id=$i";
            $q= mysqli_query($conn,$s);
            $f= mysqli_fetch_array($q);
            if($f[0]==True){
                
                if($f[$this->c_id] == $this->in && $f[7] == 'hire'){
                    $n= $this->in;
                    $arr_id[count($arr_id)]= $f[0];
                    echo "<div class='n'><div class='a'><a href=h_page.php?id=$f[0]>$f[1]</a></div></br><div class='b'> $f[6]</br></div><div class='s'>العمر</div><div></div><div class='i'>السكن</div><div class='v'>$f[5]</div></div>";                   
                }
            }
            elseif($f[0]==False){
                if(count($arr_id)== 0){
                    echo "<p class='q'>عذرا لا توجد نتائج للبحث</p>";
                }
                break;
            }                         
        }
    }
}
$name= new search();
$name->c_id= 1;
$name->in= $_GET['val'];

$address= new search();
$address->c_id=6;
$address->in= $_GET['val'];
if($_GET['kind']=='name' || $_GET['kind']=='بحث'){
    $name->find();
}
elseif($_GET['kind']=='address'){
    $address->find();
}

    

?>

