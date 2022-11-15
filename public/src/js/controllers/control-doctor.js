"use strict";

import Doctor from "../js-models/doctor.js";
import DoctorView from "../js-views/doctor-view.js";

class DoctorController {
  constructor(doctorModel, doctorView) {
    this.doctorModel = doctorModel;
    this.doctorView = doctorView;
    // Display initial appointments
    this.onPageLoad();
  }

  onPageLoad() {
    const that = this;
    this.doctorModel.loadDoctors().then(function (doctor) {
      that.doctorView.render(doctor);
    });
  }
}

(function () {
  new DoctorController(new Doctor(locationl, docSpeciality), new DoctorView());
})();
