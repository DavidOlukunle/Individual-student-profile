<?php     
SESSION_START();
?>

<?php 
$connection=mysqli_connect('localhost','root','','payment');
if($connection){
	
}



?>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['Email'];
    $password=$_POST['password'];
    $email=mysqli_real_escape_string($connection,$email);
$password=mysqli_real_escape_string($connection,$password);
    $query="SELECT * FROM users where password='{$password}' ";
    $query.="AND email ='{$email}'";

    $result=mysqli_query($connection,$query);
    
    

    while($row=mysqli_fetch_array($result)){
    	$db_id=$row['id'];
    	$db_email=$row['email'];
    	$db_password=$row['password'];
    	$db_firstname=$row['firstname'];
    	$db_lastname=$row['lastname'];
    	$db_image=$row['image'];

    
    if($email !== $db_email && $password  !== $db_password){
    	echo "wrong details";
    }else{
    	header("Location:studentprofile.php");
    	$_SESSION['firstname']=$db_firstname;
    	$_SESSION['lastname']=$db_lastname;
    	$_SESSION['image']=$db_image;
    	$_SESSION['id']=$db_id;
    	     
    

}
 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		.divider-text{
			position:relative;
			text-align:center;
			margin-top: 15px;
			margin-bottom: 15px;

		}
		.divider-text span{
			padding:7px;
			font-size:30px;
			position:relative;
			z-index:2;

		}
		.divider-text:after{
			content:"";
			position:absolute;
			width:545px;
			border-bottom:1px solid #ddd;
			top:55%;
			left:0;
			z-index:1;

		}
		.vl{}
	</style>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=-1.0">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet"type="text/css"href="../style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title></title>
	
</head>
<body style="background-image:url('backgroundimage4.jpg');background-repeat:no-repeat; height:50px; width:; "> 







	
<div class="container pt-5">
	<h3 style="color:white;" > Welcome Dear student, please fill in your details correctly to login into your portal</h3>
</div>
<div class=" container card w3-container w3-center w3-animate-zoom" style="padding:5px;width:550px;border-radius:30px; ">
	<form action="" method="post" >
		<div class="form-group pt-3">
			<label style="padding-right:3px" for="Email">Email:</label>
			<input type="email" class="form-control" name="Email">
		</div>
		<div class="form-group">
			<label for="password">password:</label>
			<input type="password" placeholder="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-info form-control" name="submit">Login</button>
	</div>
	<p class="divider-text">
		<span class="bg-white">OR</span></p><br>

		<div><a href="register.php" class="btn btn-info"style="text-align:center;text-decoration:underline;">Register Here</a></div>


</form>

</div>



</div>
</div>
</body>
</html> 