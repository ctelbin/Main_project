<?php
include('includes/config.php');
session_start();
if(isset($_POST['loginsubmit']))
{
$email=$_POST['email'];
$password=md5($_POST['pass']);
$sql ="SELECT `email`,`password`,`status` FROM register WHERE `email`='$email' and `password`='$password' ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
// $stat=$results["status"];
if($query->rowCount() > 0)
{
    foreach($results as $result)
{				
   $stat= htmlentities($result->status);}
$_SESSION['alogin']=$_POST['email'];
if($stat==1){
    
echo "<script type='text/javascript'> document.location = 'companyDashboard.php?uname=$email'; </script>";
}
if($stat==2){
    
echo "<script type='text/javascript'> document.location = 'Home.php'; </script>";
}
if($stat==3){
    
echo "<script type='text/javascript'> document.location = 'companyDashboard.php'; </script>";
}
// echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');
    document.location = 'regndlog.php';
    </script>";

}

}

?>
