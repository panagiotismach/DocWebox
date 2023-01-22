"use strict";

import MyPatients from "../js-models/my-patients.js";
import MyPatientsView from "../js-views/my-patients-view.js";

class MyPatientsController {
  constructor(myPatientsModel, myPatientsView) {
    this.myPatientsModel = myPatientsModel;
    this.myPatientsView = myPatientsView;
    this.onPageLoad();
  }

  onPageLoad() {
    const that = this;
    this.myPatientsModel.loadMyPatients().then(function (patients) {
      that.myPatientsView.render(patients);
    });
  }
}

(function () {
  new MyPatientsController(new MyPatients(doctorid), new MyPatientsView());
})();
