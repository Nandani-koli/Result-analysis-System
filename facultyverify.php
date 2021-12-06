<?php
//get values from index.php
$fname = $_POST['fname'];
$password = $_POST['password'];
session_start();
//tp prevent mysql injection
 $fname = stripcslashes($fname);
 $password = stripcslashes($password);

$fname = mysql_real_escape_string($fname);
$password = mysql_real_escape_string($password);
//connect database
$conn= mysql_connect("localhost","root","");
mysql_select_db("resultanalysis");
//query the database for user
$result = mysql_query("select * from faculty where fname = '$fname' and password ='$password'")
  or die("failed to query database".mysql_error());

  $row = mysql_fetch_array($result);
  if ($row['fname'== $fname] and $row['password'== $password]) {
  	$_SESSION['fname'] = $fname;
     header("Location: faculty.php");
  }else{
   echo "<script type='text/javascript'>alert('incorrect password')</script>";
  }
 ?>
