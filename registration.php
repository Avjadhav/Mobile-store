<?php
include 'connection.php';
$conn=OpenCon();
if(isset($_POST['submit']))
{
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$Cpass=$_POST['Cpass'];

$slquery="select 1 from registration where Username='$user'";
$result=mysqli_query($conn,$slquery);

if($pass != $Cpass)
{
echo '<script type="text/javascript">';
echo 'alert(" password dosent match !!!")';
echo '</script>';
}
elseif (mysqli_fetch_array($result)>0) {
	echo '<script type="text/javascript">';
echo 'alert(" Username is already exist !!!")';
echo '</script>';

}
elseif (strlen($pass)<6) {
  echo '<script type="text/javascript">';
echo 'alert(" Password is too short !!! Enter atleast 6 characters")';
echo '</script>';
}
else{
	$sql="insert into registration (`Fname`, `Lname`, `Username`, `Password`) values ('$fname','$lname','$user','$pass')";
	$query=mysqli_query($conn,$sql);
	echo '<script type="text/javascript">';
echo 'alert(" Save successfully  !!!")';
echo '</script>';
header('location:login.php');
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>registration</title>
     <style type="text/css">
     

  h1{
  background:#35424a;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
       
   text-align:center;
 
color:white;
           font-family: Arial,sans-serif
    
}
body{
       background-color:white;
        font-size:16px; 
}
h2{
   
 color:black;
    
 font-size:20px;
     width:190px;
      margin:auto;
      font-family: Arial,sans-serif
    
}

.container
{
padding:10px;
width:200px;
margin:auto;
}
.container
{
padding:10px;
width:200px;
margin:auto;
 font-family: Arial,sans-serif
}

.form-group label{
                display:block;

}
.box{
 
background-color:white;
color:black;
border-right:1px black solid; 
border-left:1px black solid;
border-top:1px black solid;
border-bottom:1px black solid;
margin:auto ;
width:400px;

}
        
.input{
text-align:center;
}

input:hover{
color:orange;
}

input[type="submit"]
{

text-align:center; 
 width:15em;
   background-color:black;
   color:white;
padding: 10px 24px;
padding-right:10px;
}
footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
}
.intro{
font-size:12px;
padding-left:10px;
}

</style>
</head>
<body>
<form  action="" method="post" enctype="multipart/form-data">

<h1>Online Mobile Store</h1>
<hr>
<br>
<h2>Create Account</h2>
<br>
<div class="box">
<div class="container">
<form>
<br>
<div class="form-group">
<label><b>First Name</b></label>
<input type="text" name="fName" placeholder="Enter first name">
</div>
<br>
<div class="form-group">
<label><b> Last Name</b> </label>
<input type="text"  name="lName" placeholder="Enter last name">
</div>
<br>
<div class="form-group">
<label><b> Username <font color="red">*</font></b> </label>
<input type="text"  name="user" placeholder="Enter valid Username">
</div>
<br>
<div class="form-group">
<label><b>password.</b> </label>
<input type="password"  name="pass" placeholder="Atleast six characters">
</div>
<br>
<div class="form-group">
<label><b>Confirm password.</b> </label>
<input type="password"  name="Cpass" placeholder="Confirm password">
</div>
<br>
<div class="input">
<input type="submit" name="submit" value="submit">
</div>
<br>
<div class="intro">
<p> Already have an account? <a href="login.php">Login</a> </p>
</div>
</form> 
</div>
</div>
<footer>
     <p>Online Mobile Store, Copyright &copy; 2019</p>
</footer>
</form>
</body>
</html>