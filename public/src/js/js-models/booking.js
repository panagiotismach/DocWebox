"use strict";

export default class Booking {
  formData;

  constructor(form) {
    this.formData = form;
  }

  async toJson() {
    const formJson = {};

    for (const data of new FormData(this.formData)) {
      formJson[data[0]] = data[1];
    }

    return formJson;
  }
}
