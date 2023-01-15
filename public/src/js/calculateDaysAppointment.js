"use strict";

export default calculateDays = (appointments) => {
  const days = appointments.map((appointment) => {
    const dateAp = new Date(appointment.created);
    const year = new Date().getFullYear();
    const date = new Date().getDate();
    const month = new Date().getMonth();
    if (year === dateAp.getFullYear()) {
      if (date === dateAp.getDate()) {
        if (month === dateAp.getMonth()) {
          return 0;
        }
      } else {
        return +(month - dateAp.getMonth());
      }
    } else {
      return +(year === dateAp.getFullYear());
    }
  });

  return days;
};
