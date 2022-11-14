import { PATIENT_APPOINTMENTS_URL } from "../config.js";

export default class Appointment {
  //Appointment Model constructor
  constructor(patient_id) {
    this.patient_id = patient_id;
    this.appointments = new Array();
  }

  async loadAppointments() {
    const that = this;

    await fetch(`${PATIENT_APPOINTMENTS_URL}patient_id=${this.patient_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        data.forEach(function (appointmentObj) {
          that.appointments.push(appointmentObj);
        });
      });

    return that.appointments;
  }
}
