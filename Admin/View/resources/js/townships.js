"use strict";
let server_json_data; // data that comes from server in json data format

async function getData() {
  await fetch("http://localhost:3003/myanmar-townships")
    .then((res) => res.json())
    .then((data) => (server_json_data = data))
    .catch((err) => console.log(err));
  console.log(Object.keys(server_json_data)[0]);
//   console.log(server_json_data);
  console.log(JSON.parse(server_json_data));

}

getData();
