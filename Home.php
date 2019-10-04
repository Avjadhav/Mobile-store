<?php include 'user_header.php';  ?>
<link rel="stylesheet" type="text/css" href="./Style.css">
<body>
<form action="product_details.php" method="GET" enctype="multipart/form-data">
<br>
	
<div id="main-slider" class="slider ">
	<div class="slider-wrapper">
		<?php
			
					$displayquery="select * from add_item where Rating >= 4";
					$querydisplay=mysqli_query($conn,$displayquery);						
					while($result=mysqli_fetch_array($querydisplay))
					{
		?>
			<img src="<?php echo $result['Image'];  ?>" height="100px" width="100px " class="slide">
		<?php
					}
		?>

	</div>
</div>
 
<hr>
<div>
<?php
	
			$dquery="select * from add_item";
			$queryd=mysqli_query($conn,$dquery);
			while($res=mysqli_fetch_array($queryd))
			{
		?>

<div class="box-item">
	<div>
		
		<img src="<?php echo $res['Image'];  ?>" >
		<hr>
		<h3><?php echo $res['Name'];?></h3>
		<b>Rs.</b><?php echo $res['Price'];?>
		<?php echo '<button><a href="product_details.php?id='.$res['Id'].'">more</a></button>' ?>
		
	</div>
	
</div>

<?php	
			}
			CloseCon($conn);
		
		 ?>
</div>
<hr>
</form>

</body>
</html>
