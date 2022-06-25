<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../p/p.css" />
</head>
<body >
    <div class="home-desc">
    <img class="bordar" src="../../image/01.jpg" alt="">

    <div class="add-part">
        أضف أقسام لكلية 
        {{collage_name}}
    
    <form action="" method="POST">
        
            <input type="text" name="name">
        
        <br/><br/>  
        <input type="hidden" name="collage_id" value="{{collage_id}}">
        <input type="hidden" name="form_name" value="add_part">
        <input type="hidden" name="page" value="admin/ad_view_part.php">
        <input class="innpt" type="submit" name="send" value="إرسال" id="">
     
          <input class="innpt" type="submit" name="view" value="عرض" > 
        </form> 
        </div>
        <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
        <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="admin/ad_main.php">
        </form>
       
    <!--  -->
        
        <div class="home-title">
            <img  src="../../image/3.jpg" alt="pang" >
          </div>
        </div>
</body>
</html>