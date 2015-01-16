<?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);


if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT Name,Password FROM privilage';

mysql_select_db('dental');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	echo "EMP ID :{$row['Name']}  <br> ";
	echo "EMP NAME : {$row['Password']} <br> ";
}
echo "Fetched data successfully\n";
mysql_close($conn);
?>