<?php
  	include '../../views/includes/file-begin/file-begin.php';
?>
    <link rel="stylesheet" href="../../styles/patient-views-styles/doctors.css" />
<?php
  include '../../views/includes/headers/patient-view-header.php';
?>
    <section class="welcome">
        <div class="content">
            <h2>Results based on your search</h2>
            <p>Try another search</p>
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
                <button type="submit"><img src="../../../public/resources/images/tools/search.png" /></button>
            </form>
        </div>
    </section>
    <section>
        <div class="row">
            <a href="#1"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#2"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#3"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
        </div>
        <div class="row">
            <a href="#4"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#5"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
            <a href="#6"><div class="column">
                    <div class="card">
                        <div class="img-container">
                        <img src="../../resources/images/pfp/doctor-pfp.png" />
                        </div>
                        <h3>Dr. Firstname Lastname</h3>
                        <h5>Specialization</h5>
                        <p>Valtetsiou 3, Thessaloniki</p>
                        <div class="icons">
                            <a class="icon-link" href="tel:" target=blank>
                            <i class="fa-solid fa-phone"></i>
                            </a>
                            <a class="icon-link" href="mailto:" target=blank>
                            <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
            </div></a>
        </div>
    </section>
<?php
  include '../../views/includes/footers/patient-view-footer.php';
?>