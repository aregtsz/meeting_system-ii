 <meta http-equiv="Content-Type" content="text/html; charset=big5"> 
   <title>檔案上傳</title> 
   
   
   
<?php


session_start();
if (@$_SESSION['user'] == null){
echo "您尚未登入!<BR><BR>";
echo "<button><a href='SESSION-2.php'>進行登入</a></button><br><br>";
}else{
}
 $link = mysql_connect("localhost","root","") or die ("無法連接".mysql_error());
mysql_select_db("meeting_system-1",$link) or die ("無法選擇資料庫".mysql_error());
mysql_query("SET NAMES 'big5'");
$Borrower = $_SESSION['user'];

$MN = $_GET['mname'];
$JM  = $_GET['used'];
$Mid= $_GET['mid'];


$n =$_SESSION['user'];
$dn = sprintf("upload/mid/%s/",$Mid);   //會議檔案徑
$m = sprintf("upload/mid/%s/m/",$Mid); //會議本文路徑
$u=sprintf("upload");

$path=$dn;

echo "存放路徑 : ".$path."<BR>";
echo "會議名稱 : ".$MN."<BR>";
echo "參與人員 : ".$JM."<BR>";
echo "會議id: ".$Mid."<Br>";




if(isset($_FILES['files'])&&$n=$_SESSION['user'])
{
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name )
	{
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        if($file_size > 20971520)
		{
			$errors[]='檔案不能超過 20 MB';
        }	
			
       $query="INSERT into upload (`Borrower`,`filename`,`filesize`,`filetype`,`path`,`Name`,`MId`) VALUES('$Borrower','$file_name','$file_size','$file_type','$path','$MN','$Mid'); ";
	   
	   
	   
	   
        $desired_dir=$dn;
        if(empty($errors)==true){
            if(is_dir($dn)==false ){
				
                mkdir("$dn", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$dn".$file_name)==false){
                move_uploaded_file($file_tmp,"$dn".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "上傳完成";
	}
}
?>

<?php


////會議文本
 $link = mysql_connect("localhost","root","") or die ("無法連接".mysql_error());
mysql_select_db("meeting_system-1",$link) or die ("無法選擇資料庫".mysql_error());
mysql_query("SET NAMES 'big5'");
$Borrower = $_SESSION['user'];

$MN = $_GET['mname'];
$JM  = $_GET['used'];
$Mid= $_GET['mid'];

$n =$_SESSION['user'];
$dn = sprintf("upload/mid/%s/",$Mid);   //會議檔案徑
$m = sprintf("upload/mid/%s/m/",$Mid); //會議本文路徑
$u=sprintf("upload");

$path=$m;

if(isset($_FILES['m'])&&$n=$_SESSION['user'])
{
    $errors= array();
	foreach($_FILES['m']['tmp_name'] as $key => $tmp_name )
	{
		$file_name = $_FILES['m']['name'][$key];
		$file_size =$_FILES['m']['size'][$key];
		$file_tmp =$_FILES['m']['tmp_name'][$key];
		$file_type=$_FILES['m']['type'][$key];	
        if($file_size > 20971520)
		{
			$errors[]='檔案不能超過 20 MB';
        }	
			
       $query="INSERT into upload (`Borrower`,`filename`,`filesize`,`filetype`,`path`,`Name`,`MId`) VALUES('$Borrower','$file_name','$file_size','$file_type','$path','$MN','$Mid'); ";
	   
	   
	   
	   
        $desired_dir=$m;
        if(empty($errors)==true){
            if(is_dir($m)==false ){
				
                mkdir("$m", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$dn".$file_name)==false){
                move_uploaded_file($file_tmp,"$m".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "上傳完成";
	}
}
?>

<form action="" method="post" enctype="multipart/form-data">
  會議本文:
    <input type="file" name="m[]" multiple="multiple"/>
  <input type="submit"/>
  每個檔案限制為20Mb
</form>
<form action="" method="POST" enctype="multipart/form-data">
會議檔案:
<input type="file" name="files[]" multiple/>
	<input type="submit"/>
每個檔案限制為20Mb
</form>

<form name="form1" method="get" action="meet.php"  target="_blank" ">
 

  <hr />
  <?php if($_SESSION['user']>0);
  
  ?>
  <input name="mid" type="hidden" id="used" value="<?php  echo $Mid;?>">
  <input type="submit" value="行事曆" target="_blank"  alt="Submit button" width="100" height="38" />
  &nbsp;
  <input type="button" value="返回系統首頁" onclick="self.location.href='index2.php'" />
</form>
