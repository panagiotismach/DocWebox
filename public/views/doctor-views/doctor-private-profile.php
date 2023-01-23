<?php
    require_once "../../../src/scripts/configuration/init.php";
    
    require "../../../src/db/connect.php";
    require "../../../src/scripts/models/doctor.php";
    require "../../../src/scripts/auth/auth-doctor.php";

  	include '../includes/file-begin/file-begin.php';

    if(isset($_SESSION["doctorObj"])) {
      $doctorObj = unserialize($_SESSION['doctorObj']);
    } else {
      $doctorObj = new Doctor("", "", "", "", "", "", "", "", "", "");
    }

    // Define values that will appeared at the first visit of the page
    $currFirstname = $doctorObj->firstname;
    $currLastname = $doctorObj->lastname;
    $currPhone = $doctorObj->phone;
    $currVat = $doctorObj->vat;
    $currLocation = $doctorObj->location;
    $currPatients = $doctorObj->num_patients;
    $currPublications = $doctorObj->num_publications;
    $currExperience = $doctorObj->work_experience_years;
    $currBio = $doctorObj->bio;
    $currSpecialization = $doctorObj->specialization;
    $currImage = $doctorObj->image;
    $currUsername = $doctorObj->username;
    $currEmail = $doctorObj->email;
?>
    <link rel="stylesheet" href="../../styles/doctor-views-styles/doctor-private-profile.css" />
    <script src="../../src/js/utils/navs/doctor-prv-profile-menu-navigator.js" defer></script>
    <script>
      const doctorid = <?php echo $doctorObj->id?>;
      const template = "templateForDoctorPrivateProfile";
      const parentElPatients = "#patients-container";
    </script>
    <script type="module" src="../../src/js/controllers/control-my-patients.js"></script>
    <script type="module" src="../../src/js/controllers/control-doctor-appointments.js"></script>
<?php
    include '../includes/headers/doctor-view-header.php';
