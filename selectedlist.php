<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery MultiSelect Widget Demo</title>
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

<h2>Displaying options in a list</h2>

<form>
	<p>
    <?php 
	include "config.php";
	$sql="SELECT * FROM user WHERE  Category LIKE  '%老師%'";
	$result = mysql_query($sql) or die(mysql_error());

	 ?>
		<select name="Uid[]" multiple="multiple" style="width:400px">
		<optgroup label="Group One">
    <?php   while ($row = mysql_fetch_array($result)){ ?>
		<option value="<?php echo $row['Uid']; ?>"><?php echo $row['Name'];?></option> <?php } ?>
	    </optgroup>
	<optgroup label="Group Two">

    <?php
		$sql1="SELECT * FROM user WHERE  Category LIKE  '%學生%'";
	$result1 = mysql_query($sql1) or die(mysql_error());   
	while ($row1 = mysql_fetch_array($result1)){ ?>
		<option value="<?php echo $row1['Uid'];?>"><?php echo $row1['Name'];?></option> <?php } ?>
	</optgroup>
		</select>
	</p>
</form>

</body>
</html>