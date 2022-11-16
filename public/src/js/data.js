"use strict";

const container = document.querySelector(".list-group");
const searchContainer = document.querySelector(".card-container");
const searchButton = document.querySelector("#search-doctor");
const inputDoctor = document.querySelector("#input-search");
let previousInput = "";
let appointments = [];
let doctors = [];

const fetchData = async (url) => {
  return await fetch(url).then((res) => res.json());
};

const templateAppointment = (doctor) => {
  const html = `
              <a href="http://localhost/DocWebox/public/views/patient-views/doctor-public-profile.php" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Dr. ${doctor.firstname} ${doctor.lastname}</h5>
              </div>
              <p class="mb-1">${doctor.specialization}, ${doctor.location}</p>
              <small class="text-muted">appointment days ago</small>
              </a>`;
  return html;
};

const templateDoctor = (doctor) => {
  const html = `
               <div class="card"><a href="http://localhost/DocWebox/public/views/patient-views/doctor-public-profile.php?id=${doctor.id}"><h3>Dr. ${doctor.firstname} ${doctor.lastname}</h3>
               <p> ${doctor.phone} ${doctor.location}</></a>
               </div>
               `;
  return html;
};

const templateEmpty = () => {
  const html = `
               <div class="card"><h3>No doctors with this search</h3>
               </div>
               `;
  return html;
};

const addDoctors = async () => {
  appointments = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/appointment.php?patient_id=${idpatient}`);
  const doctorsPromises = await appointments.map(async (appointment) => {
    return await fetchData(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?id=${appointment.doctor_id}`);
  });
  doctorsPromises.forEach((docrorPromise) =>
    docrorPromise.then((doctor) => {
      container.insertAdjacentHTML("beforeEnd", templateAppointment(doctor));
    })
  );
};

const searchDoctor = async (lastaname) => {
  console.log(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?lastname=${lastaname}`);
  if (lastaname !== previousInput) {
    const searchDoctors = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?lastname=${lastaname}`);
    searchContainer.innerHTML = "";

    if (searchDoctors.length) {
      searchContainer.insertAdjacentHTML("beforeEnd", "<p>Results that match your search:</p>");
      searchDoctors.forEach((doctor) => searchContainer.insertAdjacentHTML("beforeEnd", templateDoctor(doctor)));
    } else {
      searchContainer.insertAdjacentHTML("beforeEnd", templateEmpty());
    }
  }
  previousInput = lastaname;
};

window.addEventListener("load", addDoctors);

searchButton.addEventListener("click", (e) => {
  e.preventDefault();
  // console.log(inputDoctor.textContent);
  searchDoctor(inputDoctor.value);
});
