<?php include"tags.php"; ?>
<?php include"problem.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>problem classifier</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">

	<!-- css for this project -->
	<link href="css/project.min.css" rel="stylesheet">

	<style>
	 .col-md-3{
	 	padding-left:50px;
	 	padding-right:50px;
	 }
	 .xx{
	 	padding:5px;
	 	margin-left:10px;
	 	margin-top:10px;
	 	text-transform:lowercase;
	 }
	</style>
</head>
<body class="avoid-fout">
	
	<header class="header header-transparent header-waterfall">
		
		<a class="header-logo " style="margin-left:50px" href="index.html">CodeForces Problem Classifier</a>
		
		
	</header>
	
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">Problems</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">
				
				
					
						<h2 class="content-sub-heading">Tags</h2>
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<div class="container">
									    <a class="btn btn-alt xx" href="index2.php" > <?php echo "All  (".$total.") "; ?></a>
										<?php foreach($tags as $tag=>$count){  ?>
										    
											<a class="btn btn-alt xx" <?php echo 'href="index3.php?tags='.$tag.'"' ?> > <?php echo $tag."  (".$count.") "; ?></a>
											
                                              
                                         <?php } ?>
										
										
										
										
										
									</div>
								</div>
							</div>
						</div>
					
				
				<h2 class="content-sub-heading">All</h2>
				<div class="tile-wrap">
					<div class="tile">
						<div class="pull-left tile-side" >
							<div >
								<span >664A</span>
							</div>
						</div>
						<div class="tile-inner" style="margin-left:50px">
							<span>sdkfh aksf hk 	</span>
						</div>
						<div class="pull-right tile-side">
							<span>submissions</span>
						</div>
					</div>
				</div>
				

				
				
			</section>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p>Shub1718</p>
		</div>
	</footer>
	

	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/base.min.js"></script>

	<!-- js for this project -->
	<script src="js/project.min.js"></script>
</body>
</html>