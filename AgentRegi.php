<html>
<head>
	<title>AgentRegi</title>
</head>
<body>
	<div style="margin-left:450px;">
	<h3>Agent Registration</h3>
<table style="box-shadow:0 0 50px 2px black;padding:10px;margin-top:50px;background-color:white">
	<form method="post" action="AgentRegi.php" enctype="multipart/form-data">
		<tr><td><label>License No</label></td>
<td><input type="text"  name="licno" required ></td></tr>
<tr><td><label>Resume</label></td>	
<td><input type="file"  name="resume" required></td></tr>
<tr><td><label>Experience in years</label></td>
<td><input type="text" name="expinyears" required ></td></tr>
<tr><td><label>Countries Affiliates</label></td>
<td><select name="countries">
	<option value="UnitesKingdom">Unites Kingdom</option>
	<option value="UnitedStatesofAmerica">United States of America</option>
	<option value="Russia">Russia</option>
	<option value="Canada">Canada</option>
	<option value="Australia">Australia</option>
</select></td></tr>
<tr><td><label>Universities Affiliates</label></td>
<td><select name="selectuniversity">
					<option value="HarvardUniversity">Harvard University</option>
					<option value="OxfordUniversity">Oxford University</option>
					<option value="MassachusettsInstituteofTechnology">Massachusetts Institute of Technology</option>
					<option value="YaleUniversity">Yale University</option>
				</select></td>
			</tr>	
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
<tr><td colspan="2" align="center"><label>Personal Details</label><td></tr>
			<tr><td></td></tr>
<tr><td><label>First Name</label></td>
<td><input type="text" name="firstna" required ></td></tr>
<tr><td><label>Last Name</label></td>
<td><input type="text" name="lastna" required ></td></tr>
<tr><td><label>Middle Name(if applicable)</label></td>
<td><input type="text" name="middlena" required ></td></tr>
<tr><td><label>Gender</label></td>
	<td><input type="radio" name="gender" value="male" required="required"> Male
  	<input type="radio" name="gender" value="female" required="required"> Female
  	<input type="radio" name="gender" value="other" required="required"> Other</td></tr>
<tr><td><label>Highest Education</label></td>
<td><input type="text" name="highestedu" required ></td></tr>
<tr><td><label>Contact Details</label></td>
<td><input type="number" name="contactdetails" required ></td></tr>
<tr><td><label>Email</label></td>
<td><input type="email"  name="email" placeholder="abc@mail.com" required></td></tr>
<tr><td><label>Business Card</label></td>
<td><input type="file" name="businesscard" required></td></tr>
<tr>
 <td colspan="2" align="center"><button type="submit" name="subsavenext">Save and Next</button></td></tr>
</form>
</table>
	<div></div>
</body>

<?php
if(isset($_POST["subsavenext"])){
		$server="localhost";
		$username="root";
		$password="Ramnayak7@@@";
		$db="student";
	$resume="";
$businesscardpath="";
if(!empty($_FILES['resume']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['resume']['name']);
	
    if(move_uploaded_file($_FILES['resume']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['resume']['name']). 
      " has been uploaded";
	  $resume=$path;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

if(!empty($_FILES['businesscard']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['businesscard']['name']);
	//$businesscardpath=$path;
    if(move_uploaded_file($_FILES['businesscard']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['businesscard']['name']). 
      " has been uploaded";
	  $businesscardpath=$path;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
  if($resume!='' && $businesscardpath!=''){
		//$fname=$_POST["firstn"];$lname=$_POST["lastn"];$famliyn=$_POST["familyn"];$flastname=$_POST["flastn"];$prefirstname=$_POST["prefirstn"];$gener=$_POST["gender"];$spokenlan=$_POST["spokenlan"];
		//$dob=$_POST["dob"];$contact=$_POST["contactdetails"];$semail=$_POST["email"];$nationality=$_POST["Nationality"];
		$conn =new mysqli($server,$username,$password,$db);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}else{
			echo "<h2>Connection Successfull !!!</h2>";
			$cmd="insert into agent_registration(Licenceno,resume,experienceinyears,contiresafiliates,universitiesafiliate,afname,alname,amname,agender,highesteducation,acontact,aemail,businesscard) values('".$_POST["licno"]."','".$resume."',".$_POST["expinyears"].",'".$_POST["countries"]."','".$_POST["selectuniversity"]."','".$_POST["firstna"]."','".$_POST["lastna"]."','".$_POST["middlena"]."','".$_POST["gender"]."','".$_POST["highestedu"]."',".$_POST["contactdetails"].",'".$_POST["email"]."','".$businesscardpath."')";
			if($conn->query($cmd)===TRUE){
				echo "Record inserted";
			}else{
				echo $conn->error;
			}
			
		}
		
	}
}
?>
</html>