<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/news-styling.css" />
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
            <a class="active" href="/DocWebox/public/views/news.php">News</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/contact.php">Contact</a>
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
    <section class="news">
        <div class="content">
            <h2>Stay informed</h2>
            <p>Follow the latest medical news brought to you by trusted sources</p>
        </div>
        <div class="container">
            <div class="newsOutletList">
                <h2>Trusted news outlets</h2>
                <h4><span>1. Medscape</span> is a one-stop website that offers a lot to the medical professional. You can enjoy the site without joining, but a membership is strongly encouraged. The site is available in French, German, Portuguese, Spanish, and English. You can learn the latest news, access a pharmaceutical listing, and earn CME credits for your career. </h4><br>
                <h4><span>2. News-Medical Life Sciences</span> is perfect for those who want to have everything at their fingertips. You’re provided with an option between Medical or Life Sciences, allowing you to filter news accordingly. The website offers access to an impressive collection of white papers, videos, interviews, as well as the latest news. You can even look up specific health conditions, medications, and medical or laboratory equipment in case you have something particular you’re interested in.</h4><br>
                <h4><span>Medgadget</span> is a must for those who want to keep up on the latest gadgets that are at the forefront of modern healthcare. The editorial team consists of eleven medical professionals that are located all over the globe. The popular tab lists some specific diagnostics areas, and the categories tab lists everything in alphabetical sub tabs. You can create an account and receive direct alerts on the latest news or subscribe via RSS feed. </h4><br>

                <h4><span>3. Stanford Medicine</span> is widely regarded as the best medical school in America. Their website happens to stand out too. The site targets students and medical professionals, as well as the general public. Here you can find out about the latest in medical news and educational programs. You can even find a specific doctor and catch up on any of their published research papers. They also include a section where you can donate to support Stanford Health and Stanford Children’s Health.</h4><br>

                <h4><span>4. Healio</span> is the medical professional’s dream. They offer medical news, education, and information for physicians and healthcare practitioners. Each type of service comes with a dropdown box so that you can choose a profession or specialty. They also offer an impressive number of publications. While many sites we discussed previously provide one or two focus topics, Healio includes dozens. You can easily search for your field of study and view the latest issue online, at no extra cost.</h4><br>

                <h4><a href="https://www.excedr.com/blog/medical-news-sites/" target=blank>More...</a></h4>
            </div>
            <div class="newsOutletsTopPicks">
                <h2>Picks of the week</h2>
                <div class="newsOutlet">
                    <h3>1. Medscape</h3>
                    <a href="https://www.medscape.com/?ecd=ppc_google_acq-brand_mscp_englang-general-int&gclid=CjwKCAjwtp2bBhAGEiwAOZZTuJ-ACjcBo-l12M5dOTnjNpMrglZ1QVvvfsv6Bcbr4DNFI32Kvalr2xoCTr0QAvD_BwE" target=blank><img src="../resources/images/medscape.png" /></a>
                    <p>Why It's Harder for MDs to Lose Weight</p>
                </div>
                <div class="newsOutlet">
                    <h3>2. Stanford Medicine News</h3>
                    <a href="https://med.stanford.edu/news.html" target=blank><img src="../resources/images/stanfordmedicine.png"/></a>
                    <p>Timing of pre-surgery dialysis matters, Stanford Medicine study finds</p>
                </div>
                <div class="newsOutlet">
                    <h3>3. News Medical Life Science</h3>
                    <a href="https://www.news-medical.net" target=blank><img src="../resources/images/newsmedicallifescience.png" /></a>
                    <p>New Center Expands Cell and Gene Therapy Capabilities</p>
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