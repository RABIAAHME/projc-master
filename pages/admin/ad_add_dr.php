<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../p/p.css" />

</head>
<body dir="rtl">
    <div class="home-desc">
    <img class="bordar" src="../../image/01.jpg" alt="">

    <div class="ad-add">
        <form action="" class="add-form" method="post">
            
            اسم عضو هيئة التدريس
            <input  type="text" name="name" value=""><br><br>
            كلمة المرور
            <input   type="password" name="pass" value=""><br><br>
    
            إيميل<br>
            <input  type="email" name="email" value=""><br><br>
            <input type="hidden" name="role" value="dr">
            <input type="hidden" name="collage_id" value="{{collage_id}}">
            <input class="inapt" type="submit" name="send" id="" value="ارسال">
            <form action="" method="post" name="gooo">
    <input cl type="hidden" name="page" value="admin/ad_add_dr.php">
            <!-- <input type="hidden" name="page" value="admin/ad_add_dr.php">
            <input type="hidden" name="form_name" value="create_dr"> -->
        
            <!-- <input class="innpt" type="submit" name="view" value="عرض" >  -->
        </form>
    
    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="admin/ad_main.php">
    </form>
    </div>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
    
    
</body>

</html>