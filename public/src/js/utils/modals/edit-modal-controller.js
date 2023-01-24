"use strict";

const modalDoctor = document.querySelector(".edit-modal-doctor");
const modalPatient = document.querySelector(".edit-modal-patient");
const modalAppointment = document.querySelector(".edit-modal-appointment");

function toggleModalDoctor() {
  modalDoctor.classList.toggle("show-modal");
}

function toggleModalPatient() {
  modalPatient.classList.toggle("show-modal");
}

function toggleModalAppointment() {
  modalAppointment.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modalDoctor) {
    toggleModalDoctor();
  } else if (event.target === modalPatient) {
    toggleModalPatient();
  } else if (event.target === modalAppointment) {
    toggleModalAppointment();
  }
}
