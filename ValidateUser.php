<?php
	$UserName=$_POST['userName'];
	$Password=$_POST['password'];
	echo "User Name: $UserName<br/>";
	echo "Password: $Password<br/>";

$servername = "localhost";
$username = "root";
$password = "root";
$db= "dental";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);


if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
else 
{		
$sql = 'SELECT Name,Password FROM privilage';

//mysql_select_db('dental');
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}
	while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
	//echo "Hello :{$row['Name']}  <br> ";
	//echo "Your Password is : {$row['Password']} <br> ";
	
	if($UserName == $row['Name'] && $Password == $row['Password'])
	{
		echo "Your acess is authenticated";
		header('Location: welcome.php');
		exit;
	}
	
	else 
	
	{	
		echo '<script language="javascript">';
		echo 'alert("UserName or Password is Not Valid")';
		//echo 'window.location.href = "home.php";';
		//echo "<script>navigate('home.php')</script>";
		echo '</script>';
		
	}
		
}}

echo "Fetched data successfully\n";
mysql_close($conn);
?>