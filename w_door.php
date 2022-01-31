<?php 
session_start();
/*$g_conn= mysqli_connect("localhost","root","1234","joba");

$id= $_SESSION['id'];
$arra= array('الفيوم'=>'fayuim','الاسماعيلية'=>'ismailia','الاسكندرية'=>'alexandria');
$add= $arra[$_SESSION['gover']];
echo $add;

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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link  rel="stylesheet" type="text/css" href="w_door3.css"/>
        <title>joba</title>       
    </head>
    
    <body>
        <div class="fw">yarb</div>
        <h1 class='joba'>jobago</h1>
        <p ></p>
        <p class="pra">yarb</p>
        <h1 class="pr"> </h1>
        <div class="co">اكمل البيانات</div>
        <form method="post" enctype="multipart/form-data">
            
            
            <div><textarea  class='n' type="text" name='desc' placeholder='اكتب وصف لك' autocomplete='of' required="nnn" ></textarea></div>
            <div><input  class='m' type="text" name='age' placeholder='اكتب عمرك'  required="nnn"></div>
             
             <div> <input  class='o' type="text" name='address' placeholder='اكتب العنوان باللغة العربية'  required="nnn">
            </div>       
            <div><?php 
            
            ?>
                <label class="ro" for="state">اختر المركز</label>
                 <?php
                    echo "<select class='mn' name='state'>";
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
                    //<div  ><input class="ar" type="file" name="img"   ></div>
                    //<div class="po">اختر صورة</div>
                    ?>
               
            
            <div class="f"><input type="radio" name="gender"  value="male" required="nnn" />ذكر</div>
            <div class="z"><input type="radio" name="gender" value="female" required="nnn"/>انثي</div>          
            <div class='q'>اختر الجنس</div>
            <div class="g">اختر الخدمة</div>
            <select class="k" name="service">
                <option>نجارة</option>
             <option>سباكة</option>
             <option>نقاشة</option>
             <option>محارة</option>
             <option>تنظيف منزل</option>
             <option>خياط</option>
             <option>كهربائي</option>
            </select> 
            <div ><input class='w' type='submit' value='تسجيل' name='sub' ></div>
        </form>
    </body>
    
</html>
<?php
$ar= array('نجارة'=>'carpenter','محارة'=>'waller','سباكة'=>'wr','نقاشة'=>'painter','تنظيف منزل'=>'houseworker','خياط'=>'tailor','كهربائي'=>'electrician');

    if(isset($_POST['sub'])){
    //$img= addslashes(file_get_contents($_FILES['img']['tmp_name']));
// CONNECT DATABASE                
    $conn= mysqli_connect("localhost","fadel","Up=out1234@#","joba");
    mysqli_set_charset($conn,"utf8");
// GET INPUTS    
    $id= $_SESSION['id'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $service= $_POST['service'];
    $n= $ar[$service];
    $state= $_POST['state'];
    $desc= $_POST['desc'];//CONNECT NEW DATABASE
    $s= "select * from accounts where id=$id";
    $s_q=  mysqli_query($conn,$s);
    $n_f= mysqli_fetch_array($s_q);
    if($n_f[7] == 'work' || $n_f[7]==''){
        $u= "update accounts set gender='$gender',age='$age',address='$address', team='work' ,state='$state' where id=$id";
    $q= mysqli_query($conn,$u);            
     $id_user= $_SESSION['id'];
     $i_emp= "insert into emp values('$id_user','$desc','$n','')";
     $q= mysqli_query($conn,$i_emp);
   // $u_emp= "update emp set desc='$desc' where id=$id";
   // $q_emp= mysqli_query($conn,$u_emp);

 // INSERT DATA INTO DATABASE OR UPDATE       
   
    header("location: w_page.php?id=&val=");
    }
    elseif($n_f[7] == 'hire'){
        header("location: sorry.php?state=door");
    }
    
    
    
}

//<div class="ra">اختر صورة لك</div>


?>