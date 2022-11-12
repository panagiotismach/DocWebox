<?php
  include '../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../styles/contact-styling.css" />
<?php
  include '../views/includes/headers/landing-header.php';
?>
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
<?php
  include '../views/includes/footers/landing-footer.php';
?>