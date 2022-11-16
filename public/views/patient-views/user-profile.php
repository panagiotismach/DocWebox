<?php
    require_once "../../../src/scripts/configuration/init.php";
    require "../../../src/db/connect.php";
    require "../../../src/scripts/models/patient.php";
  	include '../../views/includes/file-begin/file-begin.php';

    session_start();

    if(isset($_SESSION["patientObj"])) {
      $patientObj = unserialize($_SESSION['patientObj']);
    } else {
      $patientObj = new Patient("", "", "", "", "", "", "", "", "", "");
    }

    $currFirstname = $patientObj->firstname;
    $currLastname = $patientObj->lastname;
    $currPhone = $patientObj->phone;
    $currLocation = $patientObj->location;

    $firstnameSetError = $lastnameSetError = $phoneSetError = $updatesMessage = "";
    $firstnameSet = $lastnameSet = $phoneSet = $locationSet = $imageSet = "";

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

        // No checks need. Field is not essential
        $currLocation = $locationSet = $_POST["location"]; 

        // Check if new profile picture is filled
        if(!empty(trim($_POST["profile-picture"]))){
          $imageSet = $_POST["profile-picture"];
        }

        if (empty($firstnameSetError) && empty($lastnameSetError) && empty($phoneSetError) && !empty($patientObj->id)) {
           $curl = curl_init();
           curl_setopt_array($curl, array(
             CURLOPT_URL => 'http://localhost/docwebox/src/scripts/APIs/patient.php',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'PUT',
             CURLOPT_POSTFIELDS =>"{
              \"id\" : \"".$patientObj->id."\",
              \"firstname\" : \"".$firstnameSet."\",
              \"lastname\" : \"".$lastnameSet."\",
              \"phone\" : \"".$phoneSet."\",
              \"location\" : \"".$locationSet."\",
              \"image\" : \"".$imageSet."\"
              }",
             CURLOPT_HTTPHEADER => array(
               'Content-Type: application/json'
             ),
           ));
           
           $response = curl_exec($curl);
           
           curl_close($curl);

           $responseobj = json_decode($response);

           $_SESSION["patientObj"] = serialize($responseobj);
           $patientObj = unserialize($_SESSION['patientObj']);

           // Update values in the fields
           $currFirstname = $patientObj->firstname;
           $currLastname = $patientObj->lastname;
           $currPhone = $patientObj->phone;
           $currLocation = $patientObj->location;

           $updatesMessage = "Successful update!";
        } else {
           $updatesMessage = "Fields are missing!";
        }
      } else if (isset($_POST['submit-sensitive'])){
        echo "-----------";
      }
    }
?>
    <script src="../../src/js/user-profile-menu-navigator.js" defer></script>
    <script >
      const idPatient =  <?php echo $patientObj->id ?>
    </script>
    <script type="module" src="../../src/js/controllers/control-appointment.js"></script>
    <link rel="stylesheet" href="/DocWebox/public/styles/patient-views-styles/user-profile.css" />
<?php
    include '../../views/includes/headers/patient-view-header.php';
?>
    <div class="header__wrapper">
      <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="../../resources/images/pfp/user-pfp.png" alt="User Profile Pic" />
            <span></span>
          </div>
          <h2><?php echo $patientObj->firstname. " ". $patientObj->lastname ?></h2>
          <p>
            <?php 
            if ($patientObj->location) {
              echo $patientObj->location;
            } else {
              echo "No location defined";
            }
          ?>
          </p>
          <p>Phone: <?php echo $patientObj->phone ?></p>
          <div class="content">
            <ul class="profile-ul">
              <div class="icon">
                <a href="tel:<?php echo $patientObj->phone ?>"><i class="fa-sharp fa-solid fa-phone"></i></a>
              </div>
              <div class="icon">
                <a href="mailto:<?php echo $patientObj->email ?>"><i class="fa-solid fa-envelope"></i></a>
              </div>
              <div class="icon"><a target="_blank" href="https://www.google.com/maps/place/<?php echo $patientObj->location ?>">
                <i class="fa-solid fa-location-dot"></i></a>
              </div>
            </ul>
          </div>
        </div>
        <div class="right__col">
        <?php if($updatesMessage == "Successful update!"){echo "<div class='success-message handle-visibility'><i class='fa-solid fa-check' style='color:white; margin-top: 2px; margin-left:2px; '></i><h3>Successful update!</h3></div>";}
        else if($updatesMessage == "Fields are missing!"){echo "<div class='reject-message handle-visibility'><i class='fa-solid fa-xmark' style='color:white; margin-top: 2px; margin-left:2px;'></i><h3>Fields are missing..</h3></div>";}?>
          <nav>
            <ul class="profile-ul">
              <li><a id="pa" class="selected" onclick='menu("pa")' >PREVIOUS APPOINTMENTS</a></li>
              <li><a id="ps" onclick='menu("ps")' >PROFILE SETTINGS</a></li>
              <li><a id="si" onclick='menu("si")' >SENSITIVE INFORMATION</a></li>
            </ul>
            <a href="user-dashboard.php"><button>BOOK AN APPOINTMENT</button></a>
          </nav>
          <div class="card-container" id="card-container">
          </div>
          <div class="profile-settings hide" id="profile-settings" >
            <form class="personal-information" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2>Update your profile</h2>
                <div class="inputBox">
                  <input type="text" name="firstname" class="<?php echo (!empty($firstnameSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currFirstname ?>" required>
                  <span>First name</span>
                  <p class="invalid-feedback-form"><?php echo $firstnameSetError; ?></p>
                </div>
                <div class="inputBox">
                  <input type="text" name="lastname" class="<?php echo (!empty($lastnameSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currLastname ?>" required>
                  <span>Last name</span>
                  <p class="invalid-feedback-form"><?php echo $lastnameSetError; ?></p>
                </div>
                <div class="inputBox">
                  <input type="text" name="phone" class="<?php echo (!empty($phoneSetError)) ? 'is-invalid-update' : ''; ?>" value="<?php echo $currPhone ?>" required>
                  <span>Phone</span>
                  <p class="invalid-feedback-form"><?php echo $phoneSetError; ?></p>
                </div>
                <div class="inputBox">
                  <input type="text" name="location" value="<?php echo $currLocation ?>">
                  <span>Location</span>
                </div>
                <div class="inputBox">
                  <input type="file" name="profile-picture">
                  <span>Profile picture</span>
                </div>
                <div class="inputBox">
                  <input type="submit" name="submit-non-sensitive" value="Save" id="submit-non-sensitive">
                </div>
            </form>
          </div>
          <div class="sensitive-information hide" id="sensitive-information" >
            <form class="personal-information" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h2>Settings</h2>
              <div class="inputBox">
                <input type="text" name="username" value="<?php echo $patientObj->username ?>">
                  <span>Username</span>
              </div>
              <div class="inputBox">
                <input type="text" name="email" value="<?php echo $patientObj->email ?>">
                <span>Email</span>
              </div>
              <div class="inputBox">
                <input type="text" name="current-password" placeholder="**********">
                <span>Your current password</span>
              </div>
              <div class="inputBox">
                <input type="text" name="new-password" placeholder="**********">
                <span>New password</span>
              </div>
              <div class="inputBox">
                <input type="text" name="confirm-new-password" placeholder="**********">
                <span>Confirm new password</span>
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
  include '../../views/includes/footers/patient-view-footer.php';
?>