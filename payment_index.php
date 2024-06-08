  <!--<form action="pay.php" method="GET">
    <input type="text" name="name" placeholder="Enter Your Name"><br>
     <input type="number" name="phone" placeholder="Enter Phone"><br>
      <input type="email" name="email" placeholder="Enter Email"><br>
       <input type="number" name="amount" placeholder="Enter Amount"><br>
        <input type="text" name="purpose" placeholder="Purpose"><br>
         <input type="number" name="uid" placeholder="UID"><br>
         <input type="text" name="temp" placeholder="Temp ID"><br>
         <button type="submit">Submit</button>
</form>    -->
  			
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<style>
		body {
			background-color: #f4f4f4;
		}
		
		form {
			max-width: 600px;
			margin: 0 auto;
			padding: 30px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0,0,0,0.2);
		}

		h1 {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-top: 0;
			margin-bottom: 20px;
			color: #b82e2e;
			text-shadow: 1px 1px #fff;
		}

		input[type="text"],
		input[type="number"],
		input[type="email"],
		textarea {
		  display: block;
		  width: 100%;
		  padding: 10px;
		  margin-bottom: 20px;
		  border-radius: 5px;
		  border: none;
		  border-bottom: 2px solid #ccc;
		  font-size: 16px;
		  background-color: #f9f9f9;
		}

		input[type="text"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		textarea:focus {
		  border-bottom: 2px solid #b82e2e;
		  outline: none;
		}

		input[type="submit"] {
			background-color: #b82e2e;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #9f2a2a;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.container input[type="text"],
		.container input[type="number"],
		.container input[type="email"],
		.container textarea {
			flex-basis: 48%;
		}

		.container input[type="submit"] {
			flex-basis: 100%;
		}

		@media only screen and (max-width: 600px) {
			.container input[type="text"],
			.container input[type="number"],
			.container input[type="email"],
			.container textarea {
				flex-basis: 100%;
			}
		}
	</style>
</head>
<body>
	<form action="pay.php" method="GET">
		<h1>Enter Details for payment</h1>
		<div class="container">
		    <input type="text" name="name" placeholder="Enter Your Name">
		    <input type="number" name="phone" placeholder="Enter Phone" required ="[1-9]{}">
		    <input type="email" name="email" placeholder="Enter Email "  >
			


			<?php
		// Connect to database
		$db_host = '127.0.0.1';
		$db_user = 'root';
		$db_pass = '';
		$db_name = 'pglife';

		$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}


		





		// Retrieve amount from database based on ID
		//$id = $_GET['id']; // Assuming the ID is passed in the URL query string
		
		$sql = "SELECT rent FROM properties WHERE id = 1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$amount = $row['rent'];
		} else {
			$amount = ''; // Set default value if ID not found
		}
	

		mysqli_close($conn);
	?>








<input type="number" name="amount" placeholder="Enter Amount" value="<?php echo $amount; ?>">  



















			
		
<!--
   <input type="number" name="amount" placeholder="Enter Amount">   	 -->
		    <input type="text" name="purpose" placeholder="Purpose" value="PG/Hostel Booking">
		 <!--   <input type="number" name="uid" placeholder="UID" disabled>
		    <input type="text" name="temp" placeholder="Temp ID" disabled>   -->
		    <input type="submit" value="Submit">
		</div>
	</form>
</body>
</html>
