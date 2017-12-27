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
	
$user_registration_query = "INSERT INTO `student`(`STUDENTID`, `NAME`, `SEX`, `DOB`, `SUPPLY`, `MOBILE`, `EMAIL`, `BRANCH`, `TENTH`,`TWOLTH`, `BTECH`,`TGAPT`, `TGAPB`) VALUES('$studentid','$name','$sex','$dob','$supply','$mobile','$email','$branch','$tenth','$twelth','$btech',''
'$tgapt','$tgapb')";

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