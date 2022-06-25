<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../p/p.css" />
</head>
<body>
    <div class="home-desc">
    <img class="bordar" src="../../image/01.jpg" alt="">

    <div class="ad_pre"> 
        <form action="" method="post">
            <select class="selact" name="part_id" id="">
                {{colege_parts}}
            </select>
        لإضافة الفرق لكلية 
        {{collage_name}}
        يرجي تحديد القسم 
 
  <input type="hidden" name="page" value="admin/ad_add_level.php"><br><br>
  <input class="inupt" type="submit" name="" id="" value="ارسال">

</form>
</div>
<img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="admin/ad_main.php">
    </form>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
    </div>
</body>
</html>