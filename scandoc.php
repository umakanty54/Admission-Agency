<?php 
session_start();

?>
<html>
<head>
	<title>scandoc</title>
</head>
<body>
	<div style="margin-left:450px;">
<TABLE>
<form method="post" action="scandoc.php" enctype="multipart/form-data">
<tr>		
<td><label>Passport</label></td>
<td><input type="file" name="passport" required><br></td></tr>
<tr><td><label>Academic details</label>
<td><input type="file" name="academicdetails" required></td></tr>
<tr><td><label>Birth certificate</label></td>
<td><input type="file" name="birthcerti" required=""></td></tr>
<tr><td><label>Visa status</label></td>
<td><input type="radio" name="visastatus" value="Approved" required="required">Approved
<input type="radio" name="visastatus" value="In Process" required="required">In process<td></tr>
<tr><td><label>Family Income</label></td>
<td><input type="text" name="familyincome" required=""></td></tr>
<tr><td><label>IELTS result</label></td>
<td><input type="text" name="IELTSresult"  required></td></tr>
<tr><td><label>Resume</label></td>
<td><input type="file" name="resume" required></td></tr>
<tr><td colspan="2" align="center">
<input type="submit" value="savenext"></td></tr>
</form>
</TABLE>
</div>
<?PHP
$passprt="";
$academicdetails="";
$resume="";
$birthcerti="";
  if(!empty($_FILES['passport']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['passport']['name']);
    if(move_uploaded_file($_FILES['passport']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['passport']['name']). 
      " has been uploaded";
	  $passport=$path;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
  if(!empty($_FILES['academicdetails']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['academicdetails']['name']);
    if(move_uploaded_file($_FILES['academicdetails']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['academicdetails']['name']). 
      " has been uploaded";
	  $academicdetails=$path;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }if(!empty($_FILES['resume']))
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
  }if(!empty($_FILES['birthcerti']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['birthcerti']['name']);
    if(move_uploaded_file($_FILES['birthcerti']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['birthcerti']['name']). 
      " has been uploaded";
	  $birthcerti=$path;
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
  if($birthcerti!='' && $passport!='' && $academicdetails!='' && $resume!=''){
  $server="localhost";
		$username="root";
		$password="Ramnayak7@@@";
		$db="student";
		$conn =new mysqli($server,$username,$password,$db);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}else{
			echo "<h2>Connection Successfull !!!</h2>";
			$cmd1="insert into scandocs(srno,docs) values(".$_SESSION["srnoid"].",'".$passport."')";
			$cmd2="insert into scandocs(srno,docs) values(".$_SESSION["srnoid"].",'".$academicdetails."')";
			$cmd3="insert into scandocs(srno,docs) values(".$_SESSION["srnoid"].",'".$birthcerti."')";
			$cmd4="insert into scandocs(srno,docs) values(".$_SESSION["srnoid"].",'".$resume."')";
			if($conn->query($cmd1)=== TRUE && $conn->query($cmd2)=== TRUE && $conn->query($cmd3)=== TRUE && $conn->query($cmd4)=== TRUE ){
				echo "uploaded succesfully";
				
			}
			else{
				echo $conn->error;
			}
			
		}
  }
?>
</body>
</html>