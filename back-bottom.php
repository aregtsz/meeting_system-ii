<html>
<table align="center" width="100%" height="60" border=1 bordercolor="#CCCCCC">
<tbody>
 <tr>
  <td width="100%" bgcolor="#999999" align="center"><font face="Comic Sans MS"><br>Copyright 2013  WHO<br><?php echo '<p id="nowDiv"></p>' ?><br></td>
</tbody>
</table>
</html>
<script>
function show_now(){
var date = new Date();
var now = "";
now = date.getFullYear()+"年";
now = now + (date.getMonth()+1)+"月";
now = now + date.getDate()+"日/";
now = now + date.getHours()+"時";
now = now + date.getMinutes()+"分";
now = now + date.getSeconds()+"秒";
document.getElementById("nowDiv").innerHTML = now;
setTimeout("show_now()",1000);
}
</script>
<body onload="show_now()">