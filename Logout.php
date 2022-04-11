<!-- <?php
$connection=mysqli_connect('localhost','root','','payment'); ?>
<?php session_start() ?>
<?php 
$_SESSION['lastname']= null;
$_SESSION['firstname']=null;

header("Location:index.php");

?>  -->


<?php

if(!isset($_POST['submit'])){
	$email=$_POST['Email'];
    $password=$_POST['password'];
   header("Location:index.php");
}
?>