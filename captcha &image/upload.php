<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" >
<tr> 
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit"  id="upload" value=" Upload "></td>
</tr>
</table>
</form>

<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=student','student','student');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	
	if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
	{
	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	$sql = "INSERT INTO chirag_php (name, size, type, content ) "."VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
	$query=$dbhandler->query($sql);
	echo "<br>File $fileName uploaded<br>";
	} 
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>

