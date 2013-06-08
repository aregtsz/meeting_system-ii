<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="css/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/prettify.css" />
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.multiselect.js"></script>
<script type="text/javascript" src="css/prettify.js"></script>
<script type="text/javascript">
$(function(){

	$("select").multiselect({
		selectedList: 6
	});
	
});
</script>

</head>
<body onload="prettyPrint();">

<title>新增會議、人員</title>
<body>

<?php
include "config.php";
include "back.php";
$Room = $_POST['Room'];
$Date=$_POST['Date'];
$start=$_POST['startTime'];
$end=$_POST['endTime'];
$date  = date("Y-m-d",strtotime($Date));
//echo $date."<BR>"."Rid=".$Room."<BR>";
//echo "start=".$start."<BR>";
//echo "end=".$end;

?>
<form name="form5" method="post" action="mt_check.php">
會議名稱:<input type="text" name="Name" value=''><br>
	
<?php
@session_start();
if (@$_SESSION['user'] == null){
echo "您尚未登入!<BR><BR>";
echo "<button><a href='index.php'>進行登入</a></button><br><br>";
}else{
echo "<h2>歡迎~".$_SESSION['user']."</h2>";
		$br=$_SESSION['user'];
		echo '參與人員 :<br>';
		 $sql="SELECT * FROM user where Category LIKE  '%老師%'";
		 $result = mysql_query($sql) or die(mysql_error());
		?>	 
        <select size=5 name="Uid[]" id="Uid" multiple style="width:400px"> <!-- Select多選 參與人員 -->
		<optgroup label="老師">
        <?php while ($row = mysql_fetch_array($result)){ ?>
<option value="<?php echo $row['Uid'];?>"> <?php echo $row['Name'];?></option> <?php       
	    }?>
        </optgroup>
        <optgroup label="學生">
        <?php
		$sql1="SELECT * FROM user WHERE  Category LIKE  '%學生%'";
	    $result1 = mysql_query($sql1) or die(mysql_error());   
	    while ($row1 = mysql_fetch_array($result1)){ ?>
		<option value="<?php echo $row1['Uid'];?>"><?php echo $row1['Name'];?></option> <?php } ?>
	    </optgroup>
        
         </select>  <?php 
           echo "<BR>";
		   
}     	
?>		
<input name="Room" type="hidden" id="Room" value="<?php echo $Room;?>">		
<input name="date" type="hidden" id="date" value="<?php echo $date;?>">
<input name="start" type="hidden" id="start" value="<?php echo $start;?>">
<input name="end" type="hidden" id="end" value="<?php echo $end;?>">
<input name="used" type="hidden" id="used" value="<?php echo $_SESSION['user'];?>">
<input type="button" value="上一步" onClick="history.back()">
<input type="submit" id="submit" value="下一步">
 </form>
 </body>
 </html>
<?php include "back-bottom.php" ?>