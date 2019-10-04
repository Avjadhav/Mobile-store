<?php include 'user_header.php';  ?>
<form action="" method="post" enctype="multipart/form-data">
	<br><br><br>
	<?php 
		
		
			$sch=$_GET['search'];
			if($sch=="")
			{
			}

			else
			{	
				$dquery="select * from add_item where (Name LIKE '%".$sch."%') ";
				$queryd=mysqli_query($conn,$dquery);
				if($row=mysqli_num_rows($queryd)>=1)
				{
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
			}
			
			else
			{?>
				
					<h1>Product is not Found!!</h1>
					<?php
				
}
			}

			$cat=$_GET['icat'];
				$dquery="select * from add_item where Category='".$cat."'";
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
		
		

	?>
</form>
</body>
</html>