"use strict";

export default class AppointmentView {
  constructor(template) {
    this.parentElement = "#card-container";
    this.templateShow = template;
  }

  template(appointmentObj) {
    return `
    <div class="card">
      <h3>Appointment at Dr. ${appointmentObj.doctorName}</h3>
      <h4>${appointmentObj.date}  ${appointmentObj.time}</h4>
      <p>${appointmentObj.description}</p>
    </div><br>`;
  }

  templateAppointmentView(appointmentObj) {
    return `
    <div class="card">
        <h3>Appointment with ${appointmentObj.doctorName}</h3>
        <button class="delete-btn" onclick="return confirm('⚠ Deleting is permanent and cannot be reversed')">Delete</button>
        <button class="edit-modal-trigger-appointment edit-btn">Edit</button>
        <h4>${appointmentObj.date}</h4>
        <h4>${appointmentObj.time}</h4>
        <h4>${appointmentObj.location}</h4>
        <p>${appointmentObj.description}</p>
      </div>
      <br />
    `;
  }

  templateEmpty() {
    return `<h3>No Appointments yet</h3>`;
  }

  render(appointmentsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    if (appointmentsData.length >= 1) {
      if (this.templateShow === "templateAppointment") {
        appointmentsData.forEach(function (appointmentObj) {
          container.insertAdjacentHTML("afterbegin", that.templateAppointmentView(appointmentObj));
        });
      } else {
        appointmentsData.forEach(function (appointmentObj) {
          container.insertAdjacentHTML("afterbegin", that.template(appointmentObj));
        });
      }
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
