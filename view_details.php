<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
<?php	
include 'connection.php';						
if(isset($_GET['id']))
{
$item_id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM add_item WHERE id='$item_id'");

if(mysqli_num_rows($query) != 0)
{

while($row = mysqli_fetch_array($query))
{
	?>
	<img src="<?php echo $row['Image'];  ?>" height="300px" width="300px">
	<?php
}


}
else
{
	//Error item does not exist
}

}
else
{
	//Error
}

?>

</div>
</body>
</html>