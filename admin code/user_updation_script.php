<html>
<body>
<div>
<center>
<?php

$con = mysqli_connect("localhost", "root", "", "legaldes_ecommerse") or die(mysqli_error($con));
$old_email = $_POST['old_email'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_address = $_POST['contact_address'];
$update_data_query = "UPDATE users SET email='$email' , first_name = '$first_name' , last_name='$last_name' , contact_address='$contact_address' WHERE email = '$old_email'";
$update_data_result = mysqli_query($con, $update_data_query) or die(mysqli_error($con));
echo "Data updated";
?>
</center>
</div>
<div>
<center>
<a href="login.html">Click Here For Login</a>
</center></div>
</body>
</html>