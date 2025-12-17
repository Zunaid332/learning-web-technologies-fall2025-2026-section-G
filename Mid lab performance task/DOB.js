document.getElementById('btn').addEventListener('click', DOB);

function DOB() {
    let day = document.getElementById("day").value.trim();
    let month = document.getElementById("month").value.trim();
    let year = document.getElementById("year").value.trim();
    let blankDOB = document.getElementById("blankDOB");
    let invalidDOB = document.getElementById("invalidDOB");

    blankDOB.innerHTML = "";
    invalidDOB.innerHTML = "";

    let hasError = false;

    if (day === "" || month === "" || year === "") {
        blankDOB.innerHTML = "Cannot be empty";
        hasError = true;
    }

    if (!(day >= 1 && day <= 31 && month >= 1 && month <= 12 && year >= 1900 && year <= 2016)) {
        invalidDOB.innerHTML = "Must be a valid number (dd: 1-31, mm: 1-12, yyyy: 1900-2016)";
        hasError = true;
    }

    if (!hasError) {
        document.getElementById('output').innerHTML = "DOB entered: " + day + "/" + month + "/" + year;
    }
}

