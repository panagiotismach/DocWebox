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
          <form class="personal-information ">
                    <h2>Update your profile</h2>
                    <div class="inputBox">
                        <input type="text" name="Firstname" value="{{Your first name}}">
                        <span>First name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Lastname" value="{{Your last name}}">
                        <span>Last name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Phone" value="{{Your phone}}">
                        <span>Phone</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Location">
                        <span>Location</span>
                    </div>
                    <div class="inputBox">
                        <input type="file" name="Profile Picture">
                        <span>Profile picture</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="Submit" value="Save">
                    </div>
                </form>
          </div>
          <div class="sensitive-information hide" id="sensitive-information" >
          <form class="personal-information">
                    <h2>Settings</h2>
                    <div class="inputBox">
                        <input type="text" name="Username">
                        <span>Username</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Current Password">
                        <span>Your current password</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="New password">
                        <span>New password</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Confirm new password">
                        <span>Confirm new password</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="Submit" value="Save">
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