"use strict";

const searchContainer = document.querySelector(".card-container");
const searchButton = document.querySelector("#search-doctor");
const inputDoctor = document.querySelector("#input-search");
let previousInput = "";
let appointments = [];
let doctors = [];

const fetchData = async (url) => {
  return await fetch(url).then((res) => res.json());
};

const templateDoctor = (doctor) => {
  const html = `
               <div class="card">
                  <a href="http://localhost/DocWebox/public/views/patient-views/doctor-public-profile.php?id=${doctor.id}" class="doctor-profile-link">
                    <h3>Dr. ${doctor.firstname} ${doctor.lastname}</h3>
                    <p> tel: ${doctor.phone}<p/>
                    <p> Address: ${doctor.location}<p/>
                  </a>
               </div>
               `;
  return html;
};

const templateEmpty = () => {
  const html = `<h3>No doctors with this lastname</h3>`;

  return html;
};

const searchDoctor = async (lastaname) => {
  if (lastaname !== previousInput) {
    const searchDoctors = await fetchData(`http://localhost/DocWebox/src/scripts/APIs/doctor.php?lastname=${lastaname}`);

    searchContainer.innerHTML = "";

    if (searchDoctors.length) {
      searchContainer.insertAdjacentHTML("beforeEnd", "<h3>Results that match your search:</h3>");
      searchDoctors.forEach((doctor) => searchContainer.insertAdjacentHTML("beforeEnd", templateDoctor(doctor)));
    } else {
      searchContainer.insertAdjacentHTML("beforeEnd", templateEmpty());
    }
  }

  previousInput = lastaname;
};

searchButton.addEventListener("click", (e) => {
  e.preventDefault();
  // console.log(inputDoctor.textContent);
  searchDoctor(inputDoctor.value);
});
