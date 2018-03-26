<?php 
session_start();
?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<form method="post">
		<div style="border:1px solid black;width:500px;padding:50px;margin-top:100px;margin-left:500px;">
		<table>
			<tr>
			<tr>
			<td>Select type of user</td>
			<td><select name="usertype">
			<option value="admin">Admin</option>
			<option value="agent">Agent</option>
			<option value="student">Student</option>
			</select></td>
			</tr>
			<td>Username:</td>
			<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			<tr>
			<td>Password:</td>
			<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" name="loginsubmit" value="Login"></td>
			</tr>
			<tr>
				<td>
				</td>
				<td>Don't Have an Account ? <a href="#" onclick="callpop()">Click Here</a> to Sign Up for free!
				<div id="popup" style="display:none;width:200px;height:70px;background-color:lightblue;">
				<!--Select Type:<select>
				<option onclick="callstudreg()"><a href="StudentRegi.php">Student</a></option>
				<option onclick="callagentreg()">Agent</option>
				</select>--></div></td>
			</tr>
		</table>
		<script>
		
		</script>
		</div>
		<?php 
		if(isset($_POST["loginsubmit"])){
			$usertype=$_POST["usertype"];
			echo $usertype;
			$server="localhost";
		$username="root";
		$password="Ramnayak7@@@";
		$db="student";
		$conn =new mysqli($server,$username,$password,$db);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}else{
			if($usertype=="agent"){
				$cmd="Select * from city";
			$result=$conn->query($cmd);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					
					$_SESSION["user"]=$row["semail"];
					$_SESSION["srnoid"]=$row["srno"];
				}
				
			}
			}
			if($_POST["usertype"]=="student"){
				$cmd="Select * from agent_registration";
				$result=$conn->query($cmd);
				if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$_SESSION["user"]=$row["aemail"];
				}
				
			}
				
			}
		}
		}
		?>
		</form>
	</body>
</html>