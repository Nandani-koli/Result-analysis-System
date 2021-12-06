<?php
$mycon=mysqli_connect('localhost','root','nandu2002');
$mydb=mysqli_select_db($mycon,"resultanalysis");
$output=mysqli_query($mycon,"select * from faculty ORDER BY id");
?>
<form method="post">
    <h1 style="color: white; text-align: center;" onMouseOver="this.style.color='skyblue'"
        onMouseOut="this.style.color='white'">Delete User</h1>&nbsp;&nbsp;
<table align="center"cellpadding="2"border="2"bgcolor="white" cellspacing="0">
<tr style="color: #3591CE">
<th>ID</th>
<th>Username</th>
<th>Email</th>
</tr>
<?php
if(mysqli_num_rows($output)>0)
{

while($row=mysqli_fetch_assoc($output))
{

echo

"<tr>
<td>".$row["id"]."</td>
<td>".$row["fname"]."</td>
<td>".$row["email"]."</td>
<td>".'<input type="checkbox"name="delete[]"
value='.$row["id"].'>'."</td><tr>";
}
}
?> 
	<td colspan="4"><button type="submit"name="submit" value="confirm" 
		style="font-size: 20px;
     	background-color: #3591CE;
     	width: 400px;
     	padding: 5px 5px 5px 5px;" onMouseOver="this.style.color='red'"
        onMouseOut="this.style.color='white'">Confirm</button></td>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$mycon=mysqli_connect('localhost','root','nandu2002');
$mydb=mysqli_select_db($mycon,"resultanalysis");

foreach($_POST["delete"]as$value)
{
$delete=mysqli_query($mycon,"DELETE from faculty where id='$value'");
}
if($delete){

echo"<script type='text/javascript'>alert('deletion successfully')</script>";

}
else
{

echo"<script type='text/javascript'>alert('unable to delete')</script>";
}
header("refresh:0");
mysqli_connect($mycon);
}
?>