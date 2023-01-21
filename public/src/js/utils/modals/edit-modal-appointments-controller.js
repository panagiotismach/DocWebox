"use strict";

const modalAppointment = document.querySelector(".edit-modal-appointment");
const triggerA = document.querySelector(".edit-modal-trigger-appointment");
const closeButtonA = document.querySelector(".edit-modal-close-button-appointment");

function toggleModalAppointment() {
  modalAppointment.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modalAppointment) {
    toggleModalAppointment();
  }
}

//Appointment modal
triggerA.addEventListener("click", toggleModalAppointment);
closeButtonA.addEventListener("click", toggleModalAppointment);
window.addEventListener("click", windowOnClick);
