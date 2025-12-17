document.getElementById('btn').addEventListener('click', Name);

function Name() {
  let name = document.getElementById("name").value.trim();
  let blankName = document.getElementById("blankName");
  let lengthName = document.getElementById("lengthName");
  let startName = document.getElementById("startName");

  blankName.innerHTML = "";
  lengthName.innerHTML = "";
  startName.innerHTML = "";

  let firstChar = name.charCodeAt(0);
  let hasError = false;

  if (name === "") {
    blankName.innerHTML = "Cannot be empty";
    hasError = true;
  }

  if (name.split(" ").length < 2) {
    lengthName.innerHTML = "Must contain at least two word";
    hasError = true;
  }

  if (!((firstChar >= 65 && firstChar <= 90) || (firstChar >= 97 && firstChar <= 122))) {
    startName.innerHTML = "Must start with a letter";
    hasError = true;
  }

  else {
    document.getElementById('output').innerHTML = "Name entered: " + name;
  }
}
