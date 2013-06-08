<?php
// 連結資料庫
$dbhost = "localhost"; //資料庫網址或IP
$dbusername = "root"; //資料庫帳號
$dbuserpassword = ""; //資料庫密碼
$default_dbname = "meeting_system-1";//資料庫名稱
@$connection = mysql_pconnect($dbhost, $dbusername, $dbuserpassword) or die("無法連結資料庫!!<BR>");
$db = mysql_select_db($default_dbname, $connection) or die("無法選擇".$default_dbname."資料庫<BR>");
mysql_query("SET NAMES 'utf8'");

?>