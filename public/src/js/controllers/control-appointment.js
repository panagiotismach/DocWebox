"use strict";

import Appointment from "../js-models/appointment.js";
import AppointmentView from "../js-views/patient-appointment-view.js";

class AppointmentController {
  constructor(appointmentModel, appointmentView) {
    this.appointmentModel = appointmentModel;
    this.appointmentView = appointmentView;
    // Display initial appointments
    this.onPageLoad();
  }

  onPageLoad() {
    const that = this;
    this.appointmentModel.loadAppointments().then(function (appointments) {
      that.appointmentView.render(appointments);
    });
  }
}

(function () {
  new AppointmentController(new Appointment(idPatient), new AppointmentView(template));
})();
