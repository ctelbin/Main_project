<?php
session_start();
$useremail = $_SESSION['alogin'];
include('includes/config.php');

if (isset($_POST['pId'])) {
    $pid = $_POST['pId'];
    $useremail = $_POST['userEmail'];
    $fromdate = $_POST['fromDate'];
    $city = $_POST['city'];
    $package = $_POST['pType'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $total = $_POST['totPrice'];
    $status = 0;
    echo $sql = "INSERT INTO tblbooking(`PackageId`,`UserEmail`,`FromDate`,`city`,`type`,`adult`,`child`,`total`,`status`) VALUES('$pid','$useremail','$fromdate','$city','$package','$adult','$child','$total','$status')";

    $query = $dbh->prepare($sql);
    $query->bindParam(':pid', $pid, PDO::PARAM_STR);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
    $query->bindParam(':todate', $todate, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':package', $package, PDO::PARAM_STR);
    $query->bindParam(':adult', $adult, PDO::PARAM_STR);
    $query->bindParam(':child', $child, PDO::PARAM_STR);
    $query->bindParam(':total', $total, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();


    if ($lastInsertId) {
        $msg = "Booked Successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }
}





// if (isset($_POST['payment_id'])) {
//     $total = $_POST['totPrice'];
//     $useremail = $_POST['userEmail'];
//     $payment_id = $_POST['payment_id'];
//     $payment_status = "complete";
//     $added_on = date('Y-m-d h:i:s');
//     $res = mysqli_query($dbh, "insert into payment(userEmail,amount,payment_status,added_on,payment_id) values('$useremail','$total','$payment_status','$added_on','$payment_id')");
//     $_SESSION['OID'] = mysqli_insert_id($dbh);
//     if ($res) {
//         echo "success";
//     }
// }


// if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
//     $payment_id=$_POST['payment_id'];
//     mysqli_query($dbh,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
// }
// 
