<?php
ob_start();
session_start();
$g_conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");

$id= $_SESSION['id'];
//$arra= array('الفيوم'=>'fayuim','الاسماعيلية'=>'ismailia','الاسكندرية'=>'alexandria');
//$add= $arra[$_SESSION['gover']];
/*echo $add;
//echo 


$g_s= "select * from map where gover='$add'";
$g_q=  mysqli_query($g_conn,$g_s);
if($g_q===True){
    echo "ok";
}
else{
    echo "noto";
}
$f_q= mysqli_fetch_array($g_q);
echo $f_q[1];*/
$arr= array("الفيوم"=>['طامية','اطسا','ابشواي','سنورس','يوسف الصديق','الفيوم'],"الاسكندرية"=>["الاسكندرية","برج العرب الجديدة","مركز برج العرب"],"الاسماعيلية"=>['الاسماعيلية','التل الكبير','القصاصين','القنطرة غرب','القنطرة شرق','فايد','ابو صوير'],"القاهرة"=>['مصر الجديدة','عين شمس','المعادي','المطرية','حي السلام الاول','حي السلام الثاني','حي النزهة','المرج','غرب مدينة نصر','شرق مدينة نصر','منشاة ناصر','باب الشعرية','موسكي','الازبكية','عابدين','الزاوية الحمراء','بولاق','الشرابية','الساحل','شبرا','روض الفرج','دار السلام','حدائق القبة','سرايا القبة','السيدة زينب','مصر القديمة','المقطم','البساتين','الخليفة']
    ,"الشرقية"=>['الزقازيق','الحسينية','فاقوس','بلبيس','منيا القمح','ابو حماد','اولاد صقر','العاشر من رمضان','الصالحية الجديدة','كفر صقر','ابو كبير','ديرب نجم','الابراهيمية','العزيزية','القرين'],"المنوفية"=>['شبين الكوم','منوف','اشمون','قويسنا','تلا',],"الجيزة"=>['منشأة القناطر','كرداسة','ابو النمرس','الحوامدية','البدرشين','العياط','الصف','اطفيح','الواحات البحرية','اوسيم'],"بني سويف"=>["الواسطي","بني سويف","ناصر","اهناسيا","بني سويف الجديدة","سمطا","بيا","الفشن"],"كفر الشيخ"=>["كفر الشيخ","الحامول","بيلا","قلين","مطوبس","دسوق","بلطيم","سيدي سالم","الرياض","فوة"],"حلوان"=>["عين حلوان","المعصرة","حي المستقبل","حي مدينة المعادي","مركز الصف","مركز اطفيح","حي النهضة","حي التبين"],"قنا"=>["ابو تشت","فرشوط","نجع حمادي","الوقف","دشنا","قنا","قفط","قوص","مقادة","ارمنت","اسنا"]
    ,"القليوبية"=>["بنها العسل","قليوب","القناطر الخيرية","شبرا الخيمة","الخانكة","كفر شكر","شبين القناطر","طوخ"],"الوادي الجديد"=>["الداخلة","الخارجة","الفرافرة"],"مطروح"=>["الحمام","العلمين","الضبعة","مطروح","النجيلة","براني","السلوم"],"السادس من اكتوبر"=>["الحي الاول","الحي الثاني","الحي الثالث","الحي الرابع","الحي الخامس","الحي السادس","الحي السابع","الحي الثامن","الحي التاسع","الحي العاشر","الحي الحادي عشر","الحي الثاني عشر"],"اسوان"=>["اسوان","ادفو","كوم امبو","دراو","نصر النوبة"],"اسيوط"=>["اسيوط","ديروط","قوصية","ابنوب","منفلوط","ابو تيج","الغنايم","ساحل سليم","البداري","صدفا","الفتح"],"البحيرة"=>["رشيد","شبراخيت","ايتاي البارود","ابو حمص","كفر الدوار","الدلنجات","كوم حمادة","حوش عيسي","دمنهور","المحمودية","ادكو","ابو المطامير","الرحمانية","النوبارية الجديدة","وادي النطرون"],"بورسعيد"=>["حي الشرق","حي الجنوب","حي بورفؤاد","حي الضواحي","حي المناخ","حي الزهور","حي العرب"],"الدقهلية"=>["المنزلة","الجمالية","دكرنس","ميت غمر","جمصة","اجا","بلقاس","السنبلاوين","شربين","طلخا","المنصورة","منية النصر","بني عبيد","ميت سلسبيل","الكردي","تمي الامديد","المطرية","نبروه"],"دمياط"=>["دمياط","كفر سعد","فارسكور","الزرقا"]
    ,"سوهاج"=>["اخميم","البلينا","جرجا","دار السلام","جهينهة","ساقلتا","سوهاج","طما","طهطها","المراغة","المنشاة"],"السويس"=>["السويس","الاربيعين","عتاقة","الجناين"],"شمال سيناء"=>["بئر العبد","نخل","الحسنة","العريش","الشيخ زويد","رفح"],"جنوب سيناء"=>["طابا","نويبع","دهب","نخل","راس صدر"],"الغربية"=>["المحلة الكبري-حي اول","المحلة الكبري-حي ثان","طنطا-حي اول","طنطا-حي ثان","سمنود","قطور","السنطة","زفتي","بسيون","كفر الزيات"]);
