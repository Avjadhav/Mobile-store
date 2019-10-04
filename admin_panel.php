<?php  
include 'connection.php';
	$conn=OpenCon();
	if(isset($_POST['btnsub']))
	{
	$Name=$_POST['itname'];
	$Price=$_POST['itprice'];
	$Category=$_POST['itcat'];
	$file=$_FILES['itfile'];
	$Rating=$_POST['itrate'];
	$OS=$_POST['itos'];
	$RAM=$_POST['itram'];
	$Manufacturer=$_POST['itmanu'];
	$Model=$_POST['itmodel'];
	$details=$_POST['itcam'];
	$Warranty=$_POST['itwar'];
		
				
							$filename=$file['name'];
							$fileerror=$file['error'];
							$filetmp=$file['tmp_name'];

							$fileext=explode('.', $filename);
							$filecheck=strtolower(end($fileext));

							$fileextstored=array('png','jpg','jpeg');
							if(in_array($filecheck, $fileextstored)){

								$destination='upload/'.$filename;
								move_uploaded_file($filetmp, $destination);

								$sql="insert into add_item (`Name`, `Price`, `Category`, `Image`, `Rating`, `OS`, `RAM`, `Manufacturer`, `Model Number`, `Details`, `Warrenty`) values('$Name','$Price','$Category','$destination','$Rating','$OS','$RAM','$Manufacturer','$Model','$details','$Warranty')";
								$query=mysqli_query($conn,$sql);
							}
						}
?>
<?php
include 'admin_header.php';
?>
<style type="text/css">
	.drop-down{
		width: 97%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	resize: vertical;
	}
</style>
<div>
	<h1 align="center">ADD ITEM</h1>
</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="Container">
	<div class="row">
	<label><b>Item Name :</b></label><br>
	<input type="text" name="itname" placeholder="Item Name" required><br><br>
	<label><b>Price :</b></label><br>
	<input type="number" name="itprice" placeholder="Item Price" required><br><br>
	<label><b>Category :</b></label><br>
	<select name="itcat" class="drop-down">
  <option value="Mobile">Mobile</option>
  <option value="Tablet">Tablet</option>
  <option value="Iphone">Iphone</option>
</select><br><br>
	<label><b>Product Image :</b></label><br>
	<input type="file" name="itfile"><br><br>
	<label><b>Average Rating :</b></label><br>
	<input type="number" name="itrate" required><br><br>
	<label><b>Operating System :</b></label><br>
	<input type="text" name="itos" required><br><br>
	<label><b>RAM :</b></label><br>
	<input type="text" name="itram" required><br><br>
	<label><b>Manufacturer :</b></label><br>
	<input type="text" name="itmanu" required><br><br>
	<label><b>Item Model Number :</b></label><br>
	<input type="text" name="itmodel" required><br><br>
	<label><b>Camera/Battery details :<b></label><br>
	<input type="text" name="itcam" required><br><br>
	<label><b>Warranty details :</b></label><br>
	<input type="text" name="itwar" required><br><br>

	<input type="submit" name="btnsub" value="Save"><input type="reset" name="btnres" value="Reset">
</div>
</div>
</form>
<?php  include'user_footer.php'; ?>