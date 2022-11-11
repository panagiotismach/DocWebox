<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/doctors.css" />
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
    <section class="welcome">
        <div class="content">
            <h2>Results based on your search</h2>
            <p>Try another search</p>
            <form action="" class="search-area">
                <select id="Doc-Specialities" name="Doc-Specialities">
                <option value="None">Choose Doctor Specialization</option>
                <option value="General doctor">General doctor</option>
                <option value="Pathologist">Pathologist</option>
                <option value="Pediatrician">Pediatrician</option>
                <option value="Urologist andrologist">Urologist andrologist</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Ophthalmologist">Ophthalmologist</option>
                <option value="General surgeon">General surgeon</option>
                <option value="Dental Surgeon">Dental Surgeon</option>
                <option value="Dentist">Dentist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Endocrinologist">Endocrinologist</option>
                <option value="Dermatologist-Venereologist">Dermatologist-Venereologist</option>
                <option value="Anesthetist">Anesthetist</option>
                <option value="Allergist">Allergist</option>
                <option value="Dietitian-Nutritionist">Dietitian-Nutritionist</option>
                <option value="Oncologist">Oncologist</option>
                <option value="Orthopedist">Orthopedist</option>
                <option value="Pulmonologist">Pulmonologist</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Psychiatrist">Psychiatrist</option>
                <option value="Otorhinolaryngologist">Otorhinolaryngologist</option>
                </select>
                <input type="text" placeholder="Location" name="location" />
                <button type="submit"><img src="../../public/resources/images/search.png" /></button>
            </form>
        </div>
    </section>
    <section>
        <div class="row">
            <a href="#1"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#2"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#3"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
        </div>
        <div class="row">
            <a href="#4"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#5"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#6"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../resources/images/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
        </div>
    </section>
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
