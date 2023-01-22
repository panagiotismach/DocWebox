"use strict";

import PreviousAppointment from "../js-models/previous-appointment.js";
import PreviousAppointmentView from "../js-views/previous-appointment-view.js";

class PreviousAppointmentController {
  constructor(previousAppointmentModel, previousAppointmentView) {
    this.previousAppointmentModel = previousAppointmentModel;
    this.previousAppointmentView = previousAppointmentView;
    this.onPageLoad();
  }

  onPageLoad() {
    const that = this;
    this.previousAppointmentModel.loadAppointments().then(function (previousAppointments) {
      that.previousAppointmentView.render(previousAppointments);
    });
  }
}

(function () {
  new PreviousAppointmentController(new PreviousAppointment(idPatient), new PreviousAppointmentView());
})();
