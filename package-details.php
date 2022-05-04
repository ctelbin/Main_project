<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2'])) 
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['alogin'];
$fromdate=$_POST['fromdate'];
$city=$_POST['cities'];
$package=$_POST['packages'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$total=$_POST['total'];
$status=0;
echo $sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,city,type,adult,child,total,status) VALUES('$pid','$useremail','$fromdate','$city','$package','$adult','$child','$total','$status')";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':package',$package,PDO::PARAM_STR);
$query->bindParam(':adult',$adult,PDO::PARAM_STR);
$query->bindParam(':child',$child,PDO::PARAM_STR);
$query->bindParam(':total',$total,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
echo $query->execute();

$lastInsertId = $dbh->lastInsertId();


if($lastInsertId)
{
$msg="Booked Successfully";
header("Location:payment.php?pkgid=$pid;&uname=$useremail");
}
else 
{
$error="Something went wrong. Please try again";
}

}
if(isset($_SESSION['alogin']))
{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Package Details</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
input[type="date"]
{
      width: 100%;
      height: 53px;
	  font-size: 18px;
      font-family: "Gilroy_M";
      padding: 16px 0px 16px 16px;
}

.mainwr
{
    margin-bottom: 50px;
    margin-top: 35px;
}

.wrapper1 {
    width: 100px;
    margin-bottom: 50px;
    margin-left: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #FFF;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper1 span {
    width: 100px;
    text-align: center;
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.wrapper1 span.num {
    font-size: 25px;
    border-right: 2px solid rgba(0, 0, 0, 0.2);
    border-left: 2px solid rgba(0, 0, 0, 0.2);
    pointer-events: none;
}
.wrapper2 {
   
    width: 100px;
    margin-left: 50px;
    display: flex;
    align-items: center;
    justify-content: right;
    background: #FFF;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper2 span {
    width: 100px;
    text-align: center;
    font-size: 50px;
    cursor: pointer;
    user-select: none;
}

.wrapper2 span.number {
    font-size: 25px;
    border-right: 2px solid rgba(0, 0, 0, 0.2);
    border-left: 2px solid rgba(0, 0, 0, 0.2);
    pointer-events: none;
}
#result{
    margin-top: 50px;
   
    font-size: 30px;
    font-weight: bold;
}
.m{
    margin-top: 60px;
}
.type{
	margin-top: 20px;
}
.def{
	  
  width: 25%;
  color: #9e9e9e;
  font-size: 14px;
  border: 1px solid #464646;
  margin-bottom: 20px;
}
.de{
	 width: 25%;
  color: #9e9e9e;
  font-size: 14px;
  border: 1px solid #464646;
  margin-bottom: 20px;
  margin-left:53px;
}

		</style>				
</head>
<body>
<!-- top-header -->
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TRAVELLO -Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

 <input type="hidden" name="total" id="totalRes">
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	
	date_default_timezone_set("Asia/Kolkata");
  $date = date("d/m/Y")." ".date("h:i:sa");
  
	?>
	<script>
   document.getElementById('totalRes').value=<?php echo htmlentities($result->PackagePrice); ?>
 </script>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features: </b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">Date of Travel</label>
				<input type="date" id="adatepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Per Head</p>
					<h3> <?php echo htmlentities($result->PackagePrice);?></h3>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
			<h2>Booking</h2>
			
        <p class="m">Fill in Your Details</p>
 

     <div class="input city">
  <i class="fa fa-plane"></i>
   Departure City :
 <select class="def" name="cities" id="ct" onchange="changestatus()" class="select">
              <option value="" disabled selected hidden>Please Select</option>
              <option value="Coimbatore" class="company" id="company">Coimbatore</option>
              <option value="kerala">Kerala</option>
              <option value="Bangalore">Bangalore</option>
            </select>
   <div class="tour"> 
	   <li class="fa fa-globe"></li>
	   Tour Type:
  <select class="de" name="packages" id="user" onchange="changestatus()" class="select">
              <option value="" disabled selected hidden>Select Any</option>
              <option value="Family Package" class="company" id="company">Family package</option>
              <option value="Couple">Couple package</option>
              <option value="Bachelor's Package">Bachelor's Package</option>
            </select>
</div>
</div>

<div class="input type">
   
 <i class="fa fa-users"></i>
   Select Travellers  :
</div>

<div class="mainwr">
  <label class="ad">Adult</label>
   <div class="wrapper1">
    
    <span class="minus">-</span>
    <button name="adult" class="num" >00</button>
    <span class="plus">+</span>
  </div>
  <label class="ch">Child(Age:>10)</label>
  <div class="wrapper2">
    
    <span class="min">-</span>
    <button name="child" class="number">00</button>
    <span class="pl">+</span>
  </div
  
</div>
<div id="result">
  <label  id="total">Total</label>
</div>
					<?php if($_SESSION['alogin'])
					{?>
						<div align="center">
					<a href="booking-form.php"><button name="submit2" class="btn-primary btn">Book</button></a></div>
						
						<?php } else {?>
							 
							<a href="thankyou.php" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a>
							<?php } ?>
					<div class="clearfix"></div>
			
			</div>
			
		</div>
		</form>
<?php }} ?>

<!-- =========== Modal ============ -->
     
                </div>
            </form>
        </div>
	</div>
</div>
<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
<?php
}
else
{
	header("Location:regndlog.php");
}?>
<script type="text/javascript">

const aDatePicker=document.querySelector("#adatepicker");


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd
} 
if(mm<10){
  mm='0'+mm
} 
today = yyyy+'-'+mm+'-'+dd;
aDatePicker.setAttribute("min", today);

 const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");
    let a = 0;
    let count=0;
    plus.addEventListener("click", ()=>{
      a++;
      a = (a < 10) ? "0" + a : a;
      num.innerText = a;
      count++;
      let price=document.getElementById("totalRes").value;
      document.querySelector("#result").innerHTML = "Total: "+(count*price);
    });

    minus.addEventListener("click", ()=>{
      if(a > 0){
        a--;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
        count--;
        let price=document.getElementById("totalRes").value;
        document.querySelector("#result").innerHTML = "Total: "+(count*price);
      }
    });
    const pl = document.querySelector(".pl"),
    min = document.querySelector(".min"),
    number = document.querySelector(".number");
    let b = 0;
    pl.addEventListener("click", ()=>{
      b++;
      b = (b < 10) ? "0" + b : b;
      number.innerText = b;
      count++;
      let price=document.getElementById("totalRes").value;
        document.querySelector("#result").innerHTML = "Total: "+(count*price);
    });

    min.addEventListener("click", ()=>{
      if(b > 0){
        b--;
        b = (b < 10) ? "0" + b : b;
        number.innerText = b;
        count--;
        let price=document.getElementById("totalRes").value;
        document.querySelector("#result").innerHTML = "Total: "+(count*price);
      }
    });
</script>