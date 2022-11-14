"use strict";

export default class AppointmentView {
  constructor() {
    this.parentElement = "#card-container";
  }

  template(appointmentObj) {
    return `
    <div class="card">
      <h3>Appointment at ${appointmentObj.doctorName}</h3>
      <h4>${appointmentObj.date}  ${appointmentObj.time}</h4>
      <p>${appointmentObj.description}</p>
    </div><br>`;
  }

  templateEmpty() {
    return `<h3>No Appointments yet</h3>`;
  }

  render(appointmentsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    if (appointmentsData.length >= 1) {
      appointmentsData.forEach(function (appointmentObj) {
        container.insertAdjacentHTML("afterbegin", that.template(appointmentObj));
      });
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
