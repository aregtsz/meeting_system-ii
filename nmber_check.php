<html>
<head>
<title>  </title>
</head>
<body >
<?php
// �s����Ʈw
  include "config.php";
// �ϥΪ̿�J�ܼ�
$Id       = $_POST['Id'];
$Password = $_POST['Password'];
$Name     = $_POST['Name'];
$Category = $_POST['Category'];
$Email    = $_POST['Email'];
$Phone    = $_POST['Phone'];
$Address  = $_POST['Address'];

// �T�{��ƬO�_��J���T
if ($Id == ''){

$err_message = "�ϥΪ̱b������J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}else if(strlen($Id)<4 or strlen($Id)>10){

$err_message = "�b�����ץ��j��4�ζW�L10!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Password == ''){

$err_message = "�ϥΪ̱K�X����J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}else if(strlen($Password)<4 or strlen($Password)>10){

$err_message = "�K�X���ץ��j��4�ζW�L10!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Name == ''){
$err_message = "�ϥΪ̩m�W����J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Category == ''){
$err_message = "�ϥΪ����O����J!!";
header("location: ./register.php?err_message=".$err_message);
exit;
}

if ($Email == ''){
$err_message = "�ϥΪ�Email����J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Phone == ''){
$err_message = "�ϥΪ̦a�}����J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

if ($Address == ''){
$err_message = "�ϥΪ̦a�}����J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

// �T�{���b���O�_���H�ιL
$sql = "select count(*) from user";
$sql .= " where `Id` = '".$Id."'";
$sql_result = mysql_query($sql) or die("�L�������i���e!!");
$row = mysql_fetch_array($sql_result);
if ($row[0]>0){

$err_message = "�ܩ�p�A���b���w�g���H�ӽйL�F�A�Э��s��J!!";
header("location: ./nmber.php?err_message=".$err_message);
exit;
}

// �s�W�@�ӨϥΪ�
$sql = "insert into user";
$sql .= " set `Id`='".$Id."'";
$sql .= ", `Password`='".$Password."'";
$sql .= ", `Name`='".$Name."'";
$sql .= ", `Category`='".$Category."'";
$sql .= ", `Email`='".$Email."'";
$sql .= ", `Phone`='".$Phone."'";
$sql .= ", `Address`='".$Address."'";
$sql_result = mysql_query($sql);
echo "�s�W".$Id." �b������!!<BR>";
;
?>
<input type="button" value="�^����" onclick="self.location.href='index.php'"><br><br>
</body>
</html>