<html lang="en"><head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<title>date_time</title>  

<link rel="stylesheet" href="./room/jquery-ui.css" />  
<script src="./room/jquery-1.9.1.js"></script>  <script src="./room/jquery-ui.js"></script>  
<link rel="stylesheet" href="/resources/demos/style.css" />  
<script>  
$(function() {

    $("#datepicker").datepicker({
	dateFormat: "yy-mm-dd",
	minDate:"+0d"
    });
	
});
function showChang(x){
 location='room.php?startTime=".$x."'
}
function showChang(y){
 location='room.php?endTime=".$y."'
}
</script>
</head>
<body>

<?php
	include "config.php";
include "back.php";
  $Time[1]="08:30~09:20";
  $Time[2]="09:25~10:15";
  $Time[3]="10:25~11:15";
  $Time[4]="11:20~12:10";
  $Time[5]="12:30~13:20";
  $Time[6]="13:30~14:20";
  $Time[7]="14:30~15:20";
  $Time[8]="15:30~16:20";
  $Time[9]="16:30~17:20";
  $Time[10]="17:30~18:20";
  $Time[11]="18:25~19:10";
  $Time[12]="19:10~19:55";
  $Time[13]="20:00~20:45";
  $Time[14]="20:50~21:35";
  $Time[15]="21:35~22:20";

  $nt[1]="1";
  $nt[2]="2";
  $nt[3]="3";
  $nt[4]="4";
  $nt[5]="中午";
  $nt[6]="5";
  $nt[7]="6";
  $nt[8]="7";
  $nt[9]="8";
  $nt[10]="9";
  $nt[11]="A";
  $nt[12]="B";
  $nt[13]="C";
  $nt[14]="D";
  $nt[15]="E";
?>

<form name="form1" method="post" action="room.php">
<p>請選擇預約日期、時間</p>
Date:<input type="text" id="datepicker" name="datepicker" value="請選擇日期" />
<br>
    
	第<select name="startTime"  onchange="showChang(this) size='1'"><option selected>請選擇</option>";        
	 <?php
        for($x=1;$x<16;$x++){	
	         ?><option value="<?php echo $x;?>"><?php echo $x;?></option><?php  
	
	  }?>
     </select> 節 ~ 第
	 <select name="endTime"  onchange="showChang(this) size='1'"><option selected>請選擇</option>";        
	 <?php
        for($y=1;$y<16;$y++){	
	         ?><option value="<?php echo $y;?>"><?php echo $y;?></option><?php  
	
	  }?>
     </select>節
	 <BR>
<input type="button" value="回首頁" onClick="self.location.href='index2.php'" target="right">
<input type="submit" id="submit" value="下一步" target="left">

</form>

</body>
</html>
 <?php include "back-bottom.php" ?>