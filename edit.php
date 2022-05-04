<?php $connection=mysqli_connect('localhost','root','','payment');  ?>


<?php SESSION_START();

?>
<?php 
$db_id=$_SESSION['id'];

$query="SELECT * FROM users  ";
$answer=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($answer)){
$user_image=$row['image'];
$db_id=$row['id'];

}
if(isset($_POST['submit'])){

	$user_image=$_FILES['image']['name'];
	$user_image_temp=$_FILES['image']['tmp_name'];

$fileupload=move_uploaded_file($user_image_temp, 'user_images/$user_image');

$query="UPDATE users set ";

$query.="image ='{$user_image}' ";
	$query.="WHERE id= {$db_id}";


	$result=mysqli_query($connection, $query);
	if(!$fileupload){
  die("QUERY FAILED" .  mysqli_error($connection));
 }
 else{
 	echo"your profile picture has been uploaded sucessfully <a href='studentprofile.php'>OK</a>";
 }



}



?>


<form action="" method="post" enctype="multipart/form-data">
	<input type="file" class="form_control" name="image" value="upload">
	<input type="submit" class="form-control btn btn-success" name="submit">
</form>