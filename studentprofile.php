<?php SESSION_START(); 
$connection=mysqli_connect('localhost','root','','payment');

?>



  <!DOCTYPE html>
  <html lang="en">
	<!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
	<title></title><!-- <link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
  <script type="text/javascript" src="../vendor/jquery.min.js"></script>
  <script type="text/javascript" src="../vendor/popper.min.js"></script>
  <script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css"> -->






	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-1.0">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
<head>
    <title></title>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    
  

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	
</head>
<body>


<!--nav class="navbar navbar-expand-md bg-dark  navbar-dark">
				<a class="navbar-header" href="#"><h1></h1--><!--img src="..//iesa_logo.png"-->
			<!--button class="navbar-toggler" type="button"data-toggle="collapse"data-target="#drop" aria-control="drop" aria-expanded="false" aria-label="Toggle navigation">
				<span  class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="drop">
					<ul class="navbar-nav   mx-auto smooth-scroll ">
						<li class='nav-item'style="color:black"; ><a href='#' class='nav-link' style=""></a>hello</li>
						<li class='nav-item' style="">
					</ul>
				</div-->


  <!-- Sidebar -->
  <?php 
  $db_id=$_SESSION['id'];
  
  $query="SELECT * FROM users where id='$db_id' ";
  $result=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($result)){
    $user_image=$row['image'];
    $user_id=$row['id'];
    
   
  }
  

 ?>
 
  <!-- Navbar -->
  
  <div class="container-fluid">

    <div class="row min-vh-100 flex-column flex-md-row">
      <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top"id="sidebar">
          <div class="text-center p-3"> 
          
           <!--  <img src="user_images/<?php //echo $user_image;  ?>" alt="" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow"> -->         
             <img src="user_images/<?php echo $user_image?>" alt="picture" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow">
            <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap"><?php echo $_SESSION['firstname']; echo $_SESSION['id']; ?></a>
          </div>
          <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">

              <li class="nav-item">
                <a href="edit.php" class="nav-link text-white" title=""><b><i class="fa fa-camera"></i>   Edit profile picture</b></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-white" title=""><b>My courses</b></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-white" title=""><b>Tasks</b></a>
              </li>
              <li class="nav-item">
                <a href="Logout.php" class="nav-link text-white" title=""><b>Logout</b></a>
              </li>
            </ul>
          </div>
          
          
        </nav>
        

      </aside>


      <main class="col px-0 flex-grow-1">
        <div class="container py-3">


       <div class="container text-center"><h1>Welcome to your portal dear,<?php echo $_SESSION['firstname']; ?></h1><i class="fa fa-user fa-5x"></i></div>
  <!--div class="container "style="padding-left:300px"><i class="fa fa-user fa-5x"></i></div-->
  <div class="container text-center pl-5">
    <div class="row justify-content-center">
      <div class="col-sm-5  ">
    <div class="card pt-4" style="height:100px">
      <h3><i class="fa fa-university"></i><a href="#">check my total fee</a></h3>
    </div>
  </div>
    <div class="col-sm-4 ">
    <div class="card pt-4" style="height:100px">
      <h3 ><i class="fa fa-university"></i><a href="paymentportal.php?p_id=<?php echo $user_id;?>">Pay your fees</a></h3>
    </div>
  </div>
    <div class="col-sm-3 ">
    <div class="card pt-4" style="height:100px">
      <h3><i class="fa fa-car"aria-hidden="true"></i><a href="#">check for funding</a></h3>
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-sm-5">
    <div class="card pt-4 mt-4" style="height:100px">
      <h3><i class="fa fa-cloud"></i><a href="#">Any idea?</a></h3>
    </div>
  </div>
  <div class="col-sm-4">
 <div class="card pt-4 mt-4" style="height:100px">

      <h3><i class="fa fa-book"></i><a href="#">My Results</a></h3>
    </div>
  </div>
  <div class="col-sm-3">
  <div class="card pt-4 mt-4" style="height:100px">
      <h3 class="w-5"><i class="fa fa-book"></i><a href="#">change my Courses</a></h3>
    </div>
  </div>
</div>
<!--leave a measasge box for students to lodge their complaints or make a request -->
<div class="container pt-5">
  <div class="container pt-5">
    <div class="row justify-content-center" >
    <div  class="col-sm-6">
<?php
if(isset($_POST['send'])){
  $response="Your messsage has been sent,a response will be emailed to you soon. <a href='studentprofile.php'>OK</a> ";



?>

<?php echo $response;} ?>
      <div class="card ">
      
      <h3 >Leave a message for the Admin or lodge a complain</h3>

      <form action="" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="student-name">
        </div>

        <div class="form-group">
          <label  for="Email"class="justify-content-left">Email:</label>
          <input type="email" class="form-control" name="student-email">
        </div>
        <div class="form-group">
          <label for ="">Your message:</label>
          <textarea cols="5" rows="6" name="message"class="form-control"></textarea></div>
          <button class="btn btn-success form-control" name="send">send</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>




</main>

    </div>
  </div>
  




 
</body>
</html>