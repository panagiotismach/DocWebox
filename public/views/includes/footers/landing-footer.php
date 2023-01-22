<?php
  include_once(__DIR__ . "/../../../../config.php");
?>

<?php //Just to can understand file as .php ?>
      
      <footer class="footer">
        <ul class="footer__nav">
        <li class="footer__item">
            <a class="footer__link" href="<?php echo '/' . ROOT_PATH . '/public/views/our-team.php'?>">Our team</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo '/' . ROOT_PATH . '/public/views/faq.php'?>">FAQs</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo '/' . ROOT_PATH . '/public/views/contact.php'?>">Contact us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo '/' . ROOT_PATH . '/public/views/news.php'?>">News</a>
          </li>
        </ul>
        <a href="<?php echo '/' . ROOT_PATH . '/index.php'?>"><img src="<?php echo '/' . ROOT_PATH . '/public/resources/logos/logo-main-transparent.png'?>" alt="Logo" class="footer__logo" /></a>
        <p class="footer__copyright">
          &copy; Project owned by 
          <a class="footer__link" target="_blank" href="https://github.com/ics20044/DocWebox">Us.</a>
        </p>
      </footer>
    </body>   
</html>