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

    <div class="abuot">
    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <td> اسم الكلية</td>
                    <td> اسم القسم</td>
                    <td>الفرقة</td>
                </tr>
            
         </tbody>
            <tbody>
                {{lv_cut}}
           
            </tbody>
        </table>
        <input class="inpnt" type="submit" name="طباعة" id="reg" value="طباعة">
    </form>
    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="admin/ad_main.php">
</div>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
</body>

</html>