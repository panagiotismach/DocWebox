<?php

    require "../../src/db/connect.php";

    // Define variables and initialize with empty values
    $firstname = $lastname = $username = $email = $phone = $password = $confirmPassword =  "";
    $firstnameErr = $lastnameErr = $usernameErr = $emailErr = $phoneErr = $passwordErr = $confirmPasswordErr =  "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $phone = $_POST["phone"];

        // Validate username
        if (empty(trim($_POST["firstname"]))){
            $firstnameErr = "Please enter a Firstname.";
        } 

        if (empty(trim($_POST["lastname"]))){
            $lastnameErr = "Please enter a Lastname.";
        }

        if (empty(trim($_POST["username"]))){
            $usernameErr = "Please enter a username.";
        } else if (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
            $usernameErr = "Username can only contain letters, numbers, and underscores.";
        } 
        
        if (empty(trim($_POST["email"]))) {
            $emailErr = "Please enter a email.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address format!";
        }  
        
        if (empty(trim($_POST["phone"]))) {
            $phoneErr = "Please enter a phone.";
        }

        if (empty($firstnameErr) && empty($lastnameErr) && empty($usernameErr) && empty($emailErr) && empty($phoneErr)) {
          // Prepare a select statement
          $sql = "SELECT id FROM patient WHERE username = ?";
          
          if($stmt_username = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt_username->bind_param("s", $username);
                                          
            // Attempt to execute the prepared statement
            if($stmt_username->execute()){
              // store result
              $stmt_username->store_result();
                              
              if($stmt_username->num_rows == 1) {
                $usernameErr = "Username not available!";
              } else {

                // Prepare a select statement
                $sql = "SELECT id FROM patient WHERE email = ?";

                if ($stmt_email = $mysqli->prepare($sql)) {
                  // Bind variables to the prepared statement as parameters
                  $stmt_email->bind_param("s", $email);

                  // Attempt to execute the prepared statement
                  if($stmt_email->execute()){
                    // store result
                    $stmt_email->store_result();
                                    
                    if($stmt_email->num_rows == 1) {
                      $emailErr = "Email not available!";
                    } else {

                      // Validate password
                      if(empty(trim($_POST["password"]))){
                          $passwordErr = "Please enter a password.";     
                      } else if(strlen(trim($_POST["password"])) < 8){
                          $passwordErr = "Password must have at least 8 characters.";
                      } else {
                          $password = trim($_POST["password"]);
                      }

                      // Validate confirm password
                      if(empty(trim($_POST["confirm-password"]))){
                          $confirmPasswordErr = "Please confirm password.";     
                      } else {
                        $confirmPassword = trim($_POST["confirm-password"]);
                        if(empty($passwordErr) && ($password != $confirmPassword)){
                            $confirmPasswordErr = "Password did not match.";
                        }
                      }

                      if(empty($passwordErr) && empty($confirmPasswordErr)){

                        // Prepare an insert statement
                        $sql = "INSERT INTO patient (firstname, lastname, username, email, password, phone) VALUES (?, ?, ?, ?, ?, ?)";
                        if($stmt = $mysqli->prepare($sql)){
                          // Bind variables to the prepared statement as parameters
                          $stmt->bind_param("ssssss", $firstname, $lastname, $param_username, $email, $param_password, $phone);
                          
                          // Set parameters
                          $param_username = $username;
                          $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                          
                          // Attempt to execute the prepared statement
                          if($stmt->execute()){
                              // Redirect to login page
                              header("location: login-patient.php");
                          } else{
                              echo "Oops! Something went wrong. Please try again later.";
                          }
          
                          // Close statement
                          $stmt->close();
                        }
                      }

                      // Close connection
                      $mysqli->close();
                    }
                  } else {
                    echo "Oops! Something went wrong. Please try again later.";
                  }
                  // Close statement
                  $stmt_email->close();
                } 
              }
            }
          } else {
              echo "Oops! Something went wrong. Please try again later.";
          }
          // Close statement
          $stmt_username->close();
       }
    }
?>

<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/login-register.css">
      <title>DocWebox - Find your Doctor!</title>
    </head>
    <body>
    <header>
      <nav>
        <a href="./sign-up.php"><img src="../resources/logos/logo-back-transparent.png" alt="DocWebox logo back" class="nav__logo" id="logo" /></a>
      </nav>
    </header>
    <section class="my-5 mx-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-6 section-img" id="patient-c">
              <img src="../resources/logos/main-logo-transparent.png" class="mx-auto d-block">
              <!-- <h4 class="header">Welcome to DocWebox</h4>
              <a href="../../../DocWebox/index.php" id="back-home-patient" class="d-flex justify-content-center align-self-end">Back to home page</a> -->
          </div>
          <div class="col-lg-6 section-form">
              <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h4 class="font-weigth-bold header">Glad to have you on board!</h4>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label" for="firstname">Firstname*</label>
                    <input type="text" class="form-control my-2 p-2 <?php echo (!empty($firstnameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>" placeholder="Firstname" name="firstname" autocomplete="on" required autofocus>
                    <span class="invalid-feedback"><?php echo $firstnameErr; ?></span>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label" for="lastname">Lastname*</label>
                    <input type="text" class="form-control my-2 p-2 <?php echo (!empty($lastnameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>" placeholder="Lastname" name="lastname" autocomplete="on" required>
                    <span class="invalid-feedback"><?php echo $lastnameErr; ?></span>
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label" for="username">Username*</label>
                    <input type="text" class="form-control my-2 p-2 <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username" name="username" autocomplete="on" required>
                    <span class="invalid-feedback"><?php echo $usernameErr; ?></span>
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                   <div class="col-lg-7">
                    <label class="form-label" for="email">Email*</label>
                    <input type="email" class="form-control my-2 p-2 <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" placeholder="Email" name="email" autocomplete="on" required>
                    <span class="invalid-feedback"><?php echo $emailErr; ?></span>
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                   <label class="form-label" for="phone">Phone number*</label>
                   <input type="tel" class="form-control my-2 p-2 <?php echo (!empty($phoneErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>" placeholder="Phone" name="phone" autocomplete="on" required>
                   <span class="invalid-feedback"><?php echo $phoneErr; ?></span>
                 </div>
               </div>
                <div class="form-row d-flex justify-content-center align-items-center" >
                  <div class="col-lg-7">
                    <label class="form-label" for="password">Password*</label>
                    <input type="password" class="form-control my-2 p-2 <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" placeholder="Password" name="password" required>
                    <span class="invalid-feedback"><?php echo $passwordErr; ?></span>
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center" >
                  <div class="col-lg-7">
                    <label class="form-label" for="confirm-password">Confirm Password*</label>
                    <input type="password" class="form-control my-2 p-2 <?php echo (!empty($confirmPasswordErr)) ? 'is-invalid' : ''; ?>" placeholder="Confirm Password" name="confirm-password" required>
                    <span class="invalid-feedback"><?php echo $confirmPasswordErr; ?></span>
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                      <button type="submit" class="btns my-2 p-2 first-btn mt-4" id="patient-first-btn" >Register as a Patient</button>
                  </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="d-flex align-items-center">
                     <hr>
                    </div>
                    <p >Already registered?</p>
                    <div class="d-flex align-items-center">
                      <hr>
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                      <button type="button" class="btns my-2 p-1" id="patient-second-btn">Login as a Patient</button>
                  </div>
              </div>
            </div>
       </section>
       <footer class="footer">
      <img src="../resources/logos/main-logo-transparent.png" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Project owned by 
        <a class="footer__link" target="_blank" href="https://github.com/ics20044/DocWebox">Us</a>.
      </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>