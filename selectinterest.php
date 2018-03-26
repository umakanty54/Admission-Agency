<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<form action="$_SERVER[]">
	<?php 
		$server="localhost";
		$username="root";
		$password="Ramnayak7@@@";
		$db="student";
		$conn =new mysqli($server,$username,$password,$db);
		if($conn->connect_error){
			die("Connection error : ".$conn->connect_error);
		}else{ 
			echo "<h2>Connection Successfull !!!</h2>";
			$cmd="Select * from fieldofinterest";
			$result=$conn->query($cmd);
			if($result->num_rows>0){
				?><select name="fieldofinterestop">
				<?php
				while($row=$result->fetch_assoc()){
					?>
					<option value="<?php echo "".$row["foiid"];?>">
					<?php echo $row["Name"];?>
					</option>
				<?php }
				?>
				</select><?php
			}
			
		}
	?>
	<script>
	function callprograms(val){
		
	}
	</script>
	</body>
</html>