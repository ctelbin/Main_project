<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Travello | Tourism Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
</head>

<body>
	<?php include('includes/header1.php'); ?>
	<div class="banner">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> People don't take trips, trips take people </h1>
		</div>
	</div>


	<!--- rupes ---->
	<div class="container">
		<div class="rupes">
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<i class="fa fa-globe"></i>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 50% OFF</h3>
					<h4>TRAVEL SMART</h4>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<i class="fa fa-h-square"></i>
				</div>
				<div class="rup-rgt">
					<h3>UP TO 70% OFF</h3>
					<h4><a href="#">ON HOTELS ACROSS WORLD</a></h4>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<div class="rup-left">
					<a href="#"><i class="fa fa-mobile"></i></a>
				</div>
				<div class="rup-rgt">
					<h3>FLAT 50% OFF</h3>
					<h4><a href="#">US APP OFFER</a></h4>

				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!--- /rupes ---->




	<!---holiday---->
	<div class="container">
		<div class="holiday">





			<h3>Package List</h3>


			<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			$cnt = 1;
			if ($query->rowCount() > 0) {
				foreach ($results as $result) {	?>
					<!-- <div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName); ?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType); ?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures); ?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>RPS <?php echo htmlentities($result->PackagePrice); ?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>  -->

					<!-- <div class="card" style="width: 18rem;">
  <img class="img-responsive" src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo htmlentities($result->PackageName); ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="package-details.php" class="btn btn-primary">Go somewhere</a>
  </div> 
</div> -->

					<div class="column">
						<div class="cardss">
							<img src="<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive">
							<p><?php echo htmlentities($result->PackageName); ?></p>
							<a href="regndlog.php" class="view">Details</a>
						</div>
					</div>

					<!-- <div class="crds">
       
        <div class="card">
          <div class="card-img">
            <img src="" alt="" />
          </div>
          <div class="content">
            <div class="sec1">
              <div class="title">1980s</div>
              <div class="tag">Parties</div>
            </div>
            <div class="hr"></div>
            <div class="sec2">
              <div class="detail">
                <div class="a">Rate:</div>
                <div class="b">INR 3.25 Lakh</div>
              </div>
              <div class="detail">
                <div class="a">Capacity:</div>
                <div class="b">< 200</div>
              </div>
            </div>
          </div>
        </div>
</div>  -->

			<?php }
			} ?>


			<!-- <div><a href="package-details.php" class="view">View More Packages</a></div> -->
		</div>
		<div class="clearfix"></div>
	</div>



	<!--- routes ---->
	<div class="routes">
		<div class="container">
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
				</div>
				<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
					<h3>0</h3>
					<p>Enquiries</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left">
				<div class="rou-left">
					<a href="#"><i class="fa fa-user"></i></a>
				</div>
				<div class="rou-rgt">


					<?php $sql = "SELECT id from register";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results = $query->fetchAll(PDO::FETCH_OBJ);
					$cnt = $query->rowCount();
					?> <h3> <?php echo htmlentities($cnt); ?> </h3>
					<p>Registered Users</p>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
				<div class="rou-left">
					<a href="#"><i class="fa fa-ticket"></i></a>
				</div>
				<div class="rou-rgt">
					<h3>0</h3>
					<p>Booking</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //write us -->
</body>

</html>