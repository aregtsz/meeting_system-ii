<html>
<head>
<title>  </title>
</head>
<body >
<?php
// 連結資料庫
  include "config.php";
// 使用者輸入變數
$Id       = $_POST['Id'];
$Password = $_POST['Password'];
$Name     = $_POST['Name'];
$Category = $_POST['Category'];
$Email    = $_POST['Email'];
$Phone    = $_POST['Phone'];
$Address  = $_POST['Address'];

// 確認資料是否輸入正確
if ($Id == ''){

$err_message = "使用者帳號未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}else if(strlen($Id)<4 or strlen($Id)>10){

$err_message = "帳號長度未大於4或超過10!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Password == ''){

$err_message = "使用者密碼未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}else if(strlen($Password)<4 or strlen($Password)>10){

$err_message = "密碼長度未大於4或超過10!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Name == ''){
$err_message = "使用者姓名未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Category == ''){
$err_message = "使用者類別未輸入!!";
header("location: ./register.php?err_message=".$err_message);
exit;
}

if ($Email == ''){
$err_message = "使用者Email未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Phone == ''){
$err_message = "使用者地址未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Address == ''){
$err_message = "使用者地址未輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

// 確認此帳號是否有人用過
$sql = "select count(*) from user";
$sql .= " where `Id` = '".$Id."'";
$sql_result = mysql_query($sql) or die("無相關公告內容!!");
$row = mysql_fetch_array($sql_result);
if ($row[0]>0){

$err_message = "很抱歉，此帳號已經有人申請過了，請重新輸入!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

// 新增一個使用者
$sql = "insert into user";
$sql .= " set `Id`='".$Id."'";
$sql .= ", `Password`='".$Password."'";
$sql .= ", `Name`='".$Name."'";
$sql .= ", `Category`='".$Category."'";
$sql .= ", `Email`='".$Email."'";
$sql .= ", `Phone`='".$Phone."'";
$sql .= ", `Address`='".$Address."'";
$sql_result = mysql_query($sql);
echo "新增".$Id." 帳號完成!!<BR>";
;
?>
<input type="button" value="回首頁" onclick="self.location.href='index.php'"><br><br>
</body>
</html>