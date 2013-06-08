
<?php 
include "back.php";
if (isset($_SESSION['user']) != null){

header("Refresh:0.5;URL=SESSION-4.php");

}
?>
<meta charset="utf-8" />
<html>
<head><title>SESSION登入頁</title>
<body bgcolor="white">

<h2>請先登入</h2>
<form action="SESSION-1.php" method="POST">
使用者名稱： <input type="TEXT" name="user"/><br>
密碼： <input type="password" name="pass"/><br>
<input type="submit" value="登入"/>
</form>
<input type="button" value="返回系統首頁" onclick="self.location.href='index.php'"><br><br>


</body>
</html>
<?php include "back-bottom.php" ?>