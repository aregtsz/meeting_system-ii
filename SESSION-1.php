<html>
<meta charset="utf-8">
<?php
session_start();
$_SESSION['user']='';

$lifeTime = 3600;//set session lifetime
setcookie(session_name(), session_id(), time() + $lifeTime, "/");
session_set_cookie_params($lifeTime);

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'meeting_system-1');

if (isset($HTTP_SESSION_VARS['user'])!=true){//檢查是否已經登入
mysql_connect(HOST, USER);//連線資料庫
mysql_select_db(DB);

$id = $_POST['user'];
$pw = $_POST['pass'];

$sql = "SELECT COUNT(*) AS numfound FROM user WHERE Id ='".$id."' AND Password ='".$pw."'";
$result = mysql_query($sql);

$result_ar = mysql_fetch_array($result);
if ($result_ar['numfound'] < 1){//登入失敗
header('Location: SESSION-6.php');
exit; 
} 
$user1= $id;
date_default_timezone_set("Asia/Taipei");//set Timezone
$date1 = "20".date('y')."年 ".date('m')."月".date('d')."日";
$time = date('H')."時 ".date('i')."分".date('s')."秒";

//session_register('user');
$_SESSION['user']=$user1;
//session_register('date');
$_SESSION["date"]=$date1;
//session_register('time');
$_SESSION['time']=$time;



echo '登入成功！<br><br>';
}
header("Refresh:2;URL=index2.php?error=1");
?>
</html>

