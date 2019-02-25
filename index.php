<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>MKS-Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
</head>

<body>
    <h1 class="page-header text-center">Admin Dashboard</h1>
    <div class="container-fluid">
    	 <div class="row">

    	 		<div class="col-md-3">
    	 				<div class="panel panel-primary">
    	 					   <div class="panel panel-heading">
    	 						<h3 class="text-primary text-center panel-title"> Manage Content</h3>

    	 					</div>
    	 					<div class="panel panel-body">

    	 						<ul class="nav nav-stacked">
    	 								<ul class="list-group">
    	 							 	<h4 class="bg-primary"> <span class="glyphicon glyphicon-home"></span> Home </h4>
    	 								<li class="list-group-item"><a href="index.php?insert_home">Create </a></li>
    	 								<li class="list-group-item"><a href="index.php?display_home">View</a></li>
    	 								<hr/>
    	 								<h4 class="bg-primary"> <span class="glyphicon glyphicon-briefcase"></span> About </h4>
    	 								<li class="list-group-item"><a href="index.php?insert_about">Create </a></li>
    	 								<li class="list-group-item"><a href="index.php?display_about">View</a></li>

    	 						</ul>

    	 					</ul>
    	 				</div>
    	 				</div>

    	 		</div>
    	 		<div class="col-md-9">
    	 					<div class="panel">
    	 							 
    	 							  <?php 
    	 							  	 if(isset($_GET['insert_home']))
    	 							  	 {
    	 							  	 	include('insert_home.php');
    	 							  	 }
    	 							  	 if(isset($_GET['display_home']))
    	 							  	 {
    	 							  	 	include('display_home.php');
    	 							  	 }



    	 							  ?>
    	 					</div>

    	 		</div>

    	 </div>

    </div>

</body>


</html>