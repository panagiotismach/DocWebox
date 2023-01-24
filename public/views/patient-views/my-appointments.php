<?php
  require_once "../../../src/scripts/configuration/init.php";

  require "../../../src/db/connect.php";
  require "../../../src/scripts/auth/auth-patient.php";
  require "../../../src/scripts/models/patient.php";
    
  include '../includes/file-begin/file-begin.php';

  if(isset($_SESSION['patientObj'])){
    $patientObj = unserialize($_SESSION['patientObj']);
  }
?>
  <link rel="stylesheet" href="../../styles/patient-views-styles/my-appointments.css" />
  <script defer src="../../src/js/utils/modals/edit-modal-appointments-controller.js"></script>
  <script defer type="module" src="../../src/js/controllers/control-appointment.js"></script>
  <script defer src="../../src/js/handlers/handle-appointment.js"></script>
  <script>
    const idPatient = <?php echo $patientObj->id ?>;
  </script>

<?php
  include '../includes/headers/patient-view-header.php';
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
        <h2>Edit Appointment</h2>
        <div class="inputBox">
          <span>Appointment date</span><br />
          <input type="date" name="date" id="date" />
        </div>
        <div class="inputBox">
          <span>Appointment hour</span><br />
          <select name="s-select" id="date-select">
            <option value="">Select Hour</option>
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
          <input id="update-appointment-btn" type="button" name="submit" value="Confirm changes" onclick="updateAppointment()" />
        </div>
      </form>
    </div>
  </div>
</section>
<?php
  include '../includes/footers/patient-view-footer.php';
?>
