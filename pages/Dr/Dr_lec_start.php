<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../footer/footer.css">
    <link rel="stylesheet" href="../../p/p.css" />
</head>

<body align='center'>
    
<img class="bordar" src="../../image/01.jpg" alt="">

    <!-- <div class="le">
        <p class="pe">القسم</p>
        <input class="inpat" type="text" name=" " id="" value="">
        <p class="pe"> الفرقة </p> <input class="inpat" type="email" name="" id="">
        <p class="pe"> المقرر</p> <input class="inpat" type="email" name="" id="">

        <p class="pe">الترم
            <select>

                <option>

                </option>
            </select>
        </p>
        <form action="" method="post" name="golec">
            <input class="inipt" type="submit" name="sub" value="ارسال" id="">
            <input type="hidden" name="level_id">
            <input type="hidden" name="page" value="Dr/Dr_lec.php">
        </form>
    </div> -->
   

        <div class="home-title">
            <img src="../../image/3.jpg" alt="pang">
        </div>
        
        <div class="abott" >
    
        <form action="" method="post" name="got">
        <input type="hidden" name="level_id">
        <input type="hidden" name="part_id">
        <input type="hidden" name="subj_id">
        <input type="hidden" name="form_name" value="create_lec">
        <input type="hidden" name="page" value="Dr/Dr_lec.php">
<table>
    <tr>
        <td>part</td>
        <td>level</td>
        <td>subj</td>
        <td>go</td>
        
    </tr>
    {{subj_rows}}
</table>
</form>
        </div>

 <img  src="./image/home.png" alt="" width="50" hight="50" onclick="document.forms.gooo.submit()">
    <form action="" method="post" name="gooo">
        <input type="hidden" name="page" value="Dr/Dr_main.php">
    </form>
    <script>
        cards= document.getElementsByClassName('bty');
        
        for (const iterator of cards) {
            iterator.addEventListener("click", submitit);
        }
        function submitit(){
        //alert(this.dataset.page);

        document.forms.got.elements.part_id.value=this.dataset.part;
        document.forms.got.elements.level_id.value=this.dataset.level;
        document.forms.got.elements.subj_id.value=this.dataset.subj;

        document.forms.got.submit();
    }
  /*  function submitit(){
        //alert(this.dataset.page);

        document.forms.gooo.elements.level.value=this.dataset.level;
        document.forms.got.submit();
    }
    function submitit(){
        //alert(this.dataset.page);

        document.forms.gooo.elements.subj.value=this.dataset.subj;
        document.forms.got.submit();
    }*/
    </script>
</body>
</html>