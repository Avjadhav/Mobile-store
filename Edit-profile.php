<?php

include 'user_header.php';
session_start();
		$Uname=$_SESSION['user'];
		

		$pquery="SELECT * FROM registration where Username='".$Uname."'";
		$run = mysqli_query($conn,$pquery);
		$check_run = mysqli_num_rows($run);
		$res=mysqli_fetch_array($run);

		if(isset($_POST['Save']))
		{
			$id=$res['Id'];

			$Fname=$_POST['fname'];
			$Lname=$_POST['lname'];
			$Mno=$_POST['mno'];
			$Gen=$_POST['gen'];
			$Add=$_POST['add'];

			$updatequery="update registration set Fname='".$Fname."' , Lname='".$Lname."', Mobile='".$Mno."', Gender='".$Gen."', Address='".$Add."' where Id='".$id."' ";
			mysqli_query($conn,$updatequery);
			header('location:profile.php');
		}

		if(isset($_POST['back']))
		{
			header('location:profile.php');
		}

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
     <b>First Name :  <input type="text" name="fname" value="<?php echo $res['Fname'];?>"> </b>
     	<b>last Name : <input type="text" name="lname" value="<?php echo $res['Lname'];?>"></b>
    	<b>Username : <?php echo $res['Username'];?></b>
    	<b>Mobile No. :  <input type="text" name="mno" value="<?php echo $res['Mobile'];?>"></b>
    	<b>Gender :  <input type="text" name="gen" value="<?php echo $res['Gender'];?>"></b>
    	<b>Address :  <input type="text"name="add" value="<?php echo $res['Address'];?>"></b>
    	<button name="Save"> Save</button><button name="back"> Back</button>
    </div>

    	<?php
    }

	 ?>
	</div>
</form>