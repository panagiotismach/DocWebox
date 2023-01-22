import { PATIENT_APPOINTMENTS_URL } from "../config.js";
import { PATIENT_OBJ_URL } from "../config.js";

export default class Appointment {
  //Appointment Model constructor
  constructor(doctor_id) {
    this.doctor_id = doctor_id;
    this.appointments = new Array();
  }

  async loadAppointments() {
    const that = this;

    await fetch(`${PATIENT_APPOINTMENTS_URL}?doctor_id=${this.doctor_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        for (const appointmentObj of data) {
          const patientObj = await that.getPatient(appointmentObj.patient_id); //Get the patient
          appointmentObj.patientFullname = patientObj?.firstname + " " + patientObj?.lastname;
          that.appointments.push(appointmentObj); //Add the appointment
          that.appointments.sort((a, b) => {
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);

            return dateA - dateB;
          });
        }
      });

    return this.appointments;
  }

  async getPatient(id) {
    let patientObj = null;

    await fetch(`${PATIENT_OBJ_URL}?id=${id}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        patientObj = data;
      });

    return patientObj;
  }
}
