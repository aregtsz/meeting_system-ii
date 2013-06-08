<meta charset="utf-8" />
<?php 
include "back.php";
echo "您已經是登入狀態<br><br>";


?>

<html>
<head><title></title>
<body bgcolor="white">
<input type="button" value="回首頁" onclick="self.location.href='index2.php'"><br><br>
<input type="button" value="登出" onclick="self.location.href='SESSION-5.php'"><br><br>
<input type="button" value="觀看登入頁資訊" onclick="self.location.href='SESSION-3.php'">
</body>
</html>
<?php include "back-bottom.php" ?>