<?php
  require_once "../../../src/scripts/configuration/init.php";

  require "../../../src/db/connect.php";
  require "../../../src/scripts/auth/auth-patient.php";
  require "../../../src/scripts/models/patient.php";
    
  include '../../views/includes/file-begin/file-begin.php';

  if(isset($_SESSION['patientObj'])){
    $patientObj = unserialize($_SESSION['patientObj']);
  }
?>
  <link rel="stylesheet" href="../../styles/patient-views-styles/my-appointments.css" />
  <script type="module" src="/DocWebox/public/src/js/controllers/control-appointment.js" defer></script>
  <script src="/DocWebox/public/src/js/edit-modal-appointments-controller.js" defer></script>
  <script>const idPatient = <?php echo $patientObj->id ?>;
  const template = "templateAppointment";
  </script>
  

<?php
  include '../../views/includes/headers/patient-view-header.php';
?>
<section>
  <div class="main-section">
    <div class="card-container" id="card-container">
    
      
    </div>
  </div>
  <div class="edit-modal-appointment">
    <div class="edit-modal-content">
      <span class="edit-modal-close-button-appointment">×</span>
      <form class="admin-edit-form">
        <i class="fa-solid fa-file-pen"></i>
        <h2>Currently editing {{Appointment_id}}</h2>
        <div class="inputBox">
          <span>Appointment date</span><br />
          <input type="date" name="date" id="date" />
        </div>
        <div class="inputBox">
          <span>Appointment hour</span><br />
          <select name="s-select">
            <option>Select Hour</option>
            <option value="9">9.00</option>
            <option value="10">10.00</option>
            <option value="11">11.00</option>
            <option value="12">12.00</option>
            <option value="13">13.00</option>
            <option value="14">14.00</option>
            <option value="15">15.00</option>
            <option value="16">16.00</option>
            <option value="17">17.00</option>
            <option value="18">18.00</option>
            <option value="19">19.00</option>
            <option value="20">20.00</option>
          </select>
        </div>
        <div class="inputBox">
          <input type="submit" name="Submit" value="Confirm changes" />
        </div>
      </form>
    </div>
  </div>
</section>
<?php
  include '../../views/includes/footers/patient-view-footer.php';
?>
