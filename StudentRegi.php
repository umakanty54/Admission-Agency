<html>
<head>
<style>
	.txt{
		width:350px;
		height:30px;
		line-height:30px;
		padding-left:30px;
	}
</style>
	<head>
<title>Registration form</title>

<body style="background-color:lightgrey;">
	<div style="margin-left:350px;">
	<table style="box-shadow:0 0 50px 2px black;padding:10px;background-color:white">
	<form  align = "center" method="POST">
<tr><td><label>First Name</label></td>
<td><input type="text" placeholder="First Name" name="firstn" required class="txt"></td></tr>
<tr><td><label>Middle Name</label></td>	
<td><input type="text" placeholder="Middle Name" name="lastn" rccequired></td></tr>
<tr><td><label>Family Name</label></td>	
<td><input type="text" placeholder="Family Name" name="familyn" required></td></tr>
<tr><td><label>Former Last Name(if applicable)</label></td>
<td><input type="text" placeholder="Last Name" name="flastn" required></td></tr>
<tr><td><label>Preferd First Name</label></td>	
<td><input type="text" name="prefirstn" required></td></tr>
<tr><td><label>Gender</label></td>
	<td><input type="radio" name="gender" value="male" required="required"> Male
  	<input type="radio" name="gender" value="female" required="required"> Female
  	<input type="radio" name="gender" value="other" required="required"> Other</td></tr>
<tr><td><label>First spoken language</label></td>
<td><select name="spokenlan">
	<option value="English">English</option>
	<option value="Chinese">Chinese</option>
	<option value="Spanish">Spanish</option>
	<option value="Hindi">Hindi</option>
	<option value="German">German</option>
</select></td></tr>
<tr><td><label>Date of birth</label></td>	
<td><input type="date"  name="dob" required></td></tr>
<tr><td><label>Contact Details</label></td>	
<td><input type="number"  name="contactdetails" required></td></tr>
<tr><td><label>Email</label></td>
<td><input type="email"  name="email" placeholder="abc@mail.com" required></td></tr>
<tr><td><label>Password</label></td>
<td><input type="password"  name="spassword" placeholder="password" required></td></tr>
<tr><td><label> Confirm Password</label></td>
<td><input type="password"  name="sconfirmpassword" placeholder=" Confirm password" required></td></tr>
<tr><td><label>Nationality</label></td>
<td><input type="text"  name="Nationality" required></td></tr>
<tr><td><label>Name of High School</label></td>	
<td><input type="text"  name="nameofhs" required></td></tr>
<tr><td><label>Name of post Secondary(if any)</label></td>	
<td><input type="text" name="nameofps" required></td></tr>
<tr><td><label>Field of Study</label></td>
<td><input type="text" name="fieldofstudy" required></td></tr>
<tr><td><label>Highest Education</label></td>	
<td><input type="text" name="highestedu" required></td></tr>
<tr><td><label>Date of School Leaving</label></td>	
<td><input type="date" name="dateofschoolleaving" required></td></tr>
<tr><td><label>Date of last attended Postsecodary(if any)</label></td>
<td><input type="date" name="lastpostsecondary" required></td></tr>
<tr><td><label>IELTS result</label></td>	
<td><input type="text"  name="ieltsresult" required></td></tr>
<tr><td><label>current address</label></td>	
<td><textarea rows="4" cols="25" name="currentadd" required></textarea></td></tr>
<tr><td><label>permamnent address</label></td>
<td><textarea rows="4" cols="25" name="permanentadd" required></textarea></td></tr>
<tr><td><label>Immmigration Status</label></td>	
<td><input type="textarea"  name="immigrationstatus" required></td></tr>
<tr><td><label>Terms you want to begin</label></td>	
<td><input type="textarea"  name="termsyouwant" required></td></tr>
<tr>
 <td colspan="2" align="center"><input type="submit" name="savenext1" value="Save and Next"></td></tr>
 </form>
 </table>
</div>
<?php
	if(isset($_POST["savenext1"])){
		$server="localhost";
		$username="root";
		$password="Ramnayak7@@@";
		$db="student";
		//$fname=$_POST["firstn"];$lname=$_POST["lastn"];$famliyn=$_POST["familyn"];$flastname=$_POST["flastn"];$prefirstname=$_POST["prefirstn"];$gener=$_POST["gender"];$spokenlan=$_POST["spokenlan"];
		//$dob=$_POST["dob"];$contact=$_POST["contactdetails"];$semail=$_POST["email"];$nationality=$_POST["Nationality"];
		$conn =new mysqli($server,$username,$password,$db);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}else{
			echo "<h2>Connection Successfull !!!</h2>";
			$cmd="insert into stud_registration(sfname,smname,sfamname,spfname,sgender,sfspokenlang,sdob,contactno,nationality,hschool,postsecondary,
			fostudy,highesteducation,dosl,dlaps,ieltsresult,currentadd,permanentadd,activated,semail,immigrationstatus,termyouwant,password) values('".$_POST["firstn"]."','".$_POST["lastn"]."','".$_POST["familyn"]."','".$_POST["prefirstn"]."','".$_POST["gender"]."'
			,'".$_POST["spokenlan"]."','".$_POST["dob"]."',".$_POST["contactdetails"].",'".$_POST["Nationality"]."','".$_POST["nameofhs"]."',
			'".$_POST["nameofps"]."','".$_POST["fieldofstudy"]."','".$_POST["highestedu"]."','".$_POST["dateofschoolleaving"]."','".$_POST["lastpostsecondary"]."',
			".$_POST["ieltsresult"].",'".$_POST["currentadd"]."','".$_POST["permanentadd"]."',0,'".$_POST["email"]."','".$_POST["immigrationstatus"]."',".$_POST["termsyouwant"].",'".$_POST["spassword"]."')";
			if($conn->query($cmd)=== TRUE){
				
					echo '<script type="text/javascript">
					alert("Registered Successfully  !");
           window.location = "homepage.php";
      </script>';
			}
			else{
				echo $conn->error;
			}
			
		}
		
	}
?>
</body>
</hmtl>