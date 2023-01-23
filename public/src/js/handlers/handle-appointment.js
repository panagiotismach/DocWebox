"use strict";

const deleteAppointment = (appointmentId) => {
  if (confirm("Delete")) {
    const btnEvent = event;

    const myHeaders = new Headers();

    myHeaders.append("Content-Type", "application/json");

    const body = JSON.stringify({
      id: appointmentId,
      patientid: idPatient,
    });

    const requestOptions = {
      method: "DELETE",
      headers: myHeaders,
      body: body,
      redirect: "follow",
    };

    fetch("http://localhost/DocWebox/src/scripts/APIs/appointment.php", requestOptions)
      .then((response) => {
        return response.text();
      })
      .then((result) => {
        btnEvent.target.parentNode.nextElementSibling.remove();
        btnEvent.target.parentNode.remove();
      })
      .catch((error) => {
        console.log("error", error);
      });
  }
};

const updateAppointment = (appointmentId) => {};
