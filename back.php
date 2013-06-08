<html>
<meta charset="utf-8">
	<script type="text/javascript" >
		function test(){
			var css=$("ul").css("display");
			if(css=="block"){
				$("ul").hide();
			}else if(css=="none"){
				$("ul").show();
			}
		}
	</script>
    <style type="text/css"> //CSS3 Opacity
	p img {
		opacity: 0.4;
	}
    </style>
    <script type="text/javascript">
	$(function(){
		$('img').hover(function(){
			$(this).stop().animate({
				opacity: 6
			});
		}, function(){
			$(this).stop().animate({
				opacity: .2
			});
		});
	});
     </script>
<?php session_start(); ?>
<table borderColor=#ffffff height=60 width="100%" align=center border=1>
  <tbody>
  <tr>
   <td width="100%" colspan="6" bgcolor=#0099ff height="40" ><font face ="Comic Sans MS"> <?php if(@$_SESSION['user'] == null){echo '<p><a href="index.php"><img align="left"  src="home.jpg"></a></p>';} else{ echo '<p><a href="index2.php"><img align="left" src="home.jpg"></a></p><p align="right"><a href="SESSION-5.php">Logout</a></p>';}?></font></td>
  </tr>
  <tr>
   <td width="100" bgcolor="#33CCFF" height="20">
<?php
if (@$_SESSION['user'] == null){
echo '<font face="Comic Sans MS">&nbsp Hello Guest!</font>'; 
}else{
echo '<font face="Comic Sans MS">&nbsp Welcome ~ '.$_SESSION['user'].'</font>';
echo'<td width="30" bgcolor=#0099ff height="40" ><font face ="Comic Sans MS" onClick="test()"><img  src="select.jpg">
<ul style=display:none>
 <li><a href="date_time.php">新增會議</a></li>
 <li>教室介紹</li>
 <li>節次時間</li>
</ul>
</font></td>';
}
?></td>

   </tr>
  </tbody>
</table>
</html>