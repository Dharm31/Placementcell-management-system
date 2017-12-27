<?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
  $sid = $_POST['student'];
 $sql1="SELECT  `TENTH`, `TWELTH`, `BTECH` FROM `company details` WHERE ID=$sid";
 $records2=mysql_query($sql1);
 $company=mysql_fetch_assoc($records2);
 $x=$company['TENTH'];
 $y=$company['TWELTH'];
 $z=$company['BTECH'];
 
 $sql="SELECT `STUDENTID`, `NAME`,  `TENTH`, `TWOLTH`, `BTECH`, `BRANCH` FROM `student` WHERE TENTH>$x AND TWOLTH>$y AND BTECH>$z";
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
 while($student=mysql_fetch_assoc($records)){
	 echo "<tr>";
   echo  "<td>".$student['STUDENTID']."</td>";
  echo  "<td>".$student['NAME']."</td>";
  echo  "<td>".$student['BRANCH']."</td>";
  echo  "<td>".$student['TENTH']."</td>";
   echo  "<td>".$student['TWOLTH']."</td>";
   
    echo  "<td>".$student['BTECH']."</td>";
	}
 ?>
 </table>
 </body>
 </html>
 