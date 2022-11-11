<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/our-team.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="../src/js/no-scrolling.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../resources/favicon/the-icon.ico" />
  </head>
  <body>
  <header>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="../resources/logos/main-logo-transparent.png" alt="DocWebox logo" class="nav__logo" id="logo" />
        <ul>
          <li>
            <a href="/DocWebox/index.php">Home</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/news.php">News</a>
          </li>
          <li>
            <a  href="/DocWebox/public/views/contact.php">Contact</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/sign-up.php">Sign up</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/login.php">Login</a>
          </li>
        </ul>
      </nav>
    </header>
    <section class="welcome">
        <div class="content">
            <h2>Our team</h2>
            <p>This is us and our particular roles in this project!</p>
        </div>
    </section>
    <section>
    
        <div class="row">
            <!-- Column 1 -->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                    <img src="../resources/images/us/minas.jpg" />
                </div>
                <h3>Charakopoulos Minas-Theodoros</h3>
                <h5>Backend Development</h5>
                <p>PHP, SQL, Form Validation</p>
                <div class="icons">
                    <a href="https://www.linkedin.com/in/minas-theodoros-charakopoulos/" target=blank>
                    <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/ics20044" target=blank>
                    <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="mailto:ics20072@uom.edu.gr" target=blank>
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                    <img src="../resources/images/us/dionisis.jpg" />
                </div>
                <h3>Lougaris Dionisios</h3>
                <h5>Frontend Development</h5>
                <p>HTML5, CSS3, Vanilla Js</p>
                <div class="icons">
                    <a href="https://www.linkedin.com/in/dionisis-lougaris/" target=blank>
                    <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/DionisisLougaris" target=blank>
                    <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="mailto:ics20058@uom.edu.gr" target=blank>
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column 3 -->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                    <img src="../resources/images/us/panagiotis.png" />
                </div>
                <h3>Machairas Panagiotis</h3>
                <h5>Backend Development</h5>
                <p>PHP, SQL, APIs</p>
                <div class="icons">
                    <a href="https://www.linkedin.com/in/panagiotis-machairas-9263841b9/" target=blank>
                    <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/ics20044" target=blank>
                    <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="mailto:ics20044@uom.edu.gr" target=blank>
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                </div>
            </div>
            <!-- Column 4 -->
            <div class="column">
                <div class="card">
                    <div class="img-container">
                    <img src="../resources/images/us/giorgos.png" />
                </div>
                <h3>Stefou Georgios-Ioannis</h3>
                <h5>Application Architecture</h5>
                <p>Mockups, UML, App Requirements</p>
                <div class="icons">
                    <a href="https://www.linkedin.com/in/george-john-stefou-713a9a1b8/" target=blank>
                    <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/georgestefou" target=blank>
                    <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="mailto:ics20051@uom.edu.gr" target=blank>
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/news.php">News</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/contact.php">Contact</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/sign-up.php">Sign up</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/login.php">Login</a>
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
