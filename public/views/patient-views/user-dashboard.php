<?php
    require_once "../../../src/scripts/configuration/init.php";
    
    require "../../../src/db/connect.php";
    require "../../../src/scripts/models/patient.php";
    require "../../../src/scripts/auth/auth-patient.php";
    
    include '../includes/file-begin/file-begin.php';

    if(isset($_SESSION["patientObj"])) {
      $patientObj = unserialize($_SESSION["patientObj"]);
    } else {
      $patientObj = new Patient("", "", "", "", "", "", "", "", "", "");
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
    <link rel="stylesheet" href="../../styles/patient-views-styles/user-dashboard.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

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
          eventLimit: true,
          editable: true,
          events: "http://localhost/docwebox/src/scripts/APIs/appointment.php?patient_id=<?php echo strval($patientObj->id)?>", 
          displayEventTime: false,
          eventRender: function (event, element, view) {}
        });
      });
    </script>
    <script >
      const idpatient = <?php echo $patientObj->id ?>;
      const template = "template";
    </script>
    <script defer type="module" src="../../src/js/handlers/handle-search-by-lastname.js"></script>
    <script defer type="module" src="../../src/js/controllers/control-my-doctors.js"></script>
<?php
  include '../includes/headers/patient-view-header.php';
?>
    <div class="main-container">
      <h1>Welcome back <?php echo $patientObj->firstname?>!</h1>
      <h3>Your appointment is 4 clicks away!</h3>
      <form action="doctors.php" class="search-area" method="get">
        <select id="Doc-Specialities" name="specialization">
          <option value="None">All doctors</option>
          <option value="General doctor">General doctor</option>
          <option value="Pathologist">Pathologist</option>
          <option value="Pediatrician">Pediatrician</option>
          <option value="Urologist andrologist">Urologist andrologist</option>
          <option value="Gynecologist">Gynecologist</option>
          <option value="Ophthalmologist">Ophthalmologist</option>
          <option value="General surgeon">General surgeon</option>
          <option value="Dental Surgeon">Dental Surgeon</option>
          <option value="Dentist">Dentist</option>
          <option value="Cardiologist">Cardiologist</option>
          <option value="Endocrinologist">Endocrinologist</option>
          <option value="Dermatologist-Venereologist">Dermatologist-Venereologist</option>
          <option value="Anesthetist">Anesthetist</option>
          <option value="Allergist">Allergist</option>
          <option value="Dietitian-Nutritionist">Dietitian-Nutritionist</option>
          <option value="Oncologist">Oncologist</option>
          <option value="Orthopedist">Orthopedist</option>
          <option value="Pulmonologist">Pulmonologist</option>
          <option value="Physiotherapist">Physiotherapist</option>
          <option value="Psychiatrist">Psychiatrist</option>
          <option value="Otorhinolaryngologist">Otorhinolaryngologist</option>
        </select>
        <input type="text" placeholder="Location" name="location" />
        <button type="submit"><img src="../../../public/resources/images/tools/search.png" /></button>
      </form>
      <div class="wrapper">
        <div class="container-calendar">
          <div id="calendar"></div>
        </div>
        <div class="previous-doctors__container">
          <h3>Doctors from previous appointments</h3>
          <div class="list-group">
            
          </div>
        </div>
      </div>
    </div>
    <div class="external-container">
    <div class="doctor-search-container">
      <h2>Is your doctor on DocWebox?</h2>
        <form class="doctor-search-box">
          <input type="text" name="name" class="search-doctor" id="input-search" placeholder="Type your Doctor's Lastname..."/>
          <button type="submit" class="doctor-search-btn" id="search-doctor"><i class="fa fa-search"></i></button>
        </form>
        <div class="card-container">

        </div>
    </div>
  </div>
<?php
  include '../includes/footers/patient-view-footer.php';
?>