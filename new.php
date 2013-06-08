 <meta http-equiv="Content-Type" content="text/html; charset=big5"> 
   <title>會議檔案存放區</title> 

<?php
session_start();

if (@$_SESSION['user'] == null)
{
echo "您尚未登入!<BR><BR>";
echo "<button><a href='SESSION-2.php'>進行登入</a></button><br><br>";
}
else
{
echo "上傳使用者空間<h2>".$_SESSION['user']."</h2>";
$ac=$_SESSION['user'];
//echo $ac. "<br>";
 include "config.php";
$sql = "SELECT Uid FROM User WHERE ID  like '%$ac%'  ";
 $result = mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_array($result);
 //echo "    Uid： ".$row['Uid']."<br>";
 $Uid=$row['Uid'];



}


echo '會議本文';
//echo "<br";
if($Uid >0){

$mid= $_GET['mid'];
//echo $mid;
$n=$_SESSION['user'];


$dn = sprintf("upload/mid/%s/m/",$mid); //會議本文路徑

$thelist=null ;////給空直


}





if ($handle = opendir($dn) )
$fileTab = array();
    while (false !== ($file = readdir($handle))) 
	{
        if ($file != "." && $file != ".."  ) 
		{
            $fileTab[] = $file; 
        }
    }	
    closedir($handle);
    shuffle($fileTab);
    foreach($fileTab as $file) 
	{
        $thelist .= '<p><a href="'.$dn.$file.'">'.$file.'</a></p>'; ///路徑
    }
	
	
?>
<?=$thelist?>


<?php

echo'會議檔案 ';
$dn = sprintf("upload/mid/%s/",$mid); //會議檔案路徑

$thelist= null;////不知怎麼改








if ($handle = opendir($dn) )
$fileTab = array();
    while (false !== ($file = readdir($handle))) 
	{
        if ($file != "." && $file != ".."  ) 
		{
            $fileTab[] = $file; 
        }
    }	
    closedir($handle);
    shuffle($fileTab);
    foreach($fileTab as $file) 
	{
        $thelist .= '<p><a href="'.$dn.$file.'">'.$file.'</a></p>'; ///路徑
    }
	
	
?>
<?=$thelist?>



</table>
 




<p>
</p>
<p>
  <input type="button" value="返回行事曆" onclick="self.location.href='my.php'" />
  
</p>
