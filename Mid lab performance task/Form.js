document.getElementById('submit').addEventListener('click', Error);

function Error() {
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
    lengthName.innerHTML = "Must contain at least two words";
    hasError = true;
  }

  if (!((firstChar >= 65 && firstChar <= 90) || (firstChar >= 97 && firstChar <= 122))) {
    startName.innerHTML = "Must start with a letter";
    hasError = true;
  }

  let email = document.getElementById("email").value.trim();
  let emailType = document.getElementById("email");
  let blankEmail = document.getElementById("blankEmail");
  let invalidEmail = document.getElementById("invalidEmail");

  blankEmail.innerHTML = "";
  invalidEmail.innerHTML = "";

  if (email === "") {
    blankEmail.innerHTML = "Cannot be empty";
    hasError = true;
  }

  if (!emailType.checkValidity()) {
    invalidEmail.innerHTML = "Must be a valid email address (i.e anything@example.com)";
    hasError = true;
  }

    let gender = document.querySelector('input[name="gender"]:checked');
    let blankGender = document.getElementById("blankGender");

    blankGender.innerHTML = "";

    if (!gender) {
        blankGender.innerHTML = "At least one of them has to be selected";
        hasError = true;
    }

    let day = document.getElementById("day").value.trim();
    let month = document.getElementById("month").value.trim();
    let year = document.getElementById("year").value.trim();
    let blankDOB = document.getElementById("blankDOB");
    let invalidDOB = document.getElementById("invalidDOB");

    blankDOB.innerHTML = "";
    invalidDOB.innerHTML = "";

    if (day === "" || month === "" || year === "") {
        blankDOB.innerHTML = "Cannot be empty";
        hasError = true;
    }

    if (!(day >= 1 && day <= 31 && month >= 1 && month <= 12 && year >= 1900 && year <= 2016)) {
        invalidDOB.innerHTML = "Must be a valid number (dd: 1-31, mm: 1-12, yyyy: 1900-2016)";
        hasError = true;
    }

    let blood = document.getElementById("bloodGroup");
    let blankBlood = document.getElementById("blankBlood");
    blankBlood.innerHTML = "";

    if (!blood.value) {
        blankBlood.innerHTML = "Must be selected";
        hasError = true;
    }

    let degree = document.querySelectorAll('input[name="degree"]:checked');
    let blankDegree = document.getElementById("blankDegree");
    let selectedDegrees = Array.from(degree).map(item => item.value);

    blankDegree.innerHTML = "";

    if (selectedDegrees.length === 0) {
        blankDegree.innerHTML = "At least one of them has to be selected";
        hasError = true;
    }

    let profilePicture = document.getElementById("profilePicture");
    blankPP.innerHTML = "";

    if (profilePicture.files.length == 0) {
        blankPP.innerHTML = "Picture cannot be empty";
    }


  if (!hasError) {
    document.getElementById('output').innerHTML = "Name: " + name + "<br> Email: " + email + "<br> Gender: " + gender.value + "<br> Date of Birth: " + day + "/" + month + "/" + year + "<br> Blood Group: " + blood.value + "<br> Degree: " + selectedDegrees.join(", ") + "<br> Picture: " + profilePicture.files[0].name;
  }
}

document.getElementById('reset').addEventListener('click', function() {
  window.location.reload();
});
