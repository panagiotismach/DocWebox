import { PATIENT_APPOINTMENTS_URL } from "../config.js";
import { DOCTOR_OBJ_URL } from "../config.js";

export default class MyDoctors {
  constructor(patient_id) {
    this.patient_id = patient_id;
    this.myDoctors = new Array();
  }

  async loadMyDoctors() {
    const that = this;

    await fetch(`${PATIENT_APPOINTMENTS_URL}?patient_id=${this.patient_id}`)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        for (const appointmentObj of data) {
          const doctorObj = await that.getDoctor(appointmentObj.doctor_id); //Get the doctor
          let unique = true;

          console.log(doctorObj.id);
          for (const doctor of that.myDoctors) {
            if (doctor.id === doctorObj.id) {
              unique = false;
              break;
            }
          }
          if (unique) {
            that.myDoctors.push(doctorObj); //Add the doctor
          }
        }
      });

    return this.myDoctors;
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
