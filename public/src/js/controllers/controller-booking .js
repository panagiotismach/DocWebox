"use strict";

import Booking from "../js-models/booking.js";
import BookingView from "../js-views/booking-view.js";

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
    })
      .then((res) => {
        this.bookingView.render(true);
      })
      .catch((err) => {});
  }
}

(function () {
  new controllerBooking(new Booking(form), new BookingView());
})();
