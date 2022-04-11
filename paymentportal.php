<?php $connection=mysqli_connect('localhost','root','','payment');?>


<!DOCTYPE HTML>
<html lang="en">
<?php require_once('config.php'); ?>
<?php SESSION_START(); 
if(isset($_GET['p_id'])){
    $user_id=$_GET['p_id'];
}
?>
<?php if(isset($_POST['pay'])){
echo "paid";
}
?>


<?php 
$query="SELECT * FROM users";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($result)){
	$user_email=$row['email'];
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
	<link rel="stylesheet" href="css/style.css">
	<title>Pay page</title>
</head>
<body>
	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-12">
	
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
				<td><input type="checkbox"></td>
				<td>Fee type</td>
				<td>Status</td>
			</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></td>
					<td>Technology Fee</td>
					<td class="bg-danger">Unpaid</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Health Insurance</td>
					<td class="bg-danger">Unpaid</td>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td>Practical Examination fee</td>
					<td class="bg-danger">Unpaid</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


	<!-- 
		<div class="row ">
			<div class="col-sm-6 justify-content-center">
		<div class=" "style="border-radius:">
		
			 -->
				<form action="success.php" method="Post">
					<script type="text/javascript" src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $test_keys['publishable_key'];?>" data-name="Online Payment" data-description="programming with David" data-image=""data-amount="1000" data-currency="usd" data-email="<?php echo $user_email ?>"  ></script>
					<!-- <div class="form-group">
						<label for="name">Name</label>
						<input type="text"class="form-control" name="Name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control"name="Email">
					</div>
					<div class="form-group">
						<button class="btn btn-success form-control"name="pay">Pay now</button>
					</div> -->
				</form> 
	</div>
</body>

</html>