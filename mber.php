<html>
<head>
<title> �|���n�J </title>
</head>
<body >

<?php 
// �s����Ʈw
  include "config.php";

@$err_message = $_GET['err_message'];

if ($err_message <> '')
{
	echo "<FONT SIZE='5' COLOR='#FF0000'>".$err_message."</FONT>";
}

echo "<center>";
echo "�|���i�J�e��<BR>";
echo "<FORM METHOD='post' ACTION='mber_check.php'>";
echo "<INPUT TYPE='text' NAME='Id' size='10'>�ϥΪ̱b��<BR>";
echo "<INPUT TYPE='password' NAME='Password' size='10'>�ϥΪ̱K�X<BR>";
echo "<INPUT TYPE='submit' value='�T�w�e�X'>";
echo "</form>";

?>
<a href ="../meeting_system/index.php">
<BR>�^����
</body>
</html>
