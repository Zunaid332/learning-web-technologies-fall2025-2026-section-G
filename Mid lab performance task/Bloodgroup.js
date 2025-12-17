document.getElementById('btn').addEventListener('click', Blood);

function Blood() {
    let blood = document.getElementById("bloodGroup");;
    let blankBlood = document.getElementById("blankBlood");
    let selectedValue = blood.value;
    blankBlood.innerHTML = "";

    if (selectedValue) {
        document.getElementById('output').innerHTML = "Blood Group: " + selectedValue;
    }

    else {
        blankBlood.innerHTML = "Must be selected";
    } 
}
