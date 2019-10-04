<?php include 'user_header.php';?>
<form action="" method="GET" enctype="multipart/form-data"><br><br><br>
	<?php
	if(isset($_GET['id']))
{
$id = $_GET['id'];

$sql="SELECT * FROM add_item WHERE Id='$id'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) != 0)
{
	

while($res = mysqli_fetch_array($query))
{ 
	?>
	<div class="product-item">
	<div>
		
		<img src="<?php echo $res['Image'];  ?>" >
		<hr>
		<h1><?php echo $res['Name'];?></h1>
		<h2>Rs. :  <?php echo $res['Price'];?><h2>
			<h2>Rating :  <?php echo $res['Rating'];?><h2>
				<h2>Operating System :  <?php echo $res['OS'];?><h2>
					<h2>RAM :  <?php echo $res['RAM'];?><h2>
						<h2>Manufacturer :  <?php echo $res['Manufacturer'];?><h2>
							<h2>Other Details :  <?php echo $res['Details'];?><h2>
								<h2>Warrenty :  <?php echo $res['Warrenty'];?><h2>
		<?php echo '<button><a href="addtocart.php?id='.$res['Id'].'">Add to cart</a></button>' ?>

		
	
	</div>
	
</div>
	<?php
}

	
}

}

		?>
		</div>
	</div>

	

</form>