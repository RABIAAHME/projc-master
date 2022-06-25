<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../p/p.css" />
</head>
<body dir="rtl" >
  <div class="home-desc">
  <img class="bordar" src="../../image/01.jpg" alt="">

       <div class="ad-add">
        <form action="" method="post">
          <!-- 
                <h3>ابحث عن المادة</h3> 
    <input  type="search" name="Search" placeholder="">
   -->
    <h3>إضافة المادة
    </h3>
    <input type="text"  name="name" >
    <input type="hidden"  name="term_id" value="from_post{{term_id" >
      <input type="hidden" name="form_name" value="add_subj">
      <input type="hidden" name="page" value="admin/ad_add_subj.php">
    <!-- <input type="hidden" name="id" value="id"><br/><br/> -->
    <input class="inpet" type="submit" name="send" id="reg" value="إرسال">
     
</form> 
<img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="admin/ad_main.php">
</div>  
   </div>  
   <div class="home-title">
    <img  src="../../image/3.jpg" alt="pang" >
  </div>
</body>
</html>