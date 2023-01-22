"use strict";

import MyDoctors from "../js-models/my-doctors.js";
import MyDoctorsView from "../js-views/my-doctors-view.js";

class MyDoctorsController {
  constructor(myDoctorsModel, myDoctorsView) {
    this.myDoctorsModel = myDoctorsModel;
    this.myDoctorsView = myDoctorsView;
    this.onPageLoad();
  }

  onPageLoad() {
    const that = this;
    this.myDoctorsModel.loadMyDoctors().then(function (doctors) {
      that.myDoctorsView.render(doctors);
    });
  }
}

(function () {
  new MyDoctorsController(new MyDoctors(idpatient), new MyDoctorsView());
})();
