<?php
//get values from index.php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
//tp prevent mysql injection
 $uname = stripcslashes($uname);
 $pass = stripcslashes($pass);
$uname = mysql_real_escape_string($uname);
$pass = mysql_real_escape_string($pass);
//connect database
$conn= mysql_connect("localhost","root","nandu2002");
mysql_select_db("resultanalysis");
//query the database for user
$result = mysql_query("select * from admin where username = '$uname' and password ='$pass'")
  or die("failed to query database".mysql_error());

  $row = mysql_fetch_array($result);
  if ($row['username'== $uname] and $row['password'== $pass]) {
     header("Location: Admin.php");
  }else{
   echo "<script type='text/javascript'>alert('incorrect password')</script>";
   header("Location: index.php");
  }
 ?>