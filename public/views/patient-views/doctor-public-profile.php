<?php
    require_once "../../../src/scripts/configuration/init.php";
    
    require "../../../src/db/connect.php";
    require "../../../src/scripts/auth/auth-patient.php";
    require "../../../src/scripts/models/doctor.php";
    
  	include '../../views/includes/file-begin/file-begin.php';

    if(isset($_GET["id"])) {
      $doctor = file_get_contents("http://localhost/DocWebox/src/scripts/APIs/doctor.php?id=".$_GET["id"]);
      $doctorObj = json_decode($doctor);
      $_SESSION["doctorObjS"] = $doctorObj;
    } else {
      $doctorObj = new Doctor("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    }
?>
    <link rel="stylesheet" href="../../styles/patient-views-styles/doctor-public-profile.css" />
<?php
  include '../../views/includes/headers/patient-view-header.php';
?>
    <div class="header__wrapper">
      <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="../../resources/images/pfp/doctor-pfp.png" alt="Doctor Profile Pic" />
            <span></span>
          </div>
          <h2>Dr. <?php echo $doctorObj->firstname." ".$doctorObj->lastname?></h2>
          <p><?php echo $doctorObj->location ?></p>
          <p><?php echo $doctorObj->phone ?></p>
          <ul class="about profile-ul">
            <li><span><?php echo $doctorObj->num_patients ?></span>Patients</li>
            <li><span><?php echo $doctorObj->num_publications ?></span>Publications</li>
            <li><span><?php echo $doctorObj->work_experience_years ?></span>Years of Experience</li>
          </ul>
          <div class="content">
            <p>
              <?php echo $doctorObj->bio ?>
            </p>
            <ul class="profile-ul">
              <div class="icon">
                <a href="tel:<?php echo $doctorObj->phone?>"><i class="fa-sharp fa-solid fa-phone"></i></a>
              </div>
              <div class="icon">
                <a href="mailto:<?php echo $doctorObj->email ?>"><i class="fa-solid fa-envelope"></i></a>
              </div>
              <div class="icon"><a href="https://www.google.com/maps/place/<?php echo $doctorObj->location ?>">
                <i class="fa-solid fa-location-dot"></i></a>
              </div>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <nav>
            <a href="book-now.php"><button>Book your appointment with Dr. <?php echo $doctorObj->lastname ?></button></a>
          </nav>
          <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed/v1/place?q=<?php echo $doctorObj->location ?>&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" 
               style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
<?php
  include '../../views/includes/footers/patient-view-footer.php';
?>