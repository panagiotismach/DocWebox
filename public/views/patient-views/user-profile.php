<?php
    require_once "../../../src/scripts/configuration/init.php";
    require "../../../src/db/connect.php";
    
  	include '../../views/includes/file-begin/file-begin.php';

    session_start();

    if(isset($_SESSION["firstname"])) {
      $firstname = $_SESSION["firstname"];
      $lastname = $_SESSION["lastname"];
    } else {
      $firstname = "Undefined";
      $lastname = "Undefined";
    }
?>
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
          <h2><?php echo $firstname. " ". $lastname ?></h2>
          <p>Thessaloniki</p>
          <p>+30 69********</p>

          <div class="content">

            <ul class="profile-ul">
              <div class="icon">
                <a href="tel:"><i class="fa-sharp fa-solid fa-phone"></i></a>
              </div>
              <div class="icon">
                <a href="mailto:"><i class="fa-solid fa-envelope"></i></a>
              </div>
              <div class="icon"><a href="https://www.google.com/maps">
                <i class="fa-solid fa-location-dot"></i></a>
              </div>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <nav>
            <ul class="profile-ul">
              <li><a href="">Previous Appointments</a></li>
              <li><a href="">Profile Settings</a></li>
            </ul>
            <a href="user-dashboard.php"><button>Book an appointment</button></a>
          </nav>

          <div class="card-container">
            <div class="card">
              <h3>Appointment at {{Doctor Name}}</h3>
              <h4>19/12/2020</h4>
              <p>Appointment Description</p>
            </div><br>
            <div class="card">
              <h3>Appointment at {{Doctor Name}}</h3>
              <h4>20/12/2020</h4>
              <p>Appointment Description</p>
            </div><br>
            <div class="card">
              <h3>Appointment at {{Doctor Name}}</h3>
              <h4>23/12/2020</h4>
              <p>Appointment Description</p>
            </div><br>
            <div class="card">
              <h3>Appointment at {{Doctor Name}}</h3>
              <h4>23/12/2020</h4>
              <p>Appointment Description</p>
            </div>
            
          </div>
        </div>
      </div>
      </div>
    </div>
<?php
  include '../../views/includes/footers/patient-view-footer.php';
?>