<?php
    require_once "../../../src/scripts/configuration/init.php";
    require "../../../src/db/connect.php";
    
  	include '../../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../../styles/doctor-views-styles/doctor-private-profile.css" />
    <script src="../../src/js/doctor-prv-profile-menu-navigator.js" defer></script>
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
              <li><a id="a" class="selected" onclick='menu("a")' >APPOINTMENTS</a></li>
              <li><a id="p"  onclick='menu("p")' >PATIENTS</a></li>
              <li><a id="ps" onclick='menu("ps")' >PROFILE SETTINGS</a></li>
              <li><a id="si" onclick='menu("si")' >SENSITIVE INFORMATION</a></li>
            </ul>
            <a href="doctor-dashboard.php"><button>HANDLE CALENDAR</button></a>
          </nav>

          <div class="card-container" id="appointment-container">
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

          <div class="card-container hide" id="patients-container">
            <div class="card">
              <h3>{{Patient Name}}</h3>
              <h4>Phone Number</h4>
              <p> Last appointment description</p>
            </div><br>
            <div class="card">
              <h3>{{Patient Name}}</h3>
              <h4>Phone Number</h4>
              <p> Last appointment description</p>
            </div><br>
            <div class="card">
              <h3>{{Patient Name}}</h3>
              <h4>Phone Number</h4>
              <p> Last appointment description</p>
            </div><br>
            <div class="card">
              <h3>{{Patient Name}}</h3>
              <h4>Phone Number</h4>
              <p> Last appointment description</p>
            </div><br>
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
                        <input type="text" name="Patients">
                        <span>Patients</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Publications">
                        <span>Publications</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Years">
                        <span>Years of Experience</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Bio" maxlength="255">
                        <span>Short Bio</span>
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
  include '../../views/includes/footers/doctor-view-footer.php';
?>