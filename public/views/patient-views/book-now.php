<?php
    require_once "../../../src/scripts/configuration/init.php";
    require "../../../src/db/connect.php";
    include '../../views/includes/file-begin/file-begin.php';

    session_start();

    if(isset($_SERVER['id'])){
        $id = $_SERVER['id']
    }

    if(isset($_SERVER['doctor_id'])){
        $doctor_id = $_SERVER['doctor_id']
    }
?>
    <link rel="stylesheet" href="../../styles/patient-views-styles/book-now.css" />
    <script>
        const inputpId = document.querySelector("#doctor_id");
        inputpId.value = <?php echo $id ?>
    </script>
<?php
  include '../../views/includes/headers/patient-view-header.php';
?>
    <div class="bf-container">
        <div class="bf-body">
            <div class="bf-head">
                <h1>Booking with Dr. {{Lastname}}</h1>
                <p id="header-label">Easy booking with DocWebox!</p>
            </div>
            <form class="bf-body-box" action="form.php">
                <div class="bf-row">
                    <div class="bf-col-6">
                        <p class="label">Full Name</p>
                        <input type="text" name="fname" id="fname" placeholder="Full name">
                    </div>
                    <div class="bf-col-6">
                        <p class="label">Email Address</p>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="bf-row">
                    <div class="bf-col-6">
                        <p class="label">Select Date</p>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="bf-col-6">
                        <p class="label">Select Time Frame</p>
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
                </div>
                <div class="bf-row">
                    <div class="bf-col-12">
                        <p class="label">Reason of your appointment</p>
                        <textarea name="description" id="Reason" cols="10" rows="4"></textarea>
                    </div>
                </div>
                <div class="bf-row">
                        <input hidden name="patient_id" id="patient_id"  ></input>
                </div>
                <div class="bf-row">
                        <input hidden name="doctor_id" id="doctor_id"  ></input>
                </div>
                <div class="bf-row">
                    <div class="bf-col-3">
                        <input type="submit" value="Book now" id="submit">
                    </div>
                </div>
            </form>
            <div class="bf-footer">
                <p>Powered By <span>DocWebox</span></p>
            </div>
        </div>
    </div>
<?php
  include '../../views/includes/footers/patient-view-footer.php';
?>