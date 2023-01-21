"use strict";

const modalDoctor = document.querySelector(".edit-modal-doctor");
const modalPatient = document.querySelector(".edit-modal-patient");
const modalAppointment = document.querySelector(".edit-modal-appointment");

const triggerD = document.querySelector(".edit-modal-trigger-doctor");
const triggerP = document.querySelector(".edit-modal-trigger-patient");
const triggerA = document.querySelector(".edit-modal-trigger-appointment");

const closeButtonD = document.querySelector(".edit-modal-close-button-doctor");
const closeButtonP = document.querySelector(".edit-modal-close-button-patient");
const closeButtonA = document.querySelector(".edit-modal-close-button-appointment");

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

//Doctor modal
triggerD.addEventListener("click", toggleModalDoctor);
closeButtonD.addEventListener("click", toggleModalDoctor);
window.addEventListener("click", windowOnClick);

//Patient modal
triggerP.addEventListener("click", toggleModalPatient);
closeButtonP.addEventListener("click", toggleModalPatient);
window.addEventListener("click", windowOnClick);

//Appointment modal
triggerA.addEventListener("click", toggleModalAppointment);
closeButtonA.addEventListener("click", toggleModalAppointment);
window.addEventListener("click", windowOnClick);