?>
<?php
    // Define errors after form submition
    $firstnameSetError = $lastnameSetError = $phoneSetError = $vatSetError = $locationSetError = $patientsSetError = $publicationsSetError = 
    $experienceSetError = $specializationSet = $imageSetError = $usernameSetError = $emailSetError = $currPasswordSetError = $newPasswordSetError = 
    $confirmNewPasswordSetError = $updatesMessage = "";

    // Define new values after form submition
    $firstnameSet = $lastnameSet = $phoneSet = $vatSet = $locationSet = $patientsSet = $publicationsSet = $experienceSet = $bioSet = $usernameSet = $emailSet = $newPasswordSet = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      if (isset($_POST['submit-non-sensitive'])) {

        // Check if new firstname is filled
        if(empty(trim($_POST["firstname"]))){
            $firstnameSetError = "Please enter firstname.";
            $currFirstname = "";
        } else {
            $firstnameSet = $_POST["firstname"];
        }

        // Check if new lastname is filled
        if(empty(trim($_POST["lastname"]))){
          $lastnameSetError = "Please enter lastname.";
          $currLastname = "";
        } else {
          $lastnameSet = $_POST["lastname"];
        }

        // Check if new phone is filled
        if(empty(trim($_POST["phone"]))){
          $phoneSetError = "Please enter phone.";
          $currPhone = "";
        } else {
          $phoneSet = $_POST["phone"];
        }

        // Check if new vat is filled
        if(empty(trim($_POST["vat"]))){
          $vatSetError = "Please enter VAT number.";
          $currVat = "";
        } else {
          $vatSet = $_POST["vat"];
        }

        // Check if new Location is filled
        if(empty(trim($_POST["location"]))){
          $locationSetError = "Please enter your office location.";
          $currLocation = "";
        } else {
          $locationSet = $_POST["location"];
        }

        if (!ctype_digit($_POST["patients"])) {
          $patientsSetError = "Input must be a number.";
          $currPatients = "";
        } else {
          $patientsSet = (int)$_POST["patients"];
        }

        if (!ctype_digit($_POST["publications"])) {
          $publicationsSetError = "Input must be a number.";
          $currPublications = "";
        } else {
          $publicationsSet = (int)$_POST["publications"];
        }

        if (!ctype_digit($_POST["years"])) {
          $experienceSetError = "Input must be a number.";
          $currExperience = "";
        } else {
          $experienceSet = (int)$_POST["years"];
        }

        // No checks need. Field is not essential
        $currBio = $bioSet = $_POST["bio"]; 

        // No checks need. Fields will have as first value, this that was selected from register
        $currSpecialization = $specializationSet = $_POST["specialization"];
      

        // Check if new profile picture is filled
        if(!empty($_FILES["profile-picture"]['name']) && $_FILES['profile-picture']['size'] != 0){
          $currImage = $_FILES["profile-picture"]["name"];
          $ext = pathinfo($currImage, PATHINFO_EXTENSION);
          $currImage = $doctorObj->username . time() . "." . $ext;
          $tempname = $_FILES["profile-picture"]["tmp_name"];
          $folder = "../../../src/resources/profile-images/doctors/" . $currImage;

          // Now let's move the uploaded image into the folder: image
          if (move_uploaded_file($tempname, $folder)) {
            $imageSetError = "";
          } else {
            $imageSetError = "Failed to upload profile image!";
          }
        }

        if (empty($firstnameSetError) && empty($lastnameSetError) && empty($phoneSetError) && empty($vatSetError) && empty($locationSetError) && 
            empty($patientsSetError) && empty($publicationsSetError) && empty($experienceSetError) && empty($imageSetError) && !empty($doctorObj->id)) {

           $curl = curl_init();
           curl_setopt_array($curl, array(
             CURLOPT_URL => 'http://localhost/docwebox/src/scripts/APIs/doctor.php',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'PUT',
             CURLOPT_POSTFIELDS =>"{
              \"id\" : \"".$doctorObj->id."\",
              \"firstname\" : \"".$firstnameSet."\",
              \"lastname\" : \"".$lastnameSet."\",
              \"phone\" : \"".$phoneSet."\",
              \"vat\" : \"".$vatSet."\",
              \"location\" : \"".$locationSet."\",
              \"num_patients\" : \"".$patientsSet."\",
              \"num_publications\" : \"".$publicationsSet."\",
              \"work_experience_years\" : \"".$experienceSet."\",
              \"bio\" : \"".$bioSet."\",
              \"specialization\" : \"".$specializationSet."\",
              \"image\" : \"".$currImage."\"
              }",
             CURLOPT_HTTPHEADER => array(
               'Content-Type: application/json'
             ),
           ));
           
           $response = curl_exec($curl);
           
           curl_close($curl);

           $responseobj = json_decode($response);

           $_SESSION["doctorObj"] = serialize($responseobj);
           $doctorObj = unserialize($_SESSION['doctorObj']);

           // Update values in the fields after the refresh of the page on submit
           $currFirstname = $doctorObj->firstname;
           $currLastname = $doctorObj->lastname;
           $currPhone = $doctorObj->phone;
           $currVat = $doctorObj->vat;
           $currLocation = $doctorObj->location;
           $currPatients = $doctorObj->num_patients;
           $currPublications = $doctorObj->num_publications;
           $currExperience = $doctorObj->work_experience_years;
           $currBio = $doctorObj->bio;
           $currSpecialization = $doctorObj->specialization;
           $currImage = $doctorObj->image;
           $currUsername = $doctorObj->username;
           $currEmail = $doctorObj->email;

           $updatesMessage = "Successful update!";
        } else {
           $updatesMessage = "Fields are missing!";
        }
      } else if (isset($_POST['submit-sensitive'])){
        
        if (empty(trim($_POST["username"]))){
          $usernameSetError = "Please enter a username.";
          $currUsername = "";
        } else if (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
          $usernameSetError = "Username can only contain letters, numbers, and underscores.";
          $currUsername = "";
        }

        if (empty(trim($_POST["email"]))) {
          $emailSetError = "Please enter a email.";
          $currEmail = "";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $emailSetError = "Invalid email address format!";
          $currEmail = "";
        } 

        // Check if password fields edited
        if (!empty(trim($_POST["current-password"])) || !empty(trim($_POST["new-password"])) || !empty(trim($_POST["confirm-new-password"]))) {

          if (empty(trim($_POST["current-password"]))) {
            $currPasswordSetError = "You need to provide your current password first!";
          } else {
            $sql = "SELECT password FROM doctor WHERE username = ?";
          
            if($stmt = $mysqli->prepare($sql)){
              // Bind variables to the prepared statement as parameters
              $stmt->bind_param("s", $doctorObj->username);
                    
              // Attempt to execute the prepared statement
              if($stmt->execute()){
      
                $stmt->store_result();
                        
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                   
      
                  $stmt->bind_result($stored_hashed_password);
      
                  if($stmt->fetch()){
      
                    if (password_verify($_POST["current-password"], $stored_hashed_password)) {

                      if (empty(trim($_POST["new-password"]))) {
                        $newPasswordSetError = "Please enter your new password.";
                      } else if (strlen(trim($_POST["new-password"])) < 8) {
                        $newPasswordSetError = "Password must have at least 8 characters.";
                      } else {

                        if (empty(trim($_POST["confirm-new-password"]))) {
                          $confirmNewPasswordSetError = "Please confirm your password.";
                        } else {
                          if (strcmp($_POST["new-password"], $_POST["confirm-new-password"]) == 0) {
                            $newPasswordSet = password_hash($_POST["new-password"], PASSWORD_DEFAULT);
                          } else {
                            $confirmNewPasswordSetError = "Password did not match.";
                          }
                        }
                      }
                    } else {
                      $currPasswordSetError = "Wrong current password! Please try again.";
                    }
                  }
                }
              }
            }
          }
        }

        //New username has valid form
        if (empty($usernameSetError) && empty($emailSetError) && empty($currPasswordSetError) && empty($newPasswordSetError) 
            && empty($confirmNewPasswordSetError) && !empty($doctorObj->id)) {

          // Check if the username is changed 
          if (strcmp($doctorObj->username, $_POST["username"]) !== 0) {
            // Prepare a select statement
            $sql = "SELECT id FROM doctor WHERE username = ?";
            
            if($stmt_username = $mysqli->prepare($sql)) {
              // Bind variables to the prepared statement as parameters
              $stmt_username->bind_param("s", $_POST["username"]);
                                            
              // Attempt to execute the prepared statement
              if($stmt_username->execute()){
                // store result
                $stmt_username->store_result();
                                
                if($stmt_username->num_rows == 1) {
                  $usernameSetError = "Username already in use";
                  $currUsername = "";
                  $updatesMessage = "Fields are missing!";
                } else {
                  $usernameSet = $currUsername = $_POST["username"];
                }
              }
            }
          } else {
            $usernameSet = $doctorObj->username;
          }

          // Check if the email is changed 
          if (strcmp($doctorObj->email, $_POST["email"]) !== 0) {
            // Prepare a select statement
            $sql = "SELECT id FROM doctor WHERE email = ?";

            if ($stmt_email = $mysqli->prepare($sql)) {
              // Bind variables to the prepared statement as parameters
              $stmt_email->bind_param("s", $_POST["email"]);

              // Attempt to execute the prepared statement
              if($stmt_email->execute()){
                // store result
                $stmt_email->store_result();
                                
                if($stmt_email->num_rows == 1) {
                  $emailSetError = "Email already in use";
                  $currEmail = "";
                  $updatesMessage = "Fields are missing!";
                } else {
                  $emailSet = $currEmail = $_POST["email"];
                }
              }
            }
          } else {
            $emailSet = $doctorObj->email;
          }

          // Check for new errors that might we will have 
          if (empty($usernameSetError) && empty($emailSetError)) {

            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://localhost/docwebox/src/scripts/APIs/doctor.php',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS =>"{
              \"id\" : \"".$doctorObj->id."\",
              \"username\" : \"".$usernameSet."\",
              \"email\" : \"".$emailSet."\",
              \"password\" : \"".$newPasswordSet."\"
              }",
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);

            $responseobj = json_decode($response);

            $_SESSION["doctorObj"] = serialize($responseobj);
            $doctorObj = unserialize($_SESSION['doctorObj']);
            // Update values in the fields
            $currFirstname = $doctorObj->firstname;
            $currLastname = $doctorObj->lastname;
            $currPhone = $doctorObj->phone;
            $currVat = $doctorObj->vat;
            $currLocation = $doctorObj->location;
            $currPatients = $doctorObj->num_patients;
            $currPublications = $doctorObj->num_publications;
            $currExperience = $doctorObj->work_experience_years;
            $currBio = $doctorObj->bio;
            $currSpecialization = $doctorObj->specialization;
            $currImage = $doctorObj->image;
            $currUsername = $doctorObj->username;
            $currEmail = $doctorObj->email;

            $updatesMessage = "Successful update!";
          } else {
            $updatesMessage = "Fields are missing!";
          }
        } else {
          $updatesMessage = "Fields are missing!";
        }
      }
    }
