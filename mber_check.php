<html>
<head>
<title> 會員 </title>
</head>
<body >

<?php
// 連結資料庫
  include "config.php";

// 使用者輸入變數
$Id = $_POST['Id'];
$Password = $_POST['Password'];

// 確認資料是否輸入正確
if ($Id == ''){
$err_message = "使用者帳號未輸入!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}

if ($Password == ''){
$err_message = "使用者密碼未輸入!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}

// 確認此帳號的身份
$sql = "select count(*) from user";
$sql .= " where `Id` = '".$Id."' and `Password` = '".$Password."' ";
$sql_result = mysql_query($sql) or die("無相關公告內容!!");
$row = mysql_fetch_array($sql_result);
if ($row[0]==0){
$err_message = "很抱歉，您並非會員，請重新輸入!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}
echo "<center>會員您好!!<BR>\n";
echo "<BR>\n";
?>
<input type="button" value="回首頁" onclick="self.location.href='index.php'"><br><br>

</body>
</html>
