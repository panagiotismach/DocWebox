<?php
    require_once "../../../src/scripts/configuration/init.php";
    
    require "../../../src/db/connect.php";
    
  	include '../../views/includes/file-begin/file-begin.php';

    session_start();

    // Auth
    if(!isset($_SESSION["patient-loggedin"]) || $_SESSION["patient-loggedin"] === false){
        header("location: ../access-denied.php");
        die();
    }

    if(isset($_GET["Doc-Specialities"])) {
         $docSpeciality = $_GET["Doc-Specialities"];
    } else {
        $docSpeciality = null;
    }

    if(isset($_GET["location"])) {
        $location = $_GET["location"];
    } else {
       $location = null;
    }
?>

    <link rel="stylesheet" href="../../styles/patient-views-styles/doctors.css" />
    <script>
        const docSpeciality = <?php echo  "'".$docSpeciality."'" ?>;
        const locationl = <?php echo "'".$location."'"?>;
    </script>
    <script type="module" src="../../src/js/controllers/control-doctor.js"></script>
<?php
    include '../../views/includes/headers/patient-view-header.php';
?>
    <section class="welcome">
        <div class="content">
            <h2>Results based on your search</h2>
            <p>Try another search</p>
            <form action="doctors.php" class="search-area">
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
        <div class="row" id="doctors">
            
        </div>
    </section>
<?php
    include '../../views/includes/footers/patient-view-footer.php';
?>