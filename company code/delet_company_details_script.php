
	<?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
 $sid = $_POST['student'];

 echo $sql;
 $sql="DELETE FROM 'company' WHERE ID=$sid"; 
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
