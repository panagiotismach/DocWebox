const path = window.location.pathname;
const page = path.split("/").pop();
const adminBtn = document.getElementById("admin-login");

if (!(page == "login.php")) {
  adminBtn.classList.add("hide");
}
