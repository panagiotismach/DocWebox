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