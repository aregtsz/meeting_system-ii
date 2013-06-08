<html>

<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>教室選擇(room)</title>
<body>

<?php
	include "config.php";
	include "back.php";
	$startTime=$_POST['startTime'];
	$endTime=$_POST['endTime'];
	$receivedate = $_POST['datepicker'];
	$Date  = date("Ymd",strtotime($receivedate));
	$date =date("Y-m-d",strtotime($receivedate));
	echo $date."<br>";
	if($endTime>$startTime )
{
?><form name="form2" method="Post" action="mt.php"><?php
   echo "可以選擇的教室"."<BR>";
	$sql="select * from meetings where date=".$Date." and not ((".$startTime."<startTime and ".$endTime."<startTime) or (".$startTime.">endTime and ".$endTime.">endTime))";
	$sql_result = mysql_query($sql) or die("無相關公告內容!!");
	$row = mysql_fetch_array($sql_result);
				$sql1 = "select * from  room ";  
				$result1 = mysql_query($sql1) or die(mysql_error());
				if (mysql_num_rows($result1)==0){
				echo "目前沒有符合的資料存在!!<br>\n";
				exit;
					}
				while ($row1 = mysql_fetch_array($result1)){
				if($row1['Rid']!=$row['Rid']){
			?>
        		<input type="radio" name="Room" value="<?php echo $row1['Rid'];?>">
				<?php 
				echo $row1['Name']."<BR>";
				}
				} 
				
?><input type="button" value="上一步" onClick="history.back()">
<input type="submit" id="submit" value="下一步">
<?php
}
else
{
?><form name="form3" method="POST"  action="date_time.php"><?
	echo"時段或日期倒流，請再次選擇";
	?><BR><input type="submit" id="submit" value="上一步"><?php
}
	
 

?>
		<input name="Date" type="hidden" id="Date" value="<?php echo $Date;?>">
		<input name="startTime" type="hidden" id="startTime" value="<?php echo $startTime;?>">
		<input name="endTime" type="hidden" id="endTime" value="<?php echo $endTime;?>">
		</form>
 </body>
 </html>
  <?php include "back-bottom.php" ?>