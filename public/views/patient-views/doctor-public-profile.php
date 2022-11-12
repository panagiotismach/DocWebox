<?php
  	include '../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../styles/doctor-public-profile.css" />
<?php
  include '../views/includes/headers/patient-view-header.php';
?>
    <div class="header__wrapper">
      <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="../resources/images/doctor-pfp.png" alt="Doctor Profile Pic" />
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
            <button>Book your appointment with Dr. {{Lastname}}</button>
          </nav>
          <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.959774037709!2d22.95300221540243!3d40.630769079340716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a838ffb8fb2ba3%3A0xa14cbc28d4ab9e72!2sEgnatia%20156%2C%20Thessaloniki%20546%2036!5e0!3m2!1sen!2sgr!4v1667920166913!5m2!1sen!2sgr" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
      </div>
      </div>
    </div>
<?php
  include '../views/includes/footers/patient-view-footer.php';
?>