<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/faq.css" />
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
    <section>
      <div class="external-container">
        <h2>Frequently asked questions</h2>
        <p>Don't see what you are looking for? Contact us</p>
        <div class="container">
            <div class="accordion">
                <div class="accordion-item" id="question1">
                    <a class="accordion-link" href="#question1">
                        Is DocWebox a real application? 
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="answer">
                        <p>
                            As real as it can be! However, if your question is "Is DocWebox an application in production in order to generate income", then the answer is no! DocWebox is an application project of ours for the lesson "Special Topics of Web Programming" of the University of Macedonia.
                        </p>
                    </div>
                </div>
                <div class="accordion-item" id="question2">
                    <a class="accordion-link" href="#question2">
                        What is the main purpose of this application?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="answer">
                        <p>
                            With DocWebox, you can find all associate doctors in your area and easily book your appointment with them!
                        </p>
                    </div>
                </div>
                <div class="accordion-item" id="question3">
                    <a class="accordion-link" href="#question3">
                        How do I book my appointment? 
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Find your desired doctor's profile via the various search options and lists, visit their profile and then click the "Book an appointment with this doctor" button which will take you to the book now page. The rest is a piece of cake!
                        </p>
                    </div>
                </div>
                <div class="accordion-item" id="question4">
                    <a class="accordion-link" href="#question4">
                        How was DocWebox created? 
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="answer">
                        <p>
                            DocWebox is developed with a combination of HTML5, CSS3, Vanilla Js and PHP.
                        </p>
                    </div>
                </div>
                <div class="accordion-item" id="question5">
                    <a class="accordion-link" href="#question5">
                        Who created DocWebox? 
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Check out our team!
                        </p>
                    </div>
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