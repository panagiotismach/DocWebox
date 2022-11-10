<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <!-- CSS only from bootsrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="../styles/user-dashboard.css" />
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
    <script src="../src/js/no-scrolling.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../resources/favicon/the-icon.ico" />
  </head>
  <body>
    <header>
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <a id="logo__link" href="../../index.php">
          <img src="../resources/logos/main-logo-transparent.png" alt="DocWebox logo" class="nav__logo" id="logo" />
        </a>
        <ul>
          <li>
            <a class="active" href="/DocWebox/public/views/user-dashboard.php">Dashboard</a>
          </li>
          <li>
            <a href="/DocWebox/public/views/user-profile.php">Profile</a>
          </li>
          <li>
            <a href="/DocWebox/public">Logout ↪</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="main-container">
      <h1>Welcome back {Name}!</h1>
      <h3>Search for your doctor</h3>
      <form action="" class="search-area">
        <select id="Doc-Specialities" name="Doc-Specialities">
          <option value="None">Choose Doctor Specialization</option>
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
        <button type="submit"><img src="../../public/resources/images/search.png" /></button>
      </form>
      <div class="wrapper">
        <div class="container-calendar">
          <div id="calendar"></div>
        </div>
        <div class="previous-doctors__container">
          <h3>Doctors from previous appointments</h3>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. {{ Name }}</h5>
              </div>
              <p class="mb-1">{{ Specialty }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. {{ Name }}</h5>
              </div>
              <p class="mb-1">{{ Specialty }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. {{ Name }}</h5>
              </div>
              <p class="mb-1">{{ Specialty }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. {{ Name }}</h5>
              </div>
              <p class="mb-1">{{ Specialty }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. {{ Name }}</h5>
              </div>
              <p class="mb-1">{{ Specialty }}, {{ City }}, {{ Area }}</p>
              <small class="text-muted">appointment {{ number }} days ago</small>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="external-container">
    <div class="doctor-search-container">
      <h2>Is your doctor on DocWebox?</h2>
      <div class="doctor-search-box">
        <input type="text" class="search-doctor" placeholder="Type your Doctor's name..."/>
        <button type="submit" class="doctor-search-btn"><i class="fa fa-search"></i></button>
      </div>
      <p>Results that match your search:</p>
      <div class="card-container">
            <div class="card">
              <h3>{{Doctor Name}}</h3>
              <p>{{Doctor Phone}} {{Doctor Address}}</p>
            </div>
            <div class="card">
              <h3>{{Doctor Name}}</h3>
              <p>{{Doctor Phone}} {{Doctor Address}}</p>
            </div>
      </div>
    </div>
    </div>
    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/user-dashboard.php">Dashboard</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/user-profile.php">Profile</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/help.php">Help</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="/DocWebox/public/views/logout.php">Logout</a>
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
