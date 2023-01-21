"use strict";

document.getElementById("check").addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("no-scrolling");
  } else {
    document.body.classList.remove("no-scrolling");
  }
});
