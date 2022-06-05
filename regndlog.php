<?php
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/regndlog.css" />
  <title>Sign in & Sign up Form</title>

  <script>
    function changestatus() {
      var status = document.getElementById("user");
      if (status.value == "TC") {
        document.getElementById("Company").classList.remove("box");
      } else {
        document.getElementById("Company").classList.add("box");
      }
    }
  </script>

  </script>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form id="login-form" action="login.php" method="post" class="sign-in-form">
          <img src="images/logo.jpg" class="logo" alt="" />
          <h2 class="title">Welcome Back</h2>
          <div class="input-field email1">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="email" id="user-l" />
            <div class="error error-hidden">

            </div>
          </div>
          <div class="input-field password1">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" id="password-l" />
            <div class="error error-hidden">

            </div>
          </div>
          <div class="forget">
            <label class="checkbox">
              <input type="checkbox">
              <span class="text">Remember Me</span>
              <span class="checkmark"></span>
            </label>
            <label class="Forgot"><a href="forgot-password.php">Forget Password ? </a> </label>
          </div>
          <input type="submit" value="Login" name="loginsubmit" class="btn solid" id="login-button" />
        </form>
        <form id="reg-form" action="register.php" method="post" enctype="multipart/form-data" class="sign-up-form">
          <img src="images/logo.jpg" class="logo" alt="" />
          <h2 class="title">Sign up</h2>
          <div class="input-field users">
            <i class="fas fa-users"></i>
            <select name="users" id="user" onchange="changestatus()" class="select">
              <option value="" disabled selected hidden>Register as</option>
              <option value="TC" class="company" id="company">Tour Company</option>
              <option value="Traveller">Traveller</option>
            </select>
          </div>
          <div class="input-field name">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="fname" id="user-r" />
            <div class="error"></div>
          </div>
          <div class="input-field box" id="Company">
            <i class="fa fa-file"></i>
            <input type="file" placeholder="Company name" aria-label="Tax Certificate" accept="application/pdf" name="ffile" id="file-r" />
            <div class="error error-hidden">

            </div>
          </div>
          <div class="input-field email">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" id="email-r" />
            <div class="error error-hidden">

            </div>
          </div>
          <div class="input-field password">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" id="pass-r" />
            <div class="error error-hidden">

            </div>
          </div>
          <div class="btn cursor-disable">
            <input type="submit" name="regsubmit" class="btn disabled" value="Sign up" id="reg-btn" />
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            A traveler without observation is a bird without wings..Sign up in our website and be a part of Our Page
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="images/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Leave nothing but footprints, take nothing but photos, kill nothing but time.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="images/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="js/app.js"></script>
  <script type="text/javascript">
    //=============Registeration Form Validation==============
    const regForm = document.querySelector("#reg-form");
    const fullName = document.querySelector("#user-r");
    const email = document.querySelector("#email-r");
    const password = document.querySelector("#pass-r");
    const regSubBtn = document.querySelector("#reg-btn");

    //Error Message Class
    const fullNameError = document.querySelector(".name .error");
    const emailError = document.querySelector(" .email .error");
    const passwordError = document.querySelector(".password .error");
    var UserSubmit = false;
    var fullNameSubmit = false;
    var emailSubmit = false;
    var passwordSubmit = false;




    var nameChk = /^[a-z A-Z]+$/;
    fullName.addEventListener("input", () => {
      if (fullName.value.match(nameChk)) {
        fullNameError.classList.add("error-hidden");
        fullNameError.classList.remove("error-visible");
        fullNameSubmit = true;
      } else if (fullName.value == "") {
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText = "Field cannot be blank";
        fullNameSubmit = false;
      } else {
        fullNameError.classList.add("error-visible");
        fullNameError.classList.remove("error-hidden");
        fullNameError.innerText = "Name should not contain numbers";
        fullNameSubmit = false;
      }
    });
    //Email Validation
    var emailChk = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/;
    email.addEventListener("input", () => {
      if (email.value.match(emailChk)) {
        emailError.classList.add("error-hidden");
        emailError.classList.remove("error-visible");
        emailSubmit = true;
      } else if (email.value == "") {
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText = "Field cannot be blank";
        emailSubmit = false;
      } else {
        emailError.classList.add("error-visible");
        emailError.classList.remove("error-hidden");
        emailError.innerText = "Invalid mail id";
        emailSubmit = false;
      }
    });

    var passchck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;
    password.addEventListener("input", () => {
      if (password.value.match(passchck)) {
        passwordError.classList.add("error-hidden");
        passwordError.classList.remove("error-visible");
        passwordSubmit = true;
      } else if (password.value == "") {
        passwordError.classList.add("error-visible");
        passwordError.classList.remove("error-hidden");
        passwordError.innerText = "Field cannot be blank";
        passwordSubmit = false;
      } else {
        passwordError.classList.add("error-visible");
        passwordError.classList.remove("error-hidden");
        passwordError.innerText = "Password must atleast contain a number , special Character ";
        passwordSubmit = false;
      }
    });

    const buttonCursor = document.querySelector(".btn"); //To avoid poniterevent and cursor problem
    regForm.addEventListener("keyup", () => {
      console.log(fullNameSubmit);
      if (fullNameSubmit == true && emailSubmit == true && passwordSubmit == true) {
        regSubBtn.classList.remove("disabled");
        buttonCursor.classList.remove("cursor-disabled");
      } else {
        regSubBtn.classList.add("disabled");
        buttonCursor.classList.add("cursor-disabled");
      }
    });





    //=============Login Form Validation==============
    const logForm = document.querySelector("#login-form");
    const email1 = document.querySelector("#user-l");
    const password1 = document.querySelector("#password-l");
    const logSubBtn = document.querySelector("#login-btn");

    //Error Message Class
    const emailError1 = document.querySelector(" .email1 .error");
    const passwordError1 = document.querySelector(".password1 .error");
    var emailSubmit = false;
    var passwordSubmit = false;


    var emailChk = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/;
    email1.addEventListener("input", () => {
      if (email1.value.match(emailChk)) {
        emailError1.classList.add("error-hidden");
        emailError1.classList.remove("error-visible");
        emailSubmit = true;
      } else if (email1.value == "") {
        emailError1.classList.add("error-visible");
        emailError1.classList.remove("error-hidden");
        emailError1.innerText = "Field cannot be blank";
        emailSubmit = false;
      } else {
        emailError1.classList.add("error-visible");
        emailError1.classList.remove("error-hidden");
        emailError1.innerText = "Invalid mail id";
        emailSubmit = false;
      }
    });

    var passchck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;
    password1.addEventListener("input", () => {
      if (password1.value.match(passchck)) {
        passwordError1.classList.add("error-hidden");
        passwordError1.classList.remove("error-visible");
        passwordSubmit = true;
      } else if (password1.value == "") {
        passwordError1.classList.add("error-visible");
        passwordError1.classList.remove("error-hidden");
        passwordError1.innerText = "Field cannot be blank";
        passwordSubmit = false;
      } else {
        passwordError1.classList.add("error-visible");
        passwordError1.classList.remove("error-hidden");
        passwordError1.innerText = "Password must atleast contain a number , special Character ";
        passwordSubmit = false;
      }
    });
  </script>