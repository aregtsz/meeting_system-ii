<html>
<head>
<title> �|�� </title>
</head>
<body >

<?php
// �s����Ʈw
  include "config.php";

// �ϥΪ̿�J�ܼ�
$Id = $_POST['Id'];
$Password = $_POST['Password'];

// �T�{��ƬO�_��J���T
if ($Id == ''){
$err_message = "�ϥΪ̱b������J!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}

if ($Password == ''){
$err_message = "�ϥΪ̱K�X����J!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}

// �T�{���b��������
$sql = "select count(*) from user";
$sql .= " where `Id` = '".$Id."' and `Password` = '".$Password."' ";
$sql_result = mysql_query($sql) or die("�L�������i���e!!");
$row = mysql_fetch_array($sql_result);
if ($row[0]==0){
$err_message = "�ܩ�p�A�z�ëD�|���A�Э��s��J!!";
header("location: ./".$back_name."?err_message=".$err_message);
exit;
}
echo "<center>�|���z�n!!<BR>\n";
echo "<BR>\n";
?>
<input type="button" value="�^����" onclick="self.location.href='index.php'"><br><br>

</body>
</html>
