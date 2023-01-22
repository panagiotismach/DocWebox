"use strict";

export default function (appointments) {
  const days = appointments.map((appointment) => {
    const dateAp = new Date(appointment.created);
    const year = new Date().getFullYear();
    const date = new Date().getDate();
    const month = new Date().getMonth();
    if (year === dateAp.getFullYear()) {
      if (month === dateAp.getMonth()) {
        if (date === dateAp.getDate()) {
          return "To day";
        } else {
          return Math.abs(date - dateAp.getDate()) + "days";
        }
      } else {
        return Math.abs(month - dateAp.getMonth()) + "Months";
      }
    } else {
      return Math.abs(year === dateAp.getFullYear());
    }
  });

  return days;
}
