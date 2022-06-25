<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>term_prep</title>  
      <link rel="stylesheet" href="../../p/p.css" />
</head>
<body dir="rtl">
    <div class="home-desc">
    <img class="bordar" src="../../image/01.jpg" alt="">

        <div class="ad_term_pre">
 <!-- <form action="term.html" method="post">
     <label for="الكلية">الكلية:</label>
     <input type="text" name="coll" value=""> <br/> 
     <label for="القسم">القسم:</label>
     <input type="text" name="part" value=""><br/> 
     <label for="الفرقة">الفرقة:</label>
     <input type="text" name="level" value="">
  <input type="submit" name="send" value="إرسال" id="">
 </form> 
</body> -->
<!-- <div class="home-section">
        <img class="mt" src="../../image/5.jpg" alt="pang">
        <img class="gt" src="../../image/4.jpg" alt="pang"> 
        </div> -->
    
       
    
    <div>
         لاضافة ترم يرجي إختيار القسم ثم الفرقة
        <select class="selact" name="parts" id="parts" onchange="fill_level()">
            {{colege_parts}}
        </select>
        <select class="selact" name="level" id="level" onchange="fill_term()">

        </select>
        <select class="selact" name="term" id="term" onchange="select_term()">

        </select>
    </div>
    <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="admin/ad_main.php">
    </form>  
 <form action="" method="post" name="gopart"></form>
    <div id="noparts" style="visibility:hidden">
        <p>
            يبدو أنك لم تقم بإدخال اقسام لهذه الكلية
            <br>
            يرجي إدخال الاقسام أولاً

        </p>
     
            <input type="hidden" name="page" value="admin/ad_add_part.php">
            <input class="inypt" type="submit" value="أضف قسم">
        
    </div>
</form>
    <div id="nolevels" style="visibility:hidden">
        <p>
            يبدو أنك لم تقم بإدخال فرق لهذا القسم
            <br>
            يرجي إدخال الفرق أولاً

        </p>
        <form action="" method="post" name="golevel">
            <input type="hidden" name="part_id" >
            <input type="hidden" name="page" value="admin/ad_add_level.php">
            <input type="submit" value="أضف فرقة" id="ad_add_level.php">
        </form>
    </div>
    <form action="" method="post" name="gostu">
    <input type="hidden" name="part_id" >

            <input type="hidden" name="level_id" >
            <input type="hidden" name="term_id" >
              <input type="hidden" name="page" value="admin/ad_add_subj.php"> 
     <input class="inypt" type="submit" value="اضافة مادة "  id="add_subj">
        </form>
        <img src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()" > 
    <form action="" method="post" name="gooo">
    <input type="hidden" name="page" value="admin/ad_main.php">
     
   
    <!-- <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div> -->
    
    <script src="./js/jquery.js"></script>
   <!-- ----------------------------------- -->
    <script>
        window.onload = checkparts;

        function fill_level() {
            x = document.getElementById('parts')
            //alert(x.value);
            //this.options[this.selectedIndex].value
            var levels = document.getElementById('level').options;
            var indexs = levels.length;
            while (indexs--) {
                document.getElementById('level').remove(indexs);
            }

            p = {};
            p['part_id'] = x.value;
            p['form_name'] = 'get_levels';
            $.post("./index.php", p, function(datatext) {
                ops = JSON.parse(datatext);
                if (ops.length > 0) {
                    for (let index = 0; index < ops.length; index++) {
                        //const element = array[index];
                        //alert(ops[index]['name']) ;
                        opt = document.createElement("option");
                        opt.value = ops[index]['id'];
                        opt.innerHTML = ops[index]['name'];
                        document.getElementById('level').appendChild(opt);
                    }
                    document.getElementById('level').disabled = false;
                    document.getElementById('level').style.visibility = "visible";
                    document.forms.gostu.part_id.value=document.getElementById('parts').value
                    document.getElementById('nolevels').style.visibility = "hidden";
                }else{
                    document.getElementById('level').disabled = true;
                    document.forms.golevel.part_id.value=document.getElementById('parts').value
                    document.getElementById('nolevels').style.visibility = "visible";
                }
                

            });

        }

        function checkparts() {
            if (document.getElementById('parts').options.length < 1) {
                document.getElementById('parts').disabled = true;
                document.getElementById('level').disabled = true;
                document.getElementById('noparts').style.visibility = "visible";
            }else{
                fill_level();
                //document.getElementById('level').disabled = false;
            }
        }

        function fill_term(){
            x = document.getElementById('level')
            //alert(x.value);
            //this.options[this.selectedIndex].value
            var levels = document.getElementById('term').options;
            var indexs = levels.length;
            while (indexs--) {
                document.getElementById('term').remove(indexs);
            }

            p = {};
            p['level_id'] = x.value;
            p['form_name'] = 'get_terms';
            $.post("./index.php", p, function(datatext) {
                alert(datatext);
                ops = JSON.parse(datatext);
                if (ops.length > 0) {
                    for (let index = 0; index < ops.length; index++) {
                        //const element = array[index];
                        //alert(ops[index]['name']) ;
                        opt = document.createElement("option");
                        opt.value = ops[index]['id'];
                        opt.innerHTML = ops[index]['name'];
                        document.getElementById('term').appendChild(opt);
                    }
                    document.getElementById('term').disabled = false;
                    document.getElementById('term').style.visibility = "visible";
                    document.forms.gostu.part_id.value=document.getElementById('parts').value
                    document.forms.gostu.level_id.value=document.getElementById('level').value
                    document.forms.gostu.term_id.value=document.getElementById('term').value
                    document.getElementById('nolevels').style.visibility = "hidden";
                }else{
                    document.getElementById('term').disabled = true;
                    document.forms.golevel.part_id.value=document.getElementById('level').value
                    document.getElementById('nolevels').style.visibility = "visible";
                }
                

            });

        }

        function checkparts() {
            if (document.getElementById('parts').options.length < 1) {
                document.getElementById('parts').disabled = true;
                document.getElementById('level').disabled = true;
                document.getElementById('noparts').style.visibility = "visible";
            }else{
                fill_level();
                //document.getElementById('level').disabled = false;
            }
        }

        function select_term(){
            document.forms.gostu.term_id.value=document.getElementById('term').value
            
        }
    </script>
     <div class="home-title">
        <img  src="../../image/3.jpg" alt="pang" >
      </div>
    </div>
</body>
</html>