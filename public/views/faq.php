<?php
    require_once "../../src/scripts/configuration/init.php";
    require "../../src/db/connect.php";
  	include '../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../styles/faq.css" />
<?php
    include '../views/includes/headers/landing-header.php';
?>
    <section>
      <div class="external-container">
        <h2>Frequently asked questions</h2>
        <p>Don't see what you are looking for? <a class="link" href="contact.php">Contact us</a></p>
        <div class="container">
            <div class="accordion">
                <div class="accordion-item" id="question1">
                    <a class="accordion-link" href="#question1">
                        Is DocWebox a real application? 
                        <i class="fa-solid fa-angle-down down-icon"></i>
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
                        <i class="fa-solid fa-angle-down down-icon"></i>
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
                        <i class="fa-solid fa-angle-down down-icon"></i>
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
                        <i class="fa-solid fa-angle-down down-icon"></i>
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
                        <i class="fa-solid fa-angle-down down-icon"></i>
                    </a>
                    <div class="answer">
                        <p>
                            Check out <a href="our-team.php" class="link">our team!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
<?php
    include '../views/includes/footers/landing-footer.php';
?>