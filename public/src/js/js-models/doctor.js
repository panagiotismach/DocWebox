import { DOCTOR_OBJ_URL } from "../config.js";

export default class Doctor {
  //Doctor Model constructor
  constructor(location, specialization) {
    this.location = location;
    this.specialization = specialization;
    this.doctors = new Array();
  }

  async loadDoctors() {
    const that = this;

    await fetch(`${DOCTOR_OBJ_URL}?location=${this.location}&&specialization=${this.specialization}`)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        data.forEach(function (doctorObj) {
          that.doctors.push(doctorObj); //Add the appointment
        });
      });

    return this.doctors;
  }
}
