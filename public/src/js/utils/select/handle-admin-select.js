"use strict";

const searchCategorySelect = document.querySelector("#D-P");
const searchInput = document.querySelector("#search-input");

searchCategorySelect.addEventListener("change", function (evt) {
  if (searchCategorySelect.value === "None") {
    searchInput.placeholder = "";
  } else if (searchCategorySelect.value === "doctor") {
    searchInput.placeholder = "Doctor's lastname";
  } else if (searchCategorySelect.value === "patient") {
    searchInput.placeholder = "Patient's lastname";
  } else if (searchCategorySelect.value === "appointment") {
    searchInput.placeholder = "Appointment's date (yyyy-mm-dd)";
  }
});
