"use strict";

export default class MyPatientsView {
  constructor() {
    this.parentElement = ".list-group";
  }

  template(patientObj) {
    return `
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">${patientObj.firstname} ${patientObj.lastname}</h5>
                    </div>
                    <br>
                    <p class="mb-1">${patientObj.phone}</p>
                    <p class="mb-1">${patientObj.email}</p>
                </a>
            `;
  }

  templateEmpty() {
    return `<h3 class="h3-my-patients">You haven't any patients yet.</h3>`;
  }

  render(patientsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    if (patientsData.length >= 1) {
      patientsData.forEach(function (patientObj) {
        container.insertAdjacentHTML("afterbegin", that.template(patientObj));
      });
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
