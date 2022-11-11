<?php

  require_once "../../src/db/connect.php";

  // Initialize the session
  session_start();
  
  // Check if the doctor is already logged in, if yes then redirect his dashboard
  if(isset($_SESSION["admin-loggedin"]) && $_SESSION["admin-loggedin"] === true){
    header("location: admin-dashboard.php");
    exit;
  }
  
  $username = $password = "";
  $usernameErr = $passwordErr = $loginErr = "";
  
  // Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $usernameErr = "Please enter username.";
    } else {
        $username = $_POST["username"];
    }
      
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
      $passwordErr = "Please enter your password.";
    } else{
      $password = trim($_POST["password"]);
    }
      
    // Validate credentials
    if (empty($usernameErr) && empty($passwordErr)){
      // Prepare a select statement
      $sql = "SELECT id, username, password FROM admin WHERE username = ?";
          
      if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_username);
              
        // Set parameters
        $param_username = $username;
              
        // Attempt to execute the prepared statement
        if($stmt->execute()){

          $stmt->store_result();
                  
          // Check if username exists, if yes then verify password
          if($stmt->num_rows == 1){      
            
            $stmt->bind_result($id, $username, $hashed_password);

            if($stmt->fetch()){
              
              // Admin will created only from phpmyadmin, selectin MD5 function to encrypt the password
              if (md5($password) == $hashed_password) {
                // Password is correct, so start a new session
                session_start();
                              
                // Store data in session variables
                $_SESSION["admin-loggedin"] = true;
                $_SESSION["id"] = $id;                           
                              
                // Redirect user to welcome page
                header("location: admin-dashboard.php");
              } else {
                // Password is not valid
                $loginErr = "Invalid username or password.";
              }
            }
          } else {
            // Username is not valid
            $loginErr = "Invalid username or password.";
          }
        } else {
          echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
      }  
    }

    // Close connection
    $mysqli->close();
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/login-register.css" />
    <title>DocWebox - Welcome Admin!</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="./login.php"><img src="../resources/logos/logo-back-transparent.png" alt="DocWebox logo back" class="nav__logo" id="logo" /></a>
      </nav>
    </header>
    <section class="my-5 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 section-img" id="admin-c">
            <img src="../resources/images/admin-photo.png" class="mx-auto d-block" />
          </div>
          <div class="col-lg-6 section-form">
            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h4 class="font-weigth-bold header">Welcome Admin!</h4>
              <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-7">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" class="form-control my-2 p-2 <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username" name="username" autofocus required/>
                  <span class="invalid-feedback"><?php echo $usernameErr; ?></span>
                </div>
              </div>
              <div class="form-row d-flex justify-content-center align-items-center">
                <div class="col-lg-7">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" class="form-control my-2 p-2 <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" placeholder="Password" name="password" required/>
                  <span class="invalid-feedback"><?php echo $passwordErr; ?></span>
                  <span class="invalid-feedback"><?php echo $loginErr; ?></span>
                </div>
              </div>
              <div class="form-row d-flex justify-content-center align-items-center">
                <div class="col-lg-7">
                  <button type="submit" class="btns my-2 p-2 first-btn mt-4" id="admin-first-btn">Login as a Admin</button>
                </div>
              </div>
            </form>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
