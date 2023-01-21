<?php
    require_once "../../../src/scripts/configuration/init.php";

    require "../../../src/db/connect.php";
    require "../../../src/scripts/models/doctor.php";
    require "../../../src/scripts/auth/auth-doctor.php";
    
  	include '../../views/includes/file-begin/file-begin.php';

    if(isset($_SESSION["doctorObj"])) {
      $doctorObj = unserialize($_SESSION["doctorObj"]);
      
    } else {
      $doctorObj = new Doctor("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    }	
?>
    
    <!-- CSS only from bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../../styles/doctor-views-styles/doctor-dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
      $(document).ready(function () {
        const calendar = $("#calendar").fullCalendar({
          editable: true,
          header: {
            left: "prev,next today",
            center: "title",
            right: "month",
          },
          // events: "load.php",
        });
      });
    </script>
    <script>
      const doctorid = <?php echo $doctorObj->id?>
    </script>
    <script src= "../../src/js/patient-doctor.js" defer ></script>
<?php
  include '../includes/headers/doctor-view-header.php';
?>
    <div class="main-container">
      <h1>Welcome back Dr. <?php echo $doctorObj->firstname ?></h1>
      <div class="wrapper">
        <div class="container-calendar">
          <div id="calendar"></div>
        </div>
        <div class="patients">
          <h3>Your patients</h3>
          <div class="list-group">
            

          </div>
        </div>
      </div>
    </div>
<?php
  include '../includes/footers/doctor-view-footer.php';
?>