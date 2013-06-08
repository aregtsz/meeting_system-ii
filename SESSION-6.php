<meta charset="utf-8" />
<?php
session_start();
session_destroy();
echo "登入失敗!<br><br>";

echo "將於3秒後返回登入頁面";

header("Refresh:3;URL=index.php?error=1");

?>