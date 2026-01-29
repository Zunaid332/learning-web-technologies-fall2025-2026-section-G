<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$sql = "SELECT * FROM products WHERE display = 1";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>DISPLAY PRODUCT</title>
</head>
<body>

<fieldset style="width: 400px;">
    <legend><b>DISPLAY</b></legend>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th colspan="2"></th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { 
            $profit = $row['selling_price'] - $row['buying_price'];
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $profit; ?></td>
            <td><a href="edit_product.php?id=<?php echo $row['id']; ?>">edit</a></td>
            <td><a href="delete_product.php?id=<?php echo $row['id']; ?>">delete</a></td>
        </tr>
        <?php } ?>
    </table>
</fieldset>

</body>
</html>
