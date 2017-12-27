 <?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
 $sql="SELECT `ID`, `NAME`,  `TENTH`, `TWELTH`, `BTECH`  FROM `company details` WHERE 1";
 //echo $sql;
 $records=mysql_query($sql);
 ?>
<html>
 <head>
 <title>STUDENT INFORMATION</title>
 </head>
 <body>
 <table width="1000" border="1" cellspacing="1">
 <tr>
 <th>COMPANYID</th>
 <th>NAME</th> 
 <th>TENTH</th>
 <th>TWELTH</th>
 <th>BTECH</th> 
 <?php
 while($student=mysql_fetch_assoc($records)){
	 echo "<tr>";
   echo  "<td>".$student['ID']."</td>";
  echo  "<td>".$student['NAME']."</td>";
  echo  "<td>".$student['TENTH']."</td>";
   echo  "<td>".$student['TWELTH']."</td>";
   echo  "<td>".$student['BTECH']."</td>";
	}
 ?>
 </table>
 </body>
 </html>
 