<html>
<head>

<link rel="stylesheet" type="text/css" href="dental.css">

</head>
<body>
<div class="header">
<h2> <b>Welcome to Dental Clinical Software </b></h2>
</div>

<div class="section">
<img class="image" src="http://photo.elsoar.com/wp-content/images/Smiling-cartoon-teeth-in-dentist-cabinet.jpg">
<div class="BUTTON-sec">
<?php 
session_start();
$Name = $_SESSION['Name'];
$Mobile = $_SESSION['Mobile'];
$Dob = $_SESSION['Dob'];
session_write_close();


?>

<label><?php echo $Name;?></label></br></br>

<label><?php echo $Mobile;?></label>
<br /><br /><br />


   <label>History</label>
   
   <table>
   <th>Date</th>
   <td><?php echo $Name;?></td>
   <th>Description</th>
   <th>Prescreption</th><br /> 	
   		<tr>	<td>10/12/1997</td><tr>
   </table>
</div>
</div>

<div class="footer">
Copiright
</div>
</body>
</html>