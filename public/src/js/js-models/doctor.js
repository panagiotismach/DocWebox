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
    let url = "";

    if (this.location.trim() !== "" && this.specialization !== "None") {
      url = `${DOCTOR_OBJ_URL}?location=${this.location}&specialization=${this.specialization}`;
    } else if (this.location.trim() !== "" && this.specialization === "None") {
      url = `${DOCTOR_OBJ_URL}?location=${this.location}`;
    } else if (this.location.trim() === "" && this.specialization !== "None") {
      url = `${DOCTOR_OBJ_URL}?specialization=${this.specialization}`;
    } else {
      url = `${DOCTOR_OBJ_URL}`;
    }

    await fetch(url)
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
