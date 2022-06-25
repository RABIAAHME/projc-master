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


    <p class="pa">  التقرير اليومى للحضور </p>
      <div class="dr">
  <form action="" method="post" name="go">
  <div>
     مادة: <br>
     {subj_cut}
     <br>
  دكتور: <br>
  {namedr_cut}
 <br>
      الموافق بتاريخ: <br>
    
   
    <!-- ستكتب هنا معادلات الجمع والطرح  -->  
      عددالحاضرين : <br>
      عدد الغائبين: <br>
      المجموع الكلي: <br>

  </div>
</form>
<form  action="" method="post" name="go">
  <table border="2" width="40%"  height="40%" align="center">
    <thead>
      <tr>
        <th>اسماء الحاضرين  </th>
        <th>اسماء الغائبين  </th>
    </thead>
</form>
<form  action="" method="post" name="go">
  <!-- ظهور نسبة الغياب والحضور والكلية تحت الجدول -->
    <div >
         نسبة الحاضرين : <br>
        نسبة الغائبين: <br>
    </div>
    <input type="button" name="tba" value="" >
</form>
<img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="Dr/Dr_main.php">

</div>
</div>
<div class="home-title">
  <img  src="../../image/3.jpg" alt="pang" >
</div>

</body>
</html>