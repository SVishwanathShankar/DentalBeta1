<?php
	$Patient=$_POST['patient'];
	
	echo "Patient Name: $Patient<br/>";

$servername = "localhost";
$username = "root";
$password = "root";
$db= "dental";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

{
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
else
{ 
	$sql1 = "SELECT id, date, description, prescription, advice, amount_charged, amount_paid, balance FROM patient_record where mobile like '%$Patient%'";
	$retval = mysqli_query($conn, $sql1);
	
	if(! $retval )
	{
		die('Could not get data: ' . mysql_error());
		header('Location: New_Patient.php');
	}
	while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
	{
		echo "Description :{$row['description']}  <br> ";
		echo "Prescription :{$row['prescription']}  <br> ";
		echo "Ammount :{$row['amount_charged']}  <br> ";
	
		$description = $row['description'];
		$prescription = $row['prescription'];
		$amount_charged = $row['amount_charged'];
		
		session_start();
		$_SESSION['description'] = $description;
		$_SESSION['prescription'] = $prescription;
		$_SESSION['amount_charged'] = $amount_charged;
		session_write_close();
		
	//	echo "Added sucessfully";
		header('Location: Search_Details.php');
		exit;
	}		
	}
echo "go";
	}

echo "Fetched data successfully\n";
mysql_close($conn);

?>