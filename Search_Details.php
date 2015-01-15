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
$description = $_SESSION['description'];
$prescription = $_SESSION['prescription'];
$amount_charged = $_SESSION['amount_charged'];
session_write_close();


?>

   <label>History</label>
   
   <table>
   <th>Date</th>
   <th>Description</th>
   	<td><?php echo $description;?></td>
   	<br />
   <th>Prescreption</th><br /> 	
    <td><?php echo $prescription;?></td>
    <br />
    <th>Amount charged</th>
     <td><?php echo $amount_charged;?></td>
     <br />
   		<tr>	<td>10/12/1997</td><tr>
   </table>
</div>
</div>

<div class="footer">
Copiright
</div>
</body>
</html>
