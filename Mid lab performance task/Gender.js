document.getElementById('btn').addEventListener('click', Gender);

function Gender() {
    let gender = document.querySelector('input[name="gender"]:checked');
    let blankGender = document.getElementById("blankGender");

    blankGender.innerHTML = "";

    if (!gender) {
        blankGender.innerHTML = "At least one of them has to be selected";
    } else {
        document.getElementById('output').innerHTML = "Gender selected: " + gender.value;
    }
}
