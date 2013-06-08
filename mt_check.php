<html>
<title>確認</title>
<head>
 <meta charset="utf-8" />
 </head>
<body>
<form name="form5" method="post" action="insert.php">
<?php
include "config.php";
include "back.php";
//-----------------------------
$sql="select Mid from meetings";
$sql_result =mysql_query($sql)or die("無相關公告內容!!");
$num=mysql_num_rows($sql_result); //獲得紀錄數
mysql_data_seek($sql_result, $num-1); //移到最後一筆紀錄 (從0開始算起 因此要-1)
list($Mid) = mysql_fetch_row($sql_result); //取得資料
//echo "會議id: ".$Mid."<Br>";
//-----------------------------
$Mid2=$Mid+1;
$Name = $_POST['Name'];
$Room = $_POST['Room'];
$Date=$_POST['date'];
$start=$_POST['start'];
$end=$_POST['end'];
$Borrower = $_POST['used'];
$Uid_array=$_POST['Uid'];
//--------------------------------------
//echo "會議名稱:".$Name."<BR>";
//--------------------------------------
//echo "借用人:".$Borrower."<BR>";
$sql1="select * from user where Id='$Borrower'";
	$sql_result1 =mysql_query($sql1)or die("無相關公告內容!!");
	while ($row1 = mysql_fetch_array($sql_result1)){
 //echo "使用者id：".$row1['Uid'];
	?><input name="Borrowerid" type="hidden" id="Borrowerid" value="<?php echo $row1['Uid'];?>"><?php
echo "<BR>\n"; }
//----------------------------------------
//echo $Date."<BR>"."Rid=".$Room."<BR>";
//echo "startTime=".$start."<BR>";
//echo "endTime=".$end."<BR>";
$count=count($Uid_array);
//echo "參與人員:";
for($i=0;$i<$count;$i++)
{
$Uid=$Uid_array[$i];
for($j=$i;$j<=$i;$j++)
{
?><input name="Uid[]" type="hidden" id="Uid" value="<?php echo $Uid;?>"><?php
//echo $Uid."<BR>";
}
}

echo '<table style="border: 5px ridge rgb(109, 2, 107); height: 100px; width: 400px;" align="left" frame="border" rules="all">
   <tbody>
     <tr><td>會議名稱:&nbsp'.$Name.'</td></tr>
     <tr><td>教室:&nbsp'.$Room.'</td></tr>
     <tr><td>日期:&nbsp'.$Date.'</td></tr>
     <tr><td>開始節次:&nbsp'.$start.'</td></tr>
     <tr><td>結束節次:&nbsp'.$end.'</td></tr>
     <tr><td>借用人:&nbsp'.$Borrower.'</td></tr>
	 <tr><td>參與人員:&nbsp';
	 $count=count($Uid_array);
	//echo "參與人員:";
	for($i=0;$i<$count;$i++)
	{
	$Uid=$Uid_array[$i];
	for($j=$i;$j<=$i;$j++)
	{
	 $sql2="select * from user where Uid='$Uid'";
	 $sql_result2 =mysql_query($sql2)or die("無相關公告內容!!");
	 while ($row2 = mysql_fetch_array($sql_result2)){
 
	echo $row2['Name'];

	echo "<BR>\n"; }
	//echo $Uid."<BR>";
	}
	}
	 
		 echo "<BR>";
   echo '</td></tr>
   </tbody>
   </table>';
//echo "參與人員 :<BR>";
echo '<br><br><br><br><br><br><br><br><br><hr align="left" width="400px"></hr>';
?>
<input type="button" value="上一步" onClick="history.back()">
<input type="submit" id="submit" value="確定送出">
<input name="Name" type="hidden" id="Name" value="<?php echo $Name;?>">
<input name="Mid" type="hidden" id="Mid" value="<?php echo $Mid2;?>">	
<input name="Room" type="hidden" id="Room" value="<?php echo $Room;?>">		
<input name="Date" type="hidden" id="Date" value="<?php echo $Date;?>">
<input name="start" type="hidden" id="start" value="<?php echo $start;?>">
<input name="end" type="hidden" id="end" value="<?php echo $end;?>">
<input name="Borrower" type="hidden" id="Borrower" value="<?php echo $Borrower;?>">
 </form>
 </body>
 </html>
<?php include "back-bottom.php" ?>

