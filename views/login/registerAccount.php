<?php

  /**
   * 
   * The purpose of this method is to create the body of the form to create the records.
   * 
   */


  function registerUserNewForm() {
    $html = '';

    $html.=' <div class="form-title">Register Account</div>
              <form id="create-user-form" method="post" onsubmit="return false">
                  
                <div class="form-group">
                  <input type="text" id="username" name="username" class="form-control rounded-left" placeholder="Username" required="">
                  <i class="validation"><span></span><span></span></i>
                </div>
                </br>  
                <div class="form-group">
                <input type="email" id="email" name="email" class="form-control rounded-left" placeholder="Email" required="">
                <i class="validation"><span></span><span></span></i>
                </div>
                </br>  
                <div class="form-group">
                  <input type="tel" id="phonenumber" name="phonenumber" class="form-control rounded-left" placeholder="Phone Number" required="">
                  <i class="validation"><span></span><span></span></i>
                </div>
                </br>  
                <div class="form-group">
                  <input type="password" id="password" name="password" class="form-control rounded-left" placeholder="Password" required="">
                  <i class="validation"><span></span><span></span></i>
                </div>
                </br>  
                <div class="form-group">
                  <button type="button" class="btn form-button form-button-size" onclick="RegisterNewUserFormSubmit()" id="login" class="btn btn-primary rounded submit p-3 px-5">Register Now</button>
                </div>
                </br>
              </form>
              <div id="create-account-wrap">
                <p>Do you have an account ? <span class="form-link" onclick="GoHome()"><strong><u>Sign in</u></strong></span><p>
              </div>';

    echo $html;
  }
?>