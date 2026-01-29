<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$buying_price', '$selling_price', '$display')";
    mysqli_query($conn, $sql);
    header('location: add_product.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ADD PRODUCT</title>
</head>
<body>

<form method="POST" action="">
    <fieldset style="width: 300px;">
        <legend><b>ADD PRODUCT</b></legend>
        
        <label>Name</label><br>
        <input type="text" name="name"><br><br>

        <label>Buying Price</label><br>
        <input type="text" name="buying_price"><br><br>

        <label>Selling Price</label><br>
        <input type="text" name="selling_price"><br><br>

        <hr>

        <input type="checkbox" name="display" value="1"> <label>Display</label>
        
        <hr>

        <input type="submit" name="save" value="SAVE">
    </fieldset>
</form>

</body>
</html>
