const modal = document.querySelector(".edit-modal");
const trigger = document.querySelector(".edit-modal-trigger");
const closeButton = document.querySelector(".edit-modal-close-button");

function toggleModal() {
  modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modal) {
    toggleModal();
    console.log("second");
  }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
