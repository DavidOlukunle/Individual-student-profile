 <!DOCTYPE html>
  <html lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script
	




<?php
require_once("config.php");
$token=$_POST['stripeToken'];
$email=$_POST['stripeEmail'];
$customer=\Stripe\Customer::create([
'source'=>$token,
'email'=>$email

]);

$charge=\Stripe\Charge::create([
	"customer"=>$customer->id,
	"amount"=>1000,
	"currency"=>"usd"



]);
echo "<div class='bg-success'><h3>You have successfully make a paymet of $10.00</h3></div>";
?>