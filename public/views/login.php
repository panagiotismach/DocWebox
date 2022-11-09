<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DocWebox - Find your Doctor!</title>
      <link rel="stylesheet" href="../styles/normalise.css">
      <link rel="stylesheet" href="../styles/middle-login-register.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">

</head>
<body>
<header>
      <nav>
        <a href="/DocWebox/index.php"><img src="../resources/logos/logo-back-transparent.png" alt="DocWebox logo back" class="nav__logo" id="logo" /></a>
      </nav>
    </header>
      <div class="wrapper">
            <div class="side left">
                  <div class="image patient"></div>
                  <div class="caption">
                    <div class="block">
                        <h1>Patients</h1>
                        <a class="button" id="patient-button" href="./login-patient.php">Login as patient</a>
                    </div>
                  </div>
            </div>
            <div class="side right">
                  <div class="image doctor"></div>
                  <div class="caption">
                  <div class="block">
                        <h1>Doctors</h1>
                        <a class="button" id="doctor-button" href="./login-doctor.php">Login as a doctor</a>
                    </div>
                  </div>
            </div>
      </div>
      <footer class="footer">
      <img src="../resources/logos/main-logo-transparent.png" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Project owned by 
        <a class="footer__link" target="_blank" href="https://github.com/ics20044/DocWebox">Us</a>.
      </p>
    </footer>
</body>
</html>