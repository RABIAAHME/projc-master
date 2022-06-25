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


    <div class="ad-leve">
    <form action="" method="post">
    
        لادخال فرقة لكلية 
        {{collage_name}}
        وذلك لقسم 
        {{part_name}}
        يرجي ادخال اسم الفرقة
    <br><br>

    
            <label for="">اسم الفرقة</label><br>
            <input type="text" name="name">
            <input type="hidden" name="part_id" value="from_post{{part_id">
            <input type="hidden" name="page" value="admin/ad_add_level.php">
            <input type="hidden" name="form_name" value="add_level">
        
<br>
        <input class="inoat" type="submit" name="send" value="ارسال">
    </form>
    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
          <form action="" method="post" name="gooo">
          <input type="hidden" name="page" value="admin/ad_main.php">
          </form>
        </div>
    
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
</body>

</html>