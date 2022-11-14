<?php

  	include '../../views/includes/file-begin/file-begin.php';
    require_once "../../../src/scripts/configuration/init.php";
    require "../../../src/db/connect.php";
?>
    <link rel="stylesheet" href="../../styles/admin-views-styles/admin-dashboard.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
     <!-- CSS only from bootsrap-->
     <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
<?php
  include '../../views/includes/headers/admin-view-header.php';
?>
  <section class="main-section">
    <div class="main-container">
      <h1 style="color:white;">Welcome back!</h1>
      <h3 style="color:white;">Search for doctor or patient or appointment</h3>
      <form action="" class="search-area"  >
        <select id="D-P" name="Doctor-Patient">
          <option value="None">Choose option</option>
          <option value="General doctor">Doctor</option>
          <option value="General patient">Patient</option>
          <option value="General doctor">Appointment</option>
        </select>
        <input type="text" placeholder="Name or Appointment date" name="search" />
        <button type="submit"><img src="/DocWebox/public/resources/images/tools/search.png" /></button>
      </form>
    </div>
    <div class="doctor-search-container">
      <h2>Results based on your search</h2>
    <div class="card-container">
            <div class="card">
             <div class="data">
              <h3>{{Doctor Name}}</h3>
              <p>{{Doctor Phone}} {{Doctor Address}}</p>
              </div>
              <ul class="buttonpd">
                <li><button id="edit-btn">Edit</button></li>
                <li><button id="delete-btn">Delete</button></li>
              </ul>
            </div>
            <div class="card">
            <div class="data">
              <h3>{{Doctor Name}}</h3>
              <p>{{Doctor Phone}} {{Doctor Address}}</p>
              </div>
              <ul class="buttonpd">
                <li><button id="edit-btn">Edit</button></li>
                <li><button id="delete-btn">Delete</button></li>
              </ul>
            </div>
      </div>
    </div>
   </div>
</section>
<?php
  include '../../views/includes/footers/admin-view-footer.php';
?>

