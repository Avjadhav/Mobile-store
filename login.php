<?php 
ob_start();
session_start();
include 'connection.php';
  $conn=OpenCon();
if (isset($_POST['login'])) {
  
  $Username = $_POST['user'];
  $Password = $_POST['pass'];

  if (!empty($Username) && !empty($Password))  
  {
    $check = "SELECT * FROM registration WHERE Username='$Username' AND Password='$Password'";
    $run = mysqli_query($conn,$check);
    $check_run = mysqli_num_rows($run);
    $res=mysqli_fetch_array($run);

    if($check_run == 1) 
    {
    
    $_SESSION['user'] = $Username;
    header('location:Home.php');
  }
  elseif($Username=="Admin" && $Password=="pass")
  {
    $_SESSION['user'] = $Username;
    header('location:admin_panel.php');
  }
  else
  {
  ?> <script type="text/javascript">
      alert "Invalid Content!!!";
  </script>
  <?php
  }

}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
<style>
.new{
color:black; 
font-family: "Times New Roman", Times, serif
font-size:10px;
text-align:center;
}
h1{
background:#35424a;
  padding-top:30px;
  padding-left:10px;
min-height:70px;
  border-bottom:#e8491d 3px solid;
       
   text-align:center;
 
color:white;
           font-family: "Times New Roman", Times, serif
    
}
   
footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
}
.container
{
padding:10px;
width:200px;
margin:auto;
}

.box{

background-color:white;
color:black;
border-right:2px  black solid; 
border-left:2px black solid;
border-top:2px black solid;
border-bottom:2px black solid;
margin:auto ;
width:400px;
}
input[type="submit"]
{
text-align:center; 
 width:15em;
   background-color:black;
   color:white;
padding: 10px 24px;
}
</style>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <header>
    <h1> Online Mobile Store </h1>
    </header>
<hr>
<div class="box">
    <div class="container">
<h2> Login </h2>
<form>
<div class="form-group">
<label> <b>Username</b> </label>
<input type="text" name="user" required>
</div>
<br>
<div class="form-group">
<label><b> password</b> </label>
<input type="Password" name="pass" required>
</div>
<br>
<div class="input">
<input type="submit" name="login" value="login">
</div>
<div class="new">
<p><a href="registration.php">Create New Account</a></p>
</div>
</div>
</div>
</div>
<footer> 
<p>Online Mobile Store, Copyright &copy; 2019</p>
</footer>
</form>
</body>
</html>