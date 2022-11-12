<?php
  	include '../views/includes/file-begin/file-begin.php';
?>
    <!-- CSS only from bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/doctor-dashboard.css" />
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
            right: "month,agendaWeek,agendaDay",
          },
          // events: "load.php",
        });
      });
    </script>
<?php
  include '../views/includes/headers/doctor-view-header.php';
?>
    <div class="main-container">
      <h1>Welcome back Dr. {Lastname}!</h1>
      <div class="wrapper">
        <div class="container-calendar">
          <div id="calendar"></div>
        </div>
        <div class="previous-doctors__container">
          <h3>Your patients</h3>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ Patient Name }}</h5>
              </div>
              <p class="mb-1">{{ Phone number }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ Patient Name }}</h5>
              </div>
              <p class="mb-1">{{ Phone number }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ Patient Name }}</h5>
              </div>
              <p class="mb-1">{{ Phone number }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
          </div>
        </div>
      </div>
    </div>
<?php
  include '../views/includes/footers/patient-view-footer.php';
?>