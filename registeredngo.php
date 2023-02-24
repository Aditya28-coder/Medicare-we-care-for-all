<!DOCTYPE html>
<html>
<head>
	<style>
		table, th,td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th,td
		{
			padding:8px;
		}
		th{
			text-align: left;
		}
	</style>
	<title>NGO Details</title>
</head>
<link rel="stylesheet" type="text/css" href="ngodetailscss.css"/>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare"; 

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  ID, Full_name, Login_email, Address, Contact_no  FROM ngo_login";
// $result = mysqli_query($con, $sql);
$result = mysqli_query($con, $sql) or die( mysqli_error($con));

mysqli_close($con);
?>
<body>
<header>
	<div class="main">
		<ul> 
			<li><a style="font-size: 25px" href="viewrequest.php"> Requested Medicines</a></li>
			<li class="active"><a style="font-size: 25px" href="registeredngo.php"> Registered NGO's</a></li>
			<li><a style="font-size: 25px" href="donation.php"> Donate Medicines</a></li>
	        <li><a style="font-size: 22px" href="mydonations.php"> My Donations</a></li>
			<li><a style="font-size: 25px" href="index.php"> Logout</a></li>
		</ul>
	</div>
	<div class="tab">
		
    <table align="center" style="width:600px;"> 
     	<tr>
    		<th> ID </th>
            <th> NGO Name </th>
    	    <th> Email-Id </th>
            <th> Address </th>
            <th> Contact </th>
    	</tr>
    		
   <?<?php 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
    	<td><?php echo $row['ID'];?></td>
        <td><?php echo $row['Full_name'];?></td>
    	<td><?php echo $row['Login_email'];?></td>
        <td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Contact_no'];?></td>
    </tr>
    </div>
    <?php 
}
?>

    </table>
	<div class="footer">
<a style="font-size: 20px" href="faq.php"> FAQ</a> &nbsp&nbsp&nbsp
<a style="font-size: 20px" href="feedback.php"> Feedback </a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
NGOs willing to register...<a style="font-size: 20px" href="ngoreg.php">Click Here</a>
<p style="font-size: 20px">NGO's can contact the portal at <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsmGWPMtvtdLrBBlhLpMCfgBxVfqMHgCDLsTCVjmqSmzdbjlxVvNMtZWSsCPbHcPjvcTJcNG">oumdsp@gmail.com</a></p>
	</div>
</body>
</html>
