<?php
// �s����Ʈw
$dbhost = "localhost"; //��Ʈw���}��IP
$dbusername = "root"; //��Ʈw�b��
$dbuserpassword = ""; //��Ʈw�K�X
$default_dbname = "meeting_system-1";//��Ʈw�W��
@$connection = mysql_pconnect($dbhost, $dbusername, $dbuserpassword) or die("�L�k�s����Ʈw!!<BR>");
$db = mysql_select_db($default_dbname, $connection) or die("�L�k���".$default_dbname."��Ʈw<BR>");
mysql_query("SET NAMES 'utf8'");

?>