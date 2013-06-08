<html>
<head>
<title> 新增會員 </title>
</head>
<body >
<?php
// 連結資料庫
  include "config.php";
 

@$err_message = $_GET['err_message'];
if ($err_message <> ''){

echo "<FONT SIZE='7' COLOR='#FF0000'>".$err_message."</FONT>";
}

echo "<center>";
echo "加入會員<BR>";
echo "<FORM METHOD='post' ACTION='nmber_check.php'>";
echo "帳號<INPUT TYPE='text' NAME='Id' size='13'>{長度4~10}<BR>";
echo "密碼<INPUT TYPE='password' NAME='Password' size='13'>{長度4~10,必包含英文}<BR>";
echo "姓名<INPUT TYPE='text' NAME='Name' size='10'><BR>";
echo "類別<SELECT NAME='Category'><option >請選擇</option><option >老師</option><option >學生</option></SELECT><BR>";
echo "Email<INPUT TYPE='text' NAME='Email' size='20'><BR>";
echo "電話<INPUT TYPE='text' NAME='Phone' size='30'>{格式:0911111111}<BR>";
echo "地址<INPUT TYPE='text' NAME='Address' size='30'><BR>";
echo "<INPUT TYPE='submit' value='確定送出'>";
echo "</form>";
?>
<input type="button" value="回首頁" onclick="self.location.href='index.php'"><br><br>

</body>
</html>
