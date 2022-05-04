<?php $connection=mysqli_connect("localhost","root","","payment");   
if($connection){
	
}
?>


<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=-1">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mdb/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="mdb/js/mdb.js">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<!-- <style> 
.box-model {
    width: 100px;
    height: 100px;
    background-color: red;
    position: relative;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    -webkit-animation-direction: reverse; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-iteration-count: infinite;
    animation-direction: reverse;    
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:red; left:0px; top:0px;}
    25%  {background-color:yellow; left:200px; top:0px;}
    50%  {background-color:blue; left:200px; top:200px;}
    75%  {background-color:green; left:0px; top:200px;}
    100% {background-color:red; left:0px; top:0px;}
}
</style> -->
<body style="background-color:khaki">
<?php
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];

$query="INSERT INTO users(firstname,lastname,email,password)";
$query.="VALUES('{$firstname}','{$lastname}','{$email}','{$password}')";

$result=mysqli_query($connection,$query);


if(!$result){
	echo "application not submitted";
}else{
	echo "form submitted";
}
}
?>
<div class="container pt-5 " style="">
	<div class="row justify-content-center">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body w3-container w3-center w3-animate-zoom">
			<form action="" method="post">
				<div class="md-form form-group">
					<input type="text" name="firstname" placeholder="firstname"class="form-control">
				</div>
					<div class="md-form form-group">
					<input type="text" name="lastname" placeholder="lastname"class="form-control">
				</div>
					<div class="md-form form-group">
					<input type="text" name="email" placeholder="email"class="form-control">
				</div>
					<div class="md-form form-group">
					<input type="text" name="password" placeholder="password"class="form-control">
				</div>
					
					<div class="md-form form-group">
					<input type="submit" name="submit" class="form-control btn btn-dark">
				</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>



