<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/contact-styling.css" />
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
            <a class="active" href="/DocWebox/public/views/contact.php">Contact</a>
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
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p>Use this form to aquire any information you need!</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <a href="https://www.google.com/maps/place/Egnatia+156,+Thessaloniki+546+36/@40.6307691,22.9551909,17z/data=!3m1!4b1!4m5!3m4!1s0x14a838ffb8fb2ba3:0xa14cbc28d4ab9e72!8m2!3d40.6307691!4d22.9551909" target=blank>Egnatias 156, Thessaloniki</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <a href="mailto:" >example@docwebox.com</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <a href="tel:" >+30 2310******</a>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="Fullname" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="Email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required></textarea>
                        <span>What's on your mind?</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="Submit" value="Send">
                    </div>
                </form>
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