import { PATIENT_APPOINTMENTS_URL } from "../config.js";
import { PATIENT_OBJ_URL } from "../config.js";

export default class MyPatients {
  constructor(doctor_id) {
    this.doctor_id = doctor_id;
    this.myPatients = new Array();
  }

  async loadMyPatients() {
    const that = this;

    await fetch(`${PATIENT_APPOINTMENTS_URL}?doctor_id=${this.doctor_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        for (const appointmentObj of data) {
          const patientObj = await that.getPatient(appointmentObj.patient_id); //Get the patient
          let unique = true;
          for (const patient of that.myPatients) {
            if (patient.id === patientObj.id) {
              unique = false;
              break;
            }
          }
          if (unique) {
            that.myPatients.push(patientObj); //Add the patient
          }
        }
      });

    return this.myPatients;
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
