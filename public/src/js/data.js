"use strict";

const container = document.querySelector(".list-group");
let appointments = [];
let doctors = [];
const searchContainer = document.querySelector(".card-container");
const searchButton = document.querySelector("#search-doctor");
const inputDoctor = document.querySelector("#input-search");

const fetchData = async (url) => {
  return await fetch(url).then((res) => res.json());
};

const templateAppointment = (doctor) => {
  const html = `
              <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. ${doctor.firstname} ${doctor.lastname}</h5>
              </div>
              <p class="mb-1">${doctor.specialization}, ${doctor.location}</p>
              <small class="text-muted">appointment days ago</small>
              </a>`;
  return html;
};

const addDoctors = async () => {
  appointments = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/appointment.php?patient_id=${idpatient}`);
  console.log(idpatient);
  const doctorsPromises = await appointments.map(async (appointment) => {
    return await fetchData(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?id=${appointment.doctor_id}`);
  });
  doctorsPromises.forEach((docrorPromise) =>
    docrorPromise.then((doctor) => {
      console.log(doctor);
      container.insertAdjacentHTML("beforeEnd", templateAppointment(doctor));
    })
  );
};

window.addEventListener("load", addDoctors);

console.log(searchButton);

const templateDoctor = (doctor) => {
  const html = `<div class="card">
               <h3>Dr. ${doctor.firstname} ${doctor.lastname}</h3>
               <p> ${doctor.phone} {{Doctor Address}}</>
               </div>
                `;
  return html;
};

const searchDoctor = async (lastaname) => {
  const searchDoctors = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?lastname=${lastaname}`);
  console.log(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?lastname=${lastaname}`);
  console.log(lastaname);
  searchDoctors.forEach((doctor) => searchContainer.insertAdjacentHTML("beforeEnd", templateDoctor(doctor)));
};

console.log("gvuhj");

searchButton.addEventListener("click", (e) => {
  e.preventDefault();
  // console.log(inputDoctor.textContent);
  searchDoctor(inputDoctor.value);
});
