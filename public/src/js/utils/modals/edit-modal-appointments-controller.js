"use strict";

const modalAppointment = document.querySelector(".edit-modal-appointment");

function toggleModalAppointment() {
  modalAppointment.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modalAppointment) {
    toggleModalAppointment();
  }
}

window.addEventListener("click", windowOnClick);
