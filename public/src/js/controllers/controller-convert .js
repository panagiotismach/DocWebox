"use strict";

import Booking from "../js-models/booking.js";

const form = document.querySelector("#booking");

class controllerBooking {
  bookingModel;
  bookingView;

  constructor(m, v) {
    this.bookingModel = m;
    this.bookingView = v;
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      this.submitForm(form);
    });
  }

  async submitForm(form) {
    const body = await this.bookingModel.toJson(form);

    fetch("../../../src/scripts/APIs/appointment.php", {
      method: "POST",
      body: JSON.stringify(body),
    }).then((e) => {
      console.log("book");
    });
  }
}

(function () {
  new controllerBooking(new Booking(form), null);
})();
