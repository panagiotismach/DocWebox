import { PATIENT_APPOINTMENTS_URL } from "../config.js";
import { DOCTOR_OBJ_URL } from "../config.js";

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
      .then(async function (data) {
        for (const appointmentObj of data) {
          appointmentObj.doctorName = await that.getDoctorName(appointmentObj.doctor_id); //Get the appointment's doctor name
          that.appointments.push(appointmentObj); //Add the appointment
          that.appointments.sort((a, b) => {
            const dateA = new Date(a.created);
            const dateB = new Date(b.created);
            return dateA - dateB;
          });
        }
      });

    return this.appointments;
  }

  async getDoctorName(id) {
    let doctorObj = null;

    await fetch(`${DOCTOR_OBJ_URL}id=${id}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        doctorObj = data;
      });

    return doctorObj?.firstname + " " + doctorObj?.lastname;
  }
}
