<html>
<title></title>
<body>






         <form name="form1" method="get" action="new.php">
           <?php
	          session_start();

if (@$_SESSION['user'] == null)
{
echo "�z�|���n�J!<BR><BR>";
echo "<button><a href='SESSION-2.php'>�i��n�J</a></button><br><br>";
}
else
{
echo "�ӤH�|ĳ��{<h2>".$_SESSION['user']."</h2>";
$thelist= $_SESSION['user'];
$ac=$_SESSION['user'];
echo $ac;
 include "config.php";
$sql = "SELECT Uid FROM User WHERE ID  like '%$ac%'  ";
 $result = mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_array($result);
 echo "    Uid�G ".$row['Uid']."<br>";
 $Uid=$row['Uid'];
}

	          include "config.php";
			  echo "�Y�N�}�o�|ĳ :<BR>";
        $sql2 = "SELECT Mid FROM Meeting_user WHERE Uid  like '%$Uid%' ";
         $result2 = mysql_query($sql2) or die(mysql_error());
         
        if (mysql_num_rows($result2)==0){
        echo "�ثe�S���ŦX����Ʀs�b!!<br>\n";
             exit;
           }
        while($row2 = mysql_fetch_array($result2)  )
		{
			$Mid= $row2['Mid'];
			
			//�|ĳ�W��SQL
		$sql3 = "SELECT Name FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result3 = mysql_query($sql3) or die(mysql_error());
		$row3 = mysql_fetch_array($result3); //�|ĳ�W��SQL
		
		//�|ĳ�a�IRid
		$sql4 = "SELECT Rid FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result4 = mysql_query($sql4) or die(mysql_error());
		$row4 = mysql_fetch_array($result4); //�|ĳ�a�IRid
		$Rid=$row4 ['Rid'];
		
		//�|ĳ�a�I
		$sql5 = "SELECT Name FROM Room WHERE Rid  like '%$Rid%' ";	
		$result5 = mysql_query($sql5) or die(mysql_error());
		$row5 = mysql_fetch_array($result5); //�|ĳ�a�IRid
		
		
		
		//�|ĳ���
		$sql6 = "SELECT Date FROM Meetings WHERE Mid  like '%$Mid%' ";	
		$result6 = mysql_query($sql6) or die(mysql_error());
		$row6 = mysql_fetch_array($result6); //�|ĳ���
	   
?>
           <input type="submit" name="mid" value="<?php echo $row2['Mid'];?>">
           <?php 
          
	 echo "����G ".$row6['Date']."";
     echo "   �|ĳ�W�١G ".$row3['Name']."";
	 echo "    �a�I�G ".$row5['Name']."<br>";
	
	 
            }
			
			
?>
           
           <br>
         </form>
</body>
 </html>