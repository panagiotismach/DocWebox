"use strict";

const container = document.querySelector(".list-group");
const searchContainer = document.querySelector(".card-container");

let appointments = [];

const fetchData = async (url) => {
  return await fetch(url).then((res) => res.json());
};

const templateAppointment = (doctor) => {
  const html = `
              <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">${doctor.firstname} ${doctor.lastname}</h5>
              </div>
              <p class="mb-1"> ${doctor.location}</p>
              <small class="text-muted">appointment days ago</small>
              </a>`;
  return html;
};

const addPatient = async () => {
  appointments = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/appointment.php?doctor_id=${doctorid}`);
  const patientPromises = await appointments.map(async (appointment) => {
    return await fetchData(`http://localhost/DocWebox/src/scripts/APIs/patient.php?id=${appointment.patient_id}`);
  });
  patientPromises.forEach((docrorPromise) => {
    docrorPromise.then((doctor) => {
      container.insertAdjacentHTML("beforeEnd", templateAppointment(doctor));
    });
  });
};

window.addEventListener("load", addPatient);
