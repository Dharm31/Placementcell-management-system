<html>
<body>
<div>
<center>
<?php
$con = mysqli_connect("localhost", "root", "", "placementcell") or die(mysqli_error($con));

$name = $_POST['name'];

	$studentid = $_POST['student'];
	$sex= $_POST['sex'];
	$dob= $_POST['dob'];
	$supply= $_POST['supply'];
	$mobile= $_POST['mobile'];
	$email= $_POST['email'];
	$branch= $_POST['branch'];

	$tenth= $_POST['tenth'];
	$twelth= $_POST['twelth'];
	$btech= $_POST['btech'];
	
	$tgapt = $_POST['tgapt'];

	$tgapb = $_POST['tgapb'];
	
$user_registration_query = "UPDATE `student` SET `STUDENTID`='$studentid',`NAME`='$name',`SEX`='$sex',`DOB`='$dob',`SUPPLY`='$supply',`MOBILE`='$mobile',`EMAIL`='$email',`TENTH`='$tenth',`TWOLTH`='$twelth',`BTECH`='$btech',`BRANCH`='$branch',`TGAPT`='$tgapt',`TGAPB`='$tgapb' WHERE 'STUDENTID'='$studentid'";

$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully update";
	
?>
</center>
</div>
<div>
<center>
<a href="userportal.html">Click Here For go home</a>
</center>
</div>
</body>
</html>