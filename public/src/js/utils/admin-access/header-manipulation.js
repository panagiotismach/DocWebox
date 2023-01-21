"use strict";

const fullRoute = window.location.pathname;
const route = fullRoute.split("/").pop();
const adminBtn = document.getElementById("admin-login");

if (!(route == "login.php")) {
  adminBtn.classList.add("hide");
}
