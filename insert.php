<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title> 新增完成 </title>

<body>
<p>
  <?php
include "config.php";
include "back.php";
$Mid=$_POST['Mid'];
echo $Mid."<BR>";
$dn = sprintf("upload/mid/%s/",$Mid);
$m=sprintf("upload/mid/%s/m/",$Mid);
$Name = $_POST['Name'];
$Room = $_POST['Room'];
$Date=$_POST['Date'];
$start=$_POST['start'];
$end=$_POST['end'];
//$Borrower = $_POST['Borrower'];
$Borrowerid=$_POST['Borrowerid'];
$Uid_array=$_POST['Uid'];


echo "會議名稱:".$Name."<BR>";
echo $Date."<BR>"."Rid=".$Room."<BR>";
echo "startTime=".$start."<BR>";
echo "endTime=".$end."<BR>";
$count=count($Uid_array);
echo "參與人員:";


$sql1="insert meeting_user(Mid,Uid) values('$Mid','$Borrowerid')";
$result=mysql_query($sql1) or die(mysql_error()); 
$count=count($Uid_array);
for($i=0;$i<$count;$i++)
{
$Uid=$Uid_array[$i];
for($j=$i;$j<=$i;$j++)
{
  echo "Uid: ".$Uid."<BR>";
$sql2="insert meeting_user(Mid,Uid) values('$Mid','$Uid')";
$result=mysql_query($sql2) or die(mysql_error()); 
}
}
$sql = "insert into meetings";
$sql .= " set `Name`='".$Name."'";
$sql .= ", `Rid`='".$Room."'";
$sql .= ", `Date`='".$Date."'";
$sql .= ", `startTime`='".$start."'";
$sql .= ", `endTime`='".$end."'";
$sql .= ", `Borrower`='".$Borrowerid."'";
$sql_result = mysql_query($sql);
echo "新增完成"."<BR>";



?>
</p>
<form action="upload.php" method="get" name="form1" target="_parent" id="form1" ">
  <input name="mname" type="hidden" id="mname" value="<?php echo $Name;?>">
  <input name="used" type="hidden" id="used" value="<?php echo $Uid;?>">
  <input name="mid" type="hidden" id="mid" value="<?php echo $Mid;?>">
  <input type="submit" value="檔案上傳" />
</form>
<?php
if (!mkdir($m, 0, true)) {
    die('會本文議存放資料夾已有重複建立');
}
?>
<p>
  <input type="button" value="回首頁" onClick="self.location.href='index2.php'">
  <br><br>
</p>
</form>
</body>
</html>
 <?php include "back-bottom.php" ?>