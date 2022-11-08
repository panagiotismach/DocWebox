<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/user-profile.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="../src/js/no-scrolling.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../resources/favicon/the-icon.ico" />
  </head>
  <body>
  <header>
      <nav class="header-nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="../resources/logos/main-logo-transparent.png" alt="DocWebox logo" class="nav__logo" id="logo" />
        <ul>
          <li>
            <a href="/DocWebox/public.views/user-dashboard.php">Dashboard</a>
          </li>
          <li>
            <a class="active" href="/DocWebox/public/views/user-profile.php">Profile</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/logout.php">Logout ↪</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="header__wrapper">
      <div class="profile-header"></div>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="../resources/images/user-pfp.png" alt="User Profile Pic" />
            <span></span>
          </div>
          <h2>Firstname Lastname</h2>
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
            <button>Book an appointment</button>
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
    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/user-dashboard.php">Dashboard</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/user-profile.php">Profile</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/help.php">Help</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/logout.php">Logout</a>
        </li>
      </ul>
      <img src="../resources/logos/main-logo-transparent.png" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Project owned by 
        <a class="footer__link" target="_blank" href="https://github.com/ics20044/DocWebox">Us</a>.
      </p>
    </footer>

  </body>
    
</html>