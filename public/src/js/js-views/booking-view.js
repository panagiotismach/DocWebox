"use strict";

export default class BookingView {
  constructor() {
    this.parentElement = "#answer";
  }

  template(doctorObj) {
    const html = `
            

    
           `;

    return html;
  }

  templateEmpty() {
    return ``;
  }

  render(answer) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    if (answer) {
      container.insertAdjacentHTML("beforeEnd", that.template());
    } else {
      container.insertAdjacentHTML("beforeEnd", this.templateEmpty());
    }
  }
}
