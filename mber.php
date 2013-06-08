<html>
<head>
<title> 會員登入 </title>
</head>
<body >

<?php 
// 連結資料庫
  include "config.php";

@$err_message = $_GET['err_message'];

if ($err_message <> '')
{
	echo "<FONT SIZE='5' COLOR='#FF0000'>".$err_message."</FONT>";
}

echo "<center>";
echo "會員進入畫面<BR>";
echo "<FORM METHOD='post' ACTION='mber_check.php'>";
echo "<INPUT TYPE='text' NAME='Id' size='10'>使用者帳號<BR>";
echo "<INPUT TYPE='password' NAME='Password' size='10'>使用者密碼<BR>";
echo "<INPUT TYPE='submit' value='確定送出'>";
echo "</form>";

?>
<a href ="../meeting_system/index.php">
<BR>回首頁
</body>
</html>
