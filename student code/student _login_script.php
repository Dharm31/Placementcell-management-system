	<?php
 //make connection
 mysql_connect('localhost','root','');
 //select db
 mysql_select_db('placementcelL');
 $sid = $_POST['id'];
 $sgmil = $_POST['email'];
 
 $sql="SELECT `STUDENTID`, `NAME`, `SEX`, `DOB`, `SUPPLY`, `MOBILE`, `EMAIL`, `TENTH`, `TWOLTH`, `BTECH`, `BRANCH`, `TGAPT`, `TGAPB` FROM `student` WHERE STUDENTID=$sid";
 $records=mysql_query($sql);
 $sv=mysql_fetch_assoc($records);
  
 ?>

 <html>
      <head>
          <title>YOUR INFORMATION</title>
  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="/javascript">
			functionisNumberkey(evt)
			{
				varcharCode=(evt.whichj)?evt.which:eventkeyCode
				if(charCode>31&&(charCode<46||charCode>57||charCode==47)
				return false;
				return true;
			}
		</script>
		<script type="text/javascript">
			functionisNumberString(evt)
			{
				varcharCode>=48&&charCode<=57)return false;
				return true;
			}
		</script>
		<script type="text/javascript">
		function checkblanck()
		{ if(document.getElementById('name').value== ""){
		alert('plse enter your name');
		return (false);
		  document.getElementById('name').style.bordercolor='red';  }
		
		  
		  else if(document.getElementById('studentid').value== ""){
		alert('plse enter your id');
		return (false);
		  document.getElementById('studentid').style.bordercolor='red';  }
		  
		  else if(document.getElementById('branch').value== ""){
		alert('plse enter your branch');
		return (false);
		  document.getElementById('branch').style.bordercolor='red';  }
		  
		  
		  
		 else  if(document.getElementById('btech').value==0){
		alert('plse enter your b.tech mark');
		return (false);
		  document.getElementById('btech').style.bordercolor='red';  }
		  
		 else if(document.getElementById('tenth').value==0){
		alert('plse enter your tenth mark');
		return (false);
		  document.getElementById('tenth').style.bordercolor='red';  }
		 else if(document.getElementById('twelth').value==0){
		alert('plse enter your twelth mark');
		return (false);
		  document.getElementById('twelth').style.bordercolor='red';  }
		 
		}
		</script>
	
		<style type="text/css">
		.row
		{ 
			background-color:black;
			font-size:20pt;
			color:white;
		}
		.row1
		{
			color:black;
		}
		</style>
    </head>
	<body background="student_information.jpg">
	
	
	



	
	
	
	
	
		<form  method="POST"  action="student_update.php" onsubmit="return checkblanck()">
				<center class="row">UPDATE THE INFORMATION  GIVEN BELOW</center>
				<table>
					<tr>
						<td class="row1"><b>NAME:</b></td>
						<td><input id="name"  name="name"   onekeypress="returnisNumberString(event)" type="text" size="12" value="<?php echo $sv["NAME"]; ?>" ></td>
						<td class="row1">(characteronly)</td>
					</tr>
					<tr>
						<td class="row1"><b>STUDENTID:<b></td>
						<td><input id="studentid"name="student"onekeypress="returnisNumberKey(event)"type="text"size="12" value="<?php echo $sv["STUDENTID"]; ?>"  ><a href="view_student_id.php"><font color="red">VIEW PRESRNT ID</font></a></td>
						<td class="row1">(number only)</td>
					</tr>
					<tr>
						<td class="row1"><b>SEX:</b></td>
						<td><select name="sex" value="<?php echo $sv["SEX"]; ?>" >
							<option>  </option>
							<option>male</option>
							<option>female</option>
						</td>
					</tr>
					<tr>
						<td class="row1"><b>DOB:</b></td>
						<td><input type="date" name="dob"value="<?php echo $sv["DOB"]; ?>" ></td>
						<strong></strong>&nbsp;
						<td class="row1"></td>
					</tr>
					<tr>
						<td class="row1"><b>Supply:</b></td>
						<td><input id="supply"name="supply" onekeypress="returnisNumberKey(event)"type="text"size="3"value="<?php echo $sv["SUPPLY"]; ?>" ></td>
					</tr>
					<tr>
						<td class="row1"><b>MOB-NUM:</b></td>
						<td><input id="mobile"name="mobile"onekeypress="returnisNumberKey(event)"type="text" size="12" value="<?php echo $sv["MOBILE"]; ?>"></td>
						<td class="row1">(numbers only)</td>
					</tr>
					<tr>
						<td class="row1"><b>E-mail:</b></td>
						<td><input type="text"name="email"size="25"/value="<?php echo $sv["EMAIL"]; ?>"></td>
					</tr>
					<tr>
						<td class="row1"><b>BRANCH:</b></td>
						<td>
							<select name="branch" id="branch" value="<?php echo $sv["BRANCH"]; ?>">
								<option> </option>
								<option>information technology</option>
								<option>computer science</option>
								<option>electrical engg</option>
								<option>civil engg </option>
								<option>mechanical engg</option>
								<option>instrumentation</option>
								<option>safety fire</option>
								<option>ship tech</option>
								<option>marine</option>
								<option>polymer</option>
								<option>mca</option>
								<option>m.tech</option>
								<option>other branch</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="row1"><b>10th %:</b></td>
						<td><input id="tenth"name="tenth" onekeypress="return isNumberKey(event)"type="text"size="12"value="<?php echo $sv["TENTH"]; ?>"></td>
						<td class="row1">(numbers only)</td>
					</tr>
					
					<tr>
						<td class="row1"><b>12th %:</b></td>
						<td><input id="twelth"name="twelth" onekeypress="return isNumberKey(event)"type="text"size="12"value="<?php echo $sv["TWOLTH"]; ?>"></td>
						<td class="row1">(numbers only)</td>
					</tr>
					
					
					<tr>
						<td class="row1"><b>b.tech %:</b></td>
						<td><input id="btech"name="btech" onekeypress="return isNumberKey(event)"type="text"size="12"value="<?php echo $sv["BTECH"]; ?>"></td>
						<td class="row1">(numbers only)</td>
					</tr>
					
					<tr>
						<td class="row1"><b>GAP-BETWEEN-10th AND 12th:</b></td>
						<td><input id="tgapt"name="tgapt"onekeypress="return isNumberkey(event)"type="text"size="12"value="<?php echo $sv["TGAPT"]; ?>"></td>
						<td class="row1"(numbers only)></td>
					</tr>
					<tr>
						<td class="row1"><b>GAP-BETWEEN 12th AND B.Tech:</b></td>
						<td><input id="tgapb"name="tgapb" onekeypress="return isNumberKey(event)"type="text"size="12"value="<?php echo $sv["TGAPB"]; ?>"></td>
						<td class="row1">(numbers only)</td>
					</>
					</table>
				
			</t></t>                 <input type="submit" name="submit" value="UPDATE"/>
			                                                                    <a href="userportal.html"><input type="button" name="up " value="HOME"> </a>
			
			
		</form>
	</body>
</html>











































 

 