<?php
$nameErr = $emailErr = $dateErr = $genderErr = $hobbyErr = $bloodErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["name"]);
        if (!preg_match("/^[A-Za-z]/", $name)) {
            $nameErr = "Must start with a letter";
        } elseif (!preg_match("/^[A-Za-z.\- ]+$/", $name)) {
            $nameErr = "Only letters, dot and dash allowed";
        } elseif (str_word_count($name) < 2) {
            $nameErr = "Must contain at least two words";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yy"])) {
        $dateErr = "Date cannot be empty";
    } elseif ($_POST["dd"] < 1 || $_POST["dd"] > 31) {
        $dateErr = "Invalid day";
    } elseif ($_POST["mm"] < 1 || $_POST["mm"] > 12) {
        $dateErr = "Invalid month";
    } elseif ($_POST["yy"] < 1953 || $_POST["yy"] > 3000) {
        $dateErr = "Invalid year";
    }

    if (!isset($_POST["gender"])) {
        $genderErr = "Select one option";
    }

    if (!isset($_POST["hobby"]) || count($_POST["hobby"]) < 2) {
        $hobbyErr = "Select at least two";
    }

    if (empty($_POST["blood"])) {
        $bloodErr = "Must be selected";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Validation Lab</title>
</head>
<body>

<form method="post">

Name:
<input type="text" name="name">
<span style="color:red;"><?php echo $nameErr; ?></span>
<br><br>

Email:
<input type="text" name="email">
<span style="color:red;"><?php echo $emailErr; ?></span>
<br><br>

Date of Birth:
<input type="number" name="dd" placeholder="DD" style="width:50px;">
<input type="number" name="mm" placeholder="MM" style="width:50px;">
<input type="number" name="yy" placeholder="YYYY" style="width:70px;">
<span style="color:red;"><?php echo $dateErr; ?></span>
<br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<span style="color:red;"><?php echo $genderErr; ?></span>
<br><br>

Hobbies:
<input type="checkbox" name="hobby[]" value="Reading"> Reading
<input type="checkbox" name="hobby[]" value="Sports"> Sports
<input type="checkbox" name="hobby[]" value="Music"> Music
<span style="color:red;"><?php echo $hobbyErr; ?></span>
<br><br>

Blood Group:
<select name="blood">
    <option value="">Select</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
</select>
<span style="color:red;"><?php echo $bloodErr; ?></span>
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>