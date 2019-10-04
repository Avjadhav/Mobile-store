<?php 
include 'admin_header.php';
?>

	<form class="Container">
		<div align="center" >
			<h1>View Details</h1>
		</div>
		<div >
			<table width="100%" align="center" border="1">
				<thead>

					<th>Id</th>
					<th>Item Name</th>
					<th>Image</th>
					<th>Delete</th>
				</thead>
				<tbody align="center">
					<?php
						include 'connection.php';
						$conn=OpenCon();

								$displayquery="select * from add_item";
								$querydisplay=mysqli_query($conn,$displayquery);

								

								while($result=mysqli_fetch_array($querydisplay)){
									?>

									<tr>

										<td><?php echo $result['Id'];  ?></td>
										<td><?php echo $result['Name'];  ?></td>
										<td><img src="<?php echo $result['Image'];  ?>" height="100px" width="100px"> </td>
										<td><a href="view_item.php?id=$result['Id'];"><button >delete</button></a></td>

										
									</td>
									</tr>


								<?php
							}
							if($_GET){
  								  if(isset($_GET['id'])){
      							  delete();
   									 }
									}

							function delete()
							{
								$deletequery="delete from add_item where Id='".$id."'";
								mysqli_query($conn,$deletequery);
							}
						CloseCon($conn);
						  ?>
				</tbody>
			</table>
		</div>
	</form>
