document.getElementById('btn').addEventListener('click', PP);

function PP() {
    let userId = document.getElementById("userId");
    let profilePicture = document.getElementById("profilePicture");
    let output = document.getElementById("output");
    blankID.innerHTML = "";
    blankPP.innerHTML = "";

    if (userId.value == "" || userId.value <= 0) {
        blankID.innerHTML = "<b> UserId </b> cannot be empty and has to be a positive number";
    }

    if (profilePicture.files.length == 0) {
        blankPP.innerHTML = "<b> Picture </b> cannot be empty";
    }

    else {
        document.getElementById('output').innerHTML = "User ID: " + userId.value + "<br>" + "Picture Name: " + profilePicture.files[0].name;
    } 
}
