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

let appointmentID = null;
let appointmentEl = null;

const setSelectedAppointment = (appointmentId) => {
  appointmentID = appointmentId;
  appointmentEl = event.target.parentNode;
};

const updateAppointment = () => {
  if (appointmentID !== null && appointmentEl !== null) {
    const newDate = document.querySelector("#date").value;
    const newTime = document.querySelector("#date-select").value;

    let validationErrorMessage = "";

    if (!newDate || !newTime) {
      validationErrorMessage = "You should complete all the fields!";
    } else if (new Date(newDate) < new Date()) {
      validationErrorMessage = "You can't select previous day!";
    } else {
      validationErrorMessage = "";
    }

    if (validationErrorMessage) {
      alert(validationErrorMessage);
    } else {
      const myHeaders = new Headers();

      myHeaders.append("Content-Type", "application/json");

      const body = JSON.stringify({
        id: appointmentID,
        date: newDate,
        time: newTime,
      });

      const requestOptions = {
        method: "PUT",
        headers: myHeaders,
        body: body,
        redirect: "follow",
      };

      fetch("http://localhost/DocWebox/src/scripts/APIs/appointment.php", requestOptions)
        .then((response) => {
          return response.text();
        })
        .then((result) => {
          if (JSON.parse(result)?.id) {
            appointmentEl.childNodes.forEach((el) => {
              if (el.id === "appointment-date") {
                el.textContent = newDate;
                el.classList.remove("appointment-normal");
                el.classList.add("appointment-updated");
                setTimeout(() => {
                  el.classList.remove("appointment-updated");
                  el.classList.add("appointment-normal");
                }, 2500);
              } else if (el.id === "appointment-time") {
                el.textContent = newTime + ".00";
                el.classList.remove("appointment-normal");
                el.classList.add("appointment-updated");
                setTimeout(() => {
                  el.classList.remove("appointment-updated");
                  el.classList.add("appointment-normal");
                }, 2500);
              }
            });

            const modalAppointment = document.querySelector(".edit-modal-appointment");

            modalAppointment.classList.toggle("show-modal");
          }
        })
        .catch((error) => {
          console.log("error", error);
        });
    }
  } else {
    alert("Oops, something went wrong!");
  }
};
