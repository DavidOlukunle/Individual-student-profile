<?php SESSION_START(); 
$connection=mysqli_connect('localhost','root','','payment');




?>

<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=-1.0">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">







	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body class="">


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<style>
	body {
  
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}
</style>
</head>


<!--nav class="navbar navbar-expand-md bg-dark  navbar-dark">
				<a class="navbar-header" href="#"><h1></h1--><!--img src="..//iesa_logo.png"--></a>
			<!--button class="navbar-toggler" type="button"data-toggle="collapse"data-target="#drop" aria-control="drop" aria-expanded="false" aria-label="Toggle navigation">
				<span  class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="drop">
					<ul class="navbar-nav   mx-auto smooth-scroll ">
						<li class='nav-item'style="color:black"; ><a href='#' class='nav-link' style=""></a>hello</li>
						<li class='nav-item' style="">
					</ul>
				</div-->


<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-light">
  	<a class="navbar-header" href="#">
    <div class="position-sticky">
    	<button class="navbar-toggler" type="button"data-toggle="collapse"data-target="#drop" aria-control="drop" aria-expanded="false" aria-label="Toggle navigation">
				<span  class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="drop">
					<ul class="navbar-nav   mx-auto smooth-scroll ">
						<li class='nav-item'style="color:black"; ><a href='#' class='nav-link' style=""></a>hello</li>
						<li class='nav-item' style="">
					</ul>
				</div>
			

     
  </nav>


  <div class="container text-center"><h1>Welcome to your portal dear,<?php echo $_SESSION['firstname'] ?></h1><i class="fa fa-user fa-5x"></i></div>
  <!--div class="container "style="padding-left:300px"><i class="fa fa-user fa-5x"></i></div-->
  <div class="container text-center pl-5">
  	<div class="row justify-content-center">
  		<div class="col-sm-5  ">
  	<div class="card pt-4" style="height:100px">
  		<h3><a href="#">check my total fee</a></h3>
  	</div>
  </div>
  	<div class="col-sm-4 ">
  	<div class="card pt-4" style="height:100px">
  		<h3 ><i class="fa fa-money"><a href="#">Pay your fees</a></i></h3>
  	</div>
  </div>
  	<div class="col-sm-3 ">
  	<div class="card pt-4" style="height:100px">
  		<h3><a href="#"><i class="fa fa-pencil">check for funding</i></a></h3>
  	</div>
  </div>
</div>
<div class="row justify-content-center">
	<div class="col-sm-5">
		<div class="card pt-4 mt-4" style="height:100px">
  		<h3><a href="#">check my total fee</a></h3>
  	</div>
  </div>
  <div class="col-sm-4">
 <div class="card pt-4 mt-4" style="height:100px">

  		<h3><a href="#">check my total fee</a></h3>
  	</div>
  </div>
  <div class="col-sm-3">
  <div class="card pt-4 mt-4" style="height:100px">
  		<h3 class="w-5"><a href="#"><i class="fa fa-book">change my Courses</i></a></h3>
  	</div>
  </div>
</div>
<!--leave a measasge box for students to lodge their complaints or make a request -->
<div class="container pt-5">
	<div class="row justify-content-center">
		<div  class="col-sm-6">
			<div class="card">
			<h3>Leave a message for the Admin or lodge a complain</h3>