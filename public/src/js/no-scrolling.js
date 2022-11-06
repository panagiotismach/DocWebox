document.getElementById("check").addEventListener("change", function () {
  if (this.checked) {
    console.log("Checkbox is checked..");
    document.body.classList.add("no-scrolling");
  } else {
    console.log("Checkbox is not checked..");
    document.body.classList.remove("no-scrolling");
  }
});
