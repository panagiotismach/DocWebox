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

    await fetch(`${PATIENT_APPOINTMENTS_URL}?patient_id=${this.patient_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        for (const appointmentObj of data) {
          if (new Date() < new Date(appointmentObj.date)) {
            const doctorObj = await that.getDoctor(appointmentObj.doctor_id); //Get the doctor
            appointmentObj.doctorName = doctorObj?.firstname + " " + doctorObj?.lastname;
            appointmentObj.location = doctorObj.location;
            that.appointments.push(appointmentObj); //Add the appointment
          }
          that.appointments.sort((a, b) => {
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);

            if (dateA.getTime() === dateB.getTime()) {
              return b.time - a.time;
            }

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
