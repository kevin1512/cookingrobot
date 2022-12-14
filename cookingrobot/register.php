<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="css/grids.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<?php
session_start();

?>
<body>

<div class="pd-10 mg-t-20 bg-dark rounded">
<div class="ht-65 bd pd-x-20 d-flex align-items-center justify-content-between">
  <h4 class="mg-b-0 tx-bold tx-spacing--2 tx-inverse tx-poppins mg-r-20"><span style="color: white; font-size: 35px;">Cooking</span><span style="color: rgb(6, 193, 103); font-size: 35px;"> Robot</span></h4>
        <ul class="nav nav-white-800 flex-column flex-md-row justify-content-end" role="tablist">
        </ul>
      </div>
      </div>
    
    
    <form action = "user_signup.php"  method = "post" id = "signup form">
        
    
        <div class="d-flex align-items-center justify-content-center ht-700 pd-x-20 pd-xs-x-0">
            <div class="card wd-1000">
                <div class="card-body pd-x-20 pd-xs-40">
                    <h5 class="tx-xs-24 tx-normal tx-gray-900 mg-b-35">Create a New Account:</h5>
                    <div class="row">
                        <label class="col-sm-4 form-control-label">Firstname: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" placeholder="Enter firstname" required name = "first_name" oninvalid="this.setCustomValidity('Enter Your Firstname')" oninput="this.setCustomValidity('')" >
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" placeholder="Enter lastname" name = "last_name" required oninvalid="this.setCustomValidity('Enter Your Lastname')" oninput="this.setCustomValidity('')" >
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="email" class="form-control" placeholder="Enter email address"  name="email" required oninvalid="this.setCustomValidity('Enter Your Email')" oninput="this.setCustomValidity('')">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Password: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="password" class="form-control" id = "pass_word" placeholder="Enter a new password" name = "pass_word" onkeyup = "validatePassword();"  required oninvalid="this.setCustomValidity('Enter Your Password')" oninput="this.setCustomValidity('')" >
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="password" class="form-control" id = "confirm_password" placeholder="Confirm your password" onkeyup = "validatePassword();" required oninvalid="this.setCustomValidity('Enter Your Password')" oninput="this.setCustomValidity('')" >
                    </div>
                  </div>
                  <span id='message'></span>
                  <div class="row mg-t-30">
                
                  <div class="form-layout-footer justify-content-center">
                    <button class="btn btn-info btn-dark">Sign Up</button>
                    <button class="btn btn-info btn-dark disabled"><a href="homepage.php" style="color: white;">Cancel</a></button>
                  </div><!-- form-layout-footer -->
                </div><!-- col-8 -->
              </div>
              </div>
            </div>
          </div>
          <?php
            if(isset($_SESSION['error'])){
              echo '<script type ="text/JavaScript">';  
              echo 'alert("User Already Exists");';  
              echo '</script>';
              unset($_SESSION['error']);
            }
            ?>



        </form>
        <script src = "backend.js"></script>
</body>
</html>