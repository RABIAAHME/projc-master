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

    
    <p class="pa"> إنشاء محاضرة </p>
    <div class="dr_l">
    <!--<img src="./myqr.php?level_id=<?=$_POST['level_id']?>&subj_id=5&secr=kkk" alt="photo" width="200px" height="200px">-->
    <img id="myqr">
    <form action="" method="post" name="goo">
        <div >
            <caption>
                جدول تحضير وغياب الطلاب يدوياً
            </caption>
        </div>
        
        <input class="inpat" type=" text" name="hhh" value="اسم الطالب" action="">
        <!-- اخفاء كلمة اسم الطالب عندما يقوم الدكتور بكتابة اسم الطالب  -->
    </form>
</div>
<div class="dr_ll">
    <form action="" method="post" name="ooo">
    <table border="1" width="50%" height="40%">
            <thead>
                <tr>
                    <th> اسماء الطلاب </th>
                    <th> الحضور والغياب </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> </td>
                    <th>
                       حاضر<input type="radio" name="t" value=""><br>
                        غائب <input type="radio" name="t" value="">
                    </th>
                </tr>
                <!-- {option_lect} -->
            </tbody>
    </table>
</form>
<img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="Dr/Dr_main.php">

</div>
<div class="home-title">
    <img  src="../../image/3.jpg" alt="pang" >
  </div>
  <script src="./js/jquery.js"></script>
  <script>
    var lec_data={};
   
    lec_data['level']='from_post{{level_id';
    lec_data['subj']='from_post{{subj_id';
    lec_data['lec_id']='from_post{{lec_id'
        $.post('./myqr.php',lec_data, function(ddd,gg ){
           console.log(gg);
            ss= document.getElementById('myqr');
            ss.src= 'data:image/png;base64,' + ddd;
        } );
  </script>
</body>

</html>