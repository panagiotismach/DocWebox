"use strict";

export default class AppointmentView {
  constructor() {
    this.parentElement = "#card-container";
  }

  template(appointmentObj) {
    return `
    <div class="card">
      <h3>Appointment at ${appointmentObj.doctor_id}</h3>
      <h4>${appointmentObj.date}  ${appointmentObj.time}</h4>
      <p>${appointmentObj.description}</p>
    </div><br>`;
  }

  template(appointmentObj) {
    return `
    <div class="card">
      <h3>Appointment at ${appointmentObj.doctor_id}</h3>
      <h4>${appointmentObj.date}  ${appointmentObj.time}</h4>
      <p>${appointmentObj.description}</p>
    </div><br>`;
  }

  render(appointmentsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    appointmentsData.forEach(function (appointmentObj) {
      container.insertAdjacentHTML("afterbegin", that.template(appointmentObj));
    });
  }
}
