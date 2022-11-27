"use strict";

import Booking from "../js-models/booking.js";
import BookingView from "../js-views/booking-view.js";

const form = document.querySelector("#booking");
let date = document.querySelector("#date");
let time = document.querySelector("#time");
let previousDate = "";
let previousTime = "";

class controllerBooking {
  bookingModel;
  bookingView;

  constructor(m, v) {
    this.bookingModel = m;
    this.bookingView = v;
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      if (time.value !== "Select Hour") {
        if (date.value !== previousDate && time.value !== previousTime) {
          this.submitForm(form);
        } else {
          alert("The Date or Time must be different from previous bookings.");
        }
      } else {
        alert("You must select an hour.");
      }
    });
  }

  async submitForm(form) {
    let body = await this.bookingModel.toJson(form);

    previousDate = body.date;
    previousTime = body.select;

    previousTime = fetch("../../../src/scripts/APIs/appointment.php", {
      method: "POST",
      body: JSON.stringify(body),
    })
      .then((res) => {
        this.bookingView.render(true);
        this.bookingView.removeTemplate();
      })
      .catch((err) => {
        this.bookingView.render(false);
      });
  }
}

(function () {
  new controllerBooking(new Booking(form), new BookingView());
})();
