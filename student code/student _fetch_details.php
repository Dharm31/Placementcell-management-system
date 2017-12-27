 <?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
  $sid = $_POST['student'];
 $sql="SELECT `STUDENTID`, `NAME`,  `TENTH`, `TWOLTH`, `BTECH`, `BRANCH` FROM `student` WHERE 1";
 $records=mysql_query($sql);
 ?>
<html>
 <head>
 <title>STUDENT INFORMATION</title>
 </head>
 <body>
 <table width="1000" border="1" cellspacing="1">
 <tr>
 <th>STUDENTID</th>
 <th>NAME</th>
 <th>BRANCH</th>  
 <th>TENTH</th>
 <th>TWOLTH</th>
 <th>BTECH</th> 
 <?php
 while($studen=mysql_fetch_assoc($records)){
	 echo "<tr>";
   echo  "<td>".$studen['STUDENTID']."</td>";
  echo  "<td>".$studen['NAME']."</td>";
  echo  "<td>".$studen['BRANCH']."</td>";
  echo  "<td>".$studen['TENTH']."</td>";
   echo  "<td>".$studen['TWOLTH']."</td>";
   
    echo  "<td>".$studen['BTECH']."</td>";
	}
 ?>
 </table>
 </body>
 </html>
 