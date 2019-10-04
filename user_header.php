<?php  
include 'connection.php';						
$conn=OpenCon();

session_start();

$currentTime = time() + 2500;
$expried = 3600;

if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Store</title>
	<link rel="stylesheet" type="text/css" href="./Style.css">
	<!-- <script src="./script.js"></script> -->
	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="search.php" method="GET">	
<div class="Menu">
	<a href="Home.php">Home</a>
	<a href="profile.php">Profile</a>
	<a href="#">About Us</a>
	<a href="cart.php">Cart</a>
	<a href="logout.php">Log Out</a>
	<?php 
		$query="Select Fname from registration where Username='".$_SESSION['user']."'";
		$run= mysqli_query($conn,$query);
		$res=mysqli_fetch_array($run);
	?>
	<a href="profile.php">Welcome <?php echo $res['Fname']; ?></a>
	<div>
	<input type="submit" name="btnsearch" class="b" value="search">
	<input type="text" class="s" name="search" placeholder="Search">
	<select class="b" name="icat">
	<option value="Choose">--Choose Category--</option>
  	<option value="Mobile">Mobile</option>
  	<option value="Tablet">Tablet</option>
  	<option value="Iphone">Iphone</option>
	</select>
	</div>
</div>
</form>

