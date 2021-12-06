<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	h1{
	text-align: center;	
	font-family: serif;
	font-size: 30px;
	 color: white;
	}
	h1:hover{
       color: skyblue;
	}
	input{
   background-color: #3591CE;
  font-size: 25px;
	}
	input:hover{
		color: red;
	}
</style>
</head>
<body>
	<h1>SELECT PDF</h1>&nbsp;
<div align="center">
<form enctype="multipart/form-data" action="upload.php" method="POST">
<p align="center"><input type="file" name="fupload"><br></p>&nbsp;&nbsp;
<p align="center"><input type="submit" name="upload!"></p>
</form>
</div>
</body>
</html>
<?php
if (isset($_FILES['fupload']))
{
$file_name=$_FILES['fupload']['name'];
$f_temp=$_FILES['fupload']['tmp_name'];
$f_size=$_FILES['fupload']['size'];
$file_ext=explode('.',$file_name);
$file_ext=end($file_ext);
$to='C:\wamp\www\PHPprograms'.$_FILES['fupload']['name'];
$upload=move_uploaded_file($f_temp,$to);
if ($upload) {
# code...
echo "<script type=text/javascript>alert('uploaded Successfully')</script>";
}
else{
echo "<script type=text/javascript>alert('unable to upload')</script>";
}
}
?>