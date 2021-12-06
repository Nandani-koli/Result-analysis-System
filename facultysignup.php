<?php

 $fname = $_POST['fname'];
 $email =$_POST['email'];
 $password = $_POST['password'];
 session_start();
 $mycon=mysql_connect('localhost','root','nandu2002');
$mydb=mysql_select_db("resultanalysis");

$exe=mysql_query("insert into faculty(fname,email,password)
	values('$fname','$email','$password')");
if($exe)
{
echo"<script type='text/javascript'>alert('successfully Registered')</script>"; 
$_SESSION['fname'] = $fname;
header("Location: faculty.php");
}
else
{
echo"<script type='text/javascript'>alert('unable to save')</script>";
}
?>