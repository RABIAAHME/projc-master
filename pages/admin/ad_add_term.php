<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="../../p/p.css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>term</title>
</head>
<!-- <body>
<form action="" method="post">
لادخال فرقة بلكلية  
{{collage_name}}
وذلك لقسم 
{{part_name}}
و الفرقة
{{level_name}}

<p>من فضلك قم بإخال الترم</p>
    <div class="term">
    <select name="term">
        <option></option>
        <input type="hidden" name="level_id" value="from_post{{level_id">
            <input type="hidden" name="page" value="admin/ad_add_term.php">
            <input type="hidden" name="form_name" value="add_term">
        <option>الترم الأول</option>
        <option>الترم الثاني</option>
    </select>
</div>
</form> 
</body> -->

<body dir="rtl" >
    <div class="home-desc">
    <img class="bordar" src="../../image/01.jpg" alt="">

    <div class="ad-add-term">

        لادخال فرقة لكلية 
        {{collage_name}}
        وذلك لقسم 
        {{part_name}}
        للفرقة 
        {{level_name}}
        يرجي ادخال اسم الترم
        <br> <br> <br>
    <form action="" method="post" name="teerm">
        
            <label for="">اسم الترم</label><br>
            <input type="text" name="name">
            <input type="hidden" name="part_id" value="from_post{{part_id">
                <input type="hidden" name="level_id" value="from_post{{level_id">
            <input type="hidden" name="page" value="admin/ad_add_term.php">
            <input type="hidden" name="form_name" value="add_term">

        <br>
        <input class="inpet" type="submit" name="send" value="ارسال">
    </form>

    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
          <form action="" method="post" name="gooo">
          <input type="hidden" name="page" value="admin/ad_main.php">
          </form>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      
    </div>
</body>

</html>