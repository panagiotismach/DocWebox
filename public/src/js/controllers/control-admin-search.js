"use strict";

import AdminSearch from "../js-models/admin-search.js";
import AdminSearchView from "../js-views/admin-search-view.js";

const form = document.querySelector("#form-search");

form.addEventListener("submit", function (evt) {
  evt.preventDefault();

  const data = new FormData(evt.target);
  const formFields = [...data.entries()];

  const selectedCategory = formFields[0][1];
  const searchValue = formFields[1][1];

  const adminSearch = new AdminSearch(selectedCategory, searchValue);

  adminSearch.loadSearchingResults().then(function (data) {
    new AdminSearchView().render(data, selectedCategory);
  });
});
