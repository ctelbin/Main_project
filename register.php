
<?php
include('includes/config.php');
error_reporting(0);
if(isset($_POST['regsubmit']))
{
$Users=$_POST['users'];
 echo $Users;
  if($Users=="TC")
             {
                 
                $status=1;
             }
             if($Users=="Hotel")
             {
                 $status=2;
             }
             if($Users=="Traveller")
             {
                 $status=3;
             }
             echo $status;
            $Fname=$_POST['fname'];
            if(empty($_FILES["ffile"]["name"])){
                            $filepath=0;
              }
            else{
               
                $upload_dir = './document/TaxReport/';
                $file_tmpname = $_FILES['ffile']['tmp_name'];
                $file_name = $_FILES['ffile']['name'];
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $filepath = $upload_dir . time().".".$file_ext;
            }
            if(move_uploaded_file($file_tmpname, $filepath))
            {
             $Email=$_POST['email'];
             $Password=md5($_POST['pass']);
             $sql="INSERT INTO `register`(`users`, `name`,`File`, `email`, `password`,`status`) VALUES('$Users','$Fname','$filepath','$Email','$Password','$status')";
             echo $sql;     
             $query = $dbh->prepare($sql);
             $query->bindParam(':Users',$Users,PDO::PARAM_STR);
             $query->bindParam(':Fname',$Fname,PDO::PARAM_STR);
             $query->bindParam(':filepath',$filepath,PDO::PARAM_STR);
             $query->bindParam(':Email',$Email,PDO::PARAM_STR);
             $query->bindParam(':Password',$Password,PDO::PARAM_STR);
             $query->execute();
             $lastInsertId = $dbh->lastInsertId();
            }
            else{
                $Email=$_POST['email'];
             $Password=md5($_POST['pass']);
             $sql="INSERT INTO `register`(`users`, `name`, `email`, `password`,`status`) VALUES('$Users','$Fname','$Email','$Password','$status')";    
             $query = $dbh->prepare($sql);
             $query->bindParam(':Users',$Users,PDO::PARAM_STR);
             $query->bindParam(':Fname',$Fname,PDO::PARAM_STR);
             $query->bindParam(':Email',$Email,PDO::PARAM_STR);
             $query->bindParam(':Password',$Password,PDO::PARAM_STR);
             $query->execute();
             $lastInsertId = $dbh->lastInsertId();
            }
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:regndlog.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:regndlog.php');
}
}
?>
<!--Javascript for check email availabilty-->
