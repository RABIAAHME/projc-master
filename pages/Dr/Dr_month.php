<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../footer/footer.css">

</head>

<body >
<img class="bordar" src="../../image/01.jpg" alt="">

        <div class="Dr-month">
    <form action="" method="post" name="hoo">
        <div class="Dr-munrg">
       
مادة:       <br>
{{sbuj}}

   
    
        دكتور:
<br>        
        {{namedr}}
   
التاريخ الموافق :       <br />
   <br>
</div>
    </form>
    <form action="" method="post" name="ooo">
        <table border="1" width="50%" height="40%">
        <thead>
            <tr>
                <th>اسماء الطلاب </th>
                <th> عدد مرات الغياب</th>
                <!-- تكبير مساحة الجدولcss  -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{stu}}
                </td>
            </tr>
        </tbody>
    </table>
</form>
<form action="" method="post" name="woo">
    <br>
    <input class="inept" type="button" name="ju" value="طباعه" id="">
</form>

    </div>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
        </div>
        <div class="home-title">
            <img  src="../../image/3.jpg" alt="pang" >
          </div>
          <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="Dr/Dr_main.php">

</body>
</html>