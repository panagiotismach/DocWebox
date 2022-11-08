<!doctype html>
<html>
    <head>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/login-register.css">
      <title>Login Page</title>
    </head>
    <body>

    <section class="my-5 mx-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-6 section-img" id="doctor-c">
              <img src="../resources/logos/main-logo-transparent.png" class="mx-auto d-block">
              <h4 class="header">Welcome to DocWebox</h4>
              
               <a href="../../../DocWebox/index.php" id="back-home-doctor" class="d-flex justify-content-center align-self-end">Back to home page</a>
              
              
            </div>
        
            <div class="col-lg-6 section-form">
              <form class="">
                <h4 class="font-weigth-bold header">Welcome back</h4>
                <div class="d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control my-2 p-2" placeholder="Username">
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
                      <button type="button" class="btns my-2 p-2 first-btn mt-4" id="doctor-first-btn" >Login as a Doctor</button>
                  </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="d-flex align-items-center">
                     <hr>
                    </div>
                    
                    <p >Or</p>
                    <div class="d-flex align-items-center">
                      <hr>
                    </div>
                    
                  </div>
                <div class="form-row d-flex justify-content-center align-items-center">
                  <div class="col-lg-7">
                      <button type="button" class="btns my-2 p-1" id="doctor-second-btn">Register as a Doctor</button>
                  </div>
                      
                </div>
                    
                
        </div>
      
        </section>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>