//$res= $arr[$f_q[0]];
$res= $arr[$_SESSION['gover']];

        
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
         <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="carousel.css">
    <link type="text/css" rel="stylesheet" href="floating-labels.css">
    
        <title>jobago</title>    
        <link rel='stylesheet' type='text/css' href='h_doo.css'/>
        
    </head>
    <body style="background-color:black;">
        
        
        <header >
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" style="background-color: black;">
      <a class="navbar-brand" href="#"><img class="img" src="IMG_٢٠٢٠٠٥٠٨_٠٤٥٣٢٧.png" alt="dsfsf" style="height:35px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">تسجيل دخول <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#" >اشتراك</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>

        <form class="form-signin" method="post">
  <div class="text-center mb-4">
   <!-- <img class="mb-4" src="images (10).jpeg" alt="khhk" width="72" height="72">-->
    <h1 class="h3 mb-3 font-weight-normal" style="color:red;">اكمل بياناتك</h1>
    <p >الرجاء اكمال بياناتك لعمل حساب لك </p>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" name='address' placeholder="Email address" required autofocus>
    <label for="inputEmail">العنوان</label>
  </div>
<div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control" name="age" placeholder="Email address" required autofocus>
    <label for="inputEmail">اكتب عمرك</label>
  </div>
  
            <div> 
    <label for="exampleFormControlSelect1" >اختر المركز</label>
    
        <?php 
        echo "<select class='form-control' id='exampleFormControlSelect1' name='state'>";
        $n= 0;
                    $pn= count($res);
                    for($i=0 ; $i < $pn ;$i++ ){
                        echo "<option>$res[$i]</option>";
                    }
                    
                    /*while( $res[$n]= True){
                        echo "<option><?php echo $res[$n]?></option>";
                        $n++;
                               
                                
                    }*/
                    echo "</select>";
        ?>
    </div>

  <div class="checkbox mb-3">
    <label>
      <!--<input type="checkbox" value="remember-me"> Remember me
    </label>-->
  </div>
             <div class='i' >اختر الجنس</div>
             
            <div class='r' ><input type="radio" name="gender" value="male" required="jhhhg"/>ذكر</div>
            <div class='f' ><input type="radio" name="gender" value="female" required="name"/>انثي</div>
            
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" style="color:white;border:2px solid black;background-color:red">تسجيل</button>
  
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
</form>
     
      
      
      
      
        
       
                
         
        
              <script src="jquery-3.4.1.min.js">
    
</script>
<script src="bootstrap.min.js"></script>
    
        
        
    </body>
    
</html>
<?php
if(isset($_POST['sub'])){
// GET INPUTS       
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $state= $_POST['state'];
// GET ID OF USER          
   $id= $_SESSION['id'];
// CONNECT DATABASE            
    $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
    mysqli_set_charset($conn,"utf8");
// INSERT DATA INTO DATABASE OR UPDATE    
    $s= "select * from accounts";
    $s_q= mysqli_query($conn,$s);
    $n_f= mysqli_fetch_Array($s_q);
    if($n_f[7] == 'hire' || $n_f[7] == ''){
         $u= "update accounts set address='$address',gender='$gender',age='$age', team='hire', state='$state' where id=$id";    
         $q= mysqli_query($conn,$u);
         header("location: h_page.php?id=");
    }
    elseif($n_f == 'work'){
        header("location: sorry.php?state=door");
    }
   
   
}

//echo $id;
//"update accounts set age=........ where id=''"

?>

