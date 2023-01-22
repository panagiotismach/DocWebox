"use strict";

export default class MyPatientsView {
  constructor(template, parentElPatients) {
    this.parentElement = parentElPatients;
    this.template = template;
  }

  templateForDoctorDashboard(patientObj) {
    return `
                <a class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">${patientObj.firstname} ${patientObj.lastname}</h5>
                    </div>
                    <br>
                    <p class="mb-1">tel: ${patientObj.phone}</p>
                    <p class="mb-1">email: ${patientObj.email}</p>
                </a>
            `;
  }

  templateForDoctorPrivateProfile(patientObj) {
    return `
            <div class="card">
              <h3>${patientObj.firstname} ${patientObj.lastname}</h3>
              <h4>tel: ${patientObj.phone}</h4>
              <h4>email: ${patientObj.email}</h4>
            </div><br>
            `;
  }

  templateEmpty() {
    return `<h3 class="h3-my-patients">You haven't any patients yet.</h3>`;
  }

  render(patientsData) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    container.innerHTML = "";

    if (patientsData.length >= 1) {
      patientsData.forEach(function (patientObj) {
        container.insertAdjacentHTML("afterbegin", that[template](patientObj));
      });
    } else {
      container.insertAdjacentHTML("afterbegin", this.templateEmpty());
    }
  }
}
