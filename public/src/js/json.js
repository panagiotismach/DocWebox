"use strict";

const toJson = async (form) => {
  const formData = {};

  for (const data of new FormData(form)) {
    formData[data[0]] = data[1];
  }

  return formData;
};

export { toJson };
