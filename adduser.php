<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
 error_reporting(0);
 $fname = $_POST['fname'];
 $email =$_POST['email'];
 $password = $_POST['password'];

 $mycon=mysql_connect('localhost','root','nandu2002');
$mydb=mysql_select_db("resultanalysis");
$exe=mysql_query("insert into faculty(fname,email,password)
	values('$fname','$email','$password')");

if ($_POST['submit'])
 {
if($exe)
{
echo"<script type='text/javascript'>alert('create user successfully')</script>";
}
else
{
echo"<script type='text/javascript'>alert('unable to create')</script>";
}
}
?>
	<style type="text/css">
	input {
    font-size: 16px;
    padding: 10px 10px 10px 5px;
    -webkit-appearance: none;
    display: block;
    background: none;
    color: white;
    width: 100%;
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #757575;
      }
input:focus { color: #3591CE; }
     td{
     	color: white;
     	font-style: serif;
     	font-size: 20px;
     	padding: 10px 10px 10px 5px;
     }
     td:hover{
     	color: skyblue;
     }
     h1{
     	color: white;
     	text-align: center;
     }
     h1:hover{
     	color: skyblue;
     }
     button{
     	font-size: 25px;
     	background-color: #3591CE;
     	width: 400px;
     	padding: 5px 5px 5px 5px;
     	margin-left: 25%;
     	color: white;
     }
     button:hover{
     	color: red;
     }
	</style>
</head>
<body>
      <h1>Create User</h1>
      <form action="adduser.php" method="post">
      <center><table>
      	<tr>
      		<td>Enter User name :</td>
      		<td><input type="text" name="fname"></td>
      	</tr>
      	<tr>
      		<td>Enter Email ID :</td>
      		<td><input type="text" name="email"></td>
      	</tr>
      	<tr>
      		<td>Give password :</td>
      		<td><input type="text" name="password"></td>
      	</tr>
      </table></center><br>
      <button type="submit">CREATE</button>
      </form>
</body>
</html>
