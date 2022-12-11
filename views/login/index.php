<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
</head>
<body>
  <div id="login-form-wrap">
    <div class="form-title">Login</div>
    <form id="login-form">
      <div class="form-group">
        <input type="text" id="username" name="username" class="form-control rounded-left" placeholder="Username" required="">
        <i class="validation"><span></span><span></span></i>
      </div>
      <br>
      <div class="form-group d-flex">
        <input type="password" id="password" name="password" class="form-control rounded-left" placeholder="Password" required="">
        <i class="validation"><span></span><span></span></i>
      </div>
      <br>
      <div class="form-group">
        <button type="button" class="btn form-button form-button-size" onclick="validateCredentials()" id="login" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
      </div>
      <br>
    </form>
    <div id="create-account-wrap">
      <p>don't have an account? 
        <a onclick="RegisterNewUser()">
          <span class="form-link">
            <strong><u>Create Account</u></strong>
          </span>
        </a>
      <p>
    </div>
  </div>

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
