<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link rel="stylesheet" href="./public/styles/index-styling.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./public/resources/favicon/the-icon.ico" />
  </head>
  <body>
    <header>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="./public/resources/logos/main-logo-transparent.png" alt="DocWebox logo" class="nav__logo" id="logo" />
        <ul>
          <li>
            <a class="active" href="/DocWebox/index.php">Home</a>
          </li>
          <li>
            <a href="/public/views/news.php">News</a>
          </li>
          <li>
            <a href="/public/views/contact.php">Contact</a>
          </li>
          <li>
            <a href="/public/views/sign-up.php">Sign up</a>
          </li>
          <li>
            <a href="/public/views/login.php">Login</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="container">
        <h1>Welcome to DocWebox, the place where you find your doctor!</h1><br>
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
            <input type="text" placeholder="Location" name="location">
            <button type="submit"><img src="./public/resources/images/search.png"></button>
        </form>
    </div>
    </body>
    
</html>