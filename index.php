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
    	$db_email=$row['email'];
    	$db_password=$row['password'];
    	$db_firstname=$row['firstname'];
    	$db_lastname=$row['lastname'];
    	$db_image=$row['image'];

    
    if($email != $db_email && $password  != $db_password){
    	echo "wrong details";
    }else{
    	header("Location:studentprofile.php");
    	$_SESSION['firstname']=$db_firstname;
    	$_SESSION['lastname']=$db_lastname;
    	$_SESSION['image']=$db_image;

    }
}
}
  

?>

<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=-1.0">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>
<body style="background-image:url('backgroundimage4.jpg');background-repeat:no-repeat; height:50px; width:; "> 



	
<div class="container pt-5">
	<h3 style="color:white;" > Welcome Dear student, please fill in your details correctly to login into your portal</h3>
</div>
<div class=" container card" style="padding:5px;width:500px;border-radius:30px; ">
	<form action="" method="post" >
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" class="form-control" name="Email">
		</div>
		<div class="form-group">
			<label for="password">password:</label>
			<input type="password" placeholder="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-info" name="submit">Login</button>
	</div>
</form>
</div>
 <div class="container"style="padding-left:200px"><i class="fa fa-user fa-5x"></i></div>
  <!-- Sidebar -->


  <i class="fa fa-pencil"></i>
</body>