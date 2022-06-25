<?php

include "./phpqrcode/qrlib.php";
//$x=json_encode($_POST);
//QRcode::png("https://www.facebook.com/search/top?q=%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9%20%D8%A7%D9%84%D8%B1%D8%B3%D9%85%D9%8A%D8%A9%20%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%20%D8%AC%D8%A7%D9%85%D8%B9%D8%A9%20%D8%A7%D9%84%D9%81%D9%8A%D9%88%D9%85",false,QR_ECLEVEL_Q,6,10);
ob_start();
QRcode::png("lect_id=".$_POST['lec_id'].'-subj='.$_POST['subj'].'-level='.$_POST['level'],null);
$z= base64_encode(ob_get_contents());
ob_end_clean();
echo $z;


?>