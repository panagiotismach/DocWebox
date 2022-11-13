<?php
  	include '../../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../../styles/doctor-views-styles/doctor-private-profile.css" />
<?php
  include '../../views/includes/headers/doctor-view-header.php';
?>
    <div class="header__wrapper">
      <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="../../resources/images/pfp/doctor-pfp.png" alt="Doctor Profile Pic" />
            <span></span>
          </div>
          <h2>Dr. Firstname Lastname</h2>
          <p>Office Address 9,&nbsp;Thessaloniki</p>
          <p>+30 2310 ******</p>

          <ul class="about profile-ul">
            <li><span>100+</span>Patients</li>
            <li><span>17</span>Publications</li>
            <li><span>19</span>Years of Experience</li>
          </ul>

          <div class="content">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
              erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
              ligula egestas nulla.
            </p>

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
              <li><a href="">Appointments</a></li>
              <li><a href="">Patients</a></li>
              <li><a href="">Profile Settings</a></li>
            </ul>
            <a href="doctor-dashboard.php"><button>Handle my calendar</button></a>
          </nav>

          <div class="card-container">
            <div class="card">
              <h3>Appointment with {{Patient Name}}</h3>
              <h4>19/12/2020</h4>
              <p>Appointment Description</p>
            </div><br>
            <div class="card">
              <h3>Appointment with {{Patient Name}}</h3>
              <h4>20/12/2020</h4>
              <p>Appointment Description</p>
            </div><br>
            <div class="card">
              <h3>Appointment with {{Patient Name}}</h3>
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
  include '../../views/includes/footers/doctor-view-footer.php';
?>