<html>
<title></title>
<body>






         <form name="form1" method="get" action="new.php">
           <?php
	          session_start();

if (@$_SESSION['user'] == null)
{
echo "您尚未登入!<BR><BR>";
echo "<button><a href='SESSION-2.php'>進行登入</a></button><br><br>";
}
else
{
echo "個人會議行程<h2>".$_SESSION['user']."</h2>";
$thelist= $_SESSION['user'];
$ac=$_SESSION['user'];
echo $ac;
 include "config.php";
$sql = "SELECT Uid FROM User WHERE ID  like '%$ac%'  ";
 $result = mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_array($result);
 echo "    Uid： ".$row['Uid']."<br>";
 $Uid=$row['Uid'];
}

	          include "config.php";
			  echo "即將開得會議 :<BR>";
        $sql2 = "SELECT Mid FROM Meeting_user WHERE Uid  like '%$Uid%' ";
         $result2 = mysql_query($sql2) or die(mysql_error());
         
        if (mysql_num_rows($result2)==0){
        echo "目前沒有符合的資料存在!!<br>\n";
             exit;
           }
        while($row2 = mysql_fetch_array($result2)  )
		{
			$Mid= $row2['Mid'];
			
			//會議名稱SQL
		$sql3 = "SELECT Name FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result3 = mysql_query($sql3) or die(mysql_error());
		$row3 = mysql_fetch_array($result3); //會議名稱SQL
		
		//會議地點Rid
		$sql4 = "SELECT Rid FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result4 = mysql_query($sql4) or die(mysql_error());
		$row4 = mysql_fetch_array($result4); //會議地點Rid
		$Rid=$row4 ['Rid'];
		
		//會議地點
		$sql5 = "SELECT Name FROM Room WHERE Rid  like '%$Rid%' ";	
		$result5 = mysql_query($sql5) or die(mysql_error());
		$row5 = mysql_fetch_array($result5); //會議地點Rid
		
		
		
		//會議日期
		$sql6 = "SELECT Date FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result6 = mysql_query($sql6) or die(mysql_error());
		$row6 = mysql_fetch_array($result6); //會議日期
	   
?>
           <input type="submit" name="mid" value="<?php echo $row2['Mid'];?>">
           <?php 
          
	 echo "日期： ".$row6['Date']."";
     echo "   會議名稱： ".$row3['Name']."";
	 echo "    地點： ".$row5['Name']."<br>";
	
	 
            }
			
			
?>
           
           <br>
         </form>
</body>
 </html>