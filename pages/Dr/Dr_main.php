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

        
        

            <p class="pp">
                التسجيل الالكترونى للحضور
                
            </p>
            <!-- <div>
                <h1>{{welcom}}</h1>   
            </div> -->
            <div  class="Dr-main">
        <div   class="div" style="display: flex;">
            <div class="card" data-page="Dr/Dr_lec_start.php" data-subj=10 data-level=5 name="my1card">
                <img src="../../image/55.png" alt="" width="100%" height="60%">
                <div class="container">
                    <center>
                         
                        <h3><b padding="50px" margin="25px">محاضرة جديدة</b></h4>
                    </center>
                   
                    
                </div>
            </div>
            <div class="card" data-page="Dr/Dr_month.php">
                <img src="../../image/220.png" alt="" width="100%" height="60%">
                <div class="container">
                    <center> 
                        
                        <h3><b>التقرير الشهري</b></h4>
                    </center>
                 
                        
                </div>
            </div>
            <div class="card" data-page="Dr/Dr_day.php">
                <img src="../../image/230.png" alt="reports" width="100%" height="60%">
                <div class="container">
                    <center>
                         
                        <h3><b>التقرير اليومي</b></h4>
                        
                    </center>
                   
                        
                    
                </div>
            </div>
        </div>

    </div>
    </div>
    <form action="" method="post" name="gooo">
        <input type="hidden" name="lect" value="5">
        <input type="hidden" name="subj" value="10">
        <input type="hidden" name="page" id="">
    </form>
    

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
    </div>
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
</body>
</html>
