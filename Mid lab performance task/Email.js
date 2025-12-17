document.getElementById('btn').addEventListener('click', Email);

function Email() {
    let email = document.getElementById("email").value.trim();
    let emailType = document.getElementById("email");
    let blankEmail = document.getElementById("blankEmail");
    let invalidEmail = document.getElementById("invalidEmail");

  blankEmail.innerHTML = "";
  invalidEmail.innerHTML = "";

  let hasError = false;

  if (email === "") {
    blankEmail.innerHTML = "Cannot be empty";
    hasError = true;
  }

  if (!emailType.checkValidity()) {
    invalidEmail.innerHTML = "Must be a valid email address (i.e anything@example.com)";
    hasError = true;
  }

  if (!hasError) {
    document.getElementById('output').innerHTML = "Email entered: " + email;
  }
}

