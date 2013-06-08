
<?php 

session_start();


session_destroy();
echo "登出中...";

header("Refresh:2;URL=index.php");
?><meta charset="utf-8" />