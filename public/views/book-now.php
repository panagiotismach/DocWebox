<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/book-now.css" />
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
    <div class="bf-container">
        <div class="bf-body">
            <div class="bf-head">
                <h1>Booking with Dr. {{Lastname}}</h1>
                <p id="header-label">Easy booking with DocWebox!</p>
            </div>
            <form class="bf-body-box" action="form.php">
                <div class="bf-row">
                    <div class="bf-col-6">
                        <p class="label">Full Name</p>
                        <input type="text" name="fname" id="fname" placeholder="Full name">
                    </div>
                    <div class="bf-col-6">
                        <p class="label">Email Address</p>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="bf-row">
                    <div class="bf-col-6">
                        <p class="label">Select Date</p>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="bf-col-6">
                        <p class="label">Select Time Frame</p>
                        <select name="s-select">
                            <option>Select Hour</option>
                            <option value="9">9.00</option>
                            <option value="10">10.00</option>
                            <option value="11">11.00</option>
                            <option value="12">12.00</option>
                            <option value="13">13.00</option>
                            <option value="14">14.00</option>
                            <option value="15">15.00</option>
                            <option value="16">16.00</option>
                            <option value="17">17.00</option>
                            <option value="18">18.00</option>
                            <option value="19">19.00</option>
                            <option value="20">20.00</option>
                        </select>
                    </div>
                </div>
                <div class="bf-row">
                    <div class="bf-col-12">
                        <p class="label">Reason of your appointment</p>
                        <textarea name="Reason" id="Reason" cols="10" rows="4"></textarea>
                    </div>
                </div>
                <div class="bf-row">
                    <div class="bf-col-3">
                        <input type="submit" value="Book now" id="submit">
                    </div>
                </div>
            </form>
            <div class="bf-footer">
                <p>Powered By <span>DocWebox</span></p>
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