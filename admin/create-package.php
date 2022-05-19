<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_POST['submit'])) {
		$pname = $_POST['packagename'];
		$ptype = $_POST['packagetype'];
		$plocation = $_POST['packagelocation'];
		$pprice = $_POST['packageprice'];
		$pfeatures = $_POST['packagefeatures'];
		$pdetails = $_POST['packagedetails'];
		$pimage = $_FILES["packageimage"]["name"];
		move_uploaded_file($_FILES["packageimage"]["tmp_name"], "pacakgeimages/" . $_FILES["packageimage"]["name"]);
		$sql = "INSERT INTO TblTourPackages(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage) VALUES(:pname,:ptype,:plocation,:pprice,:pfeatures,:pdetails,:pimage)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
		$query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
		$query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
		$query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pimage', $pimage, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			$msg = "Package Created Successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
	}

?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>TMS | Admin Package Creation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery-2.1.4.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="mother-grid-inner">
					<!--header start here-->
					<?php include('includes/header.php'); ?>

					<div class="clearfix"> </div>
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Update Package </li>
				</ol>
				<!--grid-->
				<div class="grid-form">

					<!---->
					<div class="grid-form1">
						<h3>Create Package</h3>
						<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<form id="package-form" class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
										<div class="col-sm-8 pname">
											<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package">
											<div class="error error-hidden">

											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Type</label>
										<div class="col-sm-8 ptype">
											<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family Package / Couple Package">
											<div class="error error-hidden">

											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
										<div class="col-sm-8 plocation">
											<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location">
											<div class="error error-hidden">

											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Price</label>
										<div class="col-sm-8 pprice">
											<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price">
											<div class="error error-hidden">

											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
										<div class="col-sm-8 pfeature">
											<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Package Features Eg-free Pickup-drop facility" required>
											<div class="error error-hidden">

											</div>
										</div>
									</div>


									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
										<div class="col-sm-8 pdetails">
											<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required></textarea>
											<div class="error error-hidden">

											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
										<div class="col-sm-8">
											<input type="file" name="packageimage" id="packageimage" required>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button type="submit" name="submit" class="btn-primary btn">Create</button>

											<button type="reset" class="btn-inverse btn">Reset</button>
										</div>
									</div>





							</div>

							</form>





							<div class="panel-footer">

							</div>
							</form>
						</div>
					</div>
					<!--//grid-->

					<!-- script-for sticky-nav -->
					<script>
						$(document).ready(function() {
							var navoffeset = $(".header-main").offset().top;
							$(window).scroll(function() {
								var scrollpos = $(window).scrollTop();
								if (scrollpos >= navoffeset) {
									$(".header-main").addClass("fixed");
								} else {
									$(".header-main").removeClass("fixed");
								}
							});

						});
					</script>
					<!-- /script-for sticky-nav -->
					<!--inner block start here-->
					<div class="inner-block">

					</div>
					<!--inner block end here-->
					<!--copy rights start here-->
					<?php include('includes/footer.php'); ?>
					<!--COPY rights end here-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include('includes/sidebarmenu.php'); ?>
			<div class="clearfix"></div>
		</div>
		<script>
			var toggle = true;

			$(".sidebar-icon").click(function() {
				if (toggle) {
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({
						"position": "absolute"
					});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({
							"position": "relative"
						});
					}, 400);
				}

				toggle = !toggle;
			});
		</script>
		<!--js -->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->

	</body>

	</html>
<?php } ?>
<!-- 
<script src="js/app.js"></script>
  <script type="text/javascript">

//=============Registeration Form Validation==============
const packForm=document.querySelector("#package-form");
const packName=document.querySelector("#packagename");
const packType=document.querySelector("#packagetype");
const packLocation=document.querySelector("#packagelocation");
const packPrice=document.querySelector("#packageprice");
const packFeature=document.querySelector("#packagefeatures");
const packDetail=document.querySelector("#packagedetails");

//Error Message Class
const packNameError=document.querySelector(".pname .error");
const packTypeError=document.querySelector(" .ptype .error");
const packLocationError=document.querySelector(".plocation .error");
const packPriceError=document.querySelector(".pprice .error");
const packfeatureError=document.querySelector(".pfeature .error");
const packDetailError=document.querySelector(".pdetail .error");
var packNameSubmit=false;
var packTypeSubmit=false;
var packLocationSubmit=false;
var packPriceSubmit=false;
var packfeatureSubmit=false;
var  packDeatailSubmit=false;




var packnameChk=/^[a-z A-Z]+$/;
packName.addEventListener("input",()=>{
    if(packName.value.match(packnameChk)){
        packNameError.classList.add("error-hidden");
        packNameError.classList.remove("error-visible");
        packNameSubmit=true;
    }else if(packName.value==""){
        packNameError.classList.add("error-visible");
        packNameError.classList.remove("error-hidden");
        packNameError.innerText="Field cannot be blank";
        packNameSubmit=false;
    }else{
        packNameError.classList.add("error-visible");
        packNameError.classList.remove("error-hidden");
        packNameError.innerText="Name should not contain numbers";
        packNameSubmit=false;
    }
});
//Email Validation

const buttonCursor=document.querySelector(".btn");//To avoid poniterevent and cursor problem
regForm.addEventListener("keyup",()=>{
    console.log(packNameSubmit);
    if(packNameSubmit==true && emailSubmit==true && passwordSubmit==true){
        regSubBtn.classList.remove("disabled");
        buttonCursor.classList.remove("cursor-disabled");
    }else{
        regSubBtn.classList.add("disabled");
        buttonCursor.classList.add("cursor-disabled");
    }
});
</script> -->