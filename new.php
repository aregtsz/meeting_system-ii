 <meta http-equiv="Content-Type" content="text/html; charset=big5"> 
   <title>�|ĳ�ɮצs���</title> 

<?php
session_start();

if (@$_SESSION['user'] == null)
{
echo "�z�|���n�J!<BR><BR>";
echo "<button><a href='SESSION-2.php'>�i��n�J</a></button><br><br>";
}
else
{
echo "�W�ǨϥΪ̪Ŷ�<h2>".$_SESSION['user']."</h2>";
$ac=$_SESSION['user'];
//echo $ac. "<br>";
 include "config.php";
$sql = "SELECT Uid FROM User WHERE ID  like '%$ac%'  ";
 $result = mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_array($result);
 //echo "    Uid�G ".$row['Uid']."<br>";
 $Uid=$row['Uid'];



}


echo '�|ĳ����';
//echo "<br";
if($Uid >0){

$mid= $_GET['mid'];
//echo $mid;
$n=$_SESSION['user'];


$dn = sprintf("upload/mid/%s/m/",$mid); //�|ĳ������|

$thelist=null ;////���Ū�


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
        $thelist .= '<p><a href="'.$dn.$file.'">'.$file.'</a></p>'; ///���|
    }
	
	
?>
<?=$thelist?>


<?php

echo'�|ĳ�ɮ� ';
$dn = sprintf("upload/mid/%s/",$mid); //�|ĳ�ɮ׸��|

$thelist= null;////��������








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
        $thelist .= '<p><a href="'.$dn.$file.'">'.$file.'</a></p>'; ///���|
    }
	
	
?>
<?=$thelist?>



</table>
 




<p>
</p>
<p>
  <input type="button" value="��^��ƾ�" onclick="self.location.href='my.php'" />
  
</p>
