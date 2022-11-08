<!doctype html>
<html>
    <head>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/login-register.css">
      <title>DocWebox - Find your Doctor!</title>
    </head>
    <body>
    <header>
      <nav>
        <a href="/DocWebox/index.php"><img src="../resources/logos/logo-back-transparent.png" alt="DocWebox logo back" class="nav__logo" id="logo" /></a>
      </nav>
    </header>
       <section class="my-5 mx-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-6 section-img" id="doctor-c">
              <img src="../resources/logos/main-logo-transparent.png" class="mx-auto d-block">
              <!-- <h4 class="header">Welcome to DocWebox</h4>
              <a href="../../../DocWebox/index.php" id="back-home-doctor" class="d-flex justify-content-center align-self-end">Back to home page</a> -->
             </div>
            <div class="col-lg-6 section-form">
              <form class="">
                <h4 class="font-weigth-bold header">Glad to have you on board Doc!</h4>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label">Firstname</label>
                    <input type="text" class="form-control my-2 p-2" placeholder="Firstname">
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label">Lastname</label>
                    <input type="text" class="form-control my-2 p-2" placeholder="Lastname">
                  </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control my-2 p-2" placeholder="Username">
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                   <div class="col-lg-7">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control my-2 p-2" placeholder="Email">
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control my-2 p-2" placeholder="Password">
                  </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                    <div class="col-lg-7">
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
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                      <button type="button" class="btns my-2 p-2 first-btn mt-4" id="doctor-first-btn" >Register as a Doctor</button>
                  </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="d-flex align-items-center">
                     <hr>
                    </div>
                    
                    <p >Already registered?</p>
                    <div class="d-flex align-items-center">
                      <hr>
                    </div>
                    
                  </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                      <button type="button" class="btns my-2 p-1" id="doctor-second-btn">Login as a Doctor</button>
                  </div>
                      
                </div>
             </div>
       </section>
       <footer class="footer">
      <img src="../resources/logos/main-logo-transparent.png" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Project owned by 
        <a class="footer__link" target="_blank" href="https://github.com/ics20044/DocWebox">Us</a>.
      </p>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>