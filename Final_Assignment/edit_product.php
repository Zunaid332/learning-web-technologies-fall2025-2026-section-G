<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display = isset($_POST['display']) ? 1 : 0;

    $sql = "UPDATE products SET name='$name', buying_price='$buying_price', selling_price='$selling_price', display='$display' WHERE id=$id";
    mysqli_query($conn, $sql);
    header('location: view_products.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT PRODUCT</title>
</head>
<body>

<form method="POST" action="">
    <fieldset style="width: 300px;">
        <legend><b>EDIT PRODUCT</b></legend>
        
        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

        <label>Buying Price</label><br>
        <input type="text" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br><br>

        <label>Selling Price</label><br>
        <input type="text" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br><br>

        <hr>

        <input type="checkbox" name="display" value="1" <?php if($row['display'] == 1) echo 'checked'; ?>> <label>Display</label>
        
        <hr>

        <input type="submit" name="save" value="SAVE">
    </fieldset>
</form>

</body>
</html>
