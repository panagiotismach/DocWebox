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
    if (this.searchingCategory !== "None") {
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
        .then(function (data) {
          if (that.searchingCategory === "appointment") {
            data.forEach(function (appointmentObj) {
              //Get the doctor based on the id
              fetch(`${DOCTOR_OBJ_URL}?id=${appointmentObj.doctor_id}`)
                .then(function (doctorResponse) {
                  return doctorResponse.json();
                })
                .then(function (doctorObj) {
                  appointmentObj.doctor = doctorObj.firstname + " " + doctorObj.lastname;
                });

              //Get the patient based on the id
              fetch(`${PATIENT_OBJ_URL}?id=${appointmentObj.patient_id}`)
                .then(function (patientResponse) {
                  return patientResponse.json();
                })
                .then(function (patientObj) {
                  appointmentObj.patient = patientObj.firstname + " " + patientObj.lastname;
                });

              that.results.push(appointmentObj);
            });
          } else {
            data.forEach(function (object) {
              that.results.push(object);
            });
          }
        });

      return this.results;
    }
  }
}
