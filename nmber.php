<html>
<head>
<title> �s�W�|�� </title>
</head>
<body >
<?php
// �s����Ʈw
  include "config.php";
 

@$err_message = $_GET['err_message'];
if ($err_message <> ''){

echo "<FONT SIZE='7' COLOR='#FF0000'>".$err_message."</FONT>";
}

echo "<center>";
echo "�[�J�|��<BR>";
echo "<FORM METHOD='post' ACTION='nmber_check.php'>";
echo "�b��<INPUT TYPE='text' NAME='Id' size='13'>{����4~10}<BR>";
echo "�K�X<INPUT TYPE='password' NAME='Password' size='13'>{����4~10,���]�t�^��}<BR>";
echo "�m�W<INPUT TYPE='text' NAME='Name' size='10'><BR>";
echo "���O<SELECT NAME='Category'><option >�п��</option><option >�Ѯv</option><option >�ǥ�</option></SELECT><BR>";
echo "Email<INPUT TYPE='text' NAME='Email' size='20'><BR>";
echo "�q��<INPUT TYPE='text' NAME='Phone' size='30'>{�榡:0911111111}<BR>";
echo "�a�}<INPUT TYPE='text' NAME='Address' size='30'><BR>";
echo "<INPUT TYPE='submit' value='�T�w�e�X'>";
echo "</form>";
?>
<input type="button" value="�^����" onclick="self.location.href='index.php'"><br><br>

</body>
</html>
