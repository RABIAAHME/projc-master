<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>st-main</title>
    <link rel="stylesheet" href="../../footer/footer.css">

</head>
<body>
<img class="bordar" src="../../image/01.jpg" alt="">

    <!-- <div class="ar">
        
    <p class="pg">   <a href="">لمسحQr    </a></p> 
    <p class="pg"> <a href="http://">التقرير  </a></p> 
    <p class="pg">   <a href="http://file:///C:/Users/DW/Desktop/html/New%20folder/%D8%B4%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B7%D8%A7%D9%84%D8%A8/stu_main.html">للتواصل </a>
    </p>
</div> -->
<!-- بديل الكلام صور معبره عنه -->

        
        

            <p class="pp">
                التسجيل الإلكتروني لحضور الطالب
                
            </p>
            <!-- <div>
                <h1>{{welcom}}</h1>   
            </div> -->
            <div  class="Dr-main">
        <div   class="div" style="display: flex;">
            <div class="card" data-page="stu/stu_scan/stu_scan.php" name="my1card">
                <img src="../../image/44.png" alt="" width="90%" height="60%">
                <div class="container">
                    <center>
                         
                        <h3><b padding="50px" margin="25px"> لمسحQr   </b></h3>
                    </center>
                   
                    
                </div>
            </div>
            <div class="card" data-page="Dr/Dr_month.php">
                <img src="../../image/770.png" alt="" width="90%" height="60%">
                <div class="container">
                    <center> 
                        
                        <b>التقرير الاسبوعي   </b>
                    </center>
                 
                        
                </div>
            </div>
            <div class="card" data-page="Dr/Dr_day.php">
                <img src="../../image/700.png" alt="reports" width="90%" height="60%">
                <div class="container">
                    <center>
                         
                        <h3><b><a href="http://file:///C:/Users/DW/Desktop/html/New%20folder/%D8%B4%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B7%D8%A7%D9%84%D8%A8/stu_main.html">للتواصل </a></b></h4>
                        
                    </center>
                   
                        
                    
                </div>
            </div>
        </div>
        <form action="" method="post" name="gooo">
            <input type="hidden" name="page" >
        </form>
    </div>
    </div>
<div class="home-title">
    <img  src="../../image/3.jpg" alt="pang" >
  </div>

  <script>
    cards= document.getElementsByClassName('card');
        
        for (const iterator of cards) {
            iterator.addEventListener("click", submitit);
        }

        function submitit(){
        //alert(this.dataset.page);

        document.forms.gooo.elements.page.value=this.dataset.page;
        document.forms.gooo.submit();
    }
  </script>
</body>
</html>