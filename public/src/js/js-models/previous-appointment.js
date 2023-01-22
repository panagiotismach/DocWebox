import { PATIENT_APPOINTMENTS_URL } from "../config.js";
import { DOCTOR_OBJ_URL } from "../config.js";

export default class PreviousAppointment {
  constructor(patient_id) {
    this.patient_id = patient_id;
    this.appointments = new Array();
  }

  async loadAppointments() {
    const that = this;

    await fetch(`${PATIENT_APPOINTMENTS_URL}?patient_id=${this.patient_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        for (const appointmentObj of data) {
          if (new Date() > new Date(appointmentObj.date)) {
            const doctorObj = await that.getDoctor(appointmentObj.doctor_id); //Get the doctor
            appointmentObj.doctorName = doctorObj?.firstname + " " + doctorObj?.lastname;
            let days = Math.floor((new Date() - new Date(appointmentObj.date)) / (1000 * 60 * 60 * 24));
            appointmentObj.daysBefore = days;
            that.appointments.push(appointmentObj); //Add the appointment
          }
          that.appointments.sort((a, b) => {
            const dateA = new Date(a.daysBefore);
            const dateB = new Date(b.daysBefore);

            return dateB - dateA;
          });
        }
      });

    return this.appointments;
  }

  async getDoctor(id) {
    let doctorObj = null;

    await fetch(`${DOCTOR_OBJ_URL}?id=${id}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        doctorObj = data;
      });

    return doctorObj;
  }
}
