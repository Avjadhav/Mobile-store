<?php

include 'user_header.php';
session_start();
		$Uname=$_SESSION['user'];
	

		$pquery="SELECT * FROM registration where Username='".$Uname."'";
		$run = mysqli_query($conn,$pquery);
		$check_run = mysqli_num_rows($run);
		$res=mysqli_fetch_array($run);

?>
<form  action="" method="POST" enctype="multipart/form-data">
	

	<h1 style="color : blue; ">Hello <?php echo $res['Fname'];?> !!</h1>
	<hr>
	<div class="profile-box">
	<h2 style="color: green; margin-left: 10px;">Pay Here</h2>
	<img src="image/QR1.png" >
	<br>
	<img src="image/QR.png" style="width: 500px;">
	</div>
</form>