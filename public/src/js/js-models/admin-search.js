"use strict";

import { DOCTOR_OBJ_URL } from "../config.js";
import { PATIENT_OBJ_URL } from "../config.js";
import { PATIENT_APPOINTMENTS_URL } from "../config.js";

export default class AdminSearch {
  constructor(searchingCategory, searchingExtraValue) {
    this.searchingCategory = searchingCategory;
    this.searchingExtraValue = searchingExtraValue;
    this.results = new Array();
  }

  async loadSearchingResults() {
    const that = this;
    let url = "";

    if (this.searchingCategory === "doctor") {
      url = `${DOCTOR_OBJ_URL}`;
    } else if (this.searchingCategory === "patient") {
      url = `${PATIENT_OBJ_URL}`;
    } else if (this.searchingCategory === "appointment") {
      url = `${PATIENT_APPOINTMENTS_URL}`;
    }

    await fetch(url)
      .then(function (response) {
        return response.json();
      })
      .then(async function (data) {
        if (that.searchingCategory === "appointment") {
          for (const appointmentObj of data) {
            //Get the doctor based on the id
            const doctorObj = await that.getDoctor(appointmentObj.doctor_id);
            appointmentObj.doctor = doctorObj.firstname + " " + doctorObj.lastname;

            //Get the patient based on the id
            const patientObj = await that.getPatient(appointmentObj.patient_id);
            appointmentObj.patient = patientObj.firstname + " " + patientObj.lastname;

            that.results.push(appointmentObj);
          }
        } else {
          data.forEach(function (object) {
            that.results.push(object);
          });
        }
      });

    return this.results;
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
