<?php
	$Name=$_POST['ptname'];
	$DOB=$_POST['date'];
	$Mobile=$_POST['mobile'];
	
	echo "Patient Name: $Name<br/>";
	echo $Mobile;
	echo "$DOB";
	
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
	//$sql = "INSERT INTO patient_info (name, mobile, dob) VALUES ([$Name],[$Mobile],[$DOF])";
	//$sql = "INSERT INTO patient_info (name, age, sex, mobile, email, dob, photo) VALUES ($Name,'','',$Mobile,'',$DOF,'')";
	$sql = "INSERT INTO `dental`.`patient_info` (`name`, `age`,   `sex`, `mobile`, `email`, `dob`, `photo`) VALUES ('$Name', '', '', '$Mobile', '$DOB', '', NULL)";
	echo $sql;

	$retval = mysqli_query($conn, $sql);
	if(! $retval )
	{
		die('Could not enter data: ' . mysql_error());
	}
	session_start();
	$_SESSION['Name'] = $Name;
	$_SESSION['Mobile'] = $Mobile;
	$_SESSION['Dob'] = $DOB;
	session_write_close();
	
				echo "Added sucessfully";
				header('Location: Patient_Details.php');
			exit;
		
	
}

echo "Fetched data successfully\n";
mysql_close($conn);
?>