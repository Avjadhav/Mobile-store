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
	<h2 style="color: green; margin-left: 10px;">Profile Details</h2>
	<?php 
		

		 if($check_run == 1) 
    {
    	?>
    	<div>
     	<b>First Name : <?php echo $res['Fname'];?></b>
     	<b>last Name : <?php echo  $res['Lname'];?></b>
    	<b>Username : <?php echo $res['Username'];?></b>
    	<b>Mobile No. :<?php echo $res['Mobile'];?> </b>
    	<b>Gender :<?php echo $res['Gender'];?></b>
    	<b>Address :<?php echo $res['Address'];?></b>
    	<button name="edit"> Edit</button>
    </div>


    	<?php

		if(isset($_POST['edit']))
		{
			header('location:Edit-profile.php');
		}
    }

	 ?>
	</div>
</form>