function menu(option) {
  if (option == "pa") {
    document.getElementById("pa").classList.add("selected");
    document.getElementById("ps").classList.remove("selected");
    document.getElementById("si").classList.remove("selected");
    //Section appearance
    document.getElementById("card-container").classList.add("visible");
    document.getElementById("card-container").classList.remove("hide");
    document.getElementById("profile-settings").classList.add("hide");
    document.getElementById("sensitive-information").classList.add("hide");
  } else if (option == "ps") {
    document.getElementById("ps").classList.add("selected");
    document.getElementById("pa").classList.remove("selected");
    document.getElementById("si").classList.remove("selected");
    //Section appearance
    document.getElementById("card-container").classList.add("hide");
    document.getElementById("profile-settings").classList.add("visible");
    document.getElementById("profile-settings").classList.remove("hide");
    document.getElementById("sensitive-information").classList.add("hide");
  } else if (option == "si") {
    document.getElementById("si").classList.add("selected");
    document.getElementById("pa").classList.remove("selected");
    document.getElementById("ps").classList.remove("selected");
    //Section appearance
    document.getElementById("card-container").classList.add("hide");
    document.getElementById("profile-settings").classList.add("hide");
    document.getElementById("sensitive-information").classList.add("visible");
    document.getElementById("sensitive-information").classList.remove("hide");
  }
}
