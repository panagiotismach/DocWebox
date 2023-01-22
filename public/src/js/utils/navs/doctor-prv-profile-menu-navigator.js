"use strict";

function menu(option) {
  if (option == "a") {
    document.getElementById("a").classList.add("selected");
    document.getElementById("p").classList.remove("selected");
    document.getElementById("ps").classList.remove("selected");
    document.getElementById("si").classList.remove("selected");
    //Section appearance
    document.getElementById("appointment-container").classList.add("visible");
    document.getElementById("appointment-container").classList.remove("hide");
    document.getElementById("patients-container").classList.add("hide");
    document.getElementById("profile-settings").classList.add("hide");
    document.getElementById("sensitive-information").classList.add("hide");
  } else if (option == "p") {
    document.getElementById("a").classList.remove("selected");
    document.getElementById("p").classList.add("selected");
    document.getElementById("ps").classList.remove("selected");
    document.getElementById("si").classList.remove("selected");
    //Section appearance
    document.getElementById("appointment-container").classList.add("hide");
    document.getElementById("patients-container").classList.add("visible");
    document.getElementById("patients-container").classList.remove("hide");
    document.getElementById("profile-settings").classList.add("hide");
    document.getElementById("sensitive-information").classList.add("hide");
  } else if (option == "ps") {
    document.getElementById("a").classList.remove("selected");
    document.getElementById("p").classList.remove("selected");
    document.getElementById("ps").classList.add("selected");
    document.getElementById("si").classList.remove("selected");
    //Section appearance
    document.getElementById("appointment-container").classList.add("hide");
    document.getElementById("patients-container").classList.add("hide");
    document.getElementById("profile-settings").classList.remove("hide");
    document.getElementById("profile-settings").classList.add("visible");
    document.getElementById("sensitive-information").classList.add("hide");
  } else if (option == "si") {
    document.getElementById("a").classList.remove("selected");
    document.getElementById("p").classList.remove("selected");
    document.getElementById("ps").classList.remove("selected");
    document.getElementById("si").classList.add("selected");
    //Section appearance
    document.getElementById("appointment-container").classList.add("hide");
    document.getElementById("patients-container").classList.add("hide");
    document.getElementById("profile-settings").classList.add("hide");
    document.getElementById("sensitive-information").classList.add("visible");
    document.getElementById("sensitive-information").classList.remove("hide");
  }
}
