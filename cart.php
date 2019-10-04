<?php include 'user_header.php';
 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);



?>
<style type="text/css">
	.btnsub{
		background-color: green;
	width: 10%;
	color: white;
	padding: 12px;
	border-radius: 100px;
	cursor:pointer;
	float: right;
	}
</style>
<form action="" method="POST" enctype="multipart/form-data"><br><br><br>
	
	  <table  width="100%" align="center" border="1">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Name</th>
	  		<th>Image</th>
	  		<th>Price</th>
	  		<th>Delete</th>
	  	</tr>
  	
	<?php  	
$total = '';

$i=1;
 foreach ($cartitems as $key=>$id) {
	$sql = "SELECT * FROM add_item WHERE id = $id";
	$res=mysqli_query($conn, $sql);
	$r = mysqli_fetch_array($res);
	if(mysqli_num_rows($res)>=1)
	{
?>	  	
	<tr align="center" >
		<td><?php echo $i; ?></td>
		<td> <?php echo $r['Name']; ?></td>
		<td><img src="<?php echo $r['Image'];  ?>" height="100px" width="100px"></td>
		<td>RS. <?php echo $r['Price']; ?></td>
		<td><a href="deletecart.php?remove=<?php echo $key; ?>">Remove</a></td>
	</tr>
<?php 
}
	else{
				?><h1>CART IS EMPTY</h1><?php
			}

	$total += $r['Price'];
	$i++; 
	} 

		?><tr align="center">
			<td></td>
			<td></td>
			<td><br><strong>Total Price</strong></td>
			<td><br><strong><?php echo $total ?> <strong>
				
			
		</tr><?php

	
		?>

	  </table>
	  <a href="#" ><button class="btnsub"> Checkout</button></a></td>
	</div>
</div>
</form>