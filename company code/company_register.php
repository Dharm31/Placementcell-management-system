<html>
<body>
<div>
<center>
<?php
$con = mysqli_connect("localhost", "root", "", "placementcell") or die(mysqli_error($con));

$name = $_POST['name'];
$id = $_POST['id'];
   $status = $_POST['status'];
   $package = $_POST['package'];
$bond = $_POST['bond'];
$vp= $_POST['vp'];
$dov = $_POST['dov'];
	

	
	$supply= $_POST['supply'];
	
	$branch= $_POST['branch'];

	$tenth= $_POST['tenth'];
	$twelth= $_POST['twelth'];
	$btech= $_POST['btech'];
	
	$gap = $_POST['gap'];

	
	
$user_registration_query = "INSERT INTO `company details`(`ID`, `STATUS`, `NAME`, `PACKAGE`, `BOND`, `VISIT`,  `VISIT DATE`, `TENTH`, `TWELTH`, `BTECH`, `GPA`, `SUPPLY`, `BRANCH`) VALUES ('$id','$status','$name','$package','$bond','$vp','$dov','$tenth','$twelth','$btech','$gap','$supply','$branch')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully registered";
	
?>
</center>
</div>
<div>
<center>
<a href="login.html">Click Here For Login</a>
</center>
</div>
</body>
</html>