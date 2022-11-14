<?php
  	include './includes/file-begin/file-begin.php';
?>
      <link rel="stylesheet" href="../styles/normalise.css">
      <link rel="stylesheet" href="../styles/middle-login-register.css">
<?php
  include './includes/headers/form-pages-header.php';
?>
      <div class="wrapper">
            <div class="side left">
                  <div class="image patient"></div>
                  <div class="caption">
                    <div class="block">
                        <h1>Patients</h1>
                        <a class="button" id="patient-button" href="/DocWebox/public/views/forms-views/register-patient.php">Register as patient</a>
                    </div>
                  </div>
            </div>
            <div class="side right">
                  <div class="image doctor"></div>
                  <div class="caption">
                  <div class="block">
                        <h1>Doctors</h1>
                        <a class="button" id="doctor-button" href="/DocWebox/public/views/forms-views/register-doctor.php">Register as a doctor</a>
                    </div>
                  </div>
            </div>
      </div>
<?php
  include './includes/footers/form-pages-footer.php';
?>