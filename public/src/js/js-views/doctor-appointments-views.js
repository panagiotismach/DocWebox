"use strict";

export default class AppointmentView {
  constructor() {
    this.parentElement = "#appointment-container";
  }

  template(appointmentObj) {
    return `
            <div class="card">
                <h3>Appointment with ${appointmentObj.patientFullname}</h3>
                <h4>${appointmentObj.date}</h4>
                <p>${appointmentObj.description}</p>
            </div>
            <br>
        `;
  }

  templateEmpty() {
    return `<h3 class="h3-center">No Appointments yet</h3>`;
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
