<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM products WHERE id = $id";
    mysqli_query($conn, $sql);
    header('location: view_products.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DELETE PRODUCT</title>
</head>
<body>

<form method="POST" action="">
    <fieldset style="width: 300px;">
        <legend><b>DELETE PRODUCT</b></legend>
        
        Name: <?php echo $row['name']; ?><br>
        Buying Price: <?php echo $row['buying_price']; ?><br>
        Selling Price: <?php echo $row['selling_price']; ?><br>
        Displayable: <?php echo ($row['display'] == 1) ? 'Yes' : 'No'; ?><br>
        
        <hr>

        <input type="submit" name="delete" value="Delete">
    </fieldset>
</form>

</body>
</html>
