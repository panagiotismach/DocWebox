"use strict";

export default class PreviousAppointmentView {
  constructor() {
    this.parentElement = "#card-container";
  }

  template(appointmentObj) {
    let daysMessage = "";

    if (appointmentObj.daysBefore === 0) {
      daysMessage = "Earlier today";
    } else if (appointmentObj.daysBefore === 1) {
      daysMessage = appointmentObj.daysBefore + " day before.";
    } else {
      daysMessage = appointmentObj.daysBefore + " days before.";
    }

    return `
    <div class="card">
      <h3>Appointment at Dr. ${appointmentObj.doctorName}</h3>
      <h4>${daysMessage}</h4>
      <p>${appointmentObj.description}</p>
    </div><br>`;
  }

  templateEmpty() {
    return `<h3 class="h3-center">No previous appointments!</h3>`;
  }

  render(appointmentsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    container.innerHTML = "";

    if (appointmentsData.length >= 1) {
      appointmentsData.forEach(function (appointmentObj) {
        container.insertAdjacentHTML("afterbegin", that.template(appointmentObj));
      });
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
