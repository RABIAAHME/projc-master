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

    <style>
        .card{
            display: block;
        }
    </style>
        <div class="home-desc">
        <img class="bordar" src="../../image/01.jpg" alt="">

     <div class="parent">
    <div class="card" data-page="admin/ad_add_part.php">إدخال القسم</div>
    <div class="card" data-page="admin/ad_add_level_pre.php">إدخال الفرقة</div>
    <div class="card" data-page="admin/ad_add_term_pre.php">إدخال الترم</div>
    <div class="card" data-page="admin/ad_add_subj_pre.php">إدخال المادة</div>
    <div class="card" data-page="admin/ad_add_dr.php">إدخال عضو هيئة التدريس</div>
        <div class="card" data-page="admin/ad_add_stu_pre.php">إدخال طالب</div>
        </div>
        <form action="" method="post" name="gooo">
        <input type="hidden" name="page" >
        <input type="hidden" name="collage_id" value="{{collage_id}}">
    </form>
        
    <script>
        cards= document.getElementsByClassName('card');
        
        for (const iterator of cards) {
            
            iterator.addEventListener("click", submitit);
        }
    function submitit(){
        document.forms.gooo.elements.page.value=this.dataset.page;
        document.forms.gooo.submit();
    }
    
    </script>
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" >
        <input type="hidden" name="collage_id" value="{{collage_id}}">
    
    </form>
    
    <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
      </div>
</body>
</html>