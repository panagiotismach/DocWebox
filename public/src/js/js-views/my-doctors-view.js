"use strict";

export default class MyDoctorsView {
  constructor() {
    this.parentElement = ".list-group";
  }

  template(doctorObj) {
    return `
            <a href="doctor-public-profile.php?id=${doctorObj.id}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Dr. ${doctorObj.firstname} ${doctorObj.lastname}</h5>
                </div>
                <p class="mb-1">${doctorObj.specialization}</p>
                <p class="mb-1">${doctorObj.location}</p>
            </a>
        `;
  }

  templateEmpty() {
    return `<h3 class="h3-my-doctors">You haven't seen a doctor yet.</h3>`;
  }

  render(doctorsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    if (doctorsData.length >= 1) {
      doctorsData.forEach(function (doctorObj) {
        container.insertAdjacentHTML("afterbegin", that.template(doctorObj));
      });
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
