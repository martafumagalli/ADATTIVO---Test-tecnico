// RES
export const res = [];
const data = JSON.parse(myData);
const keys = Object.keys(data);

for (const i in keys) {
  let key = keys[i];
  res[i] = data[key];
}

// RED
export const red = "rgba(255, 8, 0, 0.5)";

// GREEN
export const green = "rgba(0, 255, 98, 0.5)";