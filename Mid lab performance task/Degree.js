document.getElementById('btn').addEventListener('click', Degree);

function Degree() {
    let degree = document.querySelectorAll('input[name="degree"]:checked');
    let blankDegree = document.getElementById("blankDegree");
    let selectedDegrees = Array.from(degree).map(item => item.value);

    blankDegree.innerHTML = "";

    if (selectedDegrees.length > 0) {
        document.getElementById('output').innerHTML = "Degree selected: " + selectedDegrees.join(", ");
    }
    else {
        blankDegree.innerHTML = "At least one of them has to be selected";
    } 
}
