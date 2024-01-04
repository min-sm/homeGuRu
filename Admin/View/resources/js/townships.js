console.log(jsVariable);
let regionDropdown = document.getElementById("region");
let townshipDropdown = document.getElementById("township");
regionDropdown.addEventListener("change", () => {
  let regionId = regionDropdown.value;

  // AJAX call to get townships of selected region
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // On success, parse the response and populate the township dropdown
        var townships = JSON.parse(xhr.responseText);
        townshipDropdown.innerHTML =
          "<option value='' disabled selected>Select Township</option>";
        townships.forEach(function (township) {
          townshipDropdown.innerHTML += `<option value="${township.id}">${township.name}</option>`;
        });
      } else {
        // Handle error
        console.error("Error occurred: " + xhr.status);
      }
    }
  };

  xhr.open("GET", `getTownships.php?region_id=${regionId}`, true);
  xhr.send();
});

document.addEventListener("DOMContentLoaded", () => {
  let regionId = regionDropdown.value;

  // AJAX call to get townships of selected region
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // On success, parse the response and populate the township dropdown
        var townships = JSON.parse(xhr.responseText);
        townshipDropdown.innerHTML =
          "<option value='' disabled>Select Township</option>";
        townships.forEach(function (township) {
          townshipDropdown.innerHTML += `<option value="${township.id}" ${
            township.id == jsVariable ? "selected" : ""
          }>${township.name}</option>`;
        });
      } else {
        // Handle error
        console.error("Error occurred: " + xhr.status);
      }
    }
  };

  xhr.open("GET", `getTownships.php?region_id=${regionId}`, true);
  xhr.send();
});
