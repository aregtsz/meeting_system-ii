<meta charset="utf-8"  />

<?php
 include "back.php";

if (@$_SESSION['user'] == null){

echo "您尚未登入!<BR><BR>";
echo "<button><a href='SESSION-2.php'>進行登入</a></button><br><br>";

}else{

echo "<h2>歡迎~".$_SESSION['user']."</h2>";
echo "如果您可以看到這個訊息，您已經登入成功！<br><br>";
echo "登入日期為:";
echo "".$_SESSION["date"]."<br><br>";
echo "登入時間為:";
echo "".$_SESSION['time']."<br><br>";

}


?>
<head><title></title>
<body bgcolor="white">
<input type="button" value="返回系統首頁" onClick="self.location.href='index2.php'">
</body>
</html>
<?php include "back-bottom.php" ?>