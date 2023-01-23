"use strict";

export default class BookingView {
  constructor() {
    this.parentElement = "#answer";
  }

  template() {
    const html = `
                 <div class="bf-row" id="correct-answer" >
                    <div class="bf-col-12" id="correct"><p>You have completed your booking</p></div>
                 </div>
                `;

    return html;
  }

  templateError() {
    return `
              <div class="bf-row" >
                <div class="bf-col-12" id="error"><p>Something went wrong. Try again</p></div>
              </div>
           `;
  }

  removeTemplate() {
    setTimeout(() => {
      const boxEl = document.querySelector("#correct-answer");
      boxEl?.remove();
    }, 3000);
  }

  render(answer) {
    const that = this;
    const container = document.querySelector(this.parentElement);

    container.innerHTML = "";

    if (answer) {
      container.insertAdjacentHTML("beforeEnd", that.template());
    } else {
      container.insertAdjacentHTML("beforeEnd", this.templateError());
    }
  }
}
