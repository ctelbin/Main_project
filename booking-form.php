<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/bookform.css" />
    
    <input type="hidden" id="totalRes">
 <?php 
$pid=intval($_GET['pkgid']);
$uname=($_GET['uname']);

echo $sql = "SELECT PackagePrice,PackageName from tbltourpackages where PackageId=$pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{

foreach($results as $result)
{	
 ?>
 <script>
   document.getElementById('totalRes').value=<?php echo htmlentities($result->PackagePrice); ?>
 </script>
 <?php
   
}}
?>



<form align="center" class="bmain">
    
    <div  class="main">
      <p>Selected Package : <?php echo htmlentities($result->PackageName); ?></p>
        <p class="m">Fill in Your Details</p>
 

     <div class="input city">
  <i class="fa fa-plane"></i>
   Departure City :
 <select name="cities" id="ct" onchange="changestatus()" class="select">
              <option value="" disabled selected hidden>Please Select</option>
              <option value="Coimbatore" class="company" id="company">Coimbatore</option>
              <option value="kerala">Kerala</option>
              <option value="Bangalore">Bangalore</option>
            </select>
    Tour Type:
  <select name="users" id="user" onchange="changestatus()" class="select">
              <option value="" disabled selected hidden>Select Any</option>
              <option value="Sta" class="company" id="company">Family package</option>
              <option value="Del">Couple package</option>
              <option value="Pre">Bachelor's Package</option>
            </select>
</div>

<div class="input type">
   
 <i class="fa fa-user"></i>
   Select Travellers  :
</div>

<div class="mainwr">
  <label class="ad">Adult</label>
   <div class="wrapper1">
    
    <span class="minus">-</span>
    <span class="num">00</span>
    <span class="plus">+</span>
  </div>
  <label class="ch">Child</label>
  <div class="wrapper2">
    
    <span class="min">-</span>
    <span class="number">00</span>
    <span class="pl">+</span>
  </div
  
</div>
<div id="result">
  <label id="total">Total</label>
</div>

</div>
  <script>
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

// var c=parseInt(a)+parseInt(b);
// document.querySelector("#result").innerHTML = "Total: "+c;

// plus.addEventListener('click',()=>{
//   var c=parseInt(a)+parseInt(b);
  
// });
// minus.addEventListener('click',()=>{
//   var c=parseInt(a)-parseInt(b);
//   count--;
//   document.querySelector("#result").innerHTML = "Total: "+count;
// });
// pl.addEventListener('click',()=>{
//   var c=parseInt(a)+parseInt(b);
//   count++;
//   document.querySelector("#result").innerHTML = "Total: "+count;
// });
// min.addEventListener('click',()=>{
//   var c=parseInt(a)-parseInt(b);
//   count--;
//   document.querySelector("#result").innerHTML = "Total: "+count;
// });
  </script>


  <input type="submit" value="Submit">
</div>
</form>
 
</body>
</html>