?>
  <div class="header__wrapper">
    <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
          <?php
              if (empty($doctorObj->image)) {
                $file = "../../resources/images/pfp/user-pfp.png";
              } else {
                $file = "../../../src/resources/profile-images/doctors/$doctorObj->image";
              }
            ?>
            <img src=<?php echo $file ?> alt="User Profile Pic" />
            <span></span>
          </div>
          <h2>Dr. <?php echo $doctorObj->firstname. " " .$doctorObj->lastname ?></h2>
          <h5><?php echo $doctorObj->specialization ?></h5>
          <p><?php echo $doctorObj->location ?></p>
          <p>Phone: <?php echo $doctorObj->phone ?></p>
          <ul class="about profile-ul">
            <li><span><?php echo $doctorObj->num_patients ?></span>Patients</li>
            <li><span><?php echo $doctorObj->num_publications ?></span>Publications</li>
            <li><span><?php echo $doctorObj->work_experience_years ?></span>Years of Experience</li>
          </ul>
          <div class="content">
            <p><?php echo $doctorObj->bio ?></p>
            <ul class="profile-ul">
              <div class="icon">
                <a href="tel: <?php echo $doctorObj->phone ?>"><i class="fa-sharp fa-solid fa-phone"></i></a>
              </div>
              <div class="icon">
                <a href="mailto: <?php echo $doctorObj->email ?>"><i class="fa-solid fa-envelope"></i></a>
              </div>
              <div class="icon"><a href="https://www.google.com/maps/place/<?php echo $doctorObj->location ?>" target="_blank">
                <i class="fa-solid fa-location-dot"></i></a>
              </div>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <?php 
            if($updatesMessage == "Successful update!"){
              echo "
              <div class='success-message handle-visibility'>
                <i class='fa-solid fa-check' style='color:white; margin-top: 2px; margin-left:2px; '></i>
                <h3>Successful update!</h3>
              </div>";}
            else if($updatesMessage == "Fields are missing!"){
              echo "
              <div class='reject-message handle-visibility'>
              <i class='fa-solid fa-xmark' style='color:white; margin-top: 2px; margin-left:2px;'></i>
              <h3>Fields are missing..</h3></div>";
            }
          ?>
          <nav>
            <ul class="profile-ul">
              <li><a id="a" class="selected" onclick='menu("a")' >APPOINTMENTS</a></li>
              <li><a id="p"  onclick='menu("p")' >PATIENTS</a></li>
              <li><a id="ps" onclick='menu("ps")' >PROFILE SETTINGS</a></li>
              <li><a id="si" onclick='menu("si")' >SENSITIVE INFORMATION</a></li>
            </ul>
            <a href="doctor-dashboard.php"><button>HANDLE CALENDAR</button></a>
          </nav>
          <div class="card-container" id="appointment-container">
          </div>
          <div class="card-container hide" id="patients-container">
          </div>
          <div class="profile-settings hide" id="profile-settings" >
            <form enctype="multipart/form-data" class="personal-information" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2>Update your profile</h2>
              <div class="inputBox">
                <input type="text" name="firstname" class="<?php echo (!empty($firstnameSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currFirstname ?>" required >
                <span>First name</span>
                <p class="invalid-feedback-form"><?php echo $firstnameSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="lastname" class="<?php echo (!empty($lastnameSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currLastname ?>" required >
                <span>Last name</span>
                <p class="invalid-feedback-form"><?php echo $lastnameSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="phone" class="<?php echo (!empty($phoneSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currPhone ?>" required >
                <span>Phone</span>
                <p class="invalid-feedback-form"><?php echo $phoneSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="vat" class="<?php echo (!empty($vatSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currVat ?>" required >
                <span>VAT Number</span>
                <p class="invalid-feedback-form"><?php echo $vatSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="location" class="<?php echo (!empty($locationSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currLocation ?>" required >
                <span>Location</span>
                <p class="invalid-feedback-form"><?php echo $locationSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="number" min="0" name="patients" class="<?php echo (!empty($patientsSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currPatients ?>" required >
                <span>Patients</span>
                <p class="invalid-feedback-form"><?php echo $patientsSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="number" min="0" name="publications" class="<?php echo (!empty($publicationsSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currPublications ?>" required>
                <span>Publications</span>
                <p class="invalid-feedback-form"><?php echo $publicationsSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="number" min="0" name="years" class="<?php echo (!empty($experienceSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currExperience ?>" required>
                <span>Years of Experience</span>
                <p class="invalid-feedback-form"><?php echo $experienceSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="bio" maxlength="255" value="<?php echo $currBio ?>">
                <span>Short Bio</span>
              </div>
              <div class="">
                <label class="form-label" for="specialization">Please, select your Specialization:</label>
                <select id="Doc-Specialities" name="specialization">
                  <option <?php if ($currSpecialization == "General doctor") { ?>selected="true" <?php }; ?> value="General doctor">General doctor</option>
                  <option <?php if ($currSpecialization == "Pathologist") { ?>selected="true" <?php }; ?> value="Pathologist">Pathologist</option>
                  <option <?php if ($currSpecialization == "Pediatrician") { ?>selected="true" <?php }; ?> value="Pediatrician">Pediatrician</option>
                  <option <?php if ($currSpecialization == "Urologist andrologist") { ?>selected="true" <?php }; ?> value="Urologist andrologist">Urologist andrologist</option>
                  <option <?php if ($currSpecialization == "Gynecologist") { ?>selected="true" <?php }; ?> value="Gynecologist">Gynecologist</option>
                  <option <?php if ($currSpecialization == "Ophthalmologist") { ?>selected="true" <?php }; ?> value="Ophthalmologist">Ophthalmologist</option>
                  <option <?php if ($currSpecialization == "General surgeon") { ?>selected="true" <?php }; ?> value="General surgeon">General surgeon</option>
                  <option <?php if ($currSpecialization == "Dental Surgeon") { ?>selected="true" <?php }; ?> value="Dental Surgeon">Dental Surgeon</option>
                  <option <?php if ($currSpecialization == "Dentist") { ?>selected="true" <?php }; ?> value="Dentist">Dentist</option>
                  <option <?php if ($currSpecialization == "Cardiologist") { ?>selected="true" <?php }; ?> value="Cardiologist">Cardiologist</option>
                  <option <?php if ($currSpecialization == "Endocrinologist") { ?>selected="true" <?php }; ?> value="Endocrinologist">Endocrinologist</option>
                  <option <?php if ($currSpecialization == "Dermatologist-Venereologist") { ?>selected="true" <?php }; ?> value="Dermatologist-Venereologist">Dermatologist-Venereologist</option>
                  <option <?php if ($currSpecialization == "Anesthetist") { ?>selected="true" <?php }; ?> value="Anesthetist">Anesthetist</option>
                  <option <?php if ($currSpecialization == "Allergist") { ?>selected="true" <?php }; ?> value="Allergist">Allergist</option>
                  <option <?php if ($currSpecialization == "Dietitian-Nutritionist") { ?>selected="true" <?php }; ?> value="Dietitian-Nutritionist">Dietitian-Nutritionist</option>
                  <option <?php if ($currSpecialization == "Oncologist") { ?>selected="true" <?php }; ?> value="Oncologist">Oncologist</option>
                  <option <?php if ($currSpecialization == "Orthopedist") { ?>selected="true" <?php }; ?> value="Orthopedist">Orthopedist</option>
                  <option <?php if ($currSpecialization == "Pulmonologist") { ?>selected="true" <?php }; ?> value="Pulmonologist">Pulmonologist</option>
                  <option <?php if ($currSpecialization == "Physiotherapist") { ?>selected="true" <?php }; ?> value="Physiotherapist">Physiotherapist</option>
                  <option <?php if ($currSpecialization == "Psychiatrist") { ?>selected="true" <?php }; ?> value="Psychiatrist">Psychiatrist</option>
                  <option <?php if ($currSpecialization == "Otorhinolaryngologist") { ?>selected="true" <?php }; ?> value="Otorhinolaryngologist">Otorhinolaryngologist</option>
                </select>
              </div>
              <div class="inputBox">
                <input type="file" name="profile-picture" value="">
                <span>Profile picture</span>
              </div>
              <div class="inputBox">
                <input type="submit" name="submit-non-sensitive" value="Save" id="submit-non-sensitive">
              </div>
            </form>
          </div>
          <div class="sensitive-information hide" id="sensitive-information" >
            <form class="personal-information"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2>Settings</h2>
              <div class="inputBox">
                <input type="text" name="username" class="<?php echo (!empty($usernameSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currUsername ?>" required >
                <span>Username</span>
                <p class="invalid-feedback-form"><?php echo $usernameSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="text" name="email" class="<?php echo (!empty($emailSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currEmail ?>" required >
                <span>Email</span>
                <p class="invalid-feedback-form"><?php echo $emailSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="password" name="current-password" class="<?php echo (!empty($currPasswordSetError)) ? 'is-invalid-update' : ''; ?>" placeholder="**********" >
                <span>Your current password</span>
                <p class="invalid-feedback-form"><?php echo $currPasswordSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="password" name="new-password" class="<?php echo (!empty($newPasswordSetError)) ? 'is-invalid-update' : ''; ?>" placeholder="**********">
                <span>New password</span>
                <p class="invalid-feedback-form"><?php echo $newPasswordSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="password" name="confirm-new-password" class="<?php echo (!empty($confirmNewPasswordSetError)) ? 'is-invalid-update' : ''; ?>" placeholder="**********">
                <span>Confirm new password</span>
                <p class="invalid-feedback-form"><?php echo $confirmNewPasswordSetError; ?></p>
              </div>
              <div class="inputBox">
                <input type="submit" name="submit-sensitive" value="Save" id="submit-sensitive">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include '../includes/footers/doctor-view-footer.php';
?>