<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../footer/footer.css">

</head>

<body>
<img class="bordar" src="../../image/01.jpg" alt="">

    <div class="dr_munth">
        
            <form action="" method="post" name="boo">
                <label  for="cname">الكلية: </label>
                <select name="الكلية " id=" ">

                    <option value=" "> </option>
                    <!-- هيتم استدعاء الكليات  تلقائيا  -->
                </select>
                <br>



                <label for="kname">القسم: </label>

                <select name="القسم " id=" ">
                    <option value=" "> </option>
                    <!-- هيتم استدعاءاقسامها تلقائيا  -->
                </select>

                <br>


                <label for="fname">الفرقة الدراسية:</label>

                <select name="الفرقة الدراسية" id="">
                    <option value=" "> </option>
                    <!-- هيتم استدعاءالفرق تلقائيا  -->
                </select>
                <br>

                <label for="ename">اسم المادة:</label>
                <input type="text" id="" name="name">
    <br>
                <label for="bname">التاريخ: </label>

                <input type="date" name="dt" value="">
                <!-- هيتم ربطها تلقائيا  -->
                <br>
           
        </div>

        <input class="inapt" type="submit" value="دخول" id="">
        <!-- اللينك يقوم بالذهاب للصفحة التالية  -->
    </div>
    <div class="home-title">
        <img src="../../image/3.jpg" alt="pang">
    </div>
    </form>
    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="Dr/Dr_main.php">

</body>

</html> 