<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body >
    صفحة تسجيل الحضور بالباركود
    <script src="./pages/stu/stu_scan/html5-qrcode.js"></script>
<div  id="qr-reader" style="width:1500px"  ></div>
<div id="qr-reader-results"></div>
<script>
    var resultContainer = document.getElementById('qr-reader-results');
var lastResult, countResults = 0;
function onScanSuccess(decodedText, decodedResult) {
    if (decodedText !== lastResult) {
        ++countResults;
        lastResult = decodedText;
        // Handle on success condition with the decoded message.
        console.log(`Scan result ${decodedText}`, decodedResult);
       
        //alert(`Scan result ${decodedText}`,'***************************', decodedResult);
    }
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
</script>
</body>
</html>