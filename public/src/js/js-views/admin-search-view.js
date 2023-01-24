"use strict";

export default class AdminSearchView {
  constructor() {
    this.parentElement = ".card-container";
  }

  templateSearchResultDoctor(doctorObj) {
    
    return `<div class="card">
                <div class="data">
                    <h3>${doctorObj?.firstname} ${doctorObj?.lastname}</h3>
                </div>
                <ul class="buttonpd">
                <li><button class="edit-modal-trigger-doctor" id="edit-btn">Edit</button></li>
                <li><button id="delete-btn" onclick="return confirm('⚠ Deleting is permanent and cannot be reversed')">Delete</button></li>
                </ul>
            </div>
            `;
  }

  templateSearchResultPatient(patientObj) {

    return `<div class="card">
                <div class="data">
                    <h3>${patientObj?.firstname} ${patientObj?.lastname}</h3>
                </div>
                <ul class="buttonpd">
                <li><button class="edit-modal-trigger-patient" id="edit-btn">Edit</button></li>
                <li><button id="delete-btn" onclick="return confirm('⚠ Deleting is permanent and cannot be reversed')">Delete</button></li>
                </ul>
            </div>
            `;
  }

  templateSearchResultAppointment(appointmentObj) {

    return `<div class="card">
                <div class="data">
                    <h3>${appointmentObj?.date}</h3>
                    <h3>${appointmentObj?.time}.00</h3>
                    <h3>Doctor's name: ${appointmentObj?.doctor}</h3>
                    <h3>Patient's name: ${appointmentObj?.patient}</h3>
                </div>
                <ul class="buttonpd">
                    <li><button class="edit-modal-trigger-appointment" id="edit-btn">Edit</button></li>
                    <li><button id="delete-btn" onclick="return confirm('⚠ Deleting is permanent and cannot be reversed')">Delete</button></li>
                </ul>
            </div>`;
  }

  templateEmpty() {
    return "<h2>No results</h2>";
  }

  render(data, searchCategory) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    container.innerHTML = "";

    if (data.length >= 1) {
      data.forEach(function (object) {
        if (searchCategory === "doctor") {
          container.insertAdjacentHTML("beforeEnd", that.templateSearchResultDoctor(object));

          const triggerD = document.querySelectorAll(".edit-modal-trigger-doctor");
          const closeButtonD = document.querySelector(".edit-modal-close-button-doctor");

          //Doctor modal
          triggerD.forEach((btn) => {
            btn.addEventListener("click", toggleModalDoctor);
          });
          closeButtonD.addEventListener("click", toggleModalDoctor);
          window.addEventListener("click", windowOnClick);
        } else if (searchCategory === "patient") {
          container.insertAdjacentHTML("beforeEnd", that.templateSearchResultPatient(object));

          const triggerP = document.querySelectorAll(".edit-modal-trigger-patient");
          const closeButtonP = document.querySelector(".edit-modal-close-button-patient");

          //Patient modal
          triggerP.forEach((btn) => {
            btn.addEventListener("click", toggleModalPatient);
          });
          closeButtonP.addEventListener("click", toggleModalPatient);
          window.addEventListener("click", windowOnClick);
        } else if (searchCategory === "appointment") {
          container.insertAdjacentHTML("beforeEnd", that.templateSearchResultAppointment(object));

          const triggerA = document.querySelectorAll(".edit-modal-trigger-appointment");
          const closeButtonA = document.querySelector(".edit-modal-close-button-appointment");

          //Appointment modal
          triggerA.forEach((btn) => {
            btn.addEventListener("click", toggleModalAppointment);
          });
          closeButtonA.addEventListener("click", toggleModalAppointment);
          window.addEventListener("click", windowOnClick);
        }
      });
    } else {
      container.insertAdjacentHTML("beforeEnd", this.templateEmpty());
    }
  }
}
