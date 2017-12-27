
	<?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
 $sid = $_POST['student'];
 
 $sql="DELETE FROM  `company details` WHERE ID =$sid"; 
 $records=mysql_query($sql); 

?>

<html>
<body>
<div>
<center>
</center>
</div>
<div>
<center>
<a href="admin_login_script.html">Click Here For go back</a>
</center>
</div>
</body>
</html